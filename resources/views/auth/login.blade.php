<x-admin-layout>
    <section class="px-6 py-8 flex justify-center">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2  mt-4 uppercase text-white font-bold text-xs text-gray-700" for="email">
                        Email
                    </label>

                    <input class="border rounded-lg border-gray-400 p-2 w-full" type="email" name="email" id="email"
                        value="{{ old('email') }}" required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2  mt-4 uppercase text-white font-bold text-xs text-gray-700" for="password">
                        Password
                    </label>

                    <input class="border rounded-lg border-gray-400 p-2 w-full" type="password" name="password"
                        id="password" required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <div>
                        <button type="submit"
                            class="w-full mt-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Log
                            In</button>
                    </div>

                </div>
            </form>
        </main>
    </section>
</x-admin-layout>
