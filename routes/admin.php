<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\RolesAndPermissionController;
use App\Http\Controllers\Admin\TrainController;
use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;

    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('roles', RolesAndPermissionController::class);
        Route::resource('users', UsersController::class);
        Route::resource('train', TrainController::class);
        Route::post('trains/{status}', [TrainController::class, 'status'])->name('train.status');
        Route::get('/users/ActiveUsers', [UsersController::class, 'ActiveUsers'])->name('users.activeUsers');
        Route::get('/profile', [UsersController::class, 'profile'])->name('users.profile');
        Route::post('/user-department', [UsersController::class, 'user_department_update'])->name('users.department');
        Route::post('/user-password-update', [UsersController::class, 'PasswordReset'])->name('users.password-update');
        Route::post('users/{status}', [UsersController::class, 'status'])->name('users.status');
    });
