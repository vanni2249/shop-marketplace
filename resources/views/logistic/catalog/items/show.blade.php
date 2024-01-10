@extends('layouts.logistic.app')

@section('content')
    <header class="flex flex-row justify-between">
        <h1>{{$item->title}}</h1>
        @livewire('item.create-attribute-item',['item' => $item])
    </header>
    @livewire('item.list-attribute-item',['item' => $item])
    <hr>
    <div class="flex flex-row justify-between">
        <div>Products</div>
        @livewire('item.create-product-item',['item' => $item])

    </div>
@endsection