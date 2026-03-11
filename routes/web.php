<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, "index"])->name("home");
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');