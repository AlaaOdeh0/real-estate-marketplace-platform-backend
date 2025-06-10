<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotificationController;
Route::apiResource('reviews', \App\Http\Controllers\ReviewController::class);

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\Api\MessagesController;
use App\Http\Controllers\Api\PropertyController;



Route::get('notifications', [NotificationController::class, 'index']);
Route::get('notifications/{id}', [NotificationController::class, 'show']);
Route::get('user-notifications/{receiver_id}', [NotificationController::class, 'userNotifications']);
Route::post('notifications', [NotificationController::class, 'store']);
Route::patch('notifications/{id}/read', [NotificationController::class, 'markAsRead']);
Route::delete('notifications/{id}', [NotificationController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Property Routes
Route::apiResource('properties', PropertyController::class);
// Message Routes
Route::apiResource('messages', MessagesController::class);
//
Route::get('/user',[UserController::class,'index']);
Route::get('/user/{id}',[UserController::class,'show']);
Route::post('/user',[UserController::class,'store']);
Route::patch('/user/{id}',[UserController::class,'update']);
Route::delete('/user/{id}',[UserController::class,'destroy']);
Route::get('/transactions/search', [TransactionController::class, 'search']);
Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/{id}', [TransactionController::class, 'show']);
Route::post('/transactions', [TransactionController::class, 'store']);
Route::patch('/transactions/{id}', [TransactionController::class, 'update']);
Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);
Route::get('/transactions1', [TransactionController::class, 'getTransactions']);
