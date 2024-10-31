<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Livewire\ComicDetail;
use App\Livewire\ComicHome;
use App\Livewire\ComicChapter;

//**************Start Route FE********************/
// Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/",ComicHome::class)->name("home");
Route::get("/comic/{slug}",ComicDetail::class)->name("comic");
Route::get("/comic/{slug}/{chapter}",ComicChapter::class)->name("chapter");
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