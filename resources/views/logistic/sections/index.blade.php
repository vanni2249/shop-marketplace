@extends('layouts.logistic.app')

@section('content')

<main class="space-y-4 py-4">
    <x-logistic>
        <x-logistic.header title="Sections">
            @livewire('section.create-section')

        </x-logistic.header>
        {{-- <x-logistic.menu>

        </x-logistic.menu> --}}

        <x-logistic.content grid=2>
            @livewire('section.list-section')
            <div class="bg-slate-100 p-4 rounded shadow-inner"></div>
        </x-logistic.content>

    </x-logistic>
</main>
@endsection