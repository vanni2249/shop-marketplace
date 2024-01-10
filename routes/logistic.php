<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logistic\IndexController;
use App\Http\Controllers\Logistic\CategoryController;
use App\Http\Controllers\Logistic\SectionController;
use App\Http\Controllers\Logistic\AttributeController;

Route::prefix('/logistic')->name('logistic.')->group(function(){

    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('/sections',[SectionController::class,'index'])->name('sections.index');
    Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
    Route::get('/attributes',[AttributeController::class,'index'])->name('attributes.index');

});

require __DIR__.'/logistic/items.php';