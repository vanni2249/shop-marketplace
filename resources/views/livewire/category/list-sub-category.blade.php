<div>
    <ul>
        @foreach ($categories as $category)
            <li>
                    {{$category->name}}
                <br>
                edit | remove
            </li>
            <br>
        @endforeach
    </ul>
</div>
