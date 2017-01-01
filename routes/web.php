<?php

/**
* Locale Route
*/
Route::get('/lang/{locale}', 'LocaleController@getIndex')->name('lang');

/**
* Admin Panel Routes
*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    /**
    * Authentication routes
    */
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::get('/', 'AuthController@getIndex');
        Route::get('/login', 'AuthController@getIndex');
        Route::get('/logout', 'AuthController@getLogout');
        Route::get('/recover-password', 'AuthController@getRecoverPassword');
        Route::get('/change-password/{hash}', 'AuthController@getChangePassword');
        Route::post('/recover-password', 'AuthController@postRecoverPassword');
        Route::post('/change-password', 'AuthController@postChangePassword');
        Route::post('/login', 'AuthController@postLogin');
    });

    /**
    * Private Routes
    */
    Route::group(['middleware' => 'auth.admin'], function() {

        /**
        * Users Routes
        */
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UsersController@getIndex');
            Route::get('/profile', 'UsersController@getProfile');
            Route::get('/delete/{id?}', 'UsersController@getDelete');
            Route::post('/profile', 'UsersController@postProfile');
            Route::post('/add', 'UsersController@postAdd');
            Route::post('/info/{id}', 'UsersController@postInfo');
            Route::post('/edit', 'UsersController@postEdit');
        });

        /**
        * Public Admin Panel Settings
        */
        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', 'SettingsController@getIndex');
            Route::post('/edit', 'SettingsController@postEdit');
        });

        /**
        * Home Routes
        */
        Route::get('/', function() {
            return view('admin.pages.dashboard');
        });

        /**
        * faqs routes
        */
        Route::group(['prefix' => 'faqs'], function () {
            Route::get('/', 'FaqController@getIndex')->name('admin.faqs.index');
            Route::get('add', 'FaqController@getAdd')->name('admin.faqs.add');
            Route::post('add', 'FaqController@postAdd');
            Route::get('edit/{id}', 'FaqController@getEdit')->name('admin.faqs.edit');
            Route::post('edit/{id}', 'FaqController@postEdit');
            Route::post('/action/{action}', 'FaqController@postAction');
            Route::get('/delete/{id}', 'FaqController@getDelete')->name('admin.faqs.delete');
            Route::get('/filter/{filter}', 'FaqController@getFilter');
            Route::get('/search/{q?}', 'FaqController@getSearch');
        });

        /**
        * contacts routes
        */
        Route::group(['prefix' => 'contacts'], function () {
            Route::get('/', 'ContactController@getIndex')->name('admin.contacts.index');
            Route::get('view/{id}', 'ContactController@getView')->name('admin.contacts.view');
            Route::get('/main', 'ContactController@getMain')->name('admin.contacts.main');
            Route::post('/main', 'ContactController@postMain');
            Route::post('/send', 'ContactController@postSend')->name('admin.contacts.send');
            Route::post('/action/{action}', 'ContactController@postAction');
            Route::get('/delete/{id}', 'ContactController@getDelete')->name('admin.contacts.delete');
            Route::get('/filter/{filter}', 'ContactController@getFilter');
            Route::get('/search/{q?}', 'ContactController@getSearch');
        });

        /**
        * subscribtions routes
        */
        Route::group(['prefix' => 'subscribtions'], function () {
            Route::get('/', 'SubscribtionController@getIndex')->name('admin.subscribtions.index');
            Route::get('view/{id}', 'SubscribtionController@getView')->name('admin.subscribtions.view');
            Route::post('/send', 'SubscribtionController@postSend')->name('admin.subscribtions.send');
            Route::post('/action/{action}', 'SubscribtionController@postAction');
            Route::get('/delete/{id}', 'SubscribtionController@getDelete')->name('admin.subscribtions.delete');
            Route::get('/filter/{filter}', 'SubscribtionController@getFilter');
            Route::get('/search/{q?}', 'SubscribtionController@getSearch');
        });

        /**
        * Contact us route
        */
        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', ['as' => 'contact', 'uses' => 'ContactUsController@getIndex']);
            Route::post('/', ['as' => 'conatct', 'uses' => 'ContactUsController@postIndex']);
            Route::post('contact/new', ['as' => 'contact-new', 'uses' => 'ContactUsController@postNew']);
            Route::post('edit', ['as' => 'contact_edit', 'uses' => 'ContactUsController@postEdit']);
            Route::post('contact/save', ['as' => 'contact_save', 'uses' => 'ContactUsController@postSave']);
            Route::get('contact/delete/{id}', ['as' => 'contact/delete', 'uses' => 'ContactUsController@getDelete']);
        });

        /**
        * ads route
        */
        Route::group(['prefix' => 'ads'], function () {
            Route::get('/', 'AdsController@getIndex')->name('admin.ads.index');
            Route::get('edit/{id}', 'AdsController@getEdit')->name('admin.ads.edit');
            Route::post('edit/{id}', 'AdsController@postEdit');
        });

        /**
        * articles routes
        */
        Route::group(['prefix' => 'products'], function () {
            Route::get('/','ProductController@getIndex')->name('admin.products.index');
            Route::get('add','ProductController@getAdd')->name('admin.products.add');
            Route::post('add','ProductController@postAdd');
            Route::get('edit/{id}','ProductController@getEdit')->name('admin.products.edit');
            Route::post('edit/{id}','ProductController@postEdit');
            Route::post('/action/{action}', 'ProductController@postAction');
            Route::post('/delete-image/{product_id}/{image_id}','ProductController@postDeleteImage')->name('admin.products.images.delete');
            Route::get('/delete/{id}','ProductController@getDelete')->name('admin.products.delete');
            Route::get('/filter/{filter}', 'ProductController@getFilter');
            Route::get('/search/{q?}', 'ProductController@getSearch');
        });

        /**
        * Category route
        */
        Route::group(['prefix' => 'categories'], function () {
            Route::get('/{type}', 'CategoryController@getIndex')->name('admin.categories.index');
            Route::post('info/{id}', 'CategoryController@postInfo')->name('admin.categories.info');
            Route::post('/edit/{type}/{id}', 'CategoryController@postEdit')->name('admin.categories.edit');
            Route::post('/change/{type}/{id}', 'CategoryController@postChange')->name('admin.categories.change');
            Route::post('/add/{type}', 'CategoryController@postAdd')->name('admin.categories.add');
            Route::get('/delete/{id}','CategoryController@getDelete')->name('admin.categories.delete');
        });

        /**
        * menus route
        */
        Route::group(['prefix' => 'menus'], function () {
            Route::get('/', 'MenuController@getIndex')->name('admin.menus.index');
            Route::get('info/{id}', 'MenuController@getInfo')->name('admin.menus.info');
            Route::post('/edit/{id}', 'MenuController@postEdit')->name('admin.menus.edit');
            Route::post('/add', 'MenuController@postAdd')->name('admin.menus.add');
            Route::get('/delete/{id}','MenuController@getDelete')->name('admin.menus.delete');
        });

    });
});

///////////////////////////////////////////////////////////////////////////////////////////
/**
* Sites routes
*/

Route::group(['namespace' => 'Site'], function () {

    Route::get('login', ['as' =>'login', 'uses' =>'Auth\AuthController@getLogin']);
    Route::post('login', ['as' =>'login', 'uses' =>'Auth\AuthController@postLogin']);
    Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider')->name('site.login.social');
    Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
    Route::post('register', ['as' => 'register', 'uses' =>'Auth\AuthController@postRegister']);
    Route::get('logout', ['as' => 'logout', 'uses' =>'Auth\AuthController@getLogout']);
    Route::get('forget-password', ['as' => 'forget-password', 'uses' =>'Auth\AuthController@getRecoverPassword']);
    Route::get('profile', ['as' => 'profile', 'uses' =>'Auth\AuthController@getProfile']);

    /**
    *  Home routes
    */
    Route::get('/', 'HomeController@getIndex')->name('site.home.index');

    /**
    *  profile routes
    */
    Route::group(['prefix'=>'profile'],function(){
        Route::get('/', 'ProfileController@getProfile')->name('site.profile');
        Route::post('/edit', 'ProfileController@postProfile')->name('site.edit.profile');
    });

    /**
    *  About routes
    */
    Route::group(['prefix'=>'about'],function(){
        Route::get('/', 'AboutController@getIndex')->name('site.about.index');
    });

    /**
    *  Products routes
    */
    Route::group(['prefix'=>'products'],function(){
        Route::get('/', 'ProductsController@getIndex')->name('site.products.index');
        Route::get('/details/{slug}', 'ProductsController@getDetails')->name('site.products.details');
        Route::get('/category/{slug}', 'ProductsController@getCategory')->name('site.products.category');
        //Route::get('/details/{id}', 'ProductsController@getDetails')->name('site.products.details');
        Route::post('/filter', 'ProductsController@postFilter')->name('site.products.filter');
        Route::get('/reviews/{id}', 'ProductsController@getReview')->name('site.products.reviews');
        Route::post('/review', 'ProductsController@postReview')->name('site.products.review');
    });

    /**
    *  Cart routes
    */
    Route::group(['prefix'=>'cart'],function(){
        Route::get('/', 'CartController@getIndex')->name('site.cart.index');
        Route::post('/add/{slug}', 'CartController@postAdd')->name('site.cart.add');
        Route::post('/update/{slug}', 'CartController@postUpdate')->name('site.cart.update');
    });

    /**
    *  Wishlist routes
    */
    // Route::group(['prefix'=>'wishlist'],function(){
    //     Route::get('/', 'WishlistController@getIndex')
    //     ->name('site.wishlist.index')
    //     ->middleware(['auth.site']);
    //     Route::post('/update/{slug}', 'WishlistController@postUpdate')->name('site.wishlist.update');
    // });
     Route::post('wishlist/update/{slug}', 'WishlistController@postUpdate')->name('site.wishlist.update');

    Route::group(['middleware' => 'auth.site'], function(){

        /**
        *  Category routes
        */
        Route::group(['prefix'=>'category'],function(){
            Route::get('slug/{slug}', 'CategoryController@getIndex')->name('site.category.index');
        });

        Route::get('/wishlist', 'WishlistController@getIndex')->name('site.wishlist.index');
    });

    
});
