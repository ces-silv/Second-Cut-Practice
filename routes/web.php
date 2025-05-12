<?php

use App\Http\Controllers\FeriaController;
use App\Http\Controllers\EmprendedoresController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('ferias', FeriaController::class);
Route::resource('emprendedores', EmprendedoresController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
