<x-admin-layout>
    <x-form.layout :heading="'Edit Quote: ' . $quote->quote">
        <form method="POST" action='/quotes' enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="font-bold text-center text-xl  mb-4 text-blue-900">{{ __('message.updatequote') }}</h1>
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
            <x-submit-button>{{ __('message.update') }}</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>


{{-- /{{ $quote->id }} --}}
