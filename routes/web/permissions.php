<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
Route::post('/permissions/', [PermissionController::class, 'store'])->name('permission.store');
Route::get('/permissions/{permission}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
Route::put('/permissions/{permission}/update', [PermissionController::class, 'update'])->name('permission.update');
Route::delete('/permissions/{permission}/destroy', [PermissionController::class, 'destroy'])->name('permission.destroy');
