<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'web'], function () {

Route::get('/', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task', [TaskController::class, 'store']);
Route::delete('/task/{task}', [TaskController::class, 'destroy']);
Route::post('/task/{task}', [TaskController::class, 'edit']);
   

});

