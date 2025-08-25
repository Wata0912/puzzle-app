<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StageController;

use Illuminate\Support\Facades\Route;

Route::get('users/index', [UserController::class, 'index']);
Route::post('users/store', [UserController::class, 'store']);
Route::post('users/update', [UserController::class, 'update'])->middleware('auth:sanctum');
Route::post('users/levelUP', [UserController::class, 'levelUP'])->middleware('auth:sanctum');;
Route::get('users/show', [UserController::class, 'show'])->middleware('auth:sanctum');
Route::get('users/items/{user_id}', [UserController::class, 'items']);
Route::post('items/get', [ItemController::class, 'get']);
Route::get('stages/get/{stage_id}', [StageController::class, 'get']);
Route::get('stages/index', [StageController::class, 'index']);
