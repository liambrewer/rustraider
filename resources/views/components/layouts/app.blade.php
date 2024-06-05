<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.layouts.partials.head')
</head>
<body class="font-roboto bg-background text-text antialiased">
    <header class="bg-primary">
        <div class="container mx-auto h-12 flex items-center justify-between">
            <h1 class="text-2xl tracking-tight">
                <a wire:navigate href="{{ route('app.home') }}">Rust Raider</a>
            </h1>

            <div class="flex items-center gap-2">
                <img class="w-9 h-9 border-2 border-text rounded-full" src="{{ auth()->user()->avatar }}" alt="Steam Avatar">
                <span class="text-sm">
                    {{ auth()->user()->nickname }}
                </span>
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf

                    <button class="contents" type="submit">
                        <x-heroicon-o-arrow-right-start-on-rectangle class="w-6 h-6" />
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="container mx-auto my-10 space-y-10">
        {{ $slot }}
    </main>

    @include('components.layouts.partials.body')
</body>
</html>
