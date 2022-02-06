<?php

use App\Http\Controllers\FeedbackReportAdmin;
use App\Http\Controllers\FeedbackReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/reports', [FeedbackReportAdmin::class, 'index'])
    ->middleware('auth')
    ->name('report.index');
Route::get('/reports/{feedbackReport}', [FeedbackReportAdmin::class, 'show'])
    ->middleware('auth')
    ->name('report.show');
Route::delete('/reports/{feedbackReport}', [FeedbackReportAdmin::class, 'destroy'])
    ->middleware('auth')
    ->name('report.destroy');

Route::post('/reports', [FeedbackReportAdmin::class, 'store'])
    ->name('report.store');
Route::get('/reports-create', [FeedbackReportAdmin::class, 'create'])
    ->name('report.create');
Route::get('/reports-postcreate', [FeedbackReportAdmin::class, 'postcreate'])
    ->name('report.postcreate');


