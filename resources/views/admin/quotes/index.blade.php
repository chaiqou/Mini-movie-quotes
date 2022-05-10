<x-admin-layout>
    <div class="px-4 sm:px-6 lg:px-8 mt-6">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">{{ __('message.quotes') }}</h1>
                <p class="mt-2 text-sm text-gray-700">{{ __('message.quotelist') }}</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="quotes/create"
                    class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    {{ __('message.addquote') }}</a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        {{ __('message.movies') }}</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        {{ __('message.quotes') }}</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">{{ __('message.edit') }}</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach ($quotes as $quote)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                            <div class="flex items-center">
                                                <div class="h-10 w-10 flex-shrink-0">
                                                    <img class="h-10 w-10 rounded-md"
                                                        src="{{ asset('storage/' . $quote->movie->image_path) }}"
                                                        alt="movie">
                                                </div>

                                                <div class="ml-4">
                                                    <a href="/{{ $quote->movie->id }}">
                                                        <div class="font-medium flex-shrink-0 text-gray-900">
                                                            {{ $quote->movie->title }}</div>
                                                    </a>



                                                </div>
                                        </td>
                                        <td class="whitespace-nowrap flex-shrink-0 px-3 py-4 text-sm text-gray-500">
                                            <div class="text-gray-500">{{ $quote->quote }}</div>

                                        </td>

                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a href="/quotes/{{ $quote->id }}/edit"
                                                class="text-indigo-600 hover:text-indigo-900">{{ __('message.edit') }}</a>
                                        </td>
                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <form action="/quotes/{{ $quote->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="text-red-600 hover:text-red-900">{{ __('message.delete') }}</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
