<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/roles', [RoleController::class, 'store'])->name('role.store');
Route::delete('/role/{role}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
