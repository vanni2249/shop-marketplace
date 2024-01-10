<div>

    <div x-cloak x-data="{ open: @entangle('modal') }">
        <x-button.primary @click="open = ! open">Create attribute</x-button.primary>
        {{-- <button @ class="bg-slate-400 px-4 text-sm rounded">Create attribute</button> --}}
        <x-modal>
            <x-slot:title>Create attribute</x-slot>
            <form wire:submit.prevent='store' class="flex flex-col space-y-2">
                <input type="text" wire:model='name'>
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" class="bg-slate-800 text-white">Enviar</button>
            </form>
        </x-modal>
    </div>
</div>
