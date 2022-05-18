<x-admin-layout>
    <x-form.layout heading='ADD NEW MOVIE'>
        <form method="POST" action='/movies' enctype="multipart/form-data">
            @csrf
            <h1 class="font-bold text-center text-xl  mb-4 text-blue-900">{{ __('message.new_movie') }}</h1>

            @foreach (config('app.available_locales') as $locale)
                <x-form.container>

                    <label for="title_{{ $locale }}">{{ __('message.title_en') }}
                        ({{ strtoupper($locale) }})
                    </label>

                    <input class="border rounded-xl border-gray-600 p-2 w-full" type='text'
                        name="title[{{ $locale }}]" id="title_{{ $locale }}"
                        value="{{ old('title.' . $locale) }}">



                </x-form.container>
            @endforeach
            <x-form.thumbnail name='image_path' />
            <x-submit-button>{{ __('message.submit') }}</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
