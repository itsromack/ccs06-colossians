<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColossiansController;

Route::get('/chapter/{chapter_numer}', [ColossiansController::class, 'readByChapter']);
Route::get('/all-chapters', [ColossiansController::class, 'readAll']);
