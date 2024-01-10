@extends('layouts.shop.app')

@section('content')
<main class="p-4 space-y-4">
    <header class="flex flex-col md:flex-row md:justify-between md:items-center">
        <h1 class="text-sm">
            Result
        </h1>
    </header>
    <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
        {{-- <div class="col-span-4 md:col-span-2 lg:col-span-2 bg-white rounded-xl">
            <section class="p-4 ">
                <header>
                    <h2>Filter</h2>
                </header>
            </section>
        </div> --}}
        <div class="col-span-4 md:col-span-8 lg:col-span-12 space-y-4">
            <section class="p-4 bg-white rounded-xl">
                <header>
                    <h2>Result...</h2>
                </header>
            </section>
            <section class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
                @foreach ($items as $item)
                <a href="{{ route('shop.items.show',$item->id) }}">
                    <x-items.vertical :item="$item"></x-items.vertical>
                </a>
                @endforeach
            </section>
        </div>
    </div>
</main>
@endsection