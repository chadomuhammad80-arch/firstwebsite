<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\studentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// This is a default Laravel route, you can just leave it here
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

