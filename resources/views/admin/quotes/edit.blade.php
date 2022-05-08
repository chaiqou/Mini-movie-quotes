<x-admin-layout>
    <x-form.layout :heading="'Edit Quote: ' . $quote->quote">
        <form method="POST" action='/quotes/{{ $quote->id }}'>
            @csrf
            @method('PUT')
            <x-form.input name='title' value='{{ $quote->quote }}' />
            <x-submit-button>Update</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>
