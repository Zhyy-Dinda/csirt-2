<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RfcController;
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
//     return view('app');
// });
Route::resource('/', BerandaController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/artikel', ArtikelController::class);
Route::resource('rfc', RfcController::class);
Route::resource('/layanan', LayananController::class);
Route::resource('/panduan', PanduanController::class);
Route::resource('/kontak', KontakController::class);


// Route::get('/profile', function () {
//     return view('navbar.profile');
// });
// Route::get('/artikel', function () {
//     return view('navbar.artikel');
// });
// Route::get('/rfc', function () {
//     return view('navbar.rfc');
// });
// Route::get('/layanan', function () {
//     return view('navbar.layanan');
// });
