<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('landing-page');
});

/* Admin */
Route::get('/login', function () {
    return view('login-page');
});

Route::get('/admin/dashboard', 'AdminController@login');

Route::get('/admin/dashboard/home', 'AdminController@home');

Route::get('/admin/dashboard/data-karyawan', 'AdminController@datakaryawan');

Route::get('/admin/dashboard/data-karyawan/cari','AdminController@cariDataKaryawan');

Route::POST('/tambah-data','AdminController@insertDataKaryawan');

Route::get('/admin/dashboard/data-karyawan/edit/{id}','AdminController@editDataKaryawan');

Route::post('/admin/dashboard/data-karyawan/update','AdminController@updateDataKaryawan');

Route::get('/hapus/{id}','AdminController@hapusDataKaryawan');

/* Karyawan */
Route::get('/karyawan/home', 'KaryawanController@dataKaryawan');

Route::get('/karyawan/home/cari','KaryawanController@cariData');