<x-admin-layout>
    <x-form.layout heading='ADD NEW QUOTE'>
        <form method="POST" action='/quotes' enctype="multipart/form-data">
            @csrf
            <h1 class="font-bold text-center text-xl  mb-4 text-blue-900">{{ __('message.newquote') }}</h1>


            <x-form.container>
                @foreach (config('app.available_locales') as $locale)
                    <x-form.container>

                        <label for="quote_{{ $locale }}">{{ __('message.quote') }}
                            ({{ strtoupper($locale) }})
                        </label>

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


            <x-submit-button>{{ __('message.addquote') }}</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
