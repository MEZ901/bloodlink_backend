<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\BloodDriveController;
use App\Http\Controllers\AppointmentController;

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

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::get('cities', [CityController::class, 'index']);

Route::get('blood-types', [BloodTypeController::class, 'index']);

Route::apiResource('hospitals', HospitalController::class);

Route::apiResource('blood-drives', BloodDriveController::class);

Route::apiResource('reports', ReportController::class);

Route::apiResource('users', UserController::class);

Route::apiResource('appointments', AppointmentController::class);

Route::post('switch-user-role/{user}', [RoleController::class, 'switchUserRole']);
