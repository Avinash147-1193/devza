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
    return view('welcome');
});

Route::get('/cloudflare', [App\Http\Controllers\ScrapController::class, 'index'])->name('cloulflare');
Route::get('/k2s', [App\Http\Controllers\ScrapController::class, 'k2s'])->name('k2s');