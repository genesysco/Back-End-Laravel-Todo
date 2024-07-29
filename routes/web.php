<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todosController;

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

Route::get('/', [todosController::class ,'index'])->name('index');
Route::get('/Todo/{id}' , [todosController::class , 'show'])->name('shower');
Route::get('/Create' , [todosController::class , 'create'])->name('creator');
Route::post('/Store' , [todosController::class , 'store'])->name('store');
Route::get('/Change/{id}' , [todosController::class , 'change'])->name('changer');
Route::put('/Update/{id}' , [todosController::class , 'update'])->name('updater');
Route::delete('/Delete/{id}' , [todosController::class , 'delete'])->name('deleter');
Route::get('/Confirm/{id}',[todosController::class, 'confirm'])->name('confirmer');