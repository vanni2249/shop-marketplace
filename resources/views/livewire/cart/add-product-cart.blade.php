<div>
    {{-- <div class="bg-red-100 p-4 ">
        <h2>Data provisional</h2>
        <p>Producto selecionado {{$product->id}}</p>
        <p>Disponible {{$product->avalible()}}</p>
        <p>Cart {{$cart}}</p>
        <p>Quantity product in cart{{$quantity_product_in_cart}}</p>
        {{$test}}

    </div> --}}
    {{$test}}
    <div class="space-y-4">
        
        @if ($item->attributes()->count())
            <div class="flex flex-col space-y-2">
                {{-- ATTRIBUTES --}}
                @foreach ($item->attributes as $attribute)
                    <p class="text-xs font-bold uppercase text-slate-700">{{$attribute->name}} </p>
                    @foreach ($attribute->options()->where('item_id',$item->id)->get() as $option)

                        <label for="">
                            {{$option->value}}
                            <input type="radio" wire:model="options.{{$attribute->name}}" id="{{$option->value}}" value="{{$option->value}}">
                                
                        </label>

                    @endforeach

                @endforeach
            </div>
            
        @endif
        <div>    
            {{-- QUANTITY --}}
            <p class="text-xs font-semibold uppercase text-slate-600 mb-2">Quantity</p>
            <div class="flex flex-row space-x-4 items-center">
                <button class="bg-slate-200 rounded-full p-1" wire:click='less_quantity'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                    </svg>
                        
                </button>
                <div class="text-sm font-semibold">
                    {{$quantity}}

                </div>
                <button class="bg-slate-200 rounded-full p-1" wire:click='add_quantity'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                    </svg>
                        
                        
                </button>

            </div>
        </div>
        <div>
            {{-- PRICE --}}
            <p class="text-xl font-bold tracking-tight">{{$product->price}}</p>

        </div>
        <div>
            {{-- SHIPPING --}}
            <div class="flex flex-col">
                <p class="text-xs font-semibold uppercase text-slate-600 mb-2">Shipping</p>
                <div class="grid grid-cols-3 w-full divide-x divide-solid border-y text-xs font-semibold">
                    <div class="py-2">Destination</div>
                    <div class="p-2">Price</div>
                    <div class="p-2">Day</div>
                </div>
                <div class="grid grid-cols-3 border-b w-full divide-x divide-dashed text-xs font-light">
                    <div class="py-1">Puerto Rico</div>
                    <div class="p-1">$2.50</div>
                    <div class="p-1">1-2</div>
                </div>
                <div class="grid grid-cols-3 border-b w-full divide-x divide-dashed py- text-xs font-light">
                    <div class="py-1">EU</div>
                    <div class="p-1">$5.50</div>
                    <div class="p-1">3-6</div>
                </div>
                <div class="grid grid-cols-3 border-b w-full divide-x divide-dashed py- text-xs font-light">
                    <div class="py-1">Virgin Islan</div>
                    <div class="p-1">$10.50</div>
                    <div class="p-1">7-14</div>
                </div>
            </div>
        </div>
        <div>
            {{-- BUTTON --}}
            @auth
                @if($button)
                    <div class="space-y-2">
                        <button wire:click='add_product_cart' class="w-full block bg-yellow-400 p-2 rounded-md text-center">Add to cart</button>
                        <button class="w-full bg-orange-400 p-2 rounded-md ">Buy now</button>

                    </div>
                    
                @else
                    <div class="bg-red-500 text-white p-4 text-sm font-semibold">
                    {{ $message}}
                    </div>
                @endif    
                
            @endauth

            @guest
                <div class="space-y-2">
                    <a href="{{ route('login')}}" class="bg-slate-900 w-full block text-white text-center text-sm font-semibold py-2 rounded">Login</a>
                    <a href="{{ route('register')}}" class="bg-slate-200 w-full block text-slate-900 text-center text-sm font-semibold py-2 rounded">Register</a>
                </div>
            @endguest
        </div>
    </div>

</div>
