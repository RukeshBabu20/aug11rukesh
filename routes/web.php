<?php

use App\Http\Controllers\StudentController;
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
*/

Route::get('/', [StudentController::class, 'all']);
Route::get('/students',[StudentController::class,'index']);
Route::get('/add-subject',[StudentController::class,'subject']);

Route::get('/information/{id}',[StudentController::class,'info']);
Route::get('/changeStatus', [StudentController::class, 'changeStatus']);
Route::get('/delete/{id}',[StudentController::class, 'destroy']);
Route::get('/edit/{id}',[StudentController::class,'edit']);

Route::post('/update/{id}',[StudentController::class,'update']);
Route::post('/store',[StudentController::class,'store']);
Route::post('/save',[StudentController::class,'save']);