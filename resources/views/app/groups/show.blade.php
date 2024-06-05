<x-layouts.app>
    <div class="space-y-1">
        <a wire:navigate class="text-blue-500 hover:underline" href="{{ route('app.home') }}">Back</a>
        <x-page-title>{{ $group->name }}</x-page-title>
    </div>

    <div class="grid grid-cols-3 gap-5">
        <x-page-section class="col-span-2 h-min">
            <x-slot:title>
                Raids
            </x-slot:title>
            <x-slot:actions>
                <a wire:navigate href="/" class="btn-primary">
                    Create Raid
                </a>
            </x-slot:actions>
        </x-page-section>
        <x-page-section class="h-min">
            <x-slot:title>
                Members
            </x-slot:title>
            <x-slot:actions>
                <a wire:navigate href="/" class="btn-primary">
                    Invite Member
                </a>
            </x-slot:actions>

            <ul class="flex flex-col gap-3">
                @foreach($group->members as $user)
                    <li class="flex items-center gap-4 p-4 bg-background rounded-xl">
                        <img class="w-12 h-12 rounded-full" src="{{ $user->avatar }}" alt="{{ $user->nickname }}'s Avatar">
                        <div class="flex flex-col leading-tight">
                            <span>{{ $user->nickname }}</span>
                            <span class="text-sm text-text/60">{{ $user->membership->role }}</span>
                        </div>
                        <div class="flex items-center justify-end grow">
                            <button class="p-2 rounded-full hover:bg-paper duration-150">
                                <x-heroicon-o-ellipsis-vertical class="w-6 h-6" />
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </x-page-section>
    </div>
</x-layouts.app>
