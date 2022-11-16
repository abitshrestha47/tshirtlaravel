<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TshirtController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/sub',[TshirtController::class,'add'])->name('sub');


Route::get('/',[TshirtController::class,'index']);

Route::get('/delete/{id}',[TshirtController::class,'delete']);

Route::get('/edit/{id}',[TshirtController::class,'edit']);

Route::post('/check',[TshirtController::class,'updatedata'])->name('pass');