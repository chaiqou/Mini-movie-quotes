<x-admin-layout>
    <x-form.layout :heading="'Edit Quote: ' . $quote->quote">
        <form method="POST" action='/quotes/{{ $quote->id }}' enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="font-bold text-center text-xl  mb-4 text-blue-900">{{ __('message.update_quote') }}</h1>
            <x-form.input name='quote' value='{{ $quote->quote }}' />


            <x-form.container>
                <x-form.label name='movie' />

                <select name="movie_id" id="movie_id">
                    @php
                        $movies = \App\Models\Movie::all();

                    @endphp

                    @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>

            </x-form.container>
            <x-submit-button>{{ __('message.update') }}</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
