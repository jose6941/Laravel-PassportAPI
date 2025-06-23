<?php

use App\Http\Controllers\ClienteController;
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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/autor/index',[ClienteController::class,'index']);
Route::get('/autor/create',[ClienteController::class,'create']);
Route::get('/autor/edit/{id}',[ClienteController::class,'edit']);
Route::get('/autor/destroy/{id}',[ClienteController::class,'destroy']);
Route::get('/autor/show/{id}',[ClienteController::class,'show']);
