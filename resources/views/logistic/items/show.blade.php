@extends('layouts.logistic.app')

@section('content')
    <main class="space-y-4 py-4">
        <header class="flex flex-row justify-between">
            <h1>Show</h1>
        </header>
        
        <div class="bg-white rounded-xl shadow space-y-4 p-4">
            <header class="flex flex-row justify-between">
                <h2>Show</h2>
            </header>
            <div class="bg-slate-100 p-4 text-center shadow-inner rounded">
                @include('logistic.items.partials.menu')
                
            </div>
            <div class="grid grid-cols-1">
                <div class="bg-slate-100 p-4 shadow-inner rounded">
                    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
                        <div class="col-span-4 md:col-span-4 lg:col-span-5 space-y-2">
                            <div class="col-span-4 md:col-span-5 lg:col-span-5 xl:col-span-5 ">
                                <img src="{{$item->image()->url}}" alt="" class="object-contain w-full">
                            </div>
                            <div class="w-full">
                                <ul id="thumbs" class="flex overflow-x-auto scrollbar-hide  space-x-2 bg-slate-100">
            
                                    @foreach ($item->images as $image)
                                        <li class="flex-shrink-0">
                                            <a href="/images/trucker-cap.jpeg" title="Image 1"><img src="{{$image->url}}" alt="image" class="h-16 object-contain"></a>
                                        </li>
                                        
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <section class="col-span-4 md:col-span-4 lg:col-span-5 xl:col-span-5 space-y-4">
                            @livewire('item.edit-item-title',['item' => $item])
                            <div class="bg-white p-4 rounded-xl border"></div>
                            <button wire:click='add_product_cart' class="w-full block bg-yellow-400 p-2 rounded-md text-center">Add to cart</button>
                            <button class="w-full bg-orange-400 p-2 rounded-md ">Buy now</button>
                        </section>
                        <section class="col-span-4 md:col-span-8 lg:col-span-2 hidden lg:block space-y-2">
                            <h2 class="text-xs text-slate-600">Sponser</h2>
                            <ul class=" space-y-4">
                                <li>
                                    <a href="#">
                                        <img src="{{$item->images->first()->url}}" alt="" class="object-contain w-full">
                                        <p class="line-clamp-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cum earum illo velit repudiandae obcaecati esse suscipit nemo quaerat at atque asperiores, ducimus tempore ex! Minus nisi quisquam officia veniam?</p>
                                        <p class=" font-semibold">$23.45</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="{{$item->images->first()->url}}" alt="" class="object-contain w-full">
                                        <p class="line-clamp-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cum earum illo velit repudiandae obcaecati esse suscipit nemo quaerat at atque asperiores, ducimus tempore ex! Minus nisi quisquam officia veniam?</p>
                                        <p class=" font-semibold">$23.45</p>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection