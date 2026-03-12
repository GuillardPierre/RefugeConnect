<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [IndexController::class, "index"])->name("home");
Route::get('/animals/{animal}', [AnimalController::class, 'show'])->name('animals.show');
Route::get('/animals/edit/{id}', [AnimalController::class, 'edit'])->name('animals.edit');
Route::get('/animals/delete/{id}', [AnimalController::class, 'delete'])->name('animals.delete');
Route::get('/animles/create', [AnimalController::class, 'create'])->name('animals.create');