<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/student', '\App\Http\Controllers\studentcontroller@index')->name('student.index');
Route::get('/student/create', '\App\Http\Controllers\studentcontroller@create')->name('student.create');
Route::post('/student', '\App\Http\Controllers\studentcontroller@store')->name('student.store');
Route::get('/student/{id}/edit', '\App\Http\Controllers\studentcontroller@edit')->name('student.edit');
Route::put('/student/{id}', '\App\Http\Controllers\studentcontroller@update')->name('student.update');
Route::delete('/student/{id}', '\App\Http\Controllers\studentcontroller@destroy')->name('student.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
