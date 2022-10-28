<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('gallery', App\Http\Controllers\GalleryController::class);
Route::apiResource('category', App\Http\Controllers\CategoryController::class);
Route::apiResource('photo', App\Http\Controllers\PhotoController::class);
