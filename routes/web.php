<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::middleware(['hideRegister'])->group(function () {
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
});

Route::get('/', 'HomeController@index')->name('landing-page');

Route::get('/daftar', 'DaftarController@index')->name('daftar');
Route::post('/daftar', 'DaftarController@daftar')->name('daftar-kirim');
Route::get('/hasil', 'DaftarController@hasil')->name('hasil');
Route::get('/hasil/download', 'DaftarController@download')->name('download-hasil');

Route::middleware(['auth'])->group(function () {
	Route::get('/admin', 'DashboardController@index')->name('home');
    Route::get('/admin/detail/{id}', 'DashboardController@detail')->name('detail-peserta');
	Route::patch('/admin/diterima/{id}', 'DashboardController@terima')->name('peserta-diterima');
	Route::patch('/admin/ditolak/{id}', 'DashboardController@ditolak')->name('peserta-ditolak');
	Route::get('/download', 'DashboardController@download')->name('download');
	
    // Master Data
	Route::resource('admin/agama', 'AgamaController');
	Route::resource('admin/user', 'UserController');
	Route::resource('admin/jenis_kelamin', 'JenisKelaminController');
	Route::resource('admin/jurusan', 'JurusanController');
	Route::resource('admin/pekerjaan_ortu', 'PekerjaanOrangTuaController');
	Route::resource('admin/penghasilan_ortu', 'PenghasilanOrangtuaController');
});
