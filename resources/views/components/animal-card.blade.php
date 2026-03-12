<article>
    <a href="{{ route('animals.show', $id) }}" aria-label="Voir {{ $name }}">
        <img src="{{ asset($imageUrl) }}" alt="Image de {{ $name }}">
    </a>
    <h2>{{ $name }}</h2>
    <p>Espèce: {{ $species }}</p>
    <p>Âge: {{ $age }}</p>
    <p>{{ $description }}</p>
    <div>
        <a href="{{ route('animals.edit', $id) }}">Modifier</a>
        <a href="#">Supprimer</a>
    </div>
</article>