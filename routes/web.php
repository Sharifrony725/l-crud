<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('/edit-student{id}', [StudentController::class, 'edit']);
Route::Put('update-student{id}', [StudentController::class, 'update']);
// Route::get('delete-student{id}', [StudentController::class, 'destroy']);
Route::delete('delete-student{id}', [StudentController::class, 'destroy']);
