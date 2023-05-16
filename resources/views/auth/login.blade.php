<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <h2 class="text-white text-xl font-bold text-center border-b mb-4 py-4" >Sign In to MEEVIL</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="ml-1 rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-amber-300 shadow-sm focus:ring-amber-300 dark:focus:ring-amber-300 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="mt-4">
            <x-cus-button class="mb-3">
                {{ __('Log in') }}
            </x-cus-button>

            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 " href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="my-4 text-center">
            <h4 class="text-gray-400">Don't Have Account? So Sad</h4> 
            <a href="{{ route('register') }}" class="text-amber-100 hover:text-amber-300 dark:hover:text-amber-300" >Create Account.</a>
        </div>
    </form>
</x-guest-layout>
