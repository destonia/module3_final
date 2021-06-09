<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('products')->group(function (){
    Route::get('create',[\App\Http\Controllers\ProductController::class,'showCreateForm'])->name('products.show-create');
    Route::post('store',[\App\Http\Controllers\ProductController::class,'create'])->name('products.create');
    Route::post('update',[\App\Http\Controllers\ProductController::class,'update'])->name('products.update');
    Route::get('edit/{id}',[\App\Http\Controllers\ProductController::class,'showEdit'])->name('products.edit');
    Route::get('delete/{id}',[\App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
});
Route::get('/',[\App\Http\Controllers\ProductController::class,'index'])->name('products.index');
