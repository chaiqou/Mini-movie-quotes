<x-admin-layout>
    <x-form.layout heading='CREATE NEW MOVIE'>
        <form method="POST" action='/movies' enctype="multipart/form-data">
            @csrf


            @foreach (config('app.available_locales') as $locale)
                <x-form.container>

                    <label for="title_{{ $locale }}">Title ({{ strtoupper($locale) }})</label>

                    <input class="border rounded-xl border-gray-600 p-2 w-full" type='text'
                        name="title[{{ $locale }}]" id="title_{{ $locale }}"
                        value="{{ old('title.' . $locale) }}">



                </x-form.container>
            @endforeach
            <x-form.thumbnail name='image_path' />
            <x-submit-button>Submit</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
