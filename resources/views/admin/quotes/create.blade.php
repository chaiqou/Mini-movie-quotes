<x-admin-layout>
    <x-form.layout heading='ADD NEW QUOTE'>
        <form method="POST" action='/quotes' enctype="multipart/form-data">
            @csrf
            <x-form.input name='quote' />

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


            <x-submit-button>Submit</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
