<header class="border-b bg-white">
    <nav class="container mx-auto p-2 grid grid-cols-4 md:grid-cols-6 lg:grid-cols-12 items-center gap-2">
        <div class="col-span-1 md:col-span-1 lg:col-span-3 flex flex-row items-center space-x-4">
            <div x-cloak x-data="{ open: false }" class=" relative">
                <button x-on:click="open = ! open" class="bg-slate-100 p-2 rounded-full border border-slate-200 active:shadow-inner active:bg-slate-200">
                    <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div x-show.important="open" @click.outside="open = false" x-transition class="absolute  top-12 left-0 bg-white shadow p-4 w-60">
                    <menu>
                        <li>menu</li>
                    </menu>
                </div>
            </div>
            <div class="hidden md:block">
                {{-- <span class=" font-bold">Gshop</span>     --}}
                <a href="/">Gshop</a>
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
            <div x-cloak x-data="{ open: false }" class="relative">
                <button x-on:click="open = ! open" class="bg-slate-100 p-2 rounded-full border border-slate-200">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </button>
                <div x-show.important="open"  @click.outside="open = false" x-transition class="absolute top-12 right-0 bg-white shadow-xl border rounded-xl w-60">
                    <p class="p-2 pt-4 text-xs uppercase font-semibold text-slate-500">Account</p>
                    <menu class="divide-y text-sm">
                        <li class="p-2">
                            <a href="{{ route('account.profile.index') }}" class="flex flex-row space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                  
                                <span>Profile</span>    
                            </a>
                        </li>
                        <li class="p-2">
                            <a href="{{ route('account.addresses.index') }}" class="flex flex-row space-x-2 items-center">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                  </svg>
                                  
                                <span>Addresses</span>
                            </a>
                        </li>
                        <li class="p-2">
                            <a href="{{ route('account.payment.methods.index') }}" class="flex flex-row space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                                  </svg>
                                  
                                <span>Payment methods</span> 
                            </a>
                        </li>
                        <li class="p-2">
                            <a href="{{ route('account.wishlist.index') }}" class="flex flex-row space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                  </svg>
                                  
                               <span>Wish lists</span> 
                            </a>
                        </li>
                        <li class="p-2">
                            <a href="{{ route('account.orders.index') }}" class="flex flex-row space-x-2 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                                  </svg>
                                  
                                <span>Orders</span> 
                            </a>
                        </li>
                        @auth
                            <li class="p-2">
                                <form method="POST" action="{{ route('logout')}}">
                                    @csrf
                                    <a href="#" onclick="this.closest('form').submit()" class="flex flex-row space-x-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                        </svg>
                                          
                                        <span>Logout</span>    
                                    </a>
                                </form>
                            </li>
                        @endauth
                    </menu>
                </div>  
            </div>
            <div class="hidden lg:block relative">
                <a href="{{ route('account.wishlist.index') }}" class="bg-slate-100 p-2 rounded-full border border-slate-200 block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>                      
                </a>
            </div>
            <div x-cloak x-data="{ open: false}" class="hidden lg:block relative">
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
            <a href="{{ route('shop.cart')}}" class="block bg-slate-100 p-2 rounded-full border border-slate-200 relative">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
                @auth
                    @livewire('cart.counter-products-cart') 
                    
                @endauth
            </a>

        </div>
        <div id="search" class="col-span-4 md:col-span-4 lg:col-span-6 hidden md:block">
            <div class="flex flex-row">
                <select name="name" id="name" class="rounded-l border-l border-y border-slate-300 px-2 outline-none">
                    <option value="1" class="px-6">All</option>
                </select>
                <input type="text" name="search" id="search" class="w-full border border-slate-300 rounded-none p-1 outline-none shadow-inner">
                <button class="bg-white rounded-r border-y border-r  border-slate-300 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                    </svg>
                      
                </button>
            </div>
        </div>
    </nav>

</header> 