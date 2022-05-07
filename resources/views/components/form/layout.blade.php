@props(['heading'])

<div class="border border-gray-300 p-6 rounded-xl max-w-sm mx-auto mt-32">
    <h1 class="font-bold text-center text-xl text-blue-900">{{ $heading }}</h1>
    <section class="px-6 py-8 flex items-center justify-center ">
        {{ $slot }}
    </section>
</div>
