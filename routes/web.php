<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('accounts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::resource('profiles', ProfileController::class)
//     ->only(['index', 'login'])

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('products/', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/filter', [ProductController::class, 'filter'])->name('products.filter');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('products/menu', [ProductController::class, 'menu'])->name('products.menu');
    Route::get('products/viewer', [ProductController::class, 'viewer'])->name('products.viewer');
});

// Route::resource('/products', ProductController::class)
//     ->only(['index', 'create', 'store', ])
//     ->middleware(['auth', 'verified']);


// Route::middleware(['auth', 'verified'])->group(function () {
    
// });




require __DIR__.'/auth.php';
