<x-layout>

    @if ($quote)
        <a href="/login" class="text-white flex font-bold text-lg">{{ __('message.login') }}</a>

        <div class=" max-w-2xl p-16 m-auto text-center">
            <img src="{{ asset('storage/' . $quote->movie->image_path) }}"
                class="rounded-xl mt-24 mb-16 h-full min-w-full m-auto" width="700" />

            <x-languages />

            <p class="mb-14 text-2xl text-white ">
                {{ $quote->quote }}
            </p>

            <a href="{{ route('movie', ['movie' => $quote->movie->id]) }}" class="block text-white text-lg underline">
                {{ $quote->movie->title }}
            </a>


        </div>
    @else
        <x-no-movie />
    @endif
</x-layout>
