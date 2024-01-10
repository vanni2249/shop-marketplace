@extends('layouts.logistic.app')

@section('content')
    <main class="space-y-4 py-4">
        <header class="flex flex-row justify-between">
            <h1 class="text-sm">Items</h1>
        </header>
        
        <div class="bg-white p-4 rounded-xl shadow space-y-4">
            <header class="flex flex-row justify-between">
                <h2>Items</h2>
                @livewire('item.create-item')

            </header>
            <div class="bg-slate-100 p-4 text-center shadow-inner rounded">
                <menu class="flex flex-row space-x-4 text-sm">
                    <li>All</li>
                    <li>Draft</li>
                    <li>Actived</li>
                    <li>Sold out</li>
                    <li>Archived</li>
                    <li>Desactived</li>
                </menu>
               
                
            </div>
            <div class="bg-slate-100 p-4 rounded shadow-inner">
                @livewire('item.list-items')

            </div>

        </div>
        <section>
        </section>
    </main>
@endsection