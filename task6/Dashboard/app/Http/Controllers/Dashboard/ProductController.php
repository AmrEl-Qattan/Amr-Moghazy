<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\services\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public const STATUSES = ['Not Active', 'Active'];
    public const MAX_UPLOAD_SIZE = 1024; // 1024k
    public const AVAIALBE_EXTENSIONS = ['png', 'jpeg', 'jpg'];
    public function index()
    {
        $products = DB::table('products')->get(); // SELECT * FROM `products`
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->get();
        return view('products.create', compact('brands', 'subcategories'))->with('statues', self::STATUSES);
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Media::upload($request->file('image'),'products');
        DB::table('products')->insert($data);
        return $this->redirectAccordingToRequest($request,"Product Created Successfully");
    }

    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->get();
        return view('products.edit', compact('product','brands', 'subcategories'))->with('statues', self::STATUSES);
    }

    public function update(UpdateProductRequest $request,$id)
    {
        $data = $request->validated();
        if($request->hasFile('image')){
            $data['image'] = Media::upload($request->file('image'),'products');
            $product = DB::table('products')->where('id', $id)->first();
            Media::delete($product->image,'products');
        }
        DB::table('products')->where('id',$id)->update($data);
        return $this->redirectAccordingToRequest($request,"Product Updated Successfully");
    }

    public function destroy($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        Media::delete($product->image,'products');
        DB::table('products')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
    
}
