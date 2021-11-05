<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneToOneController;

Route::middleware(['auth'])->group(function() {

Route::get('/posts/create-company', [OneToOneController::class, 'OneToOneInsert'])->name('posts/create-company');

Route::get('/posts/create', [OneToOneController::class, 'OneToOne'])->name('posts/create');

Route::get('/posts/register-product', [OneToOneController::class, 'OneToOneInsert'])->name('posts/register-product');

Route::get('/posts/register', [OneToOneController::class, 'OneToOne'])->name('posts/register');

Route::get('/posts/tables-end', [OneToOneController::class, 'OneToOne'])->name('posts/tables-end');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
