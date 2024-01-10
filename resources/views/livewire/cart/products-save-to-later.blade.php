<div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-2 md:mx-0">
        @foreach ($cart->products as $product)
        <x-items.vertical :item="$product->item">
            
            <div class="py-4 space-y-4 flex flex-col">
                <button class="w-full text-sm px-4 py-1 rounded bg-slate-600 text-white font-semibold">Add to cart</button>
                <button class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer text-left">Remove</button>
                <button class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer text-left">Move to wish list</button>
            </div>
        
        </x-items.vertical>
        @endforeach

    </div>


</div>
