<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Models\Pelanggan;
use App\Models\Outlet;

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
    return view('dashboard', [
        'title' => 'Dashboard',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});
Route::get('/karyawan', function () {
    return view('karyawan.kelolak',[
        'title' => 'Pengguna',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});
route::get('/edit-karyawan/{id}', [admin::class, 'karyawan'])->name('edit-pelanggan');
route::post('/update-karyawan/{id}', [admin::class, 'update1'])->name('update-pelanggan');

Route::get('/login', function () {
    return view('login');
});
Route::get('/TambahK', function () {
    return view('karyawan.tambahk',[
        'title' => 'Pengguna',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});
Route::get('/laporan', function () {
    return view('Laporan.tambah',[
        'title' => 'Laporan',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});
Route::get('/outlet', function () {
    $data = Outlet::all();
    return view('outlet.index',compact('data'), [
        'title' => 'Outlet',
        'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
    ]);
});
Route::get('/tambahoutlet', function () {
    return view('outlet.tambaho', [
        'title' => 'Outlet',
        'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
    ]);
});
route::post('/tambahoutlet', [admin::class, 'outlet']);
route::get('/edit-outlet/{id}', [admin::class, 'Outlet1'])->name('edit-outlet');
route::post('/update-outlet/{id}', [admin::class, 'update1'])->name('update-outlet');

Route::get('/pelanggan', function () {
    $data = Pelanggan::all();
    return view('registpelanggan.kelolap', compact('data'), [
        'title' => 'Pelanggan',
        'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
    ]);
});
route::post('/pelanggan', [admin::class, 'pelanggantambah']);
route::get('/edit-pelanggan/{id}', [admin::class, 'pelanggan'])->name('edit-pelanggan');
route::post('/update-pelanggan/{id}', [admin::class, 'update'])->name('update-pelanggan');

Route::get('/tambahp', function () {
    return view('registpelanggan.tambahp', [
        'title' => 'Pelanggan',
        'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
    ]);
});
