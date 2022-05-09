<x-admin-layout>
    <x-form.layout heading='ADD NEW QUOTE'>
        <form method="POST" action='/quotes' enctype="multipart/form-data">
            @csrf


            <x-form.container>
                @foreach (config('app.available_locales') as $locale)
                    <x-form.container>

                        <label for="quote_{{ $locale }}">Quote ({{ strtoupper($locale) }})</label>

                        <input class="border rounded-xl border-gray-600 p-2 w-full" type='text'
                            name="quote[{{ $locale }}]" id="quote_{{ $locale }}"
                            value="{{ old('quote.' . $locale) }}">



                    </x-form.container>
                @endforeach

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


            <x-submit-button>Submit</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
