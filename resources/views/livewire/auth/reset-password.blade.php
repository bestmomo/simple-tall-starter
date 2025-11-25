<x-layouts.auth>
    <div class="flex flex-col gap-8">
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ __('Reset Password') }}
            </h1>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Please enter your new password below.') }}
            </p>
        </div>

        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('password.update') }}" class="space-y-6">
            @csrf

            <input type="hidden" name="token" value="{{ request()->route('token') }}">

            <x-forms.input-field
                name="email"
                :label="__('Email')"
                :value="request('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="you@example.com"
            />

            <x-forms.input-field
                name="password"
                :label="__('New Password')"
                type="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <x-forms.input-field
                name="password_confirmation"
                :label="__('Confirm New Password')"
                type="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
            />

            <div>
                <button type="submit" class="w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition-colors duration-150" data-test="reset-password-button">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</x-layouts.auth>
