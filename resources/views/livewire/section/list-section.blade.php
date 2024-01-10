<div class="bg-slate-100 p-4 rounded shadow-inner">
    <ul class="space-y-2">
        @foreach ($items as $item)
            <li class="bg-white rounded p-2 shadow hover:shadow-md">
                <div class="flex flex-row justify-between">
                    <span>
                        {{$item->name}}

                    </span>
                    <span>
                        <span wire:click='edit({{$item->id}})'>Update</span>
                        <span wire:click='delete({{$item->id}})' :wire:key="$item->id">Remove</span>

                    </span>
                </div>
            </li>
        @endforeach
    </ul>
    <div x-cloak x-data="{ open: @entangle('updateModal') }">
        <x-modal>
            <x-slot:title>Update section</x-slot>
            <form wire:submit.prevent='update({{$section}})' class="flex flex-col space-y-2">
                <input type="text" wire:model='name'>
                @error('name') <span class="error">{{ $message }}</span> @enderror
                <button type="submit">Update</button>
            </form>
        </x-modal>
    </div>
    <div x-cloak x-data="{ open: @entangle('removeModal') }">
        <x-modal>
            <x-slot:title>Remove section</x-slot>
            <form wire:submit.prevent='remove({{$section}})' class="flex flex-col space-y-2">
                {{$this->name}}
                <button type="submit">Remove</button>
            </form>
        </x-modal>
    </div>
</div>
