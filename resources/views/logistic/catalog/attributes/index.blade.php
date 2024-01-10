@extends('layouts.logistic.app')

@section('content')
<header class="flex flex-row justify-between">
    <h1>Attrubutes</h1>
    <div>
        @livewire('attribute.create-attributes')
    </div>
</header>
<main>
    @livewire('attribute.list-attributes')
</main>
@endsection