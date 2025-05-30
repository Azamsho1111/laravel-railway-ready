<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API is working',
        'timestamp' => now(),
        'laravel_version' => app()->version()
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Admin Panel API Routes
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return response()->json([
            'message' => 'Admin Dashboard',
            'data' => []
        ]);
    });
    
    Route::get('/users', function () {
        return response()->json([
            'message' => 'Users list',
            'data' => []
        ]);
    });
    
    Route::get('/models', function () {
        return response()->json([
            'message' => '3D Models list',
            'data' => []
        ]);
    });
    
    Route::get('/moderation', function () {
        return response()->json([
            'message' => 'Moderation queue',
            'data' => []
        ]);
    });
});
