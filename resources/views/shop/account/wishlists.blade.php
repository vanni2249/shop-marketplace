@extends('layouts.shop.app')

@section('content')
    <main class="space-y-4 py-4">
        <header class="flex flex-row justify-between">
            <h1 class="text-xl px-2 md:px-0">Wishlist</h1>
        </header>
        <section class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($items as $item)
            <a href="{{ route('shop.items.show',$item->id) }}">
                <x-items.vertical :item="$item"></x-items.vertical>
            </a>
            @endforeach
        </section>
    </main>
@endsection