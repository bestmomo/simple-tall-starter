<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="min-h-screen bg-gray-100 antialiased dark:bg-gray-900">
<div class="flex min-h-svh flex-col items-center justify-center p-6 sm:p-10">
    <div class="w-full max-w-md bg-white p-8 sm:p-10 rounded-xl shadow-2xl dark:bg-gray-800 transition-shadow duration-300">

        <div class="flex flex-col items-center mb-8">
            <a href="{{ route('home') }}" class="flex flex-col items-center gap-2 font-medium" wire:navigate>
                        <span class="flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600/10">
                            <x-app-logo-icon class="size-6 fill-current text-indigo-600 dark:text-indigo-400" />
                        </span>
                <span class="sr-only">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>

        {{ $slot }}

    </div>
</div>
</body>
</html>
