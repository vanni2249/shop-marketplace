<div>
    <div class=" bg-white rounded-lg p-2 shadow-sm hover:shadow-lg">
        <img src="{{$item->image()->url}}" class=" rounded" alt="">
        <p class="text-sm line-clamp-2">{{$item->title}}</p>
        {{$slot}}
    </div>
</div>