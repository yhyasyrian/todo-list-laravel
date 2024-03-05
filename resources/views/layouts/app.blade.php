<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="shortcut icon" href="{{asset('images/todo-list.svg')}}" type="image/x-icon">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    @include('layouts.navigation')
        <div class="min-h-screen-with-header bg-gray-100 dark:bg-gray-900">
            {{-- for fix bug header, if i use ::before in body, i will create bug in margin top agin ! --}}
            <div class="w-full h-[64px]"></div>
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @if(session()->has('success'))
                    <x-alert :message="session()->get('success')" class="container px-4 mx-auto mt-8 bg-green-700" />
                @endif
                {{ $slot }}
            </main>
        </div>
    @include('layouts.footer')
    </body>
</html>
