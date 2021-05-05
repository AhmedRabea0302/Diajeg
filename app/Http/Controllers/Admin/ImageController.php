<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Image;

class ImageController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('admin.images', ['images' => $images]);
    }

    public function updateImage(Request $request) {
        $image = new Image();

        if ($request->hasfile('images')) {
            $images = $request->file('images');
            // dd($images);
            foreach($images as $index => $image) {
                $file_name   = time() . $index . '.' . $image->getClientOriginalExtension();
                $destination = 'storage/uploads/images/';
                $image->move($destination, $file_name);

                Image::create([
                    'image' => $destination . $file_name
                ]);
            }
        }

        return redirect()->back()->with('message', 'Images Added Successfuly!');
    }

    public function deleteImage(Request $request) {
        $img = Image::find($request->imgID);
        if($img) {
            try {
                unlink($img->image);
            } catch(Exception $e) {
                echo $e;
            }
        }

        $img->delete();
        return redirect()->back()->with('message', 'Image Deleted Successfuly!');
    }
}
