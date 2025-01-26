<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="py-6" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="text-center mb-4">
            <h2 class="text-xl font-bold">Konto demonstracyjne:</h2>
            <p class="mt-2 mb-0"><strong>email:</strong> test@example.com</p>
            <p class="my-0"><strong>hasło:</strong> password</p>

            <button type="button" class="mt-4 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 js-fillCredentials">
                Wypełnij formularz automatycznie danymi testowymi
            </button>
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Adres e-mail')" />
            <x-text-input id="email" class="block mt-1 w-full border py-2 px-4" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Hasło')" />

            <x-text-input id="password" class="block mt-1 w-full border py-2 px-4"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Zapamiętaj mnie') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mr-2" href="{{ route('password.request') }}">
                    {{ __('Zapomniałeś hasła?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Zaloguj się') }}
            </x-primary-button>
        </div>
    </form>


    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.querySelector('.js-fillCredentials').addEventListener('click', function () {
                    console.log('jest')
                    document.getElementById('email').value = 'test@example.com'
                    document.getElementById('password').value = 'password'
                })
            })
        </script>
    @endpush
</x-guest-layout>