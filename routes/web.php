<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\SetLocale;
use App\Models\ContentBlock;

$appUrl = config('app.url');
$baseDomain = parse_url($appUrl, PHP_URL_HOST);
$scheme = parse_url($appUrl, PHP_URL_SCHEME);

Route::get('/', [HomeController::class, 'index']);
//Route::get('/resume', [HomeController::class, 'resume']);
//Route::get('/search', [HomeController::class, 'search']);
Route::get('/articles', [HomeController::class, 'articles']);
Route::get('/episodes/{series}', [HomeController::class, 'episodesAR']);
//Route::get('/watch/{id}', [HomeController::class, 'episodePage']);
//Route::get('/advert/{id}', [HomeController::class, 'advert']);
//Route::get('/gallery', [HomeController::class, 'gallery']);
//Route::get('/gallery/{year}', [HomeController::class, 'gallery']);

Route::domain('{locale}.' . $baseDomain)
	->where(['locale' => '^[a-zA-Z]{2}$'])
    ->middleware(SetLocale::class)
	->controller(HomeController::class)
    ->group(function () {
		Route::get('/', 'index');
		//Route::get('/resume', 'resume');
		//Route::get('/search', 'search');
		Route::get('/articles', 'articles');
		Route::get('/episodes/{series}', 'episodesAR');
		//Route::get('/watch/{id}', 'episodePage');
		//Route::get('/advert/{id}', 'advert');
		//Route::get('/gallery', 'gallery');
		//Route::get('/gallery/{year}', 'gallery');
	});