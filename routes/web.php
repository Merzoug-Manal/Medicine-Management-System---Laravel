<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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



Route::get('/',function(){
    return view('welcome');
} );


Route::get('/medicines',[PostController::class,'index'])->name('medicines.index');

Route::get('/medicines/create',[PostController::class,'create'])->name('medicines.create');

Route::get('/medecines/{medicine}/edit',[PostController::class,'edit'])->name('medicines.edit');

Route::put('medicines/{medicine}',[PostController::class,'update'])->name('medicines.update');

Route::post('/medicines',[PostController::class,'store'])->name('medicines.store');

Route::get('/medicines/{medicine}',[PostController::class,'show'])->name('medicines.show');

Route::delete('/medicines/{medicine}',[PostController::class,'destroy'])->name('medicines.destroy');

