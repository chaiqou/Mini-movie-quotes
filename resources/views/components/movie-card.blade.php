
@foreach ($quotes as $quote )

<div class="max-w-md mt-9 bg-white rounded-lg  shadow-md">
    <img class="rounded-t-lg" src="{{ asset($quote->movie->image_path) }}" alt="" />
         <div class="p-5">
            <h5 class="mb-2 text-md font-bold tracking-tight text-gray-800 "> “{{ $quote->quote }}”</h5>
        </div>
    </div>
@endforeach
