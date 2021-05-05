<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $head = Product::first();
        return view('admin.product', ['head' => $head]);
    }

    public function updateProduct(Request $request) {
        $head = Product::first();

        $rules = [
            'par_ar' => 'required',
            'par_en' => 'required',
            'body_ar' => 'required',
            'body_en' => 'required',
        ];

        $messages = [
            'par_ar.required' => 'Please enter Title in Arabic',
            'par_en.required' => 'Please enter Title in English',
            'body_ar.required' => 'Please enter Arabic Content',
            'body_en.required' => 'Please enter English Content',
        ];

        $request->validate($rules, $messages);

        $head->par_ar = $request->par_ar;
        $head->par_en = $request->par_en;
        $head->body_ar = $request->body_ar;
        $head->body_en = $request->body_en;

        $head->save();

        return redirect()->back()->with('message', 'Updated Successfuly!');
    }
}
