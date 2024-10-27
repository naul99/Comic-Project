<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//**************Start Route FE********************/
Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/comic",[HomeController::class,"detail"])->name("detail");
Route::get("/read",[HomeController::class,"read"])->name("read");
//**************End Route FE********************/

//**************StartRoute BE API********************/
Route::prefix("api")->group(function () {
    Route::get("home",[ApiController::class,"api_index"])->name('api.home');
    Route::get("genre",[ApiController::class,"genre"])->name('api.genre');
    Route::get("paginate",[ApiController::class,"api_index_paginate"])->name('api.paginate');
    Route::get('comic/{slug}',[ApiController::class,'detail'])->name('api.comic');
    Route::get('comic/{slug}/{chapter}',[ApiController::class,'read'])->name('api.read');
});
//**************End Route BE API********************/