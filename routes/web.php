<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::post('cart/add', [CartController::class, 'add'])->name('carts.add');
Route::get('cart', [CartController::class, 'index'])->name('carts.index');
Route::get('checkout', [PaymentController::class, 'checkout'])->name('payments.checkout');
Route::post('create-checkout-session', [PaymentController::class, 'createCheckoutSession'])->name('payments.createCheckoutSession');
Route::get('success', [PaymentController::class, 'success'])->name('payments.success');
Route::get('cancel', [PaymentController::class, 'cancel'])->name('payments.cancel');
