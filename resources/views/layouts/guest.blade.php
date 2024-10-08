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
            {{-- h-full --}}
            ">
        <flux:header container class="!block bg-white lg:bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            <flux:brand
                href="{{ route('homepage') }}"
                wire:navigate
                logo="{{ asset('assets/altron.png') }}"
                name="!"
                class=" text-2xl text-orange-600 font-bold">
            </flux:brand>

            <flux:spacer />

            <flux:navbar.item>

                <div
                    x-data="{
                        toggleDarkMode() {
                            document.documentElement.classList.toggle('dark');
                            localStorage.dark = !JSON.parse(localStorage.dark);
                        },
                        initMode(defaultMode = 'dark') {
                            if (localStorage.getItem('dark')) {
                                if(localStorage.dark === 'true') {
                                    document.documentElement.classList.add('dark');
                                    localStorage.dark = true;
                                    return;
                                }
                                document.documentElement.classList.remove('dark');
                                localStorage.dark = false;
                                return;
                            }
                            localStorage.dark = defaultMode === 'dark';
                            if(defaultMode !== 'dark') {
                                document.documentElement.classList.remove('dark');
                            }
                        },
                        initSetup(defaultMode = 'dark') {
                            this.initMode(defaultMode);
                        }
                    }"
                    x-init="initSetup()"
                    x-on:toggle-dark-mode="toggleDarkMode()"
                    >
                    <flux:icon.moon x-on:click="$dispatch('toggle-dark-mode')" variant="solid"/>
                </div>

            </flux:navbar.item>
            <flux:navbar.item href="{{ route('login') }}" wire:navigate>Login</flux:navbar.item>
            <flux:navbar.item href="{{ route('register') }}" wire:navigate>Register</flux:navbar.item>
        </flux:header>

        <flux:main container>
            <flux:card class="p-3 mb-3">
                {{ $slot }}
            </flux:card>

        </flux:main>
        <flux:footer class="text-center text-sm text-black dark:text-white/70">
            Altron {{ date('Y') }}
        </flux:footer>
        <x-dimensions />
        @fluxScripts
    </body>
</html>
