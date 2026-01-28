<?php

use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\FeatureController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\LicenseController;
use App\Http\Controllers\Api\LicenseActivationController;
use App\Http\Controllers\Api\FeatureUsageController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\PlanFeatureController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::prefix('plans')->group(function () {
    Route::get('/', [PlanController::class, 'index']);
    Route::get('/{plan}', [PlanController::class, 'show']);
    Route::post('/', [PlanController::class, 'store']);
    Route::put('/{plan}', [PlanController::class, 'update']);
    Route::delete('/{plan}', [PlanController::class, 'destroy']);

    Route::get('/{plan}/features', [PlanFeatureController::class, 'index']);
    Route::post('/{plan}/features', [PlanFeatureController::class, 'store']);
    Route::put('/{plan}/features/{featureId}', [PlanFeatureController::class, 'update']);
    Route::delete('/{plan}/features/{featureId}', [PlanFeatureController::class, 'destroy']);
});

Route::apiResource('features', FeatureController::class);
Route::apiResource('subscriptions', SubscriptionController::class);
Route::apiResource('licenses', LicenseController::class);
Route::apiResource('license-activations', LicenseActivationController::class);
Route::apiResource('feature-usages', FeatureUsageController::class);
Route::apiResource('payments', PaymentController::class);
