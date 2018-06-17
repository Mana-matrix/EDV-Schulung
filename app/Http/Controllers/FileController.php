<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image as Image;

class FileController extends Controller
{
    public function showImage($path,$name, $slug = null)
    {
        $storagePath = storage_path("app/img/$path/$name.$slug");
        if (file_exists($storagePath))
            return Image::make($storagePath)->response()->header('file_exists','true');
      else return null;
    }
    public function exists($path,$name, $slug = null)
    {
        $storagePath = storage_path("app/img/$path/$name.$slug");
        return  json_encode(['exists'=>file_exists($storagePath)]);
    }
}
