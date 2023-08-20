<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContentController::class, 'index']);
Route::get('/content', [ContentController::class, 'index']);
Route::get('/content/create', [ContentController::class, 'create']);

Route::post('/content', [ContentController::class, 'store']);



