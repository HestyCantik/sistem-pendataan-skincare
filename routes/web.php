<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukSkincareController;

Route::get('/', function () {
    return redirect('/produk');
});

// Menampilkan data
Route::get('/produk', [ProdukSkincareController::class, 'index']);

// Form tambah data
Route::get('/produk/create', [ProdukSkincareController::class, 'create']);

// Simpan data
Route::post('/produk/store', [ProdukSkincareController::class, 'store']);

// Form edit data
Route::get('/produk/edit/{id}', [ProdukSkincareController::class, 'edit']);

// Update data
Route::post('/produk/update/{id}', [ProdukSkincareController::class, 'update']);

// Hapus data
Route::post('/produk/delete/{id}', [ProdukSkincareController::class, 'destroy']);