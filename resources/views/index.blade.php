@extends('layouts.app')
@section('title', 'Accueil')

@section('content')
    <h1>Nos animaux</h1>
    <div class="animals-grid">
        @foreach($animals as $animal)
            <x-animal-card :id="$animal->id" :name="$animal->name" :species="$animal->species" :age="$animal->age" :description="$animal->description" :imageUrl="$animal->image_url"/>
        @endforeach
    </div>
@endsection