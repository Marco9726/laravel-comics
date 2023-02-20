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

//ROTTA PER FILE COMICS
Route::get('/', function () {
	// salvo l'array del database in una variabile 
	$comics = config('comics');

	$headerMenu = config('headermenu');

	$footerLists = config('footerlists');

	return view('comics', compact('headerMenu', 'footerLists', 'comics'));
})->name('comics');

//ROTTA PER FILE SINGLE-COMIC
Route::get('/comics/{id}', function ($id) {
	// salvo l'array del database in una variabile 
	$comics = config('comics');

	$headerMenu = config('headermenu');

	$footerLists = config('footerlists');
	// $comic = array_filter($comics, function ($item) use ($id) {
	// 	return $item['title'] == $id;
	// });
	$comic = $comics[$id];
	$date = '';
	// funzione per trasformare il formato della data tramite carbon 
	function changeDate($saleDate)
	{
		$date = $saleDate['sale_date'];
		return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('M d Y');
	}

	return view('single_comic', compact('comic', 'headerMenu', 'footerLists', 'date'));
	dd($comic);
})->name('single_comic');
