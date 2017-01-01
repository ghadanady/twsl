<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Ad;

class AdsController extends Controller {

    //view all the ads
    public function getIndex() {
        $ads = Ad::orderBy('id', 'asec')->get();

        return view('admin.pages.ads.index')->with('ads', $ads);
    }

    //view the edit page
    public function getEdit(Request $request, $id) {
        $ads = Ad::where('id', $id)->first();
        return view('admin.pages.ads.edit-ads')->with('ads', $ads);
    }

    /*
     * updated the image
     */

    public function postEdit(Request $request) {


        // basic validation rules
//        $v = validator($request->all(), [
//          'image' => 'image|mimes:jpeg,jpg,png,gif|max:20000',
//			'tag' => 'required|min:2'
//        ]);
//
//        // if the validation has been failed return the error msgs
//        if ($v->fails()) {
//            return ['status' => false, 'data' => implode(PHP_EOL, $v->errors()->all())];
//        }
        //get the data for the id
        $ads = Ad::find($request->id);
        //get the image if used
        $file = $request->file('image_name');
        if (!empty($file)) {
            $destination = storage_path('uploads/images/banners');
            $ads->image_name = $file->getClientOriginalName();
            $request->image_name->move($destination, $ads->image_name);
        }

        if ($ads->save()) {
            //success message
            return ['status' => true, 'data' => ' ad is updated successfully.'];
        }
        // return an error if there's un expected action occured
        return ['status' => false, 'data' => 'unexpected error .. please try again'];
    }

}
