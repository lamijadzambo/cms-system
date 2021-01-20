<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::post('/roles', [RoleController::class, 'store'])->name('role.store');
Route::get('/roles/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/roles/{role}/update', [RoleController::class, 'update'])->name('role.update');
Route::put('/roles/{role}/attach', [RoleController::class, 'attach_permission'])->name('role.permission.attach');
Route::put('/roles/{role}/detach', [RoleController::class, 'detach_permission'])->name('role.permission.detach');
Route::delete('/roles/{role}/destroy', [RoleController::class, 'destroy'])->name('role.destroy');
