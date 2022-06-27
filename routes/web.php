<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AuthorController::class,'index']);
Route::post('/',[AuthorController::class,'post']);
Route::get('/thank',[AuthorController::class,'thank']);