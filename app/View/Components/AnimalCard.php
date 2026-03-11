<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnimalCard extends Component
{
    public $id;

    public $name;

    public $species;

    public $age;

    public $description;

    public $imageUrl;


    public function __construct($id, $name, $species, $age, $description, $imageUrl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->species = $species;
        $this->age = $age;
        $this->description = $description;
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal-card');
    }
}
