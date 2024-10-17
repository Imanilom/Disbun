<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamanController;
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
    return view('welcome');
});

Route::get('/prospektif', function () {
    return view('prospektif');
});


Route::get('/lokal', function () {
    return view('lokal');
});

Route::get('/tanaman/{id}', [TanamanController::class, 'show'])->name('tanaman.show');

Route::get('/strategis', [TanamanController::class, 'index'])->name('tanaman.index');
