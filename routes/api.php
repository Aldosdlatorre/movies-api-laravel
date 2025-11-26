<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MovieController;

Route::apiResource('movies', MovieController::class);
