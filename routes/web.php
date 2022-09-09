<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\SettingsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);


Route::middleware('auth', 'role:admin')->name('backend.')->prefix('{language}/admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/permission', PermissionController::class);
    Route::resource('/admins', AdminController::class);
    Route::resource('/settings', SettingsController::class);
});

require __DIR__ . '/auth.php';
