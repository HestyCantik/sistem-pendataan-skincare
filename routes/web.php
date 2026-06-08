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

use App\Http\Controllers\BrandController;

Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/create', [BrandController::class, 'create']);
Route::post('/brand/store', [BrandController::class, 'store']);
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/update/{id}', [BrandController::class, 'update']);
Route::post('/brand/delete/{id}', [BrandController::class, 'destroy']);


use App\Http\Controllers\SupplierController;


Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/create', [SupplierController::class, 'create']);
Route::post('/supplier/store', [SupplierController::class, 'store']);
Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit']);
Route::post('/supplier/update/{id}', [SupplierController::class, 'update']);
Route::post('/supplier/delete/{id}', [SupplierController::class, 'destroy']);

use App\Http\Controllers\PelangganController;

Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan/store', [PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::post('/pelanggan/update/{id}', [PelangganController::class, 'update']);
Route::post('/pelanggan/delete/{id}', [PelangganController::class, 'destroy']);