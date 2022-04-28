<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function redirectAccordingToRequest($request,$message)
    {
        if ($request->has('redirect') && $request->redirect == 'index') {
            return redirect()->action([static::class,'index'])->with('success', $message);
        } else {
            return redirect()->back()->with('success', $message);
        }
    }
}
