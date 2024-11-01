<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;



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
    return view('welcome');
});

// routes/web.php
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

    Route::get('/create-student',[StudentController::class, 'create'])->name('student.create');
    Route::post('/store-student',[StudentController::class, 'store'])->name('student.store');
    Route::get('/students',[StudentController::class, 'index'])->name('student.index');
    Route::get('/{id}/show',[StudentController::class, 'show'])->name('student.show');
    
    Route::get('/create-teacher',[TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/store-teacher',[TeacherController::class, 'store'])->name('teacher.store');
});
