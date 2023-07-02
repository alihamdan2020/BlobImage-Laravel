<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\teacherController;
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
    return view('index');
});

Route::post('/addimage',[teacherController::class,'addNewTeacher'])->name('add');

route::post('/addstudent',[studentController::class,'addNewStudent'])->name('createNewStudent');

route::get('/display',[mainController::class,'index']);
Route::get('/display/{id}',[mainController::class,'getImage'])->name('getImage');
