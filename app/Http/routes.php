<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('home')->with('result', "n/a")->with('charity', "n/a")->with('question', "n/a")->with('res', "n/a");
});

Route::get('home', 'FourSquareController@index');

Route::get('test', function() {
	return view('welcome')->with('result', -1);
});

Route::get('input', 'HomeController@input');

Route::get('respond', 'HomeController@respond');

Route::any('plusone/{id}', array('as' => 'plusone', 'uses' => 'HomeController@plusone'));
