<?php
/**
* Sites routes
*/

Route::group(['namespace' => 'Site'], function () {

    /**
    *  Auth routes
    */
    Route::group(['prefix'=>'auth' , 'namespace' => 'Auth'],function(){
        Route::get('/','AuthController@getIndex')
        ->name('site.auth.index');
        Route::post('login','AuthController@postLogin')
        ->name('site.auth.login');
        Route::post('register', 'AuthController@postRegister')
        ->name('site.auth.register');
        Route::get('social/{provider}', 'AuthController@redirectToProvider')
        ->name('site.auth.social');
        Route::get('social/{provider}/callback', 'AuthController@handleProviderCallback');
        Route::get('logout', 'AuthController@getLogout')
        ->name('site.auth.logout');
        Route::get('forget-password','AuthController@getRecoverPassword')
        ->name('site.auth.forget-password');
    });
    Route::resource('category', 'CategoryController');

    Route::post('product/addComment', 'ProductController@postAddComment')->name('site.product.addComment');

    Route::resource('product', 'ProductController');

    /**
    *  Home routes
    */
    Route::get('/', 'HomeController@getIndex')->name('site.index');

    /**
    *  About routes
    */
    Route::group(['prefix'=>'about'],function(){
        Route::get('/', 'AboutController@getIndex')->name('site.about.index');
    });

    /**
    *  Terms routes
    */
    Route::group(['prefix'=>'terms'],function(){
        Route::get('/', 'TermsController@getIndex')->name('site.terms.index');
    });

    /**
    *  Search routes
    */
    Route::group(['prefix'=>'search'],function(){
        Route::get('/', 'SearchController@getIndex')->name('site.search.index');
    });

    /**
    *  Faq routes
    */
    Route::group(['prefix'=>'faq'],function(){
        Route::get('/', 'FaqController@getIndex')->name('site.faq.index');
    });

    /**
    *  Contact routes
    */
    Route::group(['prefix'=>'contact'],function(){
        Route::get('/', 'ContactController@getIndex')->name('site.contact.index');
    });

    /**
    *  Product routes
    */
    // Route::group(['prefix'=>'product'],function(){
    //     Route::get('/', 'ProductController@getIndex')->name('site.product.index');
    //     Route::get('/details/{slug}', 'ProductController@getDetails')->name('site.product.details');
    //     Route::post('/filter', 'ProductController@postFilter')->name('site.product.filter');
    //     Route::get('/reviews/{id}', 'ProductController@getReview')->name('site.product.reviews');
    //     Route::post('/review', 'ProductController@postReview')->name('site.product.review');
    // });

    /**
    *  Category routes
    */
    Route::group(['prefix'=>'category'],function(){
        Route::get('/', 'CategoryController@getIndex')->name('site.category.index');
        // Route::get('slug/{slug}', 'CategoryController@getIndex')->name('site.category.index');
    });

    /**
    *  Cart routes
    */
    Route::group(['prefix'=>'cart'],function(){
        Route::get('/', 'CartController@getIndex')->name('site.cart.index');
        Route::post('/add/{slug}', 'CartController@postAdd')->name('site.cart.add');
        Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
    });


    Route::group(['middleware' => 'auth.site'], function(){
        /**
        *  profile routes
        */
        Route::group(['prefix'=>'profile'],function(){
            Route::get('/', 'ProfileController@getIndex')->name('site.profile.index');
            Route::post('/edit', 'ProfileController@postProfile')->name('site.profile.edit');
        });

    });


});
