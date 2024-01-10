@extends('layouts.shop.app')

@section('content')
    <div class="space-y-4 py-4">
        <header class="px-2 md:px-0 space-y-4">
            <h1 class="text-xl ">Orders</h1>
            <menu class="flex flex-row whitespace-nowrap overflow-auto space-x-8 text-sm border-b border-slate-300">
                <li class="border-b-2 border-slate-900">Orders</li>
                <li>Buy again</li>
                <li>Cancelled order</li>
            </menu>

            <div>
                <span class="text-sm"> <b>9 orders</b> placed in</span>    
                <select name="orders" id="orders" class="p-1 border rounded text-sm">
                    <option value="three_month" class="w-auto">past 3 month</option>
                </select>
            </div>

        </header>
        <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
            <div class="col-span-4 md:col-span-8 lg:col-span-9 space-y-4">
                @foreach ($orders as $order)
                    <section class="bg-white p-0 shadow md:rounded-xl">
                        <header class="flex flex-row items-center justify-between bg-slate-1 p-2 md:p-4 border-b border-slate-200 md:rounded-t">
                            <h2 class="flex flex-col text-sm">
                                <span class="text-xs uppercase">ORDER PLACED</span>
                                <span class="text-xs font-semibold">{{$order->created_at}}</span>    
                            </h2>
                            <a href="{{ route('account.orders.show',$order)}}" class="bg-slate-300 py-1 px-4 text-xs font-normal rounded">Detail</a>
                        </header>
                        
                        <section class="divide-y divide-slate-200">
                            @foreach ($order->sales as $sale)
                                <div class="flex flex-row  gap-2 p-2 md:p-4">
                                    <div class="">
                                        <div class=" rounded w-36 h-36 md:w-40 md:h-40 lg:w-44 lg:h-44">
                                            <img src="{{$sale->product->item->image()->url}}" alt="" class="object-contain w-full h-full">

                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <h2 class="line-clamp-2 text-sm">
                                            {{$sale->product->item->title}}
                                        </h2>
                                        <p class=" font-semibold">{{$sale->price}}</p>
                                        <p class="text-xs">Quantity: {{$sale->quantity}}</p>
                                        <p class="text-sm font-semibold">Arriving tomorrow by 10 PM</p>
                                    </div>
                                </div>
                                
                            @endforeach

                        </section>
                    </section>
                    
                @endforeach
                {{ $orders->links() }}
            </div>
            <div class="hidden lg:block md:col-span-3 lg:col-span-3">
                <div class="bg-white p-2 md:p-4 rounded-xl shadow space-y-4">
                    <header class="flex flex-row justify-between">
                        <h2 class="text-xs font-semibold">Buy again</h2>
                    </header>
                    <div class="grid grid-cols-1 gap-4">
                        <div class="flex flex-row space-x-2">
                            <div class="flex-none w-28 h-24 border border-slate-200 p-1 rounded">
                                <img src="/images/710jcRw4G7L._AC_SY879_.jpg" alt=""  class="object-contain w-full h-full">
                            </div>
                            <div class="space-y-1">
                                <h2 class="text-sm line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit quia facilis atque totam fuga natus iusto, aut magnam ut quod dicta dolore unde, assumenda ab distinctio, molestias amet. Distinctio.
                                </h2>
                                <p class="font-semibold">$34.56</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="flex-none  w-28 h-24 border border-slate-200 p-1 rounded">
                                <img src="/images/trucker-cap-2.jpeg" alt=""  class="object-contain w-full h-full">
                            </div>
                            <div class="space-y-1">
                                <h2 class="text-sm line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit quia facilis atque totam fuga natus iusto, aut magnam ut quod dicta dolore unde, assumenda ab distinctio, molestias amet. Distinctio.
                                </h2>
                                <p class="font-semibold">$34.56</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="flex-none w-28 h-24 border border-slate-200 p-1 rounded">
                                <img src="/images/710jcRw4G7L._AC_SY879_.jpg" alt=""  class="object-contain w-full h-full">
                            </div>
                            <div class="space-y-1">
                                <h2 class="text-sm line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit quia facilis atque totam fuga natus iusto, aut magnam ut quod dicta dolore unde, assumenda ab distinctio, molestias amet. Distinctio.
                                </h2>
                                <p class="font-semibold">$34.56</p>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-2">
                            <div class="flex-none  w-28 h-24 border border-slate-200 p-1 rounded">
                                <img src="/images/trucker-cap-2.jpeg" alt=""  class="object-contain w-full h-full">
                            </div>
                            <div class="space-y-1">
                                <h2 class="text-sm line-clamp-2">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat reprehenderit quia facilis atque totam fuga natus iusto, aut magnam ut quod dicta dolore unde, assumenda ab distinctio, molestias amet. Distinctio.
                                </h2>
                                <p class="font-semibold">$34.56</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection