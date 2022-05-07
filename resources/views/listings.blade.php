<x-layout>

    <div class="container max-w-xl m-auto">
        <x-languages />
        <x-movie-title :movie='$movie' />
        <x-movie-card :quotes='$quote' :movie='$movie' />
    </div>

</x-layout>
