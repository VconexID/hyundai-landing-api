<?php

namespace App\Http\Controllers;

use ImageKit\ImageKit;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public static function uploadImage($image, $path)
    {
        $imageKit = new ImageKit(
            "public_0Owwkvwy6XpGDWbnRAqiEB4uzGQ=",
            "private_bMkrXuOvXM8v/bTJ43P/gus4Gp4=",
            "https://ik.imagekit.io/vconexID"
        );

        $upload = $imageKit->uploadFiles([
            "file" => base64_encode(file_get_contents($image)), // required
            "fileName" => $image->getClientOriginalName(), // required
            "folder" => $path, // optional
        ]);

        return $upload;
    }

    public static function uploadLogo(Request $request, $path)
    {
        $imageKit = new ImageKit(
            "public_0Owwkvwy6XpGDWbnRAqiEB4uzGQ=",
            "private_bMkrXuOvXM8v/bTJ43P/gus4Gp4=",
            "https://ik.imagekit.io/vconexID"
        );

        $upload = $imageKit->uploadFiles([
            "file" => base64_encode(file_get_contents($request->logo)), // required
            "fileName" => $request->logo->getClientOriginalName(), // required
            "folder" => $path, // optional
        ]);

        return $upload;
    }


    public static function uploadMainImage(Request $request, $path)
    {
        $imageKit = new ImageKit(
            "public_0Owwkvwy6XpGDWbnRAqiEB4uzGQ=",
            "private_bMkrXuOvXM8v/bTJ43P/gus4Gp4=",
            "https://ik.imagekit.io/vconexID"
        );

        $upload = $imageKit->uploadFiles([
            "file" => base64_encode(file_get_contents($request->main_image)), // required
            "fileName" => $request->main_image->getClientOriginalName(), // required
            "folder" => $path, // optional
        ]);

        return $upload;
    }
}
