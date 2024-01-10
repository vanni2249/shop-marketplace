<div>
    @auth
        @if ($count)
            <div class="absolute -top-1 -right-1 text-xs bg-red-300 h-6 w-6 flex flex-col justify-center text-center rounded-full">
                <span class="font-semibold">
                    {{$count}}    

                </span>
            </div> 
        @endif
        
    @endauth
</div>
