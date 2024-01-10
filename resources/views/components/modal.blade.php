<div>
    {{-- <div x-data="{ open: @entangle($name) }">
        <button @click="open = ! open" class="bg-slate-400 px-4 text-sm rounded">Add key</button> --}}
        <div x-show="open" @click.outside="open = false" class="fixed bg-black bg-opacity-50 inset-0 justify-center items-start">
            <div class="bg-white m-4 md:w-1/3 md:mx-auto p-4 space-y-4 rounded-xl">
                <header class="flex flex-row justify-between">
                    <h2>{{$title}}</h2>
                    <button @click="open = ! open">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"     stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </header>
                <div>
                    {{$slot}}
                </div>
            </div>
        </div>
    {{-- </div>  --}}
</div>