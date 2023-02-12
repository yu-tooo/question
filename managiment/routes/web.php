<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/', [ContentController::class, 'search']);
Route::post('/', [ContentController::class, 'result']);

Route::post('/delete', [ContentController::class, 'delete']);