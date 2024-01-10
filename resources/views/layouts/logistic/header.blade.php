<header class="border-b bg-white">
    <nav class="p-2 grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 items-center gap-2">
        <div class="col-span-1 md:col-span-1 lg:col-span-3 flex flex-row items-center space-x-4">
            <div x-cloak  x-data="{ open: false }" class=" relative">
                <button x-on:click="open = ! open" class="bg-slate-100 p-2 rounded-full border border-slate-200 active:shadow-inner active:bg-slate-200">
                    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div x-show.important="open" @click.outside="open = false" x-transition class="absolute  top-12 left-0 bg-white shadow-xl border rounded-xl w-60">
                    
                    @livewire('menu.logistic')
                </div>
            </div>
            <div class="hidden md:block">
                {{-- <span class=" font-bold">Gshop</span>     --}}
                <a href="{{ route('logistic.index') }}">Gshop</a>
            </div>
            <div id="btn-search"  class="md:hidden">
                <button class="bg-slate-100 p-2 rounded-full border border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="col-span-2 md:col-span-1 text-center md:hidden">
            {{-- <span class=" font-bold"></span> --}}
            <a href="/">Gshop</a>
        </div>
        <div class="col-span-1 md:order-last md:col-span-1  lg:col-span-3 flex flex-row justify-end space-x-4">
            <div x-cloak  x-data="{ open: false}" class="hidden lg:block relative">
                <button x-on:click="open = ! open" class="bg-slate-100 p-2 rounded-full border border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>                       
                    <div class="absolute -top-1 -right-1 text-xs bg-red-300 h-6 w-6 flex flex-col justify-center text-center rounded-full">
                        <span class="font-semibold">+9</span>
                    </div> 
                </button>
                <div x-show.important="open" @click.outside="open = false" x-transition class="absolute top-12 right-0 bg-white shadow p-4 w-60">
                    <menu>
                        <li>notifications</li>
                    </menu>
                </div>  
            </div>
            <div x-cloak  x-data="{ open: false }" class="relative">
                <button x-on:click="open = ! open" class="bg-slate-100 p-2 rounded-full border border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </button>
                <div x-show.important="open"  @click.outside="open = false" x-transition class="absolute top-12 right-0 bg-white shadow p-4 w-60">
                    <menu>
                        
                    @auth
                        <a href="#">Account</a>
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                            <a href="#" onclick="this.closest('form').submit()">Logout</a>
                        </form>
                        
                    @endauth
                </div>  
            </div>

        </div>
        <div  class="col-span-4 md:col-span-4 lg:col-span-6 hidden md:block">
            
        </div>
    </nav>

</header> 