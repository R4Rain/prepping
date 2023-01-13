<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/storage/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/storage/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/storage/assets/favicon-16x16.png">
    <link rel="manifest" href="/storage/assets/site.webmanifest">

    <title>{{ $title }}</title>

    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <div id="app">
        {{-- <x-alert></x-alert> --}}
        <x-navbar></x-navbar>

        <main>
            {{ $slot }}
        </main>
    </div>

    @if (!auth()->check())
        <x-login></x-login>
        <x-register></x-register>
    @endif
</body>

</html>
