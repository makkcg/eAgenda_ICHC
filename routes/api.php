<?php

namespace App\Http\Controllers\Api;

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

Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
    Route::post('/social-login', [AuthController::class, 'socialLogin']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'tags'], function () {
    Route::get('/', [TagController::class, 'index']);
    Route::post('/', [TagController::class, 'store']);
    Route::post('/{tag}', [TagController::class, 'update']);
    Route::delete('/{tag}', [TagController::class, 'destroy']);
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'lists'], function () {
    Route::get('/', [TaskListController::class, 'index']);
    Route::post('/', [TaskListController::class, 'store']);
    Route::post('/{taskList}', [TaskListController::class, 'update']);
    Route::delete('/{taskList}', [TaskListController::class, 'destroy']);
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'lists/{taskList}/tasks'], function () {
    Route::get('/', [TaskController::class, 'index']);
    Route::post('/', [TaskController::class, 'store']);
    Route::post('/{task}', [TaskController::class, 'update']);
    Route::post('/{task}/status', [TaskController::class, 'changeStatus']);
    Route::delete('/{task}', [TaskController::class, 'destroy']);
});

Route::group(['middleware' => 'auth:sanctum', 'prefix' => 'tasks/{task}'], function () {
    Route::post('/files', [TaskController::class, 'addFiles']);
    Route::delete('/files/{file}', [TaskController::class, 'deleteFile']);
});

Route::get('/languages', [LanguageController::class, 'index']);
Route::get('/appLabels', [AppLabelController::class, 'index']);

Route::get('/pages/{page}', PageController::class);
