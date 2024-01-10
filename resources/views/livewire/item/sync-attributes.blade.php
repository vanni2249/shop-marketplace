<div>
    @if (!$item->products()->count())
    <div x-cloak x-data="{ open: @entangle('modal') }">
        <button @click="open = ! open" class="bg-slate-400 px-4 text-sm rounded">Add attributes</button>
        <x-modal>
            <x-slot:title>Add attributes</x-slot>
            <form wire:submit.prevent='store' class="flex flex-col space-y-2">
                @foreach ($attributes as $attribute)
                    <div class="flex flex-row items-center space-x-2">
                        <input type="checkbox" name="attribute" wire:model="data" value="{{$attribute->id}}">
                        <span>{{$attribute->name}}</span>

                    </div>
                @endforeach
            </form>
        </x-modal>
    </div>
        
    @endif
</div>
