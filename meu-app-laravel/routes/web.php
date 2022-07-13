<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


#abaixo uma rota com parametro
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');