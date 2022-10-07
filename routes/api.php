<?php

use App\Http\Controllers\Api\CampaignController;
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



## Campaign Routes
Route::middleware('accept.json')
    ->prefix('v1')
    ->controller(CampaignController::class)
    ->group(function () {
        Route::apiResource('advertisement', \App\Http\Controllers\Api\CampaignController::class);

    });



