<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::delete('task/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::post('task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('task/update/{id}', [TaskController::class, 'update'])->name('task.update');
