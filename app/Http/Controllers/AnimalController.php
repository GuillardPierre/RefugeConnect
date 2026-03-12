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

    public function create() {
        $animal = new Animal();
        $animal->name = "Coquillette";
        $animal->species = "Chien";
        $animal->age = 3;
        $animal->description = "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.";
        $animal->image_url = "animaux/coquillette.png";
        $animal->save();

        return redirect()->route('home');
    }
}
