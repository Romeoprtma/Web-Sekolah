<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\IsiPesanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dan semuanya akan
| dihubungkan ke grup middleware "web". Buat sesuatu yang hebat!
|
*/

// Rute Home
Route::get('/', function () {
    return view('guest.home');
});

// Rute Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute Register
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

// Rute Siswa
Route::middleware(['auth', 'siswa'])->group(function () {
    Route::get('/profilSiswa', function () {
        return view('siswa.profilSiswa');
    });

    Route::get('/hasilDataSiswas', [SiswaController::class, 'index']);
    Route::resource('/isiPesan', IsiPesanController::class);
    Route::resource('/lihatPesan', IsiPesanController::class);
});

// Rute Guru
Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('/profilGuru', function () {
        return view('guru.profilGuru');
    });

    Route::get('/hasilDataGuru', [GuruController::class, 'index']);
    Route::get('/informasi', function () {
        return view('guru.informasi');
    });

    Route::get('/jadwalUas', function () {
        return view('guru.jadwalUas');
    });

    Route::get('/jadwalUts', function () {
        return view('guru.jadwalUts');
    });

    Route::resource('/isiPesanGuru', IsiPesanController::class);
    Route::resource('/lihatPesanGuru', IsiPesanController::class);
});

// Layout Admin Utama
Route::middleware('auth')->get('/mainAdmin', function () {
    return view('admin.layouts.mainAdmin');
});

// Rute Admin dengan Middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/inputDataGuru', GuruController::class);
    Route::resource('admin/hasilDataGuru', GuruController::class);
    Route::resource('admin/inputDataSiswa', SiswaController::class);
    Route::resource('admin/hasilDataSiswa', SiswaController::class);

    //route admin untuk kehalaman siswa
    Route::resource('admin/hasilDataSiswa/editSiswa', SiswaController::class);
    Route::get('/profilSiswa', function () {
        return view('siswa.profilSiswa');
    });
    Route::get('/hasilDataSiswas', [SiswaController::class, 'index']);
    Route::resource('/isiPesan', IsiPesanController::class);
    Route::resource('/lihatPesan', IsiPesanController::class);
    
    Route::get('admin/hasilDataSiswas', [SiswaController::class, 'index']);    

    //route admin untuk kehalaman 
    Route::get('/profilGuru', function () {
        return view('guru.profilGuru');
    });

    Route::get('/hasilDataGuru', [GuruController::class, 'index']);
    Route::get('/informasi', function () {
        return view('guru.informasi');
    });

    Route::get('/jadwalUas', function () {
        return view('guru.jadwalUas');
    });

    Route::get('/jadwalUts', function () {
        return view('guru.jadwalUts');
    });

    Route::resource('/isiPesanGuru', IsiPesanController::class);
    Route::resource('/lihatPesanGuru', IsiPesanController::class);
});