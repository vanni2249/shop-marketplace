@extends('layouts.logistic.app')

@section('content')
<main class="space-y-4 py-4">
    <header class="flex flex-row justify-between">
        <h1>Products</h1>
    </header>
    {{-- @include('logistic.items.partials.menu') --}}
    <section class="bg-white rounded-xl p-4 shadow space-y-6">
        <header>
            <h2>Product</h2>
        </header>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-slate-100 rounded-lg p-4 space-y-4 {{($product->purchases->count() < 10)? 'h-[40rem]' :''}}">
                <header class="flex flex-row justify-between">
                    <h2 class="text-sm">Purchase</h2>
                </header>
                <div class="space-y-2">
                    @foreach ($product->purchases as $purchase)
                        <div class="bg-white p-2 rounded shadow">
                            <div class="flex flex-row justify-between">
                                <span>{{$purchase->create_at}}</span>
                                <span>{{$purchase->quantity}}</span>
                            </div>
                        </div>   
                    @endforeach
                </div>

                @if ($product->purchases->count() > 10)
                    <a href="" class="bg-slate-600 text-white w-full text-sm text-center py-2 rounded block">View all</a>
                @endif

            </div>
            <div class="bg-slate-100 rounded-lg p-4 space-y-4">
                <header class="flex flex-row justify-between">
                    <h2 class="text-sm">Sales</h2>
                </header>
                <div class="space-y-2">
                    <div class="bg-white p-2 rounded shadow"></div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection