<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiControllers;

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

// Login
Route::get('/login', [AuthController::class, 'index']);
Route::post('/proses', [AuthController::class, 'proses']);
Route::post('/logout', [admin::class, 'keluar']);

 // Dashboard
 Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});

// Karyawan
Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::resource('/karyawan', KaryawanController::class);

// Outlet
Route::get('/outlet', [OutletController::class, 'index']);
Route::get('/outlet/create', [OutletController::class, 'create']);
Route::resource('/outlet', OutletController::class);

// Pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::resource('/pelanggan', PelangganController::class);

// paket
Route::get('/paket', [PaketController::class, 'index']);
Route::get('/paket/create', [PaketController::class, 'create']);
Route::resource('/paket', PaketController::class);

// Transaksi
Route::get('/Transaksi', [TransaksiControllers::class, 'index']);
Route::get('/Transaksi/create', [TransaksiControllers::class, 'create']);
Route::resource('/Transaksi', TransaksiControllers::class);


// Route::group(['middleware' => ['auth']], function () {

//     // Admin
//     Route::group(['middleware' => 'login:admin'], function () {

//         // Dashboard
//         Route::get('/', function () {
//             return view('dashboard', [
//                 'title' => 'Dashboard',
//                 'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
//             ]);
//         });

//         // Karyawan
//         Route::get('/karyawan', [KaryawanController::class, 'index']);
//         Route::get('/karyawan/create', [KaryawanController::class, 'create']);
//         Route::resource('/karyawan', KaryawanController::class);

//         // Outlet
//         Route::get('/outlet', [OutletController::class, 'index']);
//         Route::get('/outlet/create', [OutletController::class, 'create']);
//         Route::resource('/outlet', OutletController::class);

//         // Pelanggan
//         Route::get('/pelanggan', [PelangganController::class, 'index']);
//         Route::get('/pelanggan/create', [PelangganController::class, 'create']);
//         Route::resource('/pelanggan', PelangganController::class);

//         // paket
//         Route::get('/paket', [PaketController::class, 'index']);
//         Route::get('/paket/create', [PaketController::class, 'create']);
//         Route::resource('/paket', PaketController::class);

//         // Transaksi
//         Route::get('/Transaksi', [TransaksiControllers::class, 'index']);
//         Route::get('/Transaksi/create', [TransaksiControllers::class, 'create']);
//         Route::resource('/Transaksi', TransaksiControllers::class);
//     });

//     // Kasir
//     Route::group(['middleware' => 'login:kasir'], function () {

//         Route::get('/', function () {
//             return view('dashboard', [
//                 'title' => 'Dashboard',
//                 'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
//             ]);
//         });

//         // Pelanggan
//         Route::get('/pelanggan', [PelangganController::class, 'index']);
//         Route::get('/pelanggan/create', [PelangganController::class, 'create']);
//         Route::resource('/pelanggan', PelangganController::class);

//         // Transaksi
//         Route::get('/Transaksi', [TransaksiControllers::class, 'index']);
//         Route::get('/Transaksi/create', [TransaksiControllers::class, 'create']);
//         Route::resource('/Transaksi', TransaksiControllers::class);
//     });

//     // Admin
//     Route::group(['middleware' => 'login:owner'], function () {

//         Route::get('/', function () {
//             return view('dashboard', [
//                 'title' => 'Dashboard',
//                 'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
//             ]);
//         });
//     });

// });
