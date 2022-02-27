<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',  [App\Http\Controllers\StudentController::class, 'index']);
Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit']);
Route::get('/show/{id}', [App\Http\Controllers\StudentController::class, 'show']);
Route::get('/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/store', [App\Http\Controllers\StudentController::class, 'store']);
Route::post('/update/{id}', [App\Http\Controllers\StudentController::class, 'update']);



