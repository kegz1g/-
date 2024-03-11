<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class,'index'])->name('index');
Route::post('/', [MainController::class,'add'])->name('add.product');


Route::get('/{id}', [MainController::class,'show'])->name('product.show');
Route::put('/{id}', [MainController::class,'update'])->name('product.update');
Route::get('/{id}/edit', [MainController::class,'edit'])->name('product.edit');
Route::delete('/{id}', [MainController::class, 'delete'])->name('product.delete');




