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

Route::get('/', function () {
    $links = config('db.links');
    $dc = config('db.dc');
    $sites = config('db.sites');
    $comics = config('db.comics');

    return view('home', compact('links', 'dc', 'sites', 'comics'));
})->name('homepage');
