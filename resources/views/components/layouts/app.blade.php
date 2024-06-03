<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.layouts.partials.head')
</head>
<body class="font-roboto bg-background text-text antialiased">
    <header class="bg-primary h-12 flex items-center justify-between px-2">
        <h1 class="text-2xl tracking-tight">
            <a href="{{ route('app.index') }}">Rust Raider</a>
        </h1>

        <div class="flex items-center gap-2">
            <img class="w-9 h-9 border-2 border-text rounded-full" src="{{ auth()->user()->avatar }}" alt="Steam Avatar">
            <span>
                {{ auth()->user()->nickname }}
            </span>
            <form action="{{ route('auth.logout') }}" method="POST">
                @csrf

                <button type="submit">Logout</button>
            </form>
        </div>
    </header>

    {{ $slot }}

    @include('components.layouts.partials.body')
</body>
</html>
