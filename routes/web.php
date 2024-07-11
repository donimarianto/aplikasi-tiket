<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TransaksiController;

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

Route::get('Home',[HomeController::class,'Home'])->name('Home');
Route::get('input',[HomeController::class,'input'])->name('input');
Route::get('viewPendaftar',[HomeController::class,'viewPendaftar'])->name('viewPendaftar');
Route::get('HalamInputTiket',[EventController::class,'HalamInputTiket'])->name('HalamInputTiket');
Route::get('viewTiket',[EventController::class,'viewTiket'])->name('viewTiket');
Route::post('daftar',[HomeController::class,'daftar'])->name('daftar');
Route::post('simpanEvent',[EventController::class,'simpanEvent'])->name('simpanEvent');
Route::get('hapus{id}',[HomeController::class,'hapus_pengguna'])->name('hapus');
Route::get('hapus_tiket/{id}',[EventController::class,'hapus_tiket'])->name('hapus_tiket');
Route::get('/edit_transaksi/{id}/edit', [HomeController::class, 'hapus_transaksi'])->name('hapus_transaksi');
Route::get('viewTransaksi',[TransaksiController::class,'viewTransaksi'])->name('viewTransaksi');
Route::get('/edit_transaksi/{id}/edit', [HomeController::class, 'edit'])->name('editTransaksi');
Route::get('tampilkanData',[TransaksiController::class,'tampilkanData'])->name('tampilkanData');
Route::post('saveTransaksi',[TransaksiController::class,'saveTransaksi'])->name('saveTransaksi');
Route::get('/edit_pengguna/{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::post('/up/{id}', [HomeController::class, 'update'])->name('up');
Route::get('/editEvent/{id}/edit', [EventController::class, 'editEvent'])->name('editEvent');
Route::post('/updateEvent/{id}', [EventController::class, 'updateEvent'])->name('updateEvent');



