<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//**************Start Route FE********************/
Route::get("/",[HomeController::class,"index"])->name("home");
//**************End Route FE********************/

//**************StartRoute BE API********************/
Route::prefix("api")->group(function () {
    Route::get("home",[ApiController::class,"api_index"])->name('api.home');
    Route::get("genre",[ApiController::class,"genre"])->name('api.genre');
    Route::get("paginate",[ApiController::class,"api_index_paginate"])->name('api.paginate');
});
//**************End Route BE API********************/