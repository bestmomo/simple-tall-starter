<x-layouts.auth>
    <div class="flex flex-col gap-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ __('Forgot your password?') }}
            </h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Enter your email address to receive a password reset link.') }}
            </p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
            @csrf

            <x-forms.input-field
                name="email"
                :label="__('Email Address')"
                type="email"
                required
                autofocus
                autocomplete="email"
                placeholder="you@example.com"
            />

            <div>
                <button type="submit" class="w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-150">
                    {{ __('Email password reset link') }}
                </button>
            </div>
        </form>

        <div class="text-center text-sm">
            <span class="text-gray-600 dark:text-gray-400">{{ __('Or, return to') }}</span>
            <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150" wire:navigate>
                {{ __('log in') }}
            </a>
        </div>
    </div>
</x-layouts.auth>
