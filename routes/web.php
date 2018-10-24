<?php


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');

Route::get('go/{slug}', 'AffiliateController@go');

Auth::routes();

Route::get('/logout',function() {
	Auth::logout();
	return redirect('/');	
});


Route::get('/mod', 'HomeController@index')->name('home');
Route::post('/mod', 'HomeController@store')->name('home');
//Route::get('/list', 'HomeController@list')->name('home');
