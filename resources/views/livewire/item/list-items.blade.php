<div>
    <div class="space-y-4">
        <ul class="grid grid-cols-6 gap-4">
            @foreach ($items as $item)
               <li>
                    <a href="{{ route('logistic.items.show',$item) }}" class="bg-white p-4 rounded shadow block h-full">
                        <img src="{{$item->images->first()->url}}" alt="" class="object-contain w-full">
                        <p class="line-clamp-2">
                            {{ $item->title }}
                        </p>
                    </a>  
                </li>
            @endforeach
    
        </ul>
        <div>
            {{$items->links()}}
    
        </div>

    </div>
</div>

