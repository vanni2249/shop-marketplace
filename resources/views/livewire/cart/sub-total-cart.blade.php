<div>
    @if ($cart)
        @if ($cart->products()->count())
            <section class="bg-white p-4 space-y-4 md:rounded-xl shadow lg:mb-4">
                <ul class="space-y-4 divide-y divide-dotted ">
                    <li class="flex justify-between">
                        <span class=" font-semibold">Sub-total</span>
                        <span>{{$total}}</span>    
                    </li> 
                </ul>
                <a href="{{ route('shop.checkout') }}" class="px-2 py-2 bg-yellow-400 w-full rounded block text-center text-sm font-semibold">Proceed to checkout</a>

            </section> 
                
        @endif
                
    @endif
</div>
