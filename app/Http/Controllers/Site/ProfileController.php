<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class ProfileController extends Controller
{
    /**
     * Render the index page.
     *
     * @return View
     */


    public function getIndex(){
        return view('site.pages.profile');
    }

    public function postProfile(Request $r) {

        $v = validator($r->all(), [
            "f_name" => 'required|min:2',

        ]);

        // if the validation has been failed return the error msgs
       if ($v->fails()) {
             return redirect()->back()->withErrors(['خطأ', implode('<br>', $v->errors()->all())]);
        }

        $member = Auth()->guard('members')->user();
            // set the new values for update
            $member->f_name = $r->f_name;
            $member->l_name = $r->l_name;
            $member->phone = $r->phone;
            $member->email = $r->email;
            $member->address = $r->address;
            $member->facebook = $r->facebook;
            $member->twitter = $r->twitter;
            $member->google = $r->google;
            $member->skype = $r->skype;
            $member->linked = $r->linked;
            
            



        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/avatars');
        if($r->image){
            @unlink("{$destination}/{$member->image}");
            $member->image = microtime(time()) . "_" . $r->image->getClientOriginalName();
            $r->image->move($destination,$member->image);
        }

        // update the member data in the database.
        if ($member->save()) {
            return redirect()->back()->withSuccess(['تم تعديل بيانت بنجاح ']);
        }

        return redirect()->back()->withErrors(['خطأ', 'حدث خطأ تناء التعديل']);
        
    }


}
