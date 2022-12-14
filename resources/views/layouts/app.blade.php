<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            @if (session()->has('message'))
                <div class="bg-green-400 text-white p-2">
                    <x-container>
                        {{session()->get('message')}}
                    </x-container>
                </div>
            @endif
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white border-b border-gray-300">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="pt-6">
                {{ $slot }}
            </main>

            {{-- footer --}}
            @include('layouts.footer')
        </div>
    </body>
</html>
