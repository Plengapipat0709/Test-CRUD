<?php

use App\Http\Controllers\C_Student;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('students',[C_Student::class, 'index']);

Route::get('add-student',[C_Student::class,'create']);

Route::post('add-student',[C_Student::class,'store']);
Route::get('edit-student/{id}',[C_Student::class,'edit']);
Route::put('update-student/{id}',[C_Student::class,'update']);
Route::delete('delete-student/{id}',[C_Student::class,'delete']);
