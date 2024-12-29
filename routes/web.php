<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
    return redirect()->route('login');;
});

Route::middleware(['auth'])->group(function () {
    // Prefix untuk Admin
    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('users', App\Http\Controllers\Admin\UserController::class);
        Route::resource('kategori-barang', App\Http\Controllers\Admin\KategoriBarangController::class);
        Route::resource('barang', App\Http\Controllers\Admin\BarangController::class);
    });

    // Prefix untuk Karyawan
    Route::prefix('karyawan')->middleware('role:karyawan')->group(function () {
        Route::get('/', [App\Http\Controllers\Karyawan\DashboardController::class, 'index'])->name('karyawan.dashboard');
    });
});


require __DIR__.'/auth.php';
