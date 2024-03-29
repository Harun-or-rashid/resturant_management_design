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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('pro','ProductController@products');

});
Route::get('/', function () {
    return view('frontend.pages.home
    ');
});
Route::get('/menus', function () {
    return view('frontend.pages.menu');
});
Route::get('/test', function () {
    return view('frontend.pages.homes');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/iftar', function () {
    return view('frontend.pages.iftarsss');
});
