<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;
use App\ProductDetails;
use App\ProductMaster;
use App\ProductImage;
use App\Offers;
use App\Locale;
use Carbon\Carbon;

class ProductController extends Controller {
    /**
     * get all the products
     */
    public function getIndex() {
        $details = ProductDetails::where('lang', '=', Config::get('app.locale'))->orderBy('id', 'desc')->get();

        return view('admin.pages.products.product')->with('details', $details);
    }

    /*
     * get the edit view
     */

    public function postEdit(Request $request) {

        $lang = $request->get('lang');
        $master_id = $request->get('master_id');

        $details = ProductDetails::where('master_id', $master_id)->where('lang', $lang)->first();
        $offer = Offers::where('product_id', $master_id)->first();
        $images = ProductImage::where('product_id', $master_id)->get();

        return view('admin.pages.products.product_edit')->with('details', $details)
                        ->with('images', $images)
                        ->with('offer', $offer);
    }

    /*
     * Insert new product
     */

    public function postIndex(Request $request) {

        // validate data and return errors
        $v = validator($request->all(), [
            'name' => 'required|min:1',
            'description' => 'required|min:2',
            'price' => 'required|min:1',
            'amount' => 'required|min:1'
                ], [
            'name.required' => 'uou must enter a name',
            'name.min' => 'the name should be at least one word',
            'description.required' => 'please enter a description',
            'description.min' => 'the description should be at least two words',
            'amount.min' => 'your must enter at least one number',
            'amount.required' => 'your must enter the product amount',
            'price.required' => 'you must enter the price',
            'price.min' => 'the price should be at least one number',
        ]);
        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return ['status' => false, 'data' => implode(PHP_EOL, $v->errors()->all())];
        }

        $details = new ProductDetails();
        $master = new ProductMaster();

        $offer = new Offers();


        $details->name = $request->input('name');
        $details->description = $request->input('description');
        $name = md5($details->name);
        $details->slug = preg_replace('/[[:space:]]+/', '-', $details->name . '' . rand());
        $details->lang = $request->input('lang');

        $master->price = $request->input('price');
        $master->amount = $request->input('amount');
        $master->category_id = $request->input('category_id');

        //save the data of the master table
        if ($master->save()) {
            //save the data of the details tale
            $details->master_id = $master->id;
            $details->save();
            //if there is an offer
            $offer->product_id = $master->id;
            if (!empty($request->input('discount'))) {
                $offer->discount = $request->input('discount');
            } else {
                $offer->discount = null;
            }

            if (!empty($request->input('date'))) {
                $date = str_replace('/', '-', $request->input('date'));
                $offer->date = Carbon::createFromFormat('d-m-Y', $date)->toDateString();
            } else {
                $offer->date = null;
            }

            $offer->save();
            //get all the images of the product
            $files = $request->file('image_name');
            foreach ($files as $file) {
                $image = new ProductImage();
                $image->product_id = $master->id;

                if (!empty($file)) {
                    $destinationPath = storage_path('uploads/images/products');
                    $filename = md5(time() + rand()) . '.' . $file->getClientOriginalExtension();
                    $file->move($destinationPath, $filename);
                    $image->image_name = $filename;
                    $image->save();
                }
            }

            return ['status' => true, 'data' => ' product is added successfully.'];
        }
        // return an error if there's un expected action occured
        return ['status' => false, 'data' => 'Something went wrong. please try again'];
    }

    //add the other Locales data
    public function postNew(Request $request) {
        // validate data and return errors
        $v = validator($request->all(), [
            'name' => 'required|min:2',
            'description' => 'required|min:2'
                ], [
            'name.required' => 'برجاء ادخال اسم المنتج.',
            'description.required' => 'برجاء ادخال وصف المنتج'
        ]);
        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return ['status' => false, 'data' => implode(PHP_EOL, $v->errors()->all())];
        }

        $master_id = $request->master_id;
        $lang = $request->lang;

        $details = new ProductDetails();

        $details->name = $request->input('name');
        $details->description = $request->input('description');
        $name = md5($details->name);
        $details->slug = preg_replace('/[[:space:]]+/', '-', $details->name . '' . rand());
        $details->lang = $request->input('lang');

        $details->lang = $lang;
        $details->master_id = $master_id;

        if ($details->save()) {

            return ['status' => true, 'data' => ' ' . $lang . ' product is added successfully.'];
        }
        // return an error if there's un expected action occured
        return ['status' => false, 'data' => 'Something went wrong. please try again'];
    }

    public function postSave(Request $request) {
        // validate data and return errors
        $v = validator($request->all(), [
            'name' => 'required|min:2',
            'description' => 'required|min:2',
            'price' => 'required|min:2',
            'amount' => 'required|min:2'
                ], [
            'name.required' => 'برجاء ادخال اسم المنتج.',
            'description.required' => 'برجاء ادخال وصف المنتج',
            'amount.min' => 'برجاء ادخال كميه المنتج.',
            'price.required' => 'برجاء ادخال سعر المنتج',
        ]);
        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return ['status' => false, 'data' => implode(PHP_EOL, $v->errors()->all())];
        }

        $id = $request->input('master_id');
        $master_id = ProductDetails::where('id', $id)->value('master_id');

        $details = ProductDetails::find($id);
        $master = ProductMaster::where('id', $master_id)->first();
        $image = ProductImage::where('product_id', $master_id)->get();
        $offer = Offers::where('product_id', $master_id)->first();

        $details->name = $request->input('name');
        $details->description = $request->input('description');
        $name = md5($details->name);
        $details->slug = preg_replace('/[[:space:]]+/', '-', $details->name . '' . rand());

        $master->price = $request->input('price');
        $master->amount = $request->input('amount');

        //save the data of the master table
        if ($master->save()) {
            //save the data of the details tale
            $details->master_id = $master->id;
            $details->save();
            //if there is an offer

            $offer->product_id = $master->id;
            $offer->discount = $request->input('discount');
            $offer->date = $request->input('date');
            $offer->save();


            //get all the images of the product
            $files = $request->file('image_name');
            if (!empty($files)) {
                foreach ($files as $id => $file) {
                    $image->product_id = $master->id;
                    if (!empty($file)) {
                        $destinationPath = storage_path('uploads/images/products');
                        @unlink($destination . "/{$image->image_name}");
                        $filename = md5(time() + rand()) . '.' . $file->getClientOriginalExtension();
                        $file->move($destinationPath, $filename);
                        $image->image_name = $filename;
                        ProductImage::where('id', $id)->update(['image_name' => $filename]);
                    }
                }
            }

            return ['status' => true, 'data' => ' product is added successfully.'];
        }
        // return an error if there's un expected action occured
        return ['status' => false, 'data' => 'Something went wrong. please try again'];
    }

    //delete the product
    public function getDelete($id = null) {
        $master = ProductMaster::find($id);

        if (!$master) {
            return redirect()->back()->with('m', 'Product with id #' . $id . ' not found');
        }
        $master->delete();
        $details = ProductDetails::where('master_id', $id)->delete();
        $images = ProductImage::where('product_id', $id)->delete();
        $offer = Offers::where('product_id', $id)->delete();
        return redirect()->back()->with('m', 'product has been deleted successfully');
    }

}
