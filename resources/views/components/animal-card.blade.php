<a href="#" aria-label="Voir {{ $name }}" class="block h-full w-full">
    <article class="flex h-full w-full flex-col bg-white rounded-lg shadow-md p-2">
        <img src="{{ asset($imageUrl) }}" alt="Image de {{ $name }}" class="h-42 w-full rounded-lg object-cover">
        <h2 class="text-2xl font-bold">{{ $name }}</h2>
        <p class="text-sm">Espèce: {{ $species }}</p>
        <p class="text-sm">Âge: {{ $age }}</p>
        <p class="text-sm">{{ $description }}</p>
        <div class="mt-3 flex w-full justify-around">
            <span class="text-[#52c9ff]">Modifier</span>
            <span class="text-[#52c9ff]">Supprimer</span>
        </div>
    </article>
</a>