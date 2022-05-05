<x-layout>

    <div class="container max-w-xl m-auto">
{{-- @php
    dd($movie , $quote);
@endphp --}}
       <x-movie-title :movie='$movie'  />

       <x-movie-card :quotes='$quote' :movie='$movie' />


    </div>

</x-layout>


