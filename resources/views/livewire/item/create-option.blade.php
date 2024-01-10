<div>
    <div x-cloak x-data="{ open: false }" class="">
        <button @click="open = ! open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
     
        <div x-show="open" @click.outside="open = false" class="bg-white shadow-xl border rounded p-4 absolute right-0 ">
            {{-- {{$attribute->name}} --}}
            {{-- {{$item->id}} --}}
            {{$attribute->id}}
            <form wire:submit.prevent="store" class="flex flex-col space-y-2">
                <input type="text" name="value" wire:model="value" class="w-full">
                @error('value') <span class="error">{{ $message }}</span> @enderror
                <button type="submit" class="bg-slate-200 p-1 rounded">Send</button>
            </form>
        </div>
    </div>
    
      
</div>
