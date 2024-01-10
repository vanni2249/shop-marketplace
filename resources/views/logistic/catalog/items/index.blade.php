@extends('layouts.logistic.app')

@section('content')
    <header class="flex flex-row justify-between">
        <h1>Items</h1>
        @livewire('item.create-item')
    </header>
    @livewire('item.list-item')
@endsection