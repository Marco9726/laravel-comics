<?php

use Illuminate\Support\Facades\Route;

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
//HOME
Route::get('/', function () {
	$headerMenu = [
		'CHARACTERS' => '/characters',
		'COMICS' => '/comics',
		'MOVIE' => '/movies',
		'TV' => '/TV',
		'GAMES' => '/games',
		'COLLECTIBLES' => '/collectibles',
		'VIDEOS' => '/videos',
		'FANS' => '/fans',
		'NEWS' => '/news',
		'SHOP' => '/shop'
	];
	return view('home', compact('headerMenu'));
});
