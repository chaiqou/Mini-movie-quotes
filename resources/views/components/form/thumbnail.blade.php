@props(['name'])

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
        {{ __('message.thumbnail') }}
    </label>

    <input class="border rounded-xl border-gray-600 p-2 w-full" type='file' name='{{ $name }}'
        id='{{ $name }}' {{ $attributes(['value' => old($name)]) }} />

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
    {{-- value="{{ old($name) }}"    {{ $attributes(['value' => old($name)]) }} --}}
</div>
