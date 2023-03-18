<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\LoginUserController;

Route::post('login', [LoginUserController::class, 'submit']);
