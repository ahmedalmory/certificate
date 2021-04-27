<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\Certificate2Controller;
use App\Http\Controllers\GoldenCertificateController;
use App\Http\Controllers\SettingsController;


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

Auth::routes();

Route::middleware('auth')->group(function () {
    // admin routes
    Route::get('/', [HomeController::class, 'index']);
    Route::resource('/settings', SettingsController::class);
    Route::resource('/certificates', CertificateController::class)->except('show', 'create', 'store');
    Route::resource('/certificate2s', Certificate2Controller::class)->except('show', 'create', 'store');
    Route::resource('/golden-certificates', GoldenCertificateController::class)->except('show', 'create', 'store');
    // end admin routes
});

Route::resource('/certificates', CertificateController::class)->only('create', 'show', 'store');
Route::resource('/certificate2s', Certificate2Controller::class)->only('create', 'show', 'store');
Route::resource('/golden-certificates', GoldenCertificateController::class)->only('create', 'show', 'store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
