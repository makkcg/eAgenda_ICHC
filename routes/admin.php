<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->group(function () {
    Route::get('login', [Auth\AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [Auth\AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->group(function () {
    Route::post('logout', [Auth\AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    Route::get('/', HomeController::class)->name('home');

    Route::get('/settings', [SettingController::class, 'edit'])->name('settings.edit')->middleware('role_or_permission:super-admin|settings');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('edit');
        Route::put('/', [ProfileController::class, 'update'])->name('update');
        Route::post('/password', [ProfileController::class, 'changePassword'])->name('password');
    });

    Route::resource('/roles', RoleController::class)->except('show')->middleware('role_or_permission:super-admin|roles');

    Route::resource('/admins', AdminController::class)->except('show')->middleware('role_or_permission:super-admin|admins');
    Route::post('/admins/{admin}/password', [AdminController::class, 'changePassword'])->name('admins.password')->middleware('role_or_permission:super-admin|admins');

    Route::post('/appLabels/import', [AppLabelController::class, 'import'])->name('appLabels.import')->middleware('role_or_permission:super-admin|app_labels');
    Route::get('/appLabels/template', [AppLabelController::class, 'downloadTemplate'])->name('appLabels.template')->middleware('role_or_permission:super-admin|app_labels');
    Route::delete('/appLabels/delete-all', [AppLabelController::class, 'deleteAll'])->name('appLabels.delete-all')->middleware('role_or_permission:super-admin|app_labels');
    Route::resource('/appLabels', AppLabelController::class)->except(['show', 'destroy'])->middleware('role_or_permission:super-admin|app_labels');

    Route::get('/languages', [LanguageController::class, 'index'])->name('languages.index')
        ->middleware('role_or_permission:super-admin|languages');
    Route::get('/languages/{language}/status', [LanguageController::class, 'changeStatus'])->name('languages.status')
        ->middleware('role_or_permission:super-admin|languages');

    Route::resource('/pages', PageController::class)->only(['index', 'edit', 'update'])->middleware('role_or_permission:super-admin|pages');

    Route::resource('/news', NewsController::class)->except('show')->middleware('role_or_permission:super-admin|news');

    Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('role_or_permission:super-admin|users');

    Route::resource('/information', InformationController::class)->except('show')->middleware('role_or_permission:super-admin|information');
});
