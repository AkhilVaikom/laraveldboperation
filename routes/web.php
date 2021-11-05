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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add',[StudentController::class,'add']);
Route::post('/add',[StudentController::class,'addPost'])->name('add-student');

Route::get('/student',[StudentController::class,'display'])->name('student');
Route::get('/deleteitem/{id}',[StudentController::class,'deleteItem']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::post('/update/{id}',[StudentController::class,'updateItem'])->name('update');

