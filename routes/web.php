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
	$clothes = DB::table("clothes")->get();

    return view("welcome", compact("clothes"));
});

Route::get("/hoodies", function() {
	$hoodies = DB::table("clothes")->where("type", "peysa")->get();

	return view("about", compact("hoodies"));
});
Auth::routes();
