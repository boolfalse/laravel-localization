<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '{locale?}',
    // YOU CAN CUSTOMIZE THESE OPTIONS
    // 'as' => '',
    // 'middleware' => ['web'],
    // 'namespace' => 'App\Http\Controllers',
], function () {
    Route::get('/', function () { return view('pages.home'); })->name('home');
    Route::get('/about', function () { return view('pages.about'); })->name('about');
    Route::get('/contact', function () { return view('pages.contact'); })->name('contact');
    // ...
});

Route::group([
    'prefix' => '{locale?}/dashboard',
    // YOU CAN CUSTOMIZE THESE OPTIONS
    // 'as' => 'dashboard.',
    // 'middleware' => ['web', 'admin'],
    // 'namespace' => 'App\Http\Controllers\Admin',
], function () {
    Route::get('/', function () { return view('pages.dashboard'); })->name('dashboard');
    // ...
});
