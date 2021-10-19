<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth
route::prefix('auth')->name('auth.')->namespace('Auth')->group(function () {
    //Login
    Route::get('/login','LoginController@create')->name('login');
    Route::post('/login','LoginController@authentication')->name('login');
    Route::get('logout','LoginController@logout')->name('logout.store');
    //Register
    Route::get('register','RegisterController@create')->name('register');
    Route::post('register','RegisterController@store')->name('register');
    //Login with google
    Route::get('google', 'SocialAuthController@redirectToGoogle')->name('login.GG');
    Route::get('google/callback','SocialAuthController@handleCallback');
    //Login with facebook
    Route::get('facebook', 'FBController@redirectToFacebook')->name('login.fb');
    Route::get('facebook/callback', 'FBController@handleCallback');



});

//Backend
route::prefix('backend')->name('backend.')->namespace('Backend')->group(function () {
    //Account Users
    Route::resource('account', 'AccountController')->parameters([
            'account'=>'account_id',
            ]);
    //Roles_permissions
    Route::resource('role', 'RoleController');
    //Dashboard
    route::get('/home',function(){
        return view('backend.dashboard');
    })->name('home');
    //Personnel
    Route::resource('personnel', 'PersonnelController');
    Route::get('delete','PersonnelController@personnelSoftDelete')->name('personnelSoftDelete');
    //User
    Route::resource('user', 'UserController')->parameters([
        'user'=>'user_id',
        ]);
    Route::get('UserDelete','UserController@userSoftDelete')->name('user.softDelete');
    //Category
    Route::resource('category', 'CategoryController')->parameters([
        'category'=>'category_id',
        ]);
    Route::get('softDelete','CategoryController@softDelete')->name('category.softDelete');
    //Post
    Route::resource('post', 'PostController')->parameters([
        'post'=>'post_id',
        ]);
    //Product
    Route::resource('product', 'ProductController')->parameters([
        'product'=>'product_id',
        ]);

});
//Frontend
route::prefix('/')->name('frontend.')->namespace('Frontend')->middleware([])->group(function () {
    //Home page
    Route::get('home', function () {
        return view('frontend.home');
    })->name('home');
    //About page
    route::prefix('about')->name('about.')->group(function () {
        Route::get('/','AboutController@index')->name('index');
        route::get('contact','AboutController@contact')->name('contact');
    });
    //Blog page
    route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/','BlogController@index')->name('index');
        Route::get('{slug_cate}/{slug}/{blog_id}','BlogController@show')->name('singerBlog');
        Route::get('{slug}','BlogController@showCategory')->name('showCategory');

    });
    //Header page
    route::prefix('header')->name('header.')->group(function () {
        Route::get('/','HeaderController@index')->name('index');

    });
    //Shop page
    route::prefix('shop')->name('shop.')->group(function () {
        Route::get('/','ShopController@index')->name('index');
        Route::get('detail','ShopController@detailProduct')->name('detail');
        Route::get('checkout','ShopController@checkoutCart')->name('checkout');
        Route::get('cart','ShopController@cart')->name('cart');
    });
});
