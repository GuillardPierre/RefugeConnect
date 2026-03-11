@extends('layouts.app')
@section('title', $animal->name)

@section('content')
    <h1 class="mb-10 text-center text-5xl font-bold text-gray-900">{{ $animal->name }}</h1>

    <div class="mx-auto flex max-w-4xl items-start gap-6">
        <img
            src="{{ asset($animal->image_url) }}"
            alt="Image de {{ $animal->name }}"
            class="h-44 w-44 rounded object-cover"
        >

        <div class="space-y-3 text-xl text-gray-800">
            <p><span class="font-medium">Espèce :</span> {{ $animal->species }}</p>
            <p><span class="font-medium">Age :</span> {{ $animal->age }} ans</p>
            <p class="max-w-3xl leading-snug">{{ $animal->description }}</p>
        </div>
    </div>
@endsection
