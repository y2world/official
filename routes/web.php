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
    return view('welcome');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/works', function () {
    return view('works');
});
Route::get('/music', function () {
    return view('music');
});
Route::get('/music/single', function () {
    return view('single');
});
Route::get('/music/album', function () {
    return view('album');
});
Route::get('/blog', function () {
    return view('blog');
});

