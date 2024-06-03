<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.layouts.partials.head')
</head>
<body class="font-roboto bg-background text-text antialiased">
    <header class="">
        <div class="flex container mx-auto h-24 items-center justify-between">
            <h1 class="text-3xl tracking-tight">Rust Raider</h1>

            <a class="bg-primary px-4 py-2 rounded" href="{{ route('auth.steam.redirect') }}">Login with Steam</a>
        </div>
    </header>

    {{ $slot }}

    @include('components.layouts.partials.body')
</body>
</html>
