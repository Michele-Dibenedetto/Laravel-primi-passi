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
    return view('myLaravel');
});


Route::get('/if', function () {
    $num = [
        "numero" => rand(1,10)
    ];
    return view('partials.if', $num);
});

Route::get('/for', function () {
    return view('partials.for');
});

Route::get('/foreach', function () {
    return view('partials.foreach');
});

Route::get('/while', function () {
    return view('partials.while');
});