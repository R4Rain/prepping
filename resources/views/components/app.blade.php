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
        <main class="position-relative">
            {{ $slot }}

            @if(Session::has('success'))
                <div id="toast-alert" class="toast align-items-center text-white bg-success border-0 rounded-3 mb-4 ms-4 fixed-bottom" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                    <div class="d-flex">
                        <div class="toast-body text-center">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ Session::get('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @elseif(Session::has('error'))
                <div id="toast-alert" class="toast align-items-center text-white bg-danger border-0 rounded-3 mb-4 ms-4 fixed-bottom" role="alert" aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                    <div class="d-flex">
                        <div class="toast-body text-center">
                            <i class="bi bi-exclamation-circle-fill me-2"></i> {{ Session::get('error') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </main>
    </div>

    @if (!auth()->check())
        <x-login></x-login>
        <x-register></x-register>
    @endif
</body>
<script>
    let alert = document.getElementById('toast-alert')
    alert = new bootstrap.Toast(alert)
    alert.show()
</script>
</html>
