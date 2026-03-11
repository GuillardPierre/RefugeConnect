<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function show(Animal $animal)
    {
        return view('animal-detail', compact('animal'));
    }
}
