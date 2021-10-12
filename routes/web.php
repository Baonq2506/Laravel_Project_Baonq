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

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

route::prefix('auth')->name('auth.')->namespace('Auth')->middleware([])->group(function () {

    Route::get('facebook', 'FBController@redirectToFacebook')->name('login.fb');
    Route::get('facebook/callback', 'FBController@facebookSignin');

});



route::prefix('auth')->name('auth.')->namespace('Auth')->middleware([])->group(function () {
    Route::get('login','LoginController@create')->name('login');
    Route::get('logout','LoginController@logout')->name('logout');
    Route::get('register','RegisterController@create')->name('register');

    Route::get('google', 'SocialAuthController@getGoogleSignInUrl')->name('login.GG');
    Route::get('google/callback','SocialAuthController@loginCallback');


});
route::prefix('frontend')->name('frontend.')->namespace('Frontend')->middleware([])->group(function () {

    route::prefix('about')->name('about.')->group(function () {
        Route::get('index','AboutController@index')->name('index');
        route::get('contact','AboutController@contact')->name('contact');
    });

    route::prefix('blog')->name('blog.')->group(function () {
        Route::get('index','BlogController@index')->name('index');
        Route::get('singerBlog','BlogController@show')->name('singerBlog');

    });

    route::prefix('header')->name('header.')->group(function () {
        Route::get('index','HeaderController@index')->name('index');

    });

    route::prefix('shop')->name('shop.')->group(function () {
        Route::get('index','ShopController@index')->name('index');
        Route::get('detail','ShopController@detailProduct')->name('detail');
        Route::get('checkout','ShopController@checkoutCart')->name('checkout');
    });
});
