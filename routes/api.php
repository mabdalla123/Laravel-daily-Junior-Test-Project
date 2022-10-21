<?php

use App\Http\Controllers\Api\Atuh\Login;
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

Route::post("/login",App\Http\Controllers\Api\Atuh\Login::class);

Route::post("/company/create",App\Http\Controllers\Api\company\Create::class);
Route::get("/company/{company}",App\Http\Controllers\Api\company\Read::class);
Route::put("/company/{company}",App\Http\Controllers\Api\company\Update::class);
Route::delete("/company/{company}",App\Http\Controllers\Api\company\Delete::class);


Route::post("/employee/create",App\Http\Controllers\Api\Employee\Create::class);
Route::get("/employee/{employee}",App\Http\Controllers\Api\Employee\Read::class);
Route::put("/employee/{employee}",App\Http\Controllers\Api\Employee\Update::class);
Route::delete("/employee/{employee}",App\Http\Controllers\Api\Employee\Delete::class);

