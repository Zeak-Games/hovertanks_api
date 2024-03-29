<?php

use App\Http\Controllers\FeedbackReportController;
use App\Http\Controllers\GameVersionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('feedbackReports', FeedbackReportController::class);
Route::apiResource('gameVersions', GameVersionController::class)
    ->only(['index', 'show', 'store']);
