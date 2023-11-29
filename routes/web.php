<?php

use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('customer')->group(function () {
        Route::get('dashboard', CustomerDashboardController::class)->name('customer.dashboard');
    })->middleware('role:customer');
    Route::prefix('admin')->group(function () {
        Route::get('dashboard', AdminDashboardController::class)->name('admin.dashboard');
        Route::prefix('user')->group(function () {
            Route::get('create', [UserController::class, 'create'])->name('user.create');
            Route::post('store', [UserController::class, 'store'])->name('user.store');
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('update', [UserController::class, 'update'])->name('user.update');
            Route::get('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
        });
        Route::prefix('produk')->group(function () {
            Route::get('create', [ProdukController::class, 'create'])->name('produk.create');
            Route::post('store', [ProdukController::class, 'store'])->name('produk.store');
            Route::get('edit/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
            Route::post('update', [ProdukController::class, 'update'])->name('produk.update');
            Route::get('delete/{id}', [ProdukController::class, 'destroy'])->name('produk.delete');
        });
        Route::prefix('transaksi')->group(function () {
            Route::get('create', [TransaksiController::class, 'create'])->name('transaksi.create');
            Route::post('store', [TransaksiController::class, 'store'])->name('transaksi.store');
            Route::get('edit/{id}', [TransaksiController::class, 'edit'])->name('transaksi.edit');
            Route::post('update', [TransaksiController::class, 'update'])->name('transaksi.update');
            Route::get('delete/{id}', [TransaksiController::class, 'destroy'])->name('transaksi.delete');
        });
    })->middleware('role:admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
