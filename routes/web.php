<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => '{locale?}',
], function () {
    Route::get('/', function () { return view('pages.home'); })->name('home');
    Route::get('/about', function () { return view('pages.about'); })->name('about');
    Route::get('/contact', function () { return view('pages.contact'); })->name('contact');
});

Route::group([
    'prefix' => '{locale?}/dashboard',
], function () {
    Route::get('/', function () { return view('pages.dashboard'); })->name('dashboard');
});
