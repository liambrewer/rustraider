<form class="flex flex-col gap-5" wire:submit="save">
    <label class="flex flex-col gap-0.5">
        <span class="text-sm font-semibold">Name</span>
        <input wire:model="form.name" class="bg-background border border-text/10 outline-none px-3 py-1.5 rounded focus:ring-2 focus:ring-primary/50 focus:border-primary duration-150" type="text">
        @error('form.name')
            <p class="text-red-500 text-sm font-semibold">
                {{ $message }}
            </p>
        @enderror
    </label>

    <button class="bg-primary text-sm font-semibold px-4 py-2 rounded" type="submit">Create</button>
</form>
