<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/', [QuestionController::class, 'index'])->name('welcome');
Route::post('/', [QuestionController::class, 'create']);
Route::get('/show/{question}', [QuestionController::class, 'show'])->name('show');
