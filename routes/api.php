<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index']); // Retrieve all users
// Route::get('/users/{id}', [UserController::class, 'show']); // Retrieve a single user by ID
// Route::post('/users', [UserController::class, 'store']); // Create a new user
// Route::put('/users/{id}', [UserController::class, 'update']); // Update a user by ID
// Route::delete('/users/{id}', [UserController::class, 'destroy']);
