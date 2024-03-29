<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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





Route::get('/index',[TestController::class,'index']);
Route::get('/indexx',[TestController::class,'indexx']);
Route::get('/indexxx',[TestController::class,'indexxx']);
Route::get('/indexxxx',[TestController::class,'indexxxx']);
Route::get('/indexxxxx',[TestController::class,'indexxxxx']);