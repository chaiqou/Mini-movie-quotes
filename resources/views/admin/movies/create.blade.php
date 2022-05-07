<x-admin-layout>
    <x-form.layout heading='CREATE NEW MOVIE'>
        <form method="POST" action='/movies' enctype="multipart/form-data">
            @csrf
            <x-form.input name='title' />
            <x-form.thumbnail name='image_path' />
            <x-submit-button>Submit</x-submit-button>
        </form>
    </x-form.layout>
</x-admin-layout>