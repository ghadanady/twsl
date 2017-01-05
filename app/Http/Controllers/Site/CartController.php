<?php

namespace App\Http\Controllers\Site;

use App\_Product;
use App\Http\Requests;
use App\Basket\Basket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exceptions\QuantityExceededException;

class CartController extends Controller
{
    /**
     * Instance of Basket.
     *
     * @var Basket
     */
    protected $basket;

    /**
     * Create a new CartController instance.
     *
     * @param Basket  $basket
     * @param Product $product
     */
    public function __construct(Basket $basket)
    {
        $this->basket = $basket;
    }

    /**
     * Show all items in the Basket.
     *
     */
    public function getIndex()
    {
        // $this->basket->refresh();
        //
        // if (request()->ajax()) {
        //     return view('site.layouts.shopping-cart')->render();
        // }

    	return view('site.pages.cart');
    }

    /**
     * Add items to the Basket.
     *
     * @param $slug
     * @param $quantity
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd($slug ,Request $request)
    {
        $product = _Product::where('slug' , $slug)->first();

        if (!$product) {
            return [
                'status' => 'error',
                'msg' => 'You want to add non existing product "'.$slug.'"',
            ];
        }

        $product = $product->master;

        try {
            $this->basket->add($product, $request->quantity);
        } catch(QuantityExceededException $e) {
            return [
                'status' => 'warning',
                'msg' => $e->message,
            ];
        }

        return [
            'status' => 'success',
            'msg' => 'The product with name "'.$product->translated()->name.'" added to cart successfully.',
        ];
    }

    /**
     * Update the Basket items.
     *
     * @param         $slug
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \App\Exceptions\QuantityExceededException
     */
    public function postUpdate($slug, Request $request)
    {
        $product = _Product::where('slug' , $slug)->first();

        if (!$product) {
            return [
                'status' => 'error',
                'msg' => 'You want to update non existing product "'.$slug.'"',
            ];
        }

        $product = $product->master;

        try {
            $this->basket->update($product, $request->quantity);
        } catch(QuantityExceededException $e) {
            return [
                'status' => 'warning',
                'msg' => $e->message,
            ];
        }
        $name = $product->translated()->name;
        $status = 'success';
        $msg = 'The product with name "'.$name.'" updated successfully.';

        if(!$request->quantity){
            $status = 'information';
			$msg = 'The product with name "'.$name.'" removed from successfully.';
        }

        return [
            'status' => $status,
            'msg' => $msg,
        ];
    }
}
