<?php

use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
