<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;

Route::middleware(['auth'])->group(function() {

Route::delete('/delete', [ProductController::class, 'destroy'])->name('posts.destroy');

Route::get('/show-tables', [ProductController::class, 'showProduct'])->name('posts.show-tables');

Route::get('/create-company', [CompanyController::class, 'createCompany'])->name('posts.create-company');
Route::post('/create-company', [CompanyController::class, 'storeCompany'])->name('posts.create-company');

Route::get('/create-product', [ProductController::class, 'createProduct'])->name('posts.create-product');
Route::post('/create-product', [ProductController::class, 'storeProduct'])->name('posts.create-product');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
