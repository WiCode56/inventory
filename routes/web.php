<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;


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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/regis', [AuthController::class, 'regis'])->name('register')->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware(['auth']);

Route::get('/product', [ProductController::class, 'index'])->name('product')->middleware('auth');
Route::get('product/{id}',[ProductController::class, 'show'])->name('product.show')->middleware('auth');
Route::get('/product-add', [ProductController::class, 'create'])->name('product.add')->middleware('auth');
Route::post('/product-tambah', [ProductController::class, 'store'])->name('add.product')->middleware('auth');
Route::get('/product-edit/{id}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product/{id}', [ProductController::class, 'update'])->middleware('auth');
Route::get('/product-delete/{id}', [ProductController::class, 'delete'])->middleware('auth');
Route::delete('/product-destroy/{id}', [ProductController::class, 'destroy'])->middleware('auth');

Route::get('/get-latest-code', [ProductController::class, 'getLatestCode']);


Route::get('/karyawan', action: [UserController::class, 'index'])->middleware('auth');
Route::get('karyawan/{id}',[UserController::class, 'show'])->middleware('auth');
Route::get('/karyawan-add', [UserController::class, 'create'])->middleware('auth');
Route::post('/karyawan-tambah', [UserController::class, 'store'])->middleware('auth');
Route::get('/karyawan-edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/karyawan/{id}', [UserController::class, 'update'])->middleware('auth');
Route::get('/karyawan-delete/{id}', [UserController::class, 'delete'])->middleware('auth');
Route::delete('/karyawan-destroy/{id}', [UserController::class, 'destroy'])->middleware('auth');

Route::get('/transaction', action: [TransactionController::class, 'index'])->middleware('auth');
Route::get('transaction/{id}',[TransactionController::class, 'show'])->middleware('auth');
Route::get('/transaction-add', [TransactionController::class, 'create'])->middleware('auth');
Route::post('/transaction-tambah', [TransactionController::class, 'store'])->middleware('auth');
Route::get('/transaction-edit/{id}', [TransactionController::class, 'edit'])->middleware('auth');
Route::put('/transaction/{id}', [TransactionController::class, 'update'])->middleware('auth');
Route::get('/transaction-delete/{id}', [TransactionController::class, 'delete'])->middleware('auth');
Route::delete('/transaction-destroy/{id}', [TransactionController::class, 'destroy'])->middleware('auth');

Route::get('/transaction-detail', [TransactionController::class, 'detail'])->middleware('auth');
