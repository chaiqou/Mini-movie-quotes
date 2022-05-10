<x-admin-layout>
    <x-form.layout :heading="'Edit Movie: ' . $movie->title">

        <form method="POST" action='/movies/{{ $movie->id }}' enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="font-bold text-center text-xl  mb-4 text-blue-900">{{ __('message.updatemovie') }}</h1>


            <x-form.input name='title' value='{{ $movie->title }}' />
            <x-form.thumbnail name='image_path' value='{{ $movie->image_path }}' />
            <img src="{{ asset('storage/' . $movie->image_path) }}"
                class="rounded-xl mt-6 mb-3 h-full min-w-full m-auto" width="300" />
            <x-submit-button>{{ __('message.update') }}</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
