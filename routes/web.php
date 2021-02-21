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


Route::view('/', 'index');

Route::get('/heden', function () {
    return view("heden");
});
Route::get('/verleden', function () {
    return view("verleden");
});
Route::get('/corona', function () {
    return view("Corona");
});
Route::get('/merken', function () {
    return view("merken");
});
Route::get('/baic', function () {
    return view("biacModellen");
});
Route::get('/baic/x55', function () {
    return view("x55");
});
Route::get('/baic/bj20', function () {
    return view("bj20");
});

Route::get('/dfsk', function () {
    return view("dfskModellen");
});

Route::get('/seres', function () {
    return view("seresModellen");
});
Route::get('/stock', function () {
    return view("stock");
});

/*
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

Route::get('/test', function () {
    return view("test");
});

*/

