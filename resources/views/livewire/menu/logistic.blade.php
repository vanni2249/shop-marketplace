<div class="py-4 space-y-4">
    <header class="px-4">
        <h2 class="text-sm font-semibold uppercase">Logistic</h2>

    </header>
    <menu class="text-sm">
        <li>
            <a href="{{ route('logistic.index') }}" class="capitalize hover:bg-slate-100 block px-4 p-2">
                <div class="flex flex-row justify-between items-center">
                    <span>
                        Home
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </div>
            </a>
        </li>
        @foreach ($items as $item)
            <li>
                <a href="{{ route($item['url']) }}" class="capitalize hover:bg-slate-100 block px-4 p-2">
                    <div class="flex flex-row justify-between items-center">
                        <span>
                            {{$item['name']}}
                        </span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-slate-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </div>
                </a>
            </li>
        @endforeach
    </menu>
</div>
