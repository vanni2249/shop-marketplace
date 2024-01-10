@extends('layouts.logistic.app')

@section('content')
    <main class="space-y-4 py-4">
        <header class="flex flex-row justify-between">
            <h1 class="text-xl font-semibold">
                Sub-categories
            </h1>
            @livewire('category.create-sub-category',['category' => $category])
        </header>
        <div>
            @livewire('category.list-sub-category',['category' => $category])
        </div>
    </main>
@endsection