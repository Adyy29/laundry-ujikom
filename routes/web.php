<?php

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

Route::get('/', function () {
    return view('dashboard', [
        'title' => 'Dashboard',
        'deskripsi' => 'Halaman berisi informasi singkat mengenai data-data di dalam sistem kasir Dry and Clean'
    ]);
});

Route::get('/outlet', function () {
    return view('outlet.index', [
        'title' => 'Outlet',
        'deskripsi' => 'Halaman pengelolaan outlet sistem kasir Dry and Clean'
    ]);
});
