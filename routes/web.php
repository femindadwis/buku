<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenerbitController;
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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    // USER
    Route::get('/user/index', [UserController::class, 'index'])->middleware(['admin'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->middleware(['admin'])->name('create');
    Route::post('/user/store', [UserController::class, 'store'])->middleware(['admin']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware(['admin'])->name('user.edit');
    Route::post('/user/update', [UserController::class, 'update'])->middleware(['admin'])->name('create');
    Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->middleware(['admin'])->name('user.destroy');

    // PENERBIT
    Route::get('/penerbit/index', [PenerbitController::class, 'index'])->middleware(['admin'])->name('penerbit');
    Route::get('/penerbit/create', [PenerbitController::class, 'create'])->middleware(['admin'])->name('create');
    Route::post('/penerbit/store', [PenerbitController::class, 'store'])->middleware(['admin'])->name('create');
    Route::get('/penerbit/edit/{id}', [PenerbitController::class, 'edit'])->middleware(['admin'])->name('penerbit.edit');
    Route::post('/penerbit/update', [PenerbitController::class, 'update'])->middleware(['admin'])->name('penerbit.update');
    Route::get('/penerbit/destroy/{id}', [PenerbitController::class, 'destroy'])->middleware(['admin'])->name('penerbit.destroy');

    // BUKU
    Route::get('/buku/index', [BukuController::class, 'index'])->middleware(['user'])->name('buku');
    Route::get('/buku/create', [BukuController::class, 'create'])->middleware(['user'])->name('create');
    Route::put('/buku/update/{id}', [BukuController::class, 'update'])->middleware(['user'])->name('buku.update');
    Route::post('/buku/store', [BukuController::class, 'store'])->middleware(['user'])->name('create');
    Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->middleware(['user'])->name('buku.edit');
    Route::get('/buku/destroy/{id}', [BukuController::class, 'destroy'])->middleware(['user'])->name('buku.destroy');

});

require __DIR__.'/auth.php';
