<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shop\CartController;
use App\Http\Controllers\Shop\IndexController;
use App\Http\Controllers\Shop\ItemsController;
use App\Http\Controllers\Shop\CheckoutController;
use App\Http\Controllers\Shop\CompletedController;
use App\Http\Controllers\Shop\Account\OrderController;
use App\Http\Controllers\Shop\Account\AddressController;
use App\Http\Controllers\Shop\Account\ProfileController;
use App\Http\Controllers\Shop\Account\WishlistController;
use App\Http\Controllers\Shop\Account\PaymentMethodController;

Route::name('shop.')->group(function(){
    Route::get('/', IndexController::class)->name('index');
    Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
    Route::get('/items/{item}', [ItemsController::class, 'show'])->name('items.show');

    Route::middleware(['auth'])->group(function () {
        Route::get('/carts', CartController::class)->name('cart');
        Route::get('/checkout', CheckoutController::class)->name('checkout');
        Route::get('/completed/orders/{order}', CompletedController::class)->name('completed');

        Route::prefix('account')->group(function(){
            
        });
        
        });
        
});
    
Route::middleware(['auth'])->name('account.')->prefix('account')->group(function(){
        
        Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
        Route::get('/addresses',[AddressController::class,'index'])->name('addresses.index');
        Route::get('/payment-methods',[PaymentMethodController::class,'index'])->name('payment.methods.index');
        Route::get('/wishlists',[WishlistController::class,'index'])->name('wishlist.index');
        Route::get('/orders',[OrderController::class,'index'])->name('orders.index');
        Route::get('/orders/{order}',[OrderController::class,'show'])->name('orders.show');
});