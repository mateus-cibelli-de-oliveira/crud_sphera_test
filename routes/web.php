<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware(['auth'])->group(function() {


Route::get('/show-tables', [PostController::class, 'index'])->name('posts.index');

Route::get('/create-company', [PostController::class, 'createCompany'])->name('posts.createCompany');
Route::post('/posts/create-company', [PostController::class, 'storeCompany'])->name('posts.storeCompany');

Route::get('/create-product', [PostController::class, 'createProduct'])->name('posts.createProduct');
Route::post('/posts/create-product', [PostController::class, 'storeProduct'])->name('posts.storeProduct');

Route::delete('/posts/delete', [PostController::class, 'destroy'])->name('posts.destroy');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
