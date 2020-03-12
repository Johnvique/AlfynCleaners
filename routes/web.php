<?php

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
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/why-us', function () {
    return view('why-us');
});
Route::get('/photo-gallery', function () {
    return view('photo-gallery');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
