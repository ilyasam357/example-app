<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/build/assets/js/popup.js') }}">
    <!-- Styles -->

    @vite('resources/css/app.css')
    <title>laravel-blade | @yield('title')</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->

        @vite('resources/css/app.css')
        <title>Santri26 | @yield('title')</title>
    </head>

    <body>
        {{-- header --}}
        <header class="bg-green-600 flex px-8 py-5 justify-between text-white items-center sticky top-0">
            <a href="/quran" class="font-bold text-3xl">SANTRI26</a>

            <nav class="hidden w-full md:block md:w-auto">

                <ul class="flex gap-5 text-xl ">
                    <li>
                        <a href="/quran">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>

        @yield('content')
    </body>

    </html>
