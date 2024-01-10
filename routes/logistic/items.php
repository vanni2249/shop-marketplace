<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logistic\Items\ItemController;
use App\Http\Controllers\Logistic\Items\ItemProductController;
use App\Http\Controllers\Logistic\Items\ItemSectionController;
use App\Http\Controllers\Logistic\Items\ItemCategoryController;
use App\Http\Controllers\Logistic\Items\ItemAttributeController;

Route::prefix('/logistic/items')->name('logistic.items.')->group(function(){

    Route::get('/',[ItemController::class,'index'])->name('index');
    Route::get('/{item}',[ItemController::class,'show'])->name('show');
    Route::get('/{item}/sections',[ItemSectionController::class,'index'])->name('sections.index');
    Route::get('/{item}/categories',[ItemCategoryController::class,'index'])->name('categories.index');
    Route::get('/{item}/attributes',[ItemAttributeController::class,'index'])->name('attributes.index');
    Route::get('/{item}/products',[ItemProductController::class,'index'])->name('products.index');
    Route::get('/{item}/products/{product}',[ItemProductController::class,'show'])->name('products.show');

});