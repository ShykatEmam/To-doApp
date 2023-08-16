<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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

//Route::get('/', function () {return view('welcome');});

Route::get('/',[TodoController::class,'index'])->name('home');
Route::get('/edit/{id}',[TodoController::class,'editToDo'])->name('edit.todo');
Route::get('/manage',[TodoController::class,'manageToDo'])->name('manage.todo');

Route::post('/save',[TodoController::class,'saveToDo'])->name('save.todo');
Route::post('/update',[TodoController::class,'updateToDo'])->name('update.todo');
Route::post('/delete',[TodoController::class,'deleteToDo'])->name('delete.todo');
