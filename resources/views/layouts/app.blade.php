<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KDR-GPS') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased bg-light">
    <x-jet-banner />
    @livewire('navigation-menu')

    <!-- Page Heading -->
    <!-- <header class="d-flex py-2 px-4 shadow-sm border-bottom">
        <div class="theme-container">
            {{ $header }}
        </div>
    </header> -->

    <!-- Page Content -->
    <main class="theme-container my-4 px-4">
        {{ $slot }}
    </main>

    @stack('modals')

    @livewireScripts

    @stack('scripts')
</body>

</html>