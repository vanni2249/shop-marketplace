@extends('layouts.shop.app')

@section('content')
    <div class="space-y-4 md:p-4">
        <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
            {{-- <div class="hidden lg:block lg:col-span-3 xl:col-span-2 bg-red-100"></div> --}}
            <div class=" col-span-4 md:col-span-8 lg:col-span-9 xl:col-span-9 bg-red-100 h-96"></div>
            <div class="hidden lg:block lg:col-span-3 xl:col-span-3 bg-red-100 h-96"></div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-4">
            @foreach ($items as $item)
                <a href="{{ route('shop.items.show',$item->id) }}">
                    <x-items.vertical :item="$item"></x-items.vertical>
                </a>
            @endforeach
        </div>

    </div>
@endsection