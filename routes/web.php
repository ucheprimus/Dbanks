<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/summary', [App\Http\Controllers\HomeController::class, 'summary'])->name('client.summary');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('client.summary');
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('client.history');
Route::get('/add-account', [App\Http\Controllers\HomeController::class, 'account'])->name('client.account');
Route::get('/add-card', [App\Http\Controllers\HomeController::class, 'card'])->name('client.card');
Route::get('/in-transfer', [App\Http\Controllers\HomeController::class, 'intransfer'])->name('client.intransfer');
Route::get('/ex-transfer', [App\Http\Controllers\HomeController::class, 'extransfer'])->name('client.extransfer');
Route::get('/savings', [App\Http\Controllers\HomeController::class, 'savings'])->name('client.savings');
Route::get('/investments', [App\Http\Controllers\HomeController::class, 'investments'])->name('client.investments');
Route::get('/loans', [App\Http\Controllers\HomeController::class, 'loans'])->name('client.loans');



Route::middleware(['admin'])->prefix('hash')->group(function () {
    // All routes that should be restricted to admins only
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

});

