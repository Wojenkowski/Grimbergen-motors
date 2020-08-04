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

use Illuminate\Support\Facades\Route;

Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::post('/sendmail','SendEmailController@send');





Route::view('/', 'home');

Route::get('/location', function () {
    return view("location");
});

Route::get('/contact', function () {
    return view("contact");
});

Route::get('/gamma', function () {
    return view("gamma");
});

Route::get('/location', function () {
    return view("location");
});
Route::get('/diensten', function () {
    return view("diensten");
});
Route::get('/expertise', function () {
    return view("expertise");
});
Route::get('/ons', function () {
    return view("ons");
});
Route::get('/vervangwagens', function () {
    return view("vervangwagens");
});
Route::get('/tweedehandswagens', function () {
    return view("overnamewagen");
});
Route::get('/directiewagen', function () {
    return view("wagens");
});
Route::get('/promoties', function () {
    return view("promoties");
});

