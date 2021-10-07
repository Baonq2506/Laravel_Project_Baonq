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
})->name('home');

Route::get('/login', function () {
    return view('frontend.auth.login');
})->name('frontend.auth.login');

Route::get('/signup', function () {
    return view('frontend.auth.register');
})->name('frontend.auth.register');

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

    });

    route::prefix('portfolio')->name('portfolio.')->group(function () {
        Route::get('index','PortfolioController@index')->name('index');

    });

});