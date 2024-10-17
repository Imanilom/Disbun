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

Route::get('/tanaman/{id}', [TanamanController::class, 'show'])->name('tanaman.show');

Route::get('/strategis', [TanamanController::class, 'strategis'])->name('tanaman.strategis');

Route::get('/prospektif', [TanamanController::class, 'prospektif'])->name('tanaman.prospektif');

Route::get('/lokal', [TanamanController::class, 'lokal'])->name('tanaman.lokal');
