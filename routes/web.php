<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiControllers;
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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel');
Route::middleware(['auth'])->group(function(){
    Route::resource('pegawais','App\Http\Controllers\PegawaiControllers');
    Route::get('/pegawai/cetak_pdf', [App\Http\Controllers\PegawaiController::class, 'cetak_pdf']);

});
