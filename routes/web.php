<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, "index"])->name("home");
Route::prefix("/animals")->controller(AnimalController::class)->group(function () {
    Route::get('/{animal}', 'show')->name('animals.show');
    Route::get('/edit/{id}', 'edit')->name('animals.edit');
    Route::get('/delete/{id}', 'delete')->name('animals.delete');
    Route::get('/create', 'create')->name('animals.create');
});

Route::fallback(function () {
    return response()->view('errors.not-found');
});