<div>
    <ul class="space-y-2">
        @foreach ($categories as $category)
            <li class="bg-white flex flex-row justify-between p-2 rounded shadow">
                <div>
                    {{$category->name}}

                </div>
                <div>
                    edit | remove

                </div>
            </li>
        @endforeach
    </ul>
</div>
