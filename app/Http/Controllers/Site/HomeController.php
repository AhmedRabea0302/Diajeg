<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use App\Head;
use App\Principle;
use App\Product;
use App\Image;
use App\Advantage;

class HomeController extends Controller
{
    public function index() {
        // App::setLocale('en');
        $head = Head::first();
        $principle = Principle::first();
        $product   = Product::first();
        $images    = Image::all();
        $advs      = Advantage::all();
        return view('welcome', [
            'head' => $head,
            'principle' => $principle,
            'product'   => $product,  
            'images'    => $images, 
            'advs'      => $advs, 
        ]);
    }

    public function sendMessage(Request $request) {
        $mess = new Message();

        $mess->email   = $request->email;
        $mess->subject = $request->subject;
        $mess->message = $request->message;

        $mess->save();

        return redirect()->back()->with('sent', 'Message Sent Successfuly!');
    }
}
