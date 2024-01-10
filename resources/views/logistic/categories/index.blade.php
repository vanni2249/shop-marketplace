@extends('layouts.logistic.app')

@section('content')

    <main class="space-y-4 py-4">
        <x-logistic>
            <x-logistic.header title="Categories">
                @livewire('category.create-category')
                
            </x-logistic.header>
            {{-- <x-logistic.menu>
                
            </x-logistic.menu> --}}
            
            <x-logistic.content grid=1>
                <x-logistic.content.section>
                    @livewire('category.list-categories')

                </x-logistic.content.section>
                
            </x-logistic.content>

        </x-logistic>
    </main>
@endsection