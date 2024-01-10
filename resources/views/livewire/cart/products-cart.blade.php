<div>
    @if ($cart)
        <div class="bg-white space-y-2 divide-y divide-dotted divide-slate-200 md:rounded-xl shadow">
            @forelse ($cart->products as $product)
                <div class="p-2 md:p-4">
                    <article class="flex flex-row space-x-2">
                        <section class="w-1/3 lg:w-1/4 flex-none">
                            <img src="{{$product->item->image()->url}}" alt="" class="object-contain w-full">
                            
                        </section>
                        <section class="space-y-2">
                            <section>
                                <ul class="flex flex-col md:flex-row">
                                    <li class="w-full md:w-3/4">
                                        <p class="line-clamp-2 text-[14px] font-semibold">
                                            {{$product->item->title}}
                                        </p>
                                    </li>
                                    <li class="grow text-left md:text-right">
                                        <ul>
                                            <li>{{ $product->price * $product->pivot->quantity}}</li>
                                            <li class="text-xs">+2.50 shipping</li>
                                        </ul>
                                    </li>
                                </ul>
                            </section>
                            <section>
                                <ul class="flex flex-col space-y-2">
                                    <li class="text-xs">Price per unit: {{$product->price}}</li>
                                    <li class="text-xs">Available: {{$product->avalible()}}</li>
                                    @if ($product->options == !null)
                                        <li class="text-xs">Options</li>
                                        <li class="text-xs">
                                            @foreach ($product->options as $key => $option)
                                                <span>{{$key}} : </span>
                                                <span>{{$option}}</span>

                                            @endforeach
                                        </li>
                                    @endif
                                    <li>
                                        <section class="flex flex-row space-x-2 items-center">
                                            <span class="bg-slate-100 rounded-full p-1 shadow cursor-pointer " wire:click='less_quantity({{$product->id}})'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                            <span>{{$product->pivot->quantity}}</span>
                                            <span class="bg-slate-100 rounded-full p-1 shadow cursor-pointer" wire:click='add_quantity({{$product->id}})'>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </section>
                                    </li>
                                    <li class="text-xs">
                                        Shipped from Puerto Rico
                                    </li>
                                    <li>
                                        <section class="flex flex-row space-x-2">
                                            <livewire:cart.remove-product-cart :cart=$cart :product=$product :wire:key="'product-delete'.$product->id">
                                            <livewire:cart.move-product-from-cart-to-save-to-later :cart=$cart :product=$product :wire:key="'product-move'.$product->id">
                                            {{-- @livewire('cart.remove-product-cart',['cart' => $cart, 'product' => $product], key($product->id)) --}}
                                            {{-- @livewire('cart.move-product-from-cart-to-save-to-later',['cart' => $cart, 'product' => $product], key($product->id)) --}}
                                        </section>
                                    </li>
                                </ul>
                            </section>
                        </section>
                    </article>
                </div>
            @empty   

            <div class="p-4 bg-slate-200 text-sm font-semibold md:rounded-xl">
                EMPTY CART
            </div>

            @endforelse
            
        </div>
    @else
    <div class="p-4 bg-slate-200 text-sm font-semibold md:rounded-xl">
        EMPTY CART
    </div>
    @endif
</div>
