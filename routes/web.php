<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::controller(IndexController::class)->group(function () {
    Route::get('/', "index")->name("index");
});
Route::prefix("/about")->controller(AboutController::class)->group(function () {
    Route::get('/', "index")->name("about");
});
Route::prefix("/menu")->controller(MenuController::class)->group(function () {
    Route::get('/', "index")->name("menu");
});
Route::prefix("/reservation")->controller(ReservationController::class)->group(function () {
    Route::get('/', "index")->name("reservation");
    Route::post('/', "store")->name("reservation.store");
});
Route::prefix('/contact')->controller(ContactController::class)->group(function () {
    Route::get("/", "index")->name("contact");
    Route::post("/", "store")->name("contact.store");
});