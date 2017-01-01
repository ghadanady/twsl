<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;
use App\Menu;
use App\Product;
use App\Ad;
use App\Category;
use App\Support\Storage\Contracts\StorageInterface;
use App\Support\Storage\SessionStorage;
class AppServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap any application services.
    *
    * @return void
    */
    public function boot()
    {   $categories = Category::get();

        $advs = Ad::get();
        $menus = Menu::get();
        $products = Product::paginate(9);
        $product_count = Product::count();
        $best_seller = Product::orderBy('sold' , 'desc')->take(12)->get();
        $hot_deals   = Product::orderBy('discount' , 'desc')
        ->get()
        ->filter(function($product){
            return $product->hasOffer();
        })
        ->take(16)->all();

        view()->share([
            'categories'=>$categories ,
            'advs'=>$advs ,
            'menus'=>$menus ,
            'products'=>$products ,
            'product_count'=>$product_count ,
            'best_seller'=>$best_seller ,
            'hot_deals'=>$hot_deals
        ]);

        Validator::extend('greater_than', function($attribute, $value, $parameters, $validator) {
            $min_value = $parameters[0];
            return $value >= $min_value;
        });

        Validator::replacer('greater_than', function($message, $attribute, $rule, $parameters) {
            return trans('validation.greater_than',['attribute' => $attribute, 'field' => $parameters[0]]);
        });

        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            return preg_match('%^(?:(?:\(?(?:00|\+)([1-4]\d\d|[1-9]\d?)\)?)?[\-\.\ \\\/]?)?((?:\(?\d{1,}\)?[\-\.\ \\\/]?){0,})(?:[\-\.\ \\\/]?(?:#|ext\.?|extension|x)[\-\.\ \\\/]?(\d+))?$%i', $value) && strlen($value) >= 10;
        });

        Validator::replacer('phone', function($message, $attribute, $rule, $parameters) {
            return trans('validation.phone',['attribute' => $attribute]);
        });

        Validator::extend('password', function($attribute, $value, $parameters, $validator) {
            return preg_match('/^(?=.*[a-zA-Z])(?=.*\d).+$/', $value) && strlen($value) >= 8;
        });

        Validator::replacer('password', function($message, $attribute, $rule, $parameters) {
            return trans('validation.password',['attribute' => $attribute]);
        });

    }

    /**
    * Register any application services.
    *
    * @return void
    */
    public function register()
    {
        $this->app->bind(StorageInterface::class, function ($app) {
            return new SessionStorage('basket');
        });
    }
}
