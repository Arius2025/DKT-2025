<?php

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
Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [DashboardController::class, 'home'])->name('home');
Route::get('/informasi', [DashboardController::class, 'informasi'])->name('informasi');
Route::get('/jadwal', [DashboardController::class, 'jadwal'])->name('jadwal');
Route::get('/berita', [DashboardController::class, 'berita'])->name('berita');
Route::get('/ppid', [DashboardController::class, 'ppid'])->name('ppid');
Route::get('/zona-integritas', [DashboardController::class, 'zona'])->name('zona');
Route::get('/komplain', [DashboardController::class, 'komplain'])->name('komplain');
