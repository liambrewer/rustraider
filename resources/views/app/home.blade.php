<x-layouts.app>
    <x-page-title>Welcome, {{ auth()->user()->nickname }}.</x-page-title>

    <x-page-section>
        <x-slot:title>
            My Groups
        </x-slot:title>
        <x-slot:actions>
            <a wire:navigate class="px-4 py-2 text-sm font-semibold rounded hover:bg-text/5 duration-150" href="{{ route('app.groups.create') }}">Create Group</a>
            <a wire:navigate class="px-4 py-2 text-sm font-semibold bg-primary rounded" href="{{ route('app.groups.create') }}">Join Group</a>
        </x-slot:actions>

        <ul class="grid grid-cols-3 gap-3">
            @foreach($groups as $group)
                <li class="contents">
                    <a wire:navigate class="flex flex-col p-3 rounded-xl bg-background min-h-36" href="{{ route('app.groups.show', $group->id) }}">
                        <h4 class="text-xl font-semibold">{{ $group->name }}</h4>
                        <span class="text-sm">{{ $group->membership->role }}</span>

                        <div class="grow"></div>

                        <ul class="flex">
                            @foreach($group->members as $user)
                                <li class="group contents">
                                    <img class="h-10 w-10 flex-shrink-0 -ml-2 group-first:ml-0 rounded-full border-2 border-background" src="{{ $user->avatar }}" alt="{{ $user->nickname }}'s Avatar">
                                </li>
                            @endforeach
                        </ul>
                    </a>
                </li>
            @endforeach
            <li class="contents">
                <a wire:navigate class="flex items-center justify-center gap-2 p-3 border-2 border-text border-dashed h-full rounded-xl text-sm min-h-36" href="{{ route('app.groups.create') }}">
                    <x-heroicon-m-plus class="h-5 w-5" />
                    Create Group
                </a>
            </li>
        </ul>
    </x-page-section>
</x-layouts.app>
