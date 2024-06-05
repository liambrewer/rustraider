@props(['title' => "Section", 'actions' => null])

<section {{ $attributes->class("p-5 pt-4 space-y-5 bg-paper rounded-2xl") }}>
    <div class="flex items-center justify-between">
        <h3 class="text-2xl font-semibold">{{ $title }}</h3>

        <div class="flex gap-1.5">
            {{ $actions }}
        </div>
    </div>

    {{ $slot }}
</section>
