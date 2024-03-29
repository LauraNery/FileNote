<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', [NoteController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
