<?php

use App\Http\Controllers\Api\V1\EmployeeController;
use App\Http\Controllers\Api\V1\EmployeeDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get(
    '/employees/countries',
    [EmployeeDataController::class, 'countries']
);
Route::get(
    '/employees/{country}/states',
    [EmployeeDataController::class, 'states']
);
Route::get(
    '/employees/departments',
    [EmployeeDataController::class, 'departments']
);
Route::get(
    '/employees/{state}/cities',
    [EmployeeDataController::class, 'cities']
);

Route::apiResource('employees', EmployeeController::class);
