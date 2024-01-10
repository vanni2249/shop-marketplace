@extends('layouts.shop.app')

@section('content')
     <main class="space-y-4 py-4">
        <header class="flex flex-row justify-between">
            <h1 class="text-xl px-2 md:px-0">Addresses</h1>
        </header>
        {{-- <div class="bg-white md:rounded-xl p-4 shadow"> --}}
            <div class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4">
                <div class="col-span-4 ">
                    <div class="bg-white p-4 md:rounded-xl shadow text-sm space-y-4">
                        <ul class="text-slate-500">
                            <li class="text-sm text-slate-800 font-semibold">Geovanni Colon Barrios</li>
                            <li>2818 N IH 35 #11103</li>
                            <li>San Antonio, TX 78208</li>
                            <li>United State</li>
                            <li>Phone Number: 210-665-6749</li>
                        </ul>
                        <div class="text-blue-600">
                            Add delivery instruction
                        </div>
                        <div class="flex flex-row space-x-4 text-xs">
                            <button class="bg-slate-900 px-4 py-1 text-slate-200 rounded">Edit</button>
                            <button class="bg-slate-200 px-4 py-1 text-slate-900 rounded">Remove</button>
                            <button class="">Set Default</button>
                        </div>
                    </div>
                </div>
                
            </div>
            
        {{-- </div> --}}
        
     </main>
@endsection