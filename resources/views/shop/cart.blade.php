@extends('layouts.shop.app')

@section('content')

    <div class="container grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 py-4">
        <section class="col-span-4 md:col-span-8 lg:col-span-12 px-2 md:px-0">
            <header class="flex flex-row items-center">
                <section class="flex h-full">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>                                                   
                    </span>
                </section>
                <section class="flex flex-col">
                    <p class="flex flex-row items-center font-semibold">Carts</p>
                </section>
            </header>   
        </section>
        <section class="col-span-4 md:col-span-8 lg:order-last lg:col-span-3">

            @livewire('cart.sub-total-cart',['cart' => $shopping])

            <section class="hidden lg:block shadow bg-white md:rounded-xl">
                <div class="p-4">
                    <h2 class="text-slate-600 text-xs mb-2">Sponser</h2>
                    <ul class="grid grid-cols-1 gap-2">
                        <li>
                            <a href="/items/show.html">
                                <ul>
                                    <li><img src="/images/trucker-cap-2.jpeg" alt=""></li>
                                    <li class="text-xs truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</li>
                                    <li class="font-semibold">$34.00</li>
                                </ul>
                            </a>
                        </li>
                       
                    </ul>

                </div>
            </section>
        </section>
        <section class="col-span-4 md:col-span-8 lg:col-span-9 space-y-2">
            @livewire('cart.products-cart',['cart' => $shopping])
            <section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
                
            </section>
            <section class="space-y-4">
                <header class="px-2 md:px-0">
                    <h2 class="text-sm font-semibold">Save for later</h2>

                </header>
                    @livewire('cart.products-save-to-later')

                {{-- <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
                    <li class="shadow rounded">
                        <img src="/images/trucker-cap-3.jpeg" alt="">
                        <ul class="p-2 space-y-1">
                            <li class=" truncate">
                                <a href="/items/show.html">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio tempora veritatis cumque, iste qui, magni ab impedit repudiandae ea tenetur error suscipit cupiditate ipsum architecto in laboriosam debitis eaque.
                                </a>
                            </li>
                            <li class="flex flex-row space-x-2">
                                <div class="flex flex-row space-x-">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    
                                </div>
                                <span>
                                    <p class="text-xs">5.0</p>
                                </span>
                            </li>
                            <li class= font-semibold">
                                $45.87
                            </li>
                            <li>
                                <button class="w-full text-sm px-4 py-1 rounded bg-slate-400 text-white">Add to cart</button>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Remove</span>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Move to wish list</span>
                            </li>
                        </ul>
                    </li>
                    <li class="shadow rounded">
                        <img src="/images/trucker-cap-3.jpeg" alt="">
                        <ul class="p-2 space-y-1">
                            <li class=" truncate">
                                <a href="/items/show.html">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio tempora veritatis cumque, iste qui, magni ab impedit repudiandae ea tenetur error suscipit cupiditate ipsum architecto in laboriosam debitis eaque.
                                </a>
                            </li>
                            <li class="flex flex-row space-x-2">
                                <div class="flex flex-row space-x-">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    
                                </div>
                                <span>
                                    <p class="text-xs">5.0</p>
                                </span>
                            </li>
                            <li class= font-semibold">
                                $45.87
                            </li>
                            <li>
                                <button class="w-full text-sm px-4 py-1 rounded bg-slate-400 text-white">Add to cart</button>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Remove</span>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Move to wish list</span>
                            </li>
                        </ul>
                    </li>
                    <li class="shadow rounded">
                        <img src="/images/trucker-cap-3.jpeg" alt="">
                        <ul class="p-2 space-y-1">
                            <li class=" truncate">
                                <a href="/items/show.html">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio tempora veritatis cumque, iste qui, magni ab impedit repudiandae ea tenetur error suscipit cupiditate ipsum architecto in laboriosam debitis eaque.
                                </a>
                            </li>
                            <li class="flex flex-row space-x-2">
                                <div class="flex flex-row space-x-">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    
                                </div>
                                <span>
                                    <p class="text-xs">5.0</p>
                                </span>
                            </li>
                            <li class= font-semibold">
                                $45.87
                            </li>
                            <li>
                                <button class="w-full text-sm px-4 py-1 rounded bg-slate-400 text-white">Add to cart</button>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Remove</span>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Move to wish list</span>
                            </li>
                        </ul>
                    </li>
                    <li class="shadow rounded">
                        <img src="/images/trucker-cap-3.jpeg" alt="">
                        <ul class="p-2 space-y-1">
                            <li class=" truncate">
                                <a href="/items/show.html">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit optio tempora veritatis cumque, iste qui, magni ab impedit repudiandae ea tenetur error suscipit cupiditate ipsum architecto in laboriosam debitis eaque.
                                </a>
                            </li>
                            <li class="flex flex-row space-x-2">
                                <div class="flex flex-row space-x-">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                    </span>
                                    
                                </div>
                                <span>
                                    <p class="text-xs">5.0</p>
                                </span>
                            </li>
                            <li class= font-semibold">
                                $45.87
                            </li>
                            <li>
                                <button class="w-full text-sm px-4 py-1 rounded bg-slate-400 text-white">Add to cart</button>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Remove</span>
                            </li>
                            <li>
                                <span class="text-xs font-normal text-gray-600 hover:text-gray-900 cursor-pointer">Move to wish list</span>
                            </li>
                        </ul>
                    </li>
                </ul> --}}
            </section>

        </section> 
    </div>
@endsection