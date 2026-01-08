<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=albert-sans:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    </head>
    <body class="w-screen h-screen flex max-lg:flex-col">
        <!-- Nav Mobile -->
        <nav class="flex items-center justify-between h-13 p-4 lg:hidden">
            <x-mobile-nav-toggle/>
            <x-avatar :name="auth()->user()->name" :avatar="'https://ui-avatars.com/api/?name='.auth()->user()->name"/>
        </nav>

        <!-- Nav desktop -->
        <nav class="hidden lg:flex bg-neutral-50 w-[242px] h-full p-3.5  flex-col">
            <!-- Logo -->
            <div class="flex items-center gap-x-2 h-13 mb-13">
                <x-logo />
                <p class="font-light">Focus <span class="font-medium">Board</span></p>
            </div>

            <!-- Navigation -->
            <div class="space-y-2 flex-1">
                <x-nav-item :href="route('board.index')" :active="request()->routeIs('board.*')">
                    <x-slot:icon>
                        <x-lucide-folder class="size-5"/>
                    </x-slot:icon>
                    Projet
                </x-nav-item>
                <x-nav-item href="/dashboard">
                    Notifications
                </x-nav-item>
            </div>
            <!-- Footer -->
            <div class="space-y-2">
                <x-nav-item href="#">
                    <x-slot:icon>
                        <x-lucide-cog class="size-5"/>
                    </x-slot:icon>
                    Parametre
                </x-nav-item>
                <x-user-menu :name="auth()->user()->name" :avatar="'https://ui-avatars.com/api/?name='.auth()->user()->name"/>
            </div>
        </nav>
        <main class="flex-1 h-full">{{ $slot }}</main>
    </body>
</html>
