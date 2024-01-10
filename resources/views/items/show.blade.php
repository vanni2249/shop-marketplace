@extends('layouts.shop.app')

@section('content')
    <header class="flex flex-row justify-between">
        <h1>{{$item->title}}</h1>
        @livewire('add-key-item',['item' => $item])

    </header>
    <div>
        @livewire('list-key-item',['item' => $item])
    </div>
@endsection