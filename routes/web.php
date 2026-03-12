<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, "index"])->name("home");
Route::prefix("/animaux")->controller(AnimalController::class)->group(function () {
    Route::get('/creer', 'create')->name('animals.create');
    Route::get('/{animal}', 'show')->name('animals.show');
    Route::get('/modification/{id}', 'edit')->name('animals.edit');
    Route::get('/suppression/{id}', 'delete')->name('animals.delete');
});

Route::fallback(function () {
    return response()->view('errors.not-found');
});