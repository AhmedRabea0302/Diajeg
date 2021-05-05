<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Head;
use Validator;
class HeadController extends Controller
{
    public function index() {
        $head = Head::first();
        return view('admin.mainpart', ['head' => $head]);
    }

    public function updateHead(Request $request) {
        $head = Head::first();

        $rules = [
            'ar_title' => 'required',
            'en_title' => 'required',
            'ar_par' => 'required',
            'en_par' => 'required',
        ];

        $messages = [
            'ar_title.required' => 'Please enter Arabic Title',
            'en_title.required' => 'Please enter English Title',
            'ar_par.required' => 'Please enter Arabic Paragraph',
            'en_par.required' => 'Please enter English Paragraph',
        ];

        $request->validate($rules, $messages);

        $head->ar_title = $request->ar_title;
        $head->en_title = $request->en_title;
        $head->ar_par = $request->ar_par;
        $head->en_par = $request->en_par;

        $head->save();

        return redirect()->back()->with('message', 'Updated Successfuly!');
    }
}
