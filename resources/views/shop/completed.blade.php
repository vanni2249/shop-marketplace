@extends('layouts.shop.app')

@section('content')
<div class="container grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 md:gap-4 py-4 md:px-4">
    <header class="col-span-4 md:col-span-8 lg:col-span-12">
        <section class="flex flex-row items-center space-x-2">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
            </div>
            <div class="flex flex-col">
                <h1 class="font-semibold">Order placed, thank you...</h1>
                <span class="text-xs text-slate-500">Confirmation will be sent to your email.</span>
            </div>
        </section>
    </header>
    <section class="col-span-4 md:col-span-2 md:order-last lg:col-span-3 text-sm gap-4">
        <ul class="bg-white md:rounded-xl shadow p-4 space-y-4 divide-y divide-dotted ">
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
    <section class="bg-white md:rounded-xl shadow p-4 col-span-4 md:col-span-6 lg:col-span-9">
        <section class="grid grid-cols-3 gap-4 space-y-2 md:space-y-0 pb-6 border-b">
            <h2 class="col-span-3 md:col-span-1 md:border-r text-sm font-semibold">Shipping address</h2>
            <ul class="col-span-3  md:col-span-2 text-sm">
                <li>Geovanni Colon Barrios</li>
                <li>2818 N IH 35 #11103</li>
                <li>San Antonio, TX 78208</li>
            </ul>
        </section>
        <section class="grid grid-cols-3 gap-4 space-y-2 md:space-y-0 py-6">
            <h1 class="col-span-3 md:col-span-1 md:border-r text-sm font-semibold">Review items and shipping</h1>
            <ul class="col-span-3  md:col-span-2 flex flex-col space-y-4">
                {{-- {{$order->cart}} --}}
                @foreach ($order->sales()->get() as $sale)
                    <li class="flex flex-row space-x-2">
                        <section class="flex-none w-1/3">
                            <img src="{{$sale->product->item->image()->url}}" alt="" class="object-contain w-full">
                        </section>
                        <ul class="w-1/2 space-y-1 text-xs">
                            <li class="text-sm font-semibold truncate">
                                {{$sale->product->item->title}}
                            </li>
                            <li>Price: <span class="font-semibold">{{$sale->price}}</span> </li>
                            <li>Qty: <span class="font-semibold">{{$sale->quantity}}</span></li>
                            <li>Shipping: <span class="font-semibold">$2.50</span></li>
                            <li>Total: <span class=" font-semibold">$52.50</span> </li>
                        </ul>
                    </li>
                    
                @endforeach
               
            </ul>
        </section> 
        <section class="grid grid-cols-1 gap-4 space-y-2 md:space-y-0 pt-6">
            <a href="/" class="bg-slate-100 rounded py-2 text-sm text-center font-semibold">Return to shopping</a>
        </section>  
    </section> 
</div>
@endsection