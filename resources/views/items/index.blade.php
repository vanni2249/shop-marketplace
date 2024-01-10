@extends('layouts.shop.app')

@section('content')
    <h1>Items</h1>

    <ul>
        @foreach ($items as $item)
           <li><a href="{{ route('items.show',$item) }}">{{$item->title}}</a></li> 
        @endforeach
    </ul>
@endsection