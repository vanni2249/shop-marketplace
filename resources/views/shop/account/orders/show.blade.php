@extends('layouts.shop.app')

@section('content')
<div class="space-y-4 py-4">
    <header class="flex flex-row justify-between">
        <h1 class="text-xl px-2 md:px-0">Order</h1>

        <a href="#" class="bg-slate-900 block text-center py-1 px-4 text-xs text-slate-200 font-semibold rounded border border-slate-200">View invoice</a>
    </header>
    <div class="space-y-4">
        <div class="bg-white shadow md:rounded-xl">
            <div class="grid grid-cols-4 md:grid-cols-6 gap-4 p-2 md:p-4">
                <section class="col-span-4 md:col-span-2">
                    <h2 class="text-xs font-semibold">ORDER #</h2>
                    <ul class="py-4 text-sm text-slate-700">
                        <li>o100233</li>
                    </ul>
                </section>
                <section class="col-span-4 md:col-span-2">
                    <h2 class="text-xs font-semibold">ORDER PLACED</h2>
                    <ul class="py-4 text-sm text-slate-700">
                        <li>August 21, 2022</li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="bg-white shadow md:rounded-xl">
            <div class="grid grid-cols-4 md:grid-cols-6 gap-4 p-2 md:p-4">
                <section class="col-span-4 md:col-span-2">
                    <h2 class="text-sm font-semibold">Shipping Address</h2>
                    <ul class="py-4 text-sm text-slate-700">
                        <li>Geovanni Colon Barrios</li>
                        <li>2818 N IH 35 #11103</li>
                        <li>San Antonio, TX 78208</li>
                        <li>United States</li>
                    </ul>
                </section>
                <section class="col-span-4 md:col-span-2">
                    <h2 class="text-sm font-semibold">Payment Method</h2>
                    <ul class="py-4 text-sm text-slate-700">
                        <li>**** 4927</li>
                    </ul>
                </section>
                <section class="col-span-4 md:col-span-2">
                    <h2 class="text-sm font-semibold">Order Summary</h2>
                    <ul class="py-4 text-sm text-slate-700">
                        <li class="flex flex-row justify-between">
                            <div>Item(s) Subtotal:</div>
                            <div>$29.99</div>
                        </li>
                        <li class="flex flex-row justify-between">
                            <div>Shipping & Handling:</div>
                            <div>$0.00</div>
                        </li>
                        <li class="flex flex-row justify-between">
                            <div>Total before tax:</div>
                            <div>$29.99</div>
                        </li>
                        <li class="flex flex-row justify-between">
                            <div>Estimated tax to be collected:</div>
                            <div>$2.47</div>
                        </li>
                        <li class="flex flex-row justify-between py-4 font-semibold">
                            <div class="">Grand Total:</div>
                            <div>$32.46</div>
                        </li>
                    </ul>
                </section>

            </div>
        </div>
        <div class="bg-white shadow md:rounded-xl">
            <div class="divide-y">
                @foreach ($order->sales as $sale)
                    <section class="p-2 md:p-4 grid grid-cols-4 md:grid-cols-8 gap-2">
                        <div class="col-span-4 md:col-span-6 space-y-4">
                            <header>
                                <h2 class="text-slate-900 font-semibold">Delivered Jan 01, 2022</h2>
                                <p class="text-xs text-slate-600">Package was left inside the residence’s mailbox</p>
                            </header>
                            <div class="flex flex-row space-x-2">
                                <div class="col-span-1 md:col-span-2">
                                    <div class=" rounded w-36 h-36 md:w-40 md:h-40 lg:w-44 lg:h-44">
                                        <img src="{{$sale->product->item->image()->url}}" alt="" class="object-contain w-full h-full">

                                    </div>
                                </div>
                                <div class="col-span-2 md:col-span-6 space-y-2">
                                    <p class="line-clamp-2 text-sm font-semibold text-slate-900">
                                        {{$sale->product->item->title}}
                                    </p>
                                    <p class="text-xs text-slate-600">
                                        Return eligible through Sep 22, 2022
                                    </p>
                                    <p class=" font-semibold">{{$sale->price}}</p>
                                    <p class="text-xs">Quantity: {{$sale->quantity}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-4 md:col-span-2">
                            <div class="flex flex-col space-y-2">
                                <a href="#" class="block border rounded text-center text-xs font-semibold capitalize py-2">track package</a>
                                <a href="#" class="block border rounded text-center text-xs font-semibold capitalize py-2">return product</a>
                                <a href="#" class="block border rounded text-center text-xs font-semibold capitalize py-2">write review</a>
                                <a href="#" class="block border rounded text-center text-xs font-semibold capitalize py-2">view item</a>
                                <a href="#" class="bg-yellow-400 rounded text-center text-xs font-semibold capitalize py-2">Buy again</a>
                            </div>
                        </div> 
                    </section>
                    
                @endforeach
               
            </div>
        </div>
    </div>
</div>
@endsection