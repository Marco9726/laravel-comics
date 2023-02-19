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

	$headerMenu = [
		'characters' => '/characters',
		'comics' => '/comics',
		'movie' => '/movies',
		'tv' => '/TV',
		'games' => '/games',
		'collectibles' => '/collectibles',
		'videos' => '/videos',
		'fans' => '/fans',
		'news' => '/news',
		'shop' => '/shop'
	];

	$footerLists = [
		'DC COMICS' => [
			'Characters',
			'Comics',
			'Movies',
			'TV',
			'Games',
			'Videos',
			'News'
		],
		'SHOP' => [
			'Shop DC',
			'Shop DC Collectibles'
		],
		'DC' => [
			'Tems Of Use',
			'Privacy policy (New)',
			'Ad Choices',
			'Advertising',
			'Jobs',
			'Subscriptions',
			'Talent Workshops',
			'CPSC Certificates',
			'Ratings',
			'Shop Help',
			'ContacsUs'
		],
		'SITES' => [
			'DC',
			'MAD Magazine',
			'DC Kids',
			'DC Universe',
			'DC Power Visa'
		]

	];
	return view('comics', compact('headerMenu', 'footerLists', 'comics'));
})->name('comics');

//ROTTA PER FILE SINGLE-COMIC
Route::get('/comics/{id}', function ($id) {
	// salvo l'array del database in una variabile 
	$comics = config('comics');
	// $comic = array_filter($comics, function ($item) use ($param) {
	// 	return $item['title'] == $param;
	// });
	$comic = '';
	foreach ($comics as $key => $item) {
		if ($key == $id) {
			$comic = $item;
		}
	}

	return view('single-comic', compact('comic'));
})->name('single-comic');
