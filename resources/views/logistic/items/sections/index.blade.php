@extends('layouts.logistic.app')

@section('content')

   
<main class="space-y-4 py-4">
    <header class="flex flex-row justify-between">
        <h1>Sections</h1>
    </header>
    
    <div class="bg-white rounded-xl shadow space-y-6 p-4">
        <header class="flex flex-row justify-between">
            <h2>Sections</h2>
            {{-- @livewire('item.sync-attributes',['item' => $item]) --}}
        </header>
        <div class="bg-slate-100 p-4 text-center rounded shadow-inner">
            @include('logistic.items.partials.menu')
            
        </div>
        <div class="grid grid-cols-1">
            <div class="bg-slate-100 p-4 rounded shadow-inner">
                @livewire('item.sync-sections',['item' => $item])


            </div>
        </div>
    </div>
</main>
@endsection