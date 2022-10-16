<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[StudentController::class,'get_all_student']);
Route::get('/create',[StudentController::class,'create']);
Route::post('/create',[StudentController::class,'store']);
Route::get('/edit/{id}',[StudentController::class,'get_student_by_id']);
Route::post('/edit/{id}',[StudentController::class,'edit']);
Route::delete('/delete/{id}',[StudentController::class,'destroy']);
Route::get('show/{id}',[StudentController::class,'show']);	