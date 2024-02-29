<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Routing\Route as RoutingRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('siswa.profilSiswa');
});

Route::get('/profilGuru', function () {
    return view('guru.profilGuru');
});

Route::get('/isiPesan', function () {
    return view('isiPesan');
});

Route::get('/inputDataSiswa ', function () {
    return view('siswa.inputDataSiswa');
});

Route::get('/inputDataGuru ', function () {
    return view('guru.inputDataGuru');
});

Route::get('/lihatPesan', function () {
    return view('lihatPesan');
});

Route::get('/hasilData', function () {
    return view('hasilData');
});

Route::get('/hasilDataGuru', function () {
    return view('guru.hasilDataGuru');
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

