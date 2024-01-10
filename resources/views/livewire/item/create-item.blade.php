<div>
    <div x-cloak x-data="{ open: @entangle('modal') }">
        <button @click="open = ! open" class="bg-slate-400 px-4 py-1 text-sm rounded">Create item</button>
        <x-modal>
            <x-slot:title>Create item</x-slot>
            <form wire:submit.prevent='store' class="flex flex-col space-y-2">
                <label for="title">Title</label>
                <textarea name="title" wire:model='title' cols="30" rows="10"></textarea>
                @error('title') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" class="bg-slate-800 text-white">Send</button>
            </form>
        </x-modal>
    </div>
</div>
