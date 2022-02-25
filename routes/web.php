<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home');
});

Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/coba', function () {
    return Inertia::render('Coba', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

// Route aplikasi
Route::prefix('/app')->group(function () {
	Route::middleware(['hideRegister'])->group(function () {
		Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register-ppdb');
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
});
