<article class="flex h-full w-full flex-col rounded-lg bg-white p-2 shadow-md">
    <a href="{{ route('animals.show', $id) }}" aria-label="Voir {{ $name }}" class="block">
        <img src="{{ asset($imageUrl) }}" alt="Image de {{ $name }}" class="h-42 w-full rounded-lg object-cover">
    </a>
    <h2 class="text-2xl font-bold">{{ $name }}</h2>
    <p class="text-sm">Espèce: {{ $species }}</p>
    <p class="text-sm">Âge: {{ $age }}</p>
    <p class="text-sm">{{ $description }}</p>
    <div class="mt-3 flex w-full justify-around">
        <a href="{{ route('animals.edit', $id) }}" class="text-[#52c9ff]">Modifier</a>
        <a href="#" class="text-[#52c9ff]">Supprimer</a>
    </div>
</article>