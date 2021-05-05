<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    public function index() {
        $advs = Advantage::all();
        return view('admin.advantages', ['advs' => $advs]);
    }

    public function getAddAdvantage() {
        return view('admin.add_advantage');
    }
    
    public function postAddAdvantage(Request $request) {
        $adv = new Advantage();

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

        $adv->par_ar = $request->ar_title;
        $adv->par_en = $request->en_title;
        $adv->body_ar = $request->ar_par;
        $adv->body_en = $request->en_par;

        $adv->save();

        return redirect()->back()->with('message', 'Advantage Added Successfuly!');
    }

    public function getUpdateAdvantage($id) {
        $adv = Advantage::find($id);
        return view('admin.update_advantage', ['adv' => $adv]);
    }
    
    public function postUpdateAdvantage(Request $request, $id) {
        $adv = Advantage::find($id);

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

        $adv->par_ar = $request->ar_title;
        $adv->par_en = $request->en_title;
        $adv->body_ar = $request->ar_par;
        $adv->body_en = $request->en_par;

        $adv->save();

        return redirect()->back()->with('message', 'Advantage Updated Successfuly!');
    }

    public function deleteAdvantage(Request $request) {
        $adv = Advantage::find($request->advID);
        if($adv != null) {
            $adv->delete();
            return redirect()->back()->with('message', 'Avantage Deleted Successfuly!');
        } else {
            return redirect()->back()->with('message', 'Can\'t Delete!');
        }
       
    }
}
