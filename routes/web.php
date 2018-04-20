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

Route::get('/home', function(){

	$names = [
		"Rostom" => [
			"Age" => "33",
			"DOB" => "09/07/1984",
			"Address" => "16008 Celtic Street",
			"City" => "Granada Hills",
			"State" => "CA",
			"Zip" => "91344",
			"phone" => "818-723-3190"
		],
				"Ro" => [
			"Age" => "33",
			"DOB" => "09/07/1984",
			"Address" => "16008 Celtic Street",
			"City" => "Granada Hills",
			"State" => "CA",
			"Zip" => "91344",
			"phone" => "818-723-3190"
		]
	];

	return view('home', compact('names', $names));
});

