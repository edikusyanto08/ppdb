<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/token', function () {
    return csrf_token(); 
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboardadmin', [App\Http\Controllers\DashboardAdminController::class, 'index'])->name('dashboardadmin');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/formulir', [App\Http\Controllers\Pendaftar\PendaftarController::class, 'formulir']);
Route::get('/buktidaftar', [App\Http\Controllers\Pendaftar\PendaftarController::class, 'cetak']);
Route::get('/changeStatus', [App\Http\Controllers\DashboardAdminController::class, 'changePendaftarStatus']);
Route::get('/verifikasi', [App\Http\Controllers\Admin\VerifikasiController::class, 'verifikasi']);
//Route::get('change-status', 'DashboardAdminController@changeStatus');


Route::get('/pendaftar/daftar', [App\Http\Controllers\Pendaftar\PendaftarController::class, 'daftar']);



Route::post('/pendaftar/daftar', [App\Http\Controllers\Pendaftar\PendaftarController::class, 'daftar']);

Route::resource('dashboard', DashboardController::class);