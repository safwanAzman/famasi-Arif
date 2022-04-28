<!doctype html>
<html>
    <head>
        <title>Farmasi Al-arif</title>
        <link rel="icon" href="{{ asset('img/logo.png') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- animation -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @livewireStyles

    </head>
    <body>
        <main class="relative overflow-auto h-screen">
            <div class="px-2 mt-2 mb-20">
                @include('layouts.menu.topbar')
                @yield('content')
            </div>
        </main>

        <footer class="fixed bottom-0 p-2 bg-yellow-600  w-full flex justify-center z-20">
            <div class="text-white text-sm font-semibold">
                &copy; {{ date('Y') }} - Creative System Consultant Sdn. Bhd.
            </div>

        </footer>

        @livewireScripts
    </body>
</html>