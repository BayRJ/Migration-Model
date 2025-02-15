<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/greet', 
    [GreetController::class, 'greetMethod']
);

Route::get('/try', [TaskController::class,'index']);

Route::resource('tasks', TaskController::class);

// Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy2');
