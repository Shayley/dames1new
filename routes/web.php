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
    return view('pages/home');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/overons', function () {
    return view('pages/about');
});

Route::get('/team', function () {
    return view('pages/summary');
});

Route::get('/overig', function () {
    return view('pages/other');
});

Route::get('/spelers', function () {
    return view('pages/players');
});

Route::get('/wedstrijden', function () {
    return view('pages/matches');
});

Route::get('/stand', function () {
    return view('pages/standing');
});

Route::get('/bijonsvoetballen', function () {
    return view('pages/withus');
});

Route::get('/fotos', function () {
    return view('pages/photos');
});


