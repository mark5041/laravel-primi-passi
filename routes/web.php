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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $data = [
        'header' => [
            'home', 'lavora_con_noi', 'contatti', 'prodotti'
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/prodotti', function () {
    return view('prodotti');
})->name('prodotti');

Route::get('/lavora_con_noi', function () {
    return view('lavora_con_noi');
})->name('lavora_con_noi');