@extends('layouts.shop.app')

@section('content')
    <main class="space-y-4 py-4">
        <div class="px-4 md:px-0">
            Home
        </div>
        <section class="grid grid-cols-4 md:grid-cols-8 lg:grid-cols-12 gap-4 bg-white p-2 md:p-4 md:rounded-xl shadow">
            <div class="col-span-4 md:col-span-4 lg:col-span-5 space-y-2">
                <div class="col-span-4 md:col-span-5 lg:col-span-5 xl:col-span-5 ">
                    {{-- <img src="{{ Vite::asset($item->images->url->first()) }}" class=" rounded-t" alt=""> --}}
                    <img src="{{$item->image()->url}}" alt="" class="object-contain w-full">
                </div>
                <div class="w-full">
                    <ul id="thumbs" class="flex overflow-x-auto scrollbar-hide  space-x-2 bg-white">

                        @foreach ($item->images as $image)
                            <li class="flex-shrink-0">
                                <a href="/images/trucker-cap.jpeg" title="Image 1"><img src="{{$image->url}}" alt="image" class="h-16 object-contain"></a>
                            </li>
                            
                        @endforeach
                    </ul>
                </div>
            </div>
            <section class="col-span-4 md:col-span-4 lg:col-span-5 xl:col-span-5 space-y-4">
                <h1 class="font-semibold line-clamp-2">
                    {{$item->title}}
                </h1>
                <div class="flex flex-row items-center space-x-2">
                    <span class="flex flex-row text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-600" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </span>
                    <span class="text-xs text-slate-500">
                        4.7
                    </span>
                </div>

                    @livewire('cart.add-product-cart',['item' => $item,'cartService' => $cartService])
                    
                

                
            </section>
            <section class="col-span-4 md:col-span-8 lg:col-span-2 hidden lg:block space-y-2">
                <h2 class="text-xs text-slate-600">Sponser</h2>
                <ul class=" space-y-4">
                    <li>
                        <a href="#">
                            {{-- <img src="{{$item->images->first()->url}}" alt="" class="object-contain w-full"> --}}
                            <p class="line-clamp-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cum earum illo velit repudiandae obcaecati esse suscipit nemo quaerat at atque asperiores, ducimus tempore ex! Minus nisi quisquam officia veniam?</p>
                            <p class=" font-semibold">$23.45</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{-- <img src="{{$item->images->first()->url}}" alt="" class="object-contain w-full"> --}}
                            <p class="line-clamp-2 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni cum earum illo velit repudiandae obcaecati esse suscipit nemo quaerat at atque asperiores, ducimus tempore ex! Minus nisi quisquam officia veniam?</p>
                            <p class=" font-semibold">$23.45</p>
                        </a>
                    </li>
                </ul>
            </section>
        </section>
        <section class="bg-white p-2 md:p-4 md:rounded-xl shadow">
            <h2 class="text-xl font-semibold">Description</h2>
            <p class="text-sm text-slate-600 py-4 leading-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit placeat recusandae voluptatibus beatae nihil, quam, perferendis quis aliquid commodi, eius sequi ea vero incidunt. Corporis reprehenderit similique tenetur quisquam aspernatur?
            </p>
        </section>
        <section class="bg-white p-2 md:p-4 md:rounded-xl shadow">
            <h2 class="text-xl font-semibold">Features</h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 py-2">
                <li>
                    <h3 class="text-md font-semibold">Titles</h3>
                    <p class="text-sm text-slate-600 py-4 leading-6">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex doloremque deserunt vero itaque aliquid cupiditate eos porro illum qui iusto repudiandae suscipit fugit cumque laboriosam, molestias accusantium at atque?
                    </p>
                </li>
                <li>
                    <h3 class="text-md font-semibold">Titles</h3>
                    <p class="text-sm text-slate-600 py-4 leading-6">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex doloremque deserunt vero itaque aliquid cupiditate eos porro illum qui iusto repudiandae suscipit fugit cumque laboriosam, molestias accusantium at atque?
                    </p>
                </li>
                <li>
                    <h3 class="text-md font-semibold">Titles</h3>
                    <p class="text-sm text-slate-600 py-4 leading-6">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex doloremque deserunt vero itaque aliquid cupiditate eos porro illum qui iusto repudiandae suscipit fugit cumque laboriosam, molestias accusantium at atque?
                    </p>
                </li>
                <li>
                    <h3 class="text-md font-semibold">Titles</h3>
                    <p class="text-sm text-slate-600 py-4 leading-6">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ex doloremque deserunt vero itaque aliquid cupiditate eos porro illum qui iusto repudiandae suscipit fugit cumque laboriosam, molestias accusantium at atque?
                    </p>
                </li>
            </ul>
        </section>
        <section class="bg-white p-2 md:p-4 md:rounded-xl shadow">
            <h2 class="text-xl font-semibold">Shipping and handing</h2>
            <p class="text-sm text-slate-600 py-4 leading-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit placeat recusandae voluptatibus beatae nihil, quam, perferendis quis aliquid commodi, eius sequi ea vero incidunt. Corporis reprehenderit similique tenetur quisquam aspernatur?
            </p>
        </section>
        <section class="bg-white p-2 md:p-4 md:rounded-xl shadow">
            <h2 class="text-xl font-semibold">Customer questions & answers</h2>
            <div class="space-y-8 py-4">
                <ul class="space-y-2">
                    <li class="flex flex-col">
                        <span class="w-1/12 flex-none text-sm font-semibold">Question</span>
                        <p class="w-full text-sm text-slate-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                        </p>
                    </li>
                    <li class="flex flex-col bg-slate-100 p-4 rounded">
                        <span class="w-1/12 flex-none text-sm font-semibold">Answer</span>
                        <p class="w-full text-sm text-slate-800">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium excepturi, error sapiente odio tenetur molestiae cupiditate laboriosam debitis. Nobis ut iusto repellat recusandae voluptates aspernatur aliquam molestias in quod nostrum.
                        </p>
                    </li>
                </ul>
                <ul class="space-y-2">
                    <li class="flex flex-col">
                        <span class="w-1/12 flex-none text-sm font-semibold">Question</span>
                        <p class="w-full text-sm text-slate-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                        </p>
                    </li>
                    <li class="flex flex-col bg-slate-100 p-4 rounded">
                        <span class="w-1/12 flex-none text-sm font-semibold">Answer</span>
                        <p class="w-full text-sm text-slate-800">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium excepturi, error sapiente odio tenetur molestiae cupiditate laboriosam debitis. Nobis ut iusto repellat recusandae voluptates aspernatur aliquam molestias in quod nostrum.
                        </p>
                    </li>
                </ul>
            </div>  
        </section>
        <section class="bg-white p-2 md:p-4 md:rounded-xl shadow">
            <h2 class="text-xl font-semibold">Reviews</h2>
            <div class="space-y-8 py-4">
                <ul>
                    <li>
                        <ul class="space-y-2">
                            <li class="flex flex-row items-center space-x-2">
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
                                <span class="text-xs">
                                    5.0
                                </span>
                            </li>
                            <li class="text-sm font-semibold">01/01/2022</li>
                            <li class="flex flex-col bg-slate-100 p-4 rounded">
                                <span class="flex-none text-sm font-semibold">Comment</span>
                                <p class="text-sm text-slate-800">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium excepturi, error sapiente odio tenetur molestiae cupiditate laboriosam debitis. Nobis ut iusto repellat recusandae voluptates aspernatur aliquam molestias in quod nostrum.
                                </p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>  
        </section>
        
    </main>
@endsection