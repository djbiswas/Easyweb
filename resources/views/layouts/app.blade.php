<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ \App\Models\Setting::getValue('site_name', 'My Website') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ \App\Models\Setting::getValue('logo')['light'] ?? '/images/logo.png' }}" height="30" alt="Logo">
            {{ \App\Models\Setting::getValue('site_name', 'My Website') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        @php
            $menu = \App\Models\Menu::where('name', 'main_menu')->first();
        @endphp

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if($menu && is_array($menu->items))
                    @foreach($menu->items as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ $item['url'] }}">{{ $item['label'] }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container">
    @yield('content')
</div>

<!-- Footer -->
<footer class="bg-light py-4 mt-5">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} {{ \App\Models\Setting::getValue('site_name', 'My Website') }}</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
