<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $response = ImageController::uploadImage($request->file, '/example')->success->url;

        $data = Upload::create([
            'link' => $response
        ]);

        return response()->json($data);
    }
}
