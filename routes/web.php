<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\ProductListController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [UserController::class, 'index'])->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//add to cart
Route::controller(CartController::class)->prefix('cart')->group(function(){
    Route::get('/view', 'view')->name('cart.index');
    Route::post('/store/{product}', 'store')->name('cart.store');
    Route::patch('/update/{product}', 'update')->name('cart.update');
    Route::delete('/remove/{product}', 'delete')->name('cart.delete');
});

//routes for products list and filter
Route::controller(ProductListController::class)->prefix('products')->group(function(){
    Route::get('', 'index')->name('products.index');
});



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
