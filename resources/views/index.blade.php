@extends('app')
@section('title', 'Accueil')

@section('content')
    <h1 class="text-4xl font-bold mb-10 text-gray-800 text-center">Nos animaux</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach($animals as $animal)
            <x-animal-card :name="$animal->name" :species="$animal->species" :age="$animal->age" :description="$animal->description" :imageUrl="$animal->image_url"/>
        @endforeach
    </div>
@endsection