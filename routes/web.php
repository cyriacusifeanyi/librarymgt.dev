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


Route::get('logs','\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');



Route::get('/', function () {
    return view('pages.index');
});

Route::get('simplesearch','SearchController@view') ;

Route::get('advancesearch', function () {
    return view('pages.advance');
});
Route::get('advanceresult', function () {
    return view('pages.advance_result');
});

Route::get('useoflibrary', function () {
    return view('pages.useoflibrary');
});
Route::get('searchtips', function () {
    return view('pages.useoflibrary/#searchtip');
});
Route::get('archive', function () {
    return view('pages.archive');
});

Route::post('create',function (){
    return view('create');
});





Route::get('about', function () {
    return view('pages.about');
});
Route::get('help', function () {
    return view('pages.help');
});
Route::get('contact', function () {
    return view('pages.contact');
});
Route::get('sitemap', function () {
    return view('pages.sitemap');
});
Route::get('faq', function () {
    return view('pages.faq');
});

Route::get('new', function () {
    return view('new');
});