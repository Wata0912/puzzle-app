<?php

use App\Http\Controllers\StageController;
use App\Models\Stage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('accounts/index', [AccountController::class, 'index'])->name('accounts.index');
Route::post('accounts/index', [AccountController::class, 'index'])->name('accounts.index');

Route::get('accounts/show', [AccountController::class, 'show'])->name('accounts.show');
Route::post('accounts/show', [AccountController::class, 'show'])->name('accounts.show');

Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');
Route::post('accounts/create', [AccountController::class, 'create'])->name('accounts.create');

Route::get('accounts/store', [AccountController::class, 'store'])->name('accounts.store');
Route::post('accounts/store', [AccountController::class, 'store'])->name('accounts.store');

Route::get('accounts/createResult', [AccountController::class, 'createResult'])->name('accounts.createResult');
Route::post('accounts/createResult', [AccountController::class, 'createResult'])->name('accounts.createResult');

Route::get('accounts/delete', [AccountController::class, 'delete'])->name('accounts.delete');
Route::post('accounts/delete', [AccountController::class, 'delete'])->name('accounts.delete');

Route::get('accounts/onDelete', [AccountController::class, 'onDelete'])->name('accounts.onDelete');
Route::post('accounts/onDelete', [AccountController::class, 'onDelete'])->name('accounts.onDelete');

Route::get('accounts/deleteResult', [AccountController::class, 'deleteResult'])->name('accounts.deleteResult');
Route::post('accounts/deleteResult', [AccountController::class, 'deleteResult'])->name('accounts.deleteResult');

Route::get('/{error_id?}', [AuthController::class, 'index'])->name('auth.index');

Route::post('login', [AuthController::class, 'login'])->name('auth.login');

Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');


Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::post('users/index', [UserController::class, 'index'])->name('users.index');

Route::get('users/createUsers', [UserController::class, 'createUsers'])->name('users.createUsers');
Route::post('users/createUsers', [UserController::class, 'createUsers'])->name('users.createUsers');

Route::get('users/store', [UserController::class, 'store'])->name('users.store');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');

Route::get('users/createResult', [UserController::class, 'createResult'])->name('users.createResult');
Route::post('users/createResult', [UserController::class, 'createResult'])->name('users.createResult');

Route::get('users/show', [UserController::class, 'show'])->name('users.show');
Route::post('users/show', [UserController::class, 'show'])->name('users.show');

Route::get('users/updateName', [UserController::class, 'updateName'])->name('users.updateName');
Route::post('users/updateName', [UserController::class, 'updateName'])->name('users.updateName');

Route::get('users/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('users/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('users/updateNameResult', [UserController::class, 'updateNameResult'])->name('users.updateNameResult');
Route::post('users/updateNameResult', [UserController::class, 'updateNameResult'])->name('users.updateNameResult');


Route::get('stages/index', [StageController::class, 'index'])->name('stages.index');
Route::post('stages/index', [StageController::class, 'index'])->name('stages.index');

Route::get('stages/showCell', [StageController::class, 'showCell'])->name('stages.showCell');
Route::post('stages/showCell', [StageController::class, 'showCell'])->name('stages.showCell');

Route::get('stages/createStage', [StageController::class, 'createStage'])->name('stages.createStage');
Route::post('stages/createStage', [StageController::class, 'createStage'])->name('stages.createStage');

Route::get('stages/store', [StageController::class, 'store'])->name('stages.store');
Route::post('stages/store', [StageController::class, 'store'])->name('stages.store');

Route::get('stages/createResult', [StageController::class, 'createResult'])->name('stages.createResult');
Route::post('stages/createResult', [StageController::class, 'createResult'])->name('stages.createResult');

Route::prefix('items')->name('items.')->controller(ItemController::class)->group(function () {
    Route::get('createResult', 'createResult')->name('createResult');
    Route::post('createResult', 'createResult')->name('createResult');
    Route::get('create/{error_id?}', 'create')->name('create');
    Route::post('create/{error_id?}', 'create')->name('create');
    Route::get('index', 'index')->name('index');
    Route::post('index', 'index')->name('index');
    Route::get('delete', 'delete')->name('delete');
    Route::post('delete', 'delete')->name('delete');
    Route::get('onDelete', 'onDelete')->name('onDelete');
    Route::post('onDelete', 'onDelete')->name('onDelete');
    Route::get('deleteResult', 'deleteResult')->name('deleteResult');
    Route::post('deleteResult', 'deleteResult')->name('deleteResult');
    Route::get('store', 'store')->name('store');
    Route::post('store', 'store')->name('store');

});
