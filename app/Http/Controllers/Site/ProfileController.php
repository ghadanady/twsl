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
            "l_name" => 'required|min:2',
            "email" => 'required|email|unique:members,email,'.auth()->guard('members')->user()->id,
            "address" => 'required|min:2',
            "image" => 'image|mimes:png,gif,jpg,jpeg|max:20000',


        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return ['status' => 'error', 'msg' => implode(PHP_EOL, $v->errors()->all())];
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
            $member->information = $r->information;


        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/avatars');
        if($r->image){
            @unlink("{$destination}/{$member->image}");
            $member->image = microtime(time()) . "_" . $r->image->getClientOriginalName();
            $r->image->move($destination,$member->image);
        }

        // update the member data in the database.
        if ($member->save()) {
            return ['status' => 'success', 'msg' => 'member updated successfully.'];
        }
        return ['status' => 'error', 'msg' => 'There\'re some errors, please try again later.'];
    }


}
