<x-layouts.auth>
    <div class="flex flex-col gap-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ __('Create your account') }}
            </h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Enter your details below to get started.') }}
            </p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
            @csrf

            <x-forms.input-field
                name="name"
                :label="__('Full Name')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                placeholder="John Doe"
            />

            <x-forms.input-field
                name="email"
                :label="__('Email Address')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="you@example.com"
            />

            <x-forms.input-field
                name="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <x-forms.input-field
                name="password_confirmation"
                :label="__('Confirm Password')"
                type="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <div>
                <button type="submit" class="w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-150">
                    {{ __('Create account') }}
                </button>
            </div>
        </form>

        <div class="text-center text-sm">
            <span class="text-gray-600 dark:text-gray-400">{{ __('Already have an account?') }}</span>
            <a href="{{ route('login') }}" class="font-semibold text-indigo-600 hover:text-indigo-500 dark:text-indigo-400 dark:hover:text-indigo-300 transition-colors duration-150" wire:navigate>
                {{ __('Log in') }}
            </a>
        </div>
    </div>
</x-layouts.auth>
