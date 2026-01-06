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
    <body class="w-screen min-h-screen bg-neutral-50 flex items-center justify-center">
        {{ $slot }}
    </body>
</html>
