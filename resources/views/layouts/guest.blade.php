<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxStyles
    </head>
    <body
        class="font-sans antialiased
            {{-- text-gray-900 dark:text-gray-100 --}}
            {{-- bg-gray-50 dark:bg-gray-900 --}}
            bg-gray-50 text-black/50
            dark:bg-black dark:text-white/50
            h-full">
        <flux:header container class="">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
            <flux:brand
                href="{{ route('homepage') }}"
                wire:navigate
                name="A!"
                logo="{{ asset('assets/altron.png') }}"
                class="max-lg:hidden" />

            <flux:spacer />
            <livewire:welcome.navigation />
        </flux:header>
        <flux:main>
            <main class="">
                {{ $slot }}
            </main>
        </flux:main>
        <flux:spacer />
        <flux:footer class="text-center text-sm text-black dark:text-white/70">
            Altron {{ date('Y') }}
        </flux:footer>
        <x-dimensions />
        @fluxScripts
    </body>
</html>
