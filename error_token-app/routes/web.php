<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/insert',[UserController::class,'insert'])->name('users.insert');
Route::post('/user',[UserController::class,'store'])->name('users.store');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');