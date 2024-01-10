@extends('layouts.logistic.app')

@section('content')
    <main class=" space-y-4 py-4">
        <h1 class="text-xl font-semibold">Dashboard</h1>
        <div class="grid grid-cols-4 gap-4">
            {{-- @foreach ($items as $item)
            <a href="{{ route($item['url']) }}" class="bg-white p-4 rounded-lg shadow hover:shadow-md space-y-4">
                <div class="flex flex-row items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>
                      
                    <h2 class="text-4xl font-bold">
                        {{$item['numbers'] ?? ''}}
                    </h2>
                </div>
                <div class="flex flex-row justify-between">
                    
                    <span class=" capitalize">{{ $item['name']}}</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                          
                    </span>
                </div>
            </a>
                
            @endforeach --}}
        </div>
    </main>
@endsection