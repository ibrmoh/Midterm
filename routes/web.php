<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MidController;

Route::get('/', [newController::class,'index'])->name('Mid.index');
Route::get('/product/{id}', [newController::class,'show']);
Route::post('/product/store', [newController::class,'store'])->name('Mid.store');
Route::post('/products/edit/{id}', [newController::class, 'edit'])->name('Mid.edit');
Route::put('/products/update/{id}',[newController::class,'update'])->name('Mid.update');