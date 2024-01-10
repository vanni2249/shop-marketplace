@extends('layouts.shop.app')

@section('content')

<div class="container grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 md:gap-4 py-4 px-2 md:px-0">
    <header class="col-span-4 md:col-span-8 lg:col-span-12 px-2">
        <h1 class="flex flex-row space-x-2">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
            </span>
            <span class=" font-semibold">
                Checkouts
            </span>
        </h1>
    </header>
    <section class="col-span-4 md:col-span-8 lg:order-last lg:col-span-3 text-sm">
        <section class="bg-white md:rounded-xl shadow p-4 space-y-4">
            <p class="text-sm font-bold">By placing the order, you accept the Privacy policy and Term of use.</p>
            @livewire('order.create-order')
            <ul class="space-y-4 divide-y divide-dotted ">
                <li class="flex justify-between">
                    <div>Items</div>
                    <div>4</div>    
                </li>
                <li class="flex justify-between">
                    <div>Sub total</div>
                    <div>$34.50</div>    
                </li>
                <li class="flex justify-between">
                    <div>Shipping</div>
                    <div>$4.50</div>    
                </li>
                <li class="flex justify-between">
                    <div>City tax</div>
                    <div>$1.00</div>    
                </li>
                <li class="flex justify-between">
                    <div>State tax</div>
                    <div>$4.00</div>    
                </li>
                <li class="flex justify-between font-bold">
                    <div>Total</div>
                    <div>$44.00</div>    
                </li>
            </ul>

        </section>
    </section>
    <section class="bg-white md:rounded-xl shadow p-4 col-span-4 md:col-span-8 lg:col-span-9">
        <section class="grid grid-cols-3 gap-4 space-y-2 md:space-y-0 pb-6 border-b">
            <h1 class="col-span-3 md:col-span-1 md:border-r text-sm font-semibold">Shipping address</h1>
            <ul class="col-span-3  md:col-span-2 text-sm">
                <li>Geovanni Colon Barrios</li>
                <li>2818 N IH 35 #11103</li>
                <li>San Antonio, TX 78208</li>
                <li class="mt-4">
                    <a href="#" class="text-xs text-blue-400 ">Change shipping address</a>
                </li>
            </ul>
        </section>
        <section class="grid grid-cols-3 gap-4 space-y-2 md:space-y-0 py-6 border-b">
            <h1 class="col-span-3 md:col-span-1 md:border-r text-sm font-semibold">Payment method</h1>
            <ul class="col-span-3  md:col-span-2 text-sm">
                <li class="flex flex-row items-center space-x-2">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                    </span>
                    <span>
                        Visa ending in 4927
                    </span>
                   
                </li>
                <li>Billing address: Same as shipping address</li>
                <li>2818 N IH 35 #11103</li>
                <li>San Antonio, TX 78208</li>
                <li class="mt-4">
                    <a href="#" class="text-xs text-blue-400 ">Change payment method</a>
                </li>
            </ul>
        </section>
        <section class="grid grid-cols-3 gap-4 space-y-2 md:space-y-0 py-6">
            <h1 class="col-span-3 md:col-span-1 md:border-r text-sm font-semibold">Review items and shipping</h1>
            <ul class="col-span-3  md:col-span-2 flex flex-col space-y-4">
                @foreach ($cart->products as $product)
                    <li class="flex flex-row space-x-2">
                        <section class="flex-none w-1/3">
                            <img src="{{$product->item->image()->url}}" alt="" class="object-contain w-full">
                        </section>
                        <ul class="w-1/2 space-y-1 text-xs">
                            <li class="text-sm font-semibold truncate">
                                {{$product->item->title}}
                            </li>
                            <li>Price: <span class="font-semibold">{{$product->price}}</span> </li>
                            <li>Qty: <span class="font-semibold">{{$product->pivot->quantity}}</span></li>
                            <li>Shipping: <span class="font-semibold">$2.50</span></li>
                            <li>Total: <span class=" font-semibold">$52.50</span> </li>
                        </ul>
                    </li>
                    
                @endforeach
               
            </ul>
        </section> 
        <section class="grid grid-cols-1 gap-4 space-y-2 md:space-y-0 pt-6">
            <a href="{{ route('shop.cart')}}" class="bg-slate-100 rounded py-2 text-xs text-center font-semibold">Return to shopping cart</a>
        </section>  
    </section> 
</div>
@endsection