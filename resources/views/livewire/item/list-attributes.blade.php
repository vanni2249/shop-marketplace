<div>
    <div class="">
        <div class="grid grid-cols-4 gap-4">
            @forelse ($item->attributes as $attribute)
                
                <div class="bg-white rounded shadow p-4 space-y-6">
                    <header class="flex flex-row justify-between relative">
                        <span>{{$attribute->name}}</span>
                        @if (!$item->products()->count())
                            @livewire('item.create-option', ['item' => $item , 'attribute' => $attribute], key($attribute->id))
                            
                        @endif
                    </header>
                    <div class="flex flex-col space-y-2">
                        @livewire('item.list-options',['item' => $item, 'attribute' => $attribute], key($attribute->id))

                    </div>
                </div>
                
            @empty
                <h2>No attributes</h2>
            @endforelse
        </div>
    </div>
</div>
