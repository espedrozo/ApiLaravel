<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerAPI;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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


Route::get('customers', [CustomerController::class, 'getCustomers']);
Route::get('customers/{id}', [CustomerController::class, 'getCustomersById']);
Route::post('customers', [CustomerController::class, 'postNewCustomer']);
Route::put('customers/{id}', [CustomerController::class, 'putEditCustomer']);
Route::delete('customers/{id}', [CustomerController::class, 'deleteCustomer']);


