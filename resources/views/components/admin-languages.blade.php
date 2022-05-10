<div class="absolute top-52 w-12 h-12 left-8 flex justify-center items-center">
    <a href="{{ route('locale.setting', 'ka') }}" class="text-white h-24">
        <button
            class="w-12 h-22 mb-4 mr-8 border-2 rounded-full bg-red-500 border-gray-800 {{ Config::get('app.locale') === 'ka' ? 'bg-yellow-800 text-white-800' : '' }} ">
            {{ __('message.ka') }}
        </button>
    </a>

</div>

<div class="absolute top-60 mt-4 left-8 w-12 h-12 flex justify-center items-center">

    <a href="{{ route('locale.setting', 'eng') }}" class="text-white h-24">
        <button
            class="w-12 h-22 mb-4 mr-8 border-2 rounded-full bg-red-500 border-gray-800 {{ Config::get('app.locale') === 'eng' ? 'bg-yellow-800 text-white-800' : '' }} ">
            {{ __('message.eng') }}
        </button>
    </a>

</div>
