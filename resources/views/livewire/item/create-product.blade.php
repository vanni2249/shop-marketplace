<div>
    <div x-cloak x-data="{ open: @entangle('modal') }">
        @if ($create_button)
            <button @click="open = ! open" class="bg-slate-400 px-4 py-1 text-sm rounded">Create product</button>   
            
        @endif
        <x-modal>
            <x-slot:title>Create product</x-slot>
            <form wire:submit.prevent='store' class="flex flex-col space-y-2">
                <label for="sku" class="flex flex-col">
                    <span>Sku</span>
                    <input type="text" wire:model='sku' class="bg-slate-100 w-100 rounded">
                    
                    @error('sku') <span class="error">{{ $message }}</span> @enderror
                </label>
                @if ($item->attributes->count())

                    @error('options') <span class="error">{{ $message }}</span> @enderror

                    @foreach ($item->attributes as $attribute)
                        {{$attribute->name}}
                        <select wire:model="options.{{$attribute->name}}" id="">
                            <option value="">Choose</option>
                            @foreach ($attribute->options()->where('item_id',$item->id)->get() as $option)
                                <option value="{{$option->value}}">{{$option->value}}</option>
                            @endforeach
                        </select>
                        @error('options.'.$attribute->name.'') {{ $message }} @enderror
                    @endforeach
                @else
                    no tiene
                @endif
                
                <button type="submit" class="bg-slate-200">Save</button>

            </form>
        </x-modal>
    </div>
</div>
