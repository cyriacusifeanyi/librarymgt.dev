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

use App\Test;

Route::get('logs','\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

//root
Route::get('/','HomeController@index')->name('/') ;



//manipulating content
//creating, editing, deleting, fetching

Route::get('create','CreateController@view')->name('create');//it needs page data in controller
Route::post('upload','CreateController@upload')->name('upload');
//Route::post('update','CreateController@upload')->name('update');
//Route::post('delete','CreateController@upload')->name('delete');

//search Routes
Route::get('simplesearch','SearchController@simpleSearch') ;/*currently down for the below testing*/
Route::get('advancesearch','SearchController@advanceSearch') ;
Route::post('advanceresult','SearchController@advanceResult') ;


//Item display
Route::get('itempreview','MiscController@itemPreview')->name('preview');/*Miscellaneous*/
Route::get('archive','MiscController@archive')->name('archive');



//static pages
//about, contact, help, research support, sitemap, faq, terms&conditions
Route::get('about_us','StaticPageController@aboutUs');

//testing
//Route::get('help','StaticPageController@help');

Route::get('help',function(){
//    $tests = DB::table('test')->get();
//    return $tests;

    $tests = Test::all();

    return view('pages.help',compact('tests'));

});

Route::get('/help/{id}',function($id){
//    $test = DB::table('tests')->find($id);
//    dd($test);
    $test = Test::find($id);

    return view('pages.help2',compact('test'));

});



Route::get('contact','StaticPageController@contact');
Route::get('sitemap','StaticPageController@sitemap');
Route::get('faq','StaticPageController@faq');
Route::get('useoflibrary','StaticPageController@useOfLibrary');
Route::get('searchtips','StaticPageController@searchTips');

//Users registration route
Route::get('signup','RegisterController@signupAuth');
Route::get('signin','RegisterController@signinAuth');
Route::get('signout','RegisterController@signout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//dictionary routes
Route::get('lookup','DictionaryController@randomWord')->name('lookup');
Route::post('lookup','DictionaryController@lookup');


//learning file upload
Route::get('file','DictArtController@showUploadForm')->name('upload.file');
Route::post('file','DictArtController@storeFile');








