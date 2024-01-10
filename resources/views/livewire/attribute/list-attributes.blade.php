<div>
    <ul class="grid grid-cols-1 gap-2">
        @foreach ($attributes as $attribute)
            <li class="flex flex-row justify-between items-center bg-white p-2 rounded shadow">
                <span class=" capitalize text-sm ">
                    {{$attribute->name}}

                </span>
                <div>
                    <x-button.primary>
                        Edit
                    </x-button.primary>
                    <x-button.white wire:click='warning_destroy({{$attribute->id}})'>
                        Remove
                    </x-button.white>
                </div>
            </li>
            
        @endforeach
    </ul>
    <div x-cloak x-data="{ open: @entangle('modal') }">
        {{-- <button @click="open = ! open" class="bg-slate-400 px-4 text-sm rounded">Remove attribute</button> --}}
        <x-modal>
            <x-slot:title>Remove attattribute</x-slot>
            <h2>you want to delete the attribute <span class="text-red-400">{{$attribute_name}}</span> </h2>
            <button wire:click='destroy({{$attribute_id}})'>Yes</button>
            <button wire:click='cancel_destroy'>Cancel</button>
        </x-modal>
    </div>
</div>

