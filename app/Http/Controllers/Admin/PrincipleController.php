<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Principle;
class PrincipleController extends Controller
{
    public function index() {
        $head = Principle::first();
        return view('admin.principle', ['head' => $head]);
    }

    public function updatePrinciple(Request $request) {
        $head = Principle::first();

        $rules = [
            'fr_par_ar' => 'required',
            'fr_par_en' => 'required',
            'se_par_ar' => 'required',
            'se_par_en' => 'required',
            'body_ar' => 'required',
            'body_en' => 'required',
        ];

        $messages = [
            'fr_par_ar.required' => 'Please enter First Title in Arabic',
            'fr_par_en.required' => 'Please enter First Title in English',
            'se_par_ar.required' => 'Please enter second Title in Arabic',
            'se_par_en.required' => 'Please enter second Title in English',
            'body_ar.required' => 'Please enter Arabic Content',
            'body_en.required' => 'Please enter English Content',
        ];

        $request->validate($rules, $messages);

        $head->fr_par_ar = $request->fr_par_ar;
        $head->fr_par_en = $request->fr_par_en;
        $head->se_par_ar = $request->se_par_ar;
        $head->se_par_en = $request->se_par_en;
        $head->body_ar = $request->body_ar;
        $head->body_en = $request->body_en;

        $head->save();

        return redirect()->back()->with('message', 'Updated Successfuly!');
    }
}
