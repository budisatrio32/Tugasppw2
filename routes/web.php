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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/choose-liga', function () {
    return view('chooseliga');  // atau view('pages.chooseliga')
})->name('pilihliga');

Route::get('/schedule', [App\Http\Controllers\CobaController::class, 'schedule'
])->name('jadwal');

Route::get('/pertandingan', [App\Http\Controllers\PertandinganController::class, 'index'
])->name('pertandingan.index');