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

#recent-verleden
Route::get('/recent-verleden', function () {
    if(session()->get('locale') == 'fr'){
        return redirect('fr/passé-récent');
    }elseif(session()->get('locale') == 'en') {
        return redirect('en/recent-past');
    }
    return view("recent verleden/heden");
});
Route::get('fr/passé-récent', function () {
    if(session()->get('locale') == 'nl'){
        return redirect('/recent-verleden');
    }elseif(session()->get('locale') == 'en') {
        return redirect('en/recent-past');
    }
    return view("recent verleden/passéRécent");
});
Route::get('en/recent-past', function () {
    if(session()->get('locale') == 'nl'){
        return redirect('/recent-verleden');
    }elseif(session()->get('locale') == 'fr') {
        return redirect('fr/passé-récent');
    }
    return view("recent verleden/recentPast");
});

#verleden
Route::get('/verleden', function () {
    if(session()->get('locale') == 'fr'){
        return redirect('fr/passé');
    }elseif(session()->get('locale') == 'en') {
        return redirect('en/passed');
    }
    return view("verleden/verleden");
});
Route::get('fr/passé', function () {
    if(session()->get('locale') == 'nl'){
        return redirect('verleden');
    }elseif(session()->get('locale') == 'en') {
        return redirect('en/passed');
    }
    return view("verleden/passé");
});
Route::get('en/passed', function () {
    if(session()->get('locale') == 'fr'){
        return redirect('fr/passé');
    }elseif(session()->get('locale') == 'nl') {
        return redirect('verleden');
    }
    return view("verleden/passed");
});

#Mea culpa
Route::get('/Mea-culpa', function () {
    if(session()->get('locale') == 'fr'){
        return redirect('fr/Mea-culpa');
    }elseif(session()->get('locale') == 'en') {
        return redirect('en/Mea-culpa');
    }
    return view("Mea culpa/MeaNl");
});
Route::get('en/Mea-culpa', function () {
    if(session()->get('locale') == 'fr'){
        return redirect('fr/Mea-culpa');
    }elseif(session()->get('locale') == 'nl') {
        return redirect('Mea-culpa');
    }
    return view("Mea culpa/MeaEn");
});
Route::get('fr/Mea-culpa', function () {
    if(session()->get('locale') == 'en'){
        return redirect('en/Mea-culpa');
    }elseif(session()->get('locale') == 'nl') {
        return redirect('Mea-culpa');
    }
    return view("Mea culpa/MeaFr");
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
Route::get('/faw', function () {
    return view("fawModellen");
});
Route::get('/stock', function () {
    return view("stock");
});

Route::get('/begin', function () {
    if(session()->get('locale') == 'fr'){
        return view("commencer");
    }elseif(session()->get('locale') == "nl"){
        return view("begin");
    }else{
        return view("welcome");
    }

});

Route::get('/tweedehandswagens', function () {
    return view("tweedehandswagens");
});
Route::get('/tweedehandswagens/scenic3', function () {
    return view("tweedehandswagens/scenic3");
});
Route::get('/tweedehandswagens/cabrio', function () {
    return view("tweedehandswagens/cabrio");
});
/*
Route::get('/stock/{page}', function ($slug) {
    $page = \App\Page::findSlug($slug);

    return view("default-page", compact('page'));
});
*/
Route::get('/stock/Fengon', function () {
    return view("stock/fengon");
});

Route::get('/stock/x55', function () {
    return view("stock/x55");
});

Route::get('/stock/seres', function () {
    return view("stock/seres");
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

