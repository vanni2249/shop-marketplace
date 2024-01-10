<div>
    @if ($item->products()->count())
        <div class="grid grid-cols-4 gap-4">
            @foreach ($item->products as $product)
                <a href="{{ route('logistic.items.products.show',[$item,$product]) }}">
                    <div class="bg-white p-4 rounded shadow space-y-6">
                        <div class="flex flex-row justify-between">
                            <span>Sku</span>
                            <span>
                                {{$product->sku}}

                            </span>
                        </div>
                        @if ($product->options == !null)
                            <div class=" space-y-2">
                                @foreach ($product->options as $key => $option)
                                    <div class="bg-slate-100 p-2 shadow rounded flex flex-row justify-between">
                                        <span>{{$key}}</span>
                                        <span>{{$option}}</span>
                                         
        
                                    </div>
        
                                @endforeach

                            </div>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
        
    @else
        
    @endif
</div>
