@extends('layouts.app')
@section('title', $animal->name)

@section('content')
    <h1 class="animal-detail-title">{{ $animal->name }}</h1>

    <div class="animal-detail-layout">
        <img
            src="{{ asset($animal->image_url) }}"
            alt="Image de {{ $animal->name }}"
        >

        <div>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Age : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
@endsection
