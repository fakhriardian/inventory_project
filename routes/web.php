<?php

use Illuminate\Support\Facades\Auth;
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
// Route::get('/', [SiteController::class, 'index'])->name('index');

Auth::routes();
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware('Role:superAdmin,admin')->group( function () {
    Route::get('/daftar-toko', [DashboardController::class, 'storeList'])->name('storeList');
    Route::get('/daftar-admin', [DashboardController::class, 'adminList'])->name('adminList');
    Route::get('/daftar-marketing', [DashboardController::class, 'marketingList'])->name('marketingList');
    Route::get('/daftar-konsumen', [DashboardController::class, 'consumerList'])->name('consumerList');
    Route::get('/daftar-penjualan', [DashboardController::class, 'salesList'])->name('salesList');
});
Route::middleware('Role:konsumen')->group( function () {
    Route::get('/data-konsumen', [DashboardController::class, 'consumerData'])->name('consumerData');
    Route::get('/pembelian', [DashboardController::class, 'purchaseData'])->name('purchaseData');
    Route::get('/data-unit', [DashboardController::class, 'unitData'])->name('unitData');
    Route::get('/list-pemesanan', [DashboardController::class, 'orderList'])->name('orderList');
});