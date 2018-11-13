<?php

use App\Affiliate;
use App\Coin;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');


Route::get('buy-bitcoin-singapore', 'PagesController@btc');
Route::get('buy-ethereum-singapore', 'PagesController@eth');
Route::get('buy-monero-singapore', 'PagesController@monero');
Route::get('singapore-cryptocurrency-exchanges', 'PagesController@exchange');

Route::get('go/{slug}', 'AffiliateController@go');
Route::post('searchxe', 'SearchController@searchxe');
Route::post('searchcoin', 'SearchController@searchcoin');




Auth::routes();

Route::get('/logout',function() {
	Auth::logout();
	return redirect('/');	
});


Route::get('/mod', 'HomeController@index')->name('home');
Route::post('/mod', 'HomeController@store')->name('home');
//Route::get('/list', 'HomeController@list')->name('home');

Route::get('many', function () { 

	//bear = affiliate
	//picnics = coins
	//bears_picnics = affiliate_coins

	// look for xe with the name X
    $binance = Affiliate::where('name', '=', 'binance')->first();

    // display the coins that xe X have 
    foreach ($binance->coins as $coin) 
        echo $coin->name . ' ' . $coin->slug . '<br>';

    echo "<br><br>";

    // get the affiliate that have X coin
    $bitcoin = Coin::where('name', '=', 'bitcoin')->first();

    // display the xe that have X coin
    foreach ($bitcoin->affiliates as $affiliate)
        echo $affiliate->name . ' ' . $affiliate->url . ' ' . $affiliate->type . '<br>';

});

