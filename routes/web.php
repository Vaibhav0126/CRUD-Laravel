<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{products}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{products}', [ProductController::class, 'destroy'])->name('products.delete');
