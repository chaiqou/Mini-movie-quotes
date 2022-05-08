<x-admin-layout>
    <x-form.layout :heading="'Edit Quote: ' . $quote->quote">
        <form method="POST" action='/quotes/{{ $quote->id }}' enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-form.input name='title' value='{{ $quote->quote }}' />
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

                <x-form.error name='movie' />
            </x-form.container>
            <x-submit-button>Update</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
