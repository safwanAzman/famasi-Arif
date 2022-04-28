<!doctype html>
<html>
    <head>
        <title>Farmasi Al-arif</title>
        <link rel="icon" href="{{ asset('img/logo.png') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles

    </head>
    <body>

        <main class="relative">
            @include('layouts.menu.topbar')
            <div class="container mx-auto px-4 sm:px-6 mt-8 ">
                @yield('content')
            </div>
        </main>

        <footer class="absolute bottom-0 p-2 bg-yellow-600  w-full flex justify-center">
            <div class="text-white text-sm font-semibold">
                &copy; {{ date('Y') }} - Creative System Consultant Sdn. Bhd.
            </div>

        </footer>

        @livewireScripts
    </body>
</html>