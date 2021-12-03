<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KaryawanController;

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
    return view('index');
});

Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'registerPage']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [AdminController::class, 'home'])->name('home');
    Route::get('data-karyawan', [AdminController::class, 'dataKaryawan'])->name('data-karyawan');
    Route::get('cari', [AdminController::class, 'cariDataKaryawan']);
    Route::POST('tambah-data', [AdminController::class, 'insertDataKaryawan']);
    Route::get('edit/{id}', [AdminController::class, 'editDataKaryawan']);
    Route::post('/update', [AdminController::class, 'updateDataKaryawan']);
    Route::get('hapus/{id}', [AdminController::class, 'hapusDataKaryawan']);
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

/* Karyawan */
Route::get('karyawan', [KaryawanController::class, 'DataKaryawan']);

Route::get('/karyawan/cari', [KaryawanController::class, 'cariData']);