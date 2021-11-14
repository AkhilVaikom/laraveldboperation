<?php

use App\Http\Controllers\TeacherController;
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
    return view('auth.login');
});

Route::get('/index',[StudentController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/add',[StudentController::class,'add'])->middleware(['auth']);
Route::post('/add',[StudentController::class,'addPost'])->middleware(['auth'])->name('add-student');
Route::get('/deleteitem/{id}',[StudentController::class,'deleteItem'])->middleware(['auth']);
Route::get('/edit/{id}',[StudentController::class,'edit'])->middleware(['auth']);
Route::post('/update/{id}',[StudentController::class,'updateItem'])->middleware(['auth'])->name('update');

Route::resource('teachers', TeacherController::class);
