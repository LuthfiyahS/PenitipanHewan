<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenitipanController;
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

//DASHBOARD
Route::get('/index', [PenitipanController::class, 'index'])->middleware('auth');


//LOGIN
Route::get('/login', [PenitipanController::class, 'indexlogin'])->name('login')->middleware('guest');
Route::post('/log', [PenitipanController::class, 'proseslogin']);
Route::get('/logout', [PenitipanController::class, 'logout']);


//DATA HEWAN
Route::get('/hewan', [PenitipanController::class, 'datahewan'])->middleware('auth');
Route::post('/simpanhewan', [PenitipanController::class, 'simpanhewan'])->middleware('auth');
Route::post('/updatehewan', [PenitipanController::class, 'updatehewan'])->middleware('auth');
Route::get('/deletehewan/{id_hewan}', [PenitipanController::class, 'deletehewan'])->middleware('auth');

//DATA PELANGGAN
Route::get('/pelanggan', [PenitipanController::class, 'datapelanggan'])->middleware('auth');
Route::post('/simpanpelanggan', [PenitipanController::class, 'simpanpelanggan'])->middleware('auth');
Route::post('/updatepelanggan', [PenitipanController::class, 'updatepelanggan'])->middleware('auth');
Route::get('/deletepelanggan/{id_pelanggan}', [PenitipanController::class, 'deletepelanggan'])->middleware('auth');

//DATA TRANSAKSI
Route::get('/transaksi', [PenitipanController::class, 'datatransaksi'])->middleware('auth');
Route::post('/simpantransaksi', [PenitipanController::class, 'simpantransaksi'])->middleware('auth');
Route::post('/updatetransaksi', [PenitipanController::class, 'updatetransaksi'])->middleware('auth');
Route::get('/deletetransaksi/{id_transaksi}', [PenitipanController::class, 'deletetransaksi'])->middleware('auth');