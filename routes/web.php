<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blogs',[BlogController::class,'index'])-> name('blogs.index'); 
Route::get('/blogs/view/{id}',[BlogController::class,'view'])-> name('blogs.view');
Route::get('/blogs/create',[BlogController::class,'create'])-> name('blogs.create');
Route::get('/blogs/edit/{id}',[BlogController::class,'edit'])-> name('blogs.edit');

Route::post('/blogs/store',[BlogController::class,'store'])->name('blogs.store');
Route::put('/blogs/update/{id}',[BlogController::class,'update'])->name('blogs.update');
Route::delete('/blogs/delete/{id}',[BlogController::class,'destroy'])->name('blogs.delete');

