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

route::prefix('frontend')->name('frontend.')->namespace('Frontend')->middleware([])->group(function () {

    route::get('headers/index','HeaderController@index')->name('headers.index');
    route::get('abouts/index','AboutController@index')->name('abouts.index');
    route::get('abouts/contact','AboutController@contact')->name('abouts.contact');
    route::get('portfolio/index','PortfolioController@index')->name('portfolio.index');
    route::get('blogs/index','BlogController@index')->name('blogs.index');
    route::get('shops/index','ShopController@index')->name('shops.index');


});