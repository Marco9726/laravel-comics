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
