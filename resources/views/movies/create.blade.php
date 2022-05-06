<x-admin-layout>
<div class="border border-gray-300 p-6 rounded-xl max-w-sm mx-auto mt-32">
<h1 class="font-bold text-center text-xl text-blue-900">ADD NEW MOVIE</h1>

<section class="px-6 py-8 flex items-center justify-center ">
<form method="POST" action='/movies' enctype="multipart/form-data">
        @csrf

  <x-form.input name='title' />
  <x-form.thumbnail name='image_path' />

    <x-submit-button>Submit</x-submit-button>


</form>
</section>
</div>



</div>

</x-admin-layout>

