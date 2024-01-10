<div>
    <div x-cloak x-data="{ open: @entangle('modal') }">
        <x-button.primary @click="open = ! open">Create category</x-button.primary>
        <x-modal>
            <x-slot:title>Create category</x-slot>
            <form wire:submit.prevent='store' class="flex flex-col space-y-2">
                <label for="section"></label>
                <select name="section" wire:model="section">
                    <option value="">Choose</option>
                    @foreach ($sections as $section)
                        <option value="{{$section->id}}">{{$section->name}}</option>
                    @endforeach
                </select>
                @error('section') <span class="error">{{ $message }}</span> @enderror
                <input type="text" wire:model='name'>
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" class="bg-slate-800 text-white">Enviar</button>
            </form>
        </x-modal>
    </div>
</div>
