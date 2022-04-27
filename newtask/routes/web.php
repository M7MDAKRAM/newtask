<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\DB;

Route::post('/tasks', function () {
    $name= $_POST['name'];
    return view('tasks',compact('name'));
});


Route::get('tasks', function () {
    $tasks= DB::table('newtask')->get();

    return view('tasks',compact('tasks'));
});

Route::get('/task/{id}', function($id) {
    $task= DB::table('newtask')->find($id);

    return view('task',compact('task'));
});



Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/{id}', [TaskController::class, 'show'])->name('task.show');
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');
Route::delete('task/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::post('/tasks/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/tasks/update/{id}',[TaskController::class,'update'])->name('task.update');

