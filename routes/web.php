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
// Route::get('/a',fn () => 'a');

Route::get('/', function(){
    return view('home');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/lienhe', function() {
    return view('lienhe', ['sdt'=> '123456789']);
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/home', function() {
    return view('home');
});
Route::get('/product', function() {
    return view('products');
});
Route::get('/test', 'App\Http\Controllers\MyController@index');
//Fix lỗi :https://viblo.asia/p/cach-fix-loi-target-class-does-not-exist-trong-laravel-8-ByEZkMmq5Q0

Route::get('/homnay', 'App\Http\Controllers\myController@homnay');
Route::get('/contact', 'App\Http\Controllers\myController@index');

Route::get('/giaipt', 'App\Http\Controllers\myController@giaipt');
Route::post('/giaipt', 'App\Http\Controllers\myController@giaipt');

Route::get('/nhapmember', function() {
    return view('nhapmember');
});
Route::post('/nhapmember/submit', 'App\Http\Controllers\myController@nhapmember_validate');

// Route::get('/nhapproduct', 'App\Http\Controllers\myController@nhapproduct');
Route::get('/nhapproduct', function(){
    return view('nhapproduct');
});
Route::post('/nhapproduct/submit', 'App\Http\Controllers\myController@nhapproduct_validate');

Route::get('nhapinvoice', function(){
    return view('nhapinvoices');
});
Route::post('/nhapinvoice/submit', 'App\Http\Controllers\myController@nhapinvoice_validate');

Route::get('/xuatsanpham', 'App\Http\Controllers\myController@xuatsanpham');

Route::post('/nhaphinhanh/submit', 'App\Http\Controllers\myController@SaveImage');

Route::get('/nhaphinhanh', 'App\Http\Controllers\myController@ShowImage');

Route::get('/xemsanpham', 'App\Http\Controllers\myController@Xemsanpham');
