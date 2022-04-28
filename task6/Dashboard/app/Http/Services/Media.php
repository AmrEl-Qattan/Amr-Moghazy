<?php
namespace App\Http\services;

use Illuminate\Http\UploadedFile;

class Media {
    public static function upload(UploadedFile $image,string $directory) :string
    {
        $photoName = $image->hashName();
        $image->move(public_path("assets/images/{$directory}"), $photoName);
        return $photoName;
    }

    public static function delete(string $image,string $directory) :bool
    {
        if(file_exists(public_path("assets/images/{$directory}/$image"))){
            unlink(public_path("assets/images/{$directory}/$image"));
            return true;
        }
        return false;
    }
}
