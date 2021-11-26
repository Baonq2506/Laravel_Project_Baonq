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
    Route::get('/login', 'LoginController@create')->name('login');
    Route::post('/login', 'LoginController@authentication')->name('login');
    Route::get('logout', 'LoginController@logout')->name('logout.store');
    //Register
    Route::get('register', 'RegisterController@create')->name('register');
    Route::post('register', 'RegisterController@store')->name('register');
    //Login with google
    Route::get('google', 'SocialAuthController@redirectToGoogle')->name('login.GG');
    Route::get('google/callback', 'SocialAuthController@handleCallback');
    //Login with facebook
    Route::get('facebook', 'FBController@redirectToFacebook')->name('login.fb');
    Route::get('facebook/callback', 'FBController@handleCallback');

});

//--------------------------BACKEND---------------------------//
route::prefix('backend')->name('backend.')->namespace('Backend')->middleware(['auth', 'role:admin,admod,writer'])->group(function () {

    //Roles_permissions
    Route::resource('role', 'RoleController')->parameters([
        'role' => 'role_id',
    ]);
    route::get('permissions', 'RoleController@indexPermissions')->name('role.rolePer');

    //Dashboard
    route::get('/home', 'DashboardController@index')->name('home');

    //Personnel
    Route::resource('personnel', 'PersonnelController')->parameters([
        'personnel' => 'personnel_id',
    ]);

    Route::get('historyEmployee', 'PersonnelController@perSoftDelete')->name('personnel.perSoftDelete');
    route::get('personnel/signWithUser/{personnel_id}', 'PersonnelController@signWithUser')->name('personnel.signWithUser');

    //User
    Route::resource('user', 'UserController')->parameters([
        'user' => 'user_id',
    ]);
    Route::get('ForceDelete/{user_id}', 'UserController@forceDelete')->name('user.forceDelete');
    Route::get('UserDelete', 'UserController@userSoftDelete')->name('user.softDelete');
    Route::get('RestoreDelete/{user_id}', 'UserController@restore')->name('user.restore');
    route::get('user/signWithUser/{user_id}', 'UserController@signWithUser')->name('user.signWithID');
    route::get('banned/{user_id}', 'UserController@userBanned')->name('user.banned');
    route::get('Unbanned/{user_id}', 'UserController@userUnban')->name('user.unbanned');
    route::get('indexbanned', 'UserController@indexBan')->name('user.indexBan');

    //Category
    Route::resource('category', 'CategoryController')->parameters([
        'category' => 'category_id',
    ]);
    Route::get('softDelete', 'CategoryController@softDelete')->name('category.softDelete');

    //Post
    Route::resource('post', 'PostController')->parameters([
        'post' => 'post_id',
    ]);
    Route::get('approvedAction/{post_id}/{id}', 'PostController@approvedAction')->name('post.approvedAction');
    route::get('history', 'PostController@historyDelete')->name('post.historyDelete');
    Route::get('PostRestoreDelete/{post_id}', 'PostController@restore')->name('post.restore');
    Route::get('PostForceDelete/{post_id}', 'PostController@forceDelete')->name('post.forceDelete');

    //Product
    Route::resource('product', 'ProductController')->parameters([
        'product' => 'product_id',
    ]);
    route::get('order', 'ProductController@order')->name('product.order');
    route::get('showOrder/{order_id}', 'ProductController@showOrder')->name('product.showOrder');
    route::get('replyReview/{user_id}', 'ProductController@replyReview')->name('product.reply');
    route::get('replyComment/{user_id}', 'ProductController@replyComment')->name('product.replyComment');

    //Tag
    Route::resource('tag', 'TagController')->parameters([
        'tag' => 'tag_id',
    ]);

    //Notifications
    Route::resource('notification', 'NotificationController')->parameters([
        'notification' => 'notification_id',
    ]);
    route::get('show/{notification_id}','NotificationController@show')->name('notification.show');
    route::get('delete/{user_id}','NotificationController@destroyAll')->name('notification.destroyAll');

    //Log
    Route::get('log', 'LogController@index')->name('viewLog.Log');

    //comments

    Route::get('delete/{product_id}/{comment_id}', 'CommentController@destroy')->name('comment.destroy');
    Route::get('deleteReply/{product_id}/{comment_id}', 'CommentController@destroyReply')->name('comment.destroyReply');
    Route::get('store', 'CommentController@store')->name('comment.store');

    Route::post('/like-comment/{product_id}/{comment_id}/{user_id}','CommentController@likeComment')->name('like.comment');
    Route::post('/unlike-comment/{product_id}/{comment_id}/{user_id}','CommentController@unlikeComment')->name('unlike.comment');

    //Review
    Route::resource('review', 'ReviewController')->parameters([
        'review' => 'review_id',
    ]);
    Route::post('/heart-review/{product_id}/{review_id}/{user_id}','ReviewController@heartReview')->name('heart.review');
    Route::post('/unheart-review/{product_id}/{review_id}/{user_id}','ReviewController@unheartReview')->name('unheart.review');
    //Image
    route::get('image/destroy/{image_id}','ImageController@destroy')->name('image.destroy');

    //Order
    route::get('order/update/{order_id}/{status_id}','OrderController@getStatus')->name('order.update');



});

//---------------------FRONTEND-------------------------//
route::prefix('/')->name('frontend.')->namespace('Frontend')->group(function () {
    //Home page

    route::prefix('home')->name('home.')->group(function () {
        Route::get('/', 'HomeController@index')->name('index');
    });
    //About page
    route::prefix('about')->name('about.')->group(function () {
        Route::get('/', 'AboutController@index')->name('index');
        route::get('contact', 'AboutController@contact')->name('contact');
    });

    //Blog page
    route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('{slug_cate}/{slug}/{blog_id}', 'BlogController@show')->name('singerBlog');
        Route::get('{slug}', 'BlogController@showCategory')->name('showCategory');

    });

    //Header page
    route::prefix('header')->name('header.')->group(function () {
        Route::get('/', 'HeaderController@index')->name('index');

    });

    //Shop page
    route::name('shop.')->group(function () {
        Route::get('/', 'ShopController@index')->name('index');
        Route::get('show/{slug}/{product_id}', 'ShopController@detailProduct')->name('detail');
        route::get('getCategory', 'ShopController@getCategory')->name('getCategory');
        route::get('getCategoryId/{category_id}', 'ShopController@getCategoryId')->name('getCategoryId');
    });

    //Cart
    route::prefix('cart')->name('cart.')->group(function () {
        Route::get('index', 'CartController@index')->name('index');
        Route::get('add/{product_id}', 'CartController@add')->name('add');
        Route::get('remove/{row_id}', 'CartController@remove')->name('remove');
        Route::get('checkout/{user_id}', 'CartController@checkout')->name('checkout');
        Route::get('placeOrder/{user_id}', 'CartController@placeOrder')->name('placeOrder');
        Route::get('removeAll', 'CartController@removeAll')->name('destroy');
    });

});