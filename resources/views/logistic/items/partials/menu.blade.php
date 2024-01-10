<menu class="flex flex-row space-x-4 text-sm">
    <li>
        <a href="{{ route('logistic.items.show',$item) }}">Show</a>
    </li>
    <li>
        <a href="{{ route('logistic.items.sections.index',$item) }}">Sections</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.categories.index',$item) }}">Categories</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.attributes.index',$item) }}">Attributes</a> 
        
    </li>
    <li>
        <a href="{{ route('logistic.items.products.index',$item) }}">Products</a> 
        
    </li>
    {{-- <li>
        <a href="{{ route('logistic.items.show',[$item,'categories']) }}">Categories</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.show',[$item,'attributes']) }}">Attributes</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.show',[$item,'images']) }}">Images</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.show',[$item,'descriptions']) }}">Descriptions</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.show',[$item,'features']) }}">Features</a> 
    </li>
    <li>
        <a href="{{ route('logistic.items.show',[$item,'products']) }}">Products</a> 
    </li> --}}
</menu>