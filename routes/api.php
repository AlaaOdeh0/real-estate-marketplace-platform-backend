<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;

Route::middleware('jwt.auth')->get('/auth/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh'])->middleware('jwt.refresh');
        Route::get('me', [AuthController::class, 'me']);
        Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLinkEmail']);
        Route::post('/reset-password', [PasswordResetController::class, 'reset']);
    });
});
