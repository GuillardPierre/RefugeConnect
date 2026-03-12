<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    public function show(Animal $animal)
    {
        return view('animal-detail', compact('animal'));
    }

    public function edit ($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->name = $animal['name'] . " modifié";
        $animal->save();

        return redirect()->route('home');
    }

    public function delete($id) {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('home');
    }
}
