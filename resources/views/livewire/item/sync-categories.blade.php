<div>
    <div class="space-y-4">
        @if ($sections->count())
            <div class="grid grid-cols-4 gap-4">
                @foreach ($sections as $section)
                    <div class="bg-white p-4 rounded shadow space-y-6">
                        <h2>{{$section->name}}</h2>
                        <div class="space-y-2">
                        @foreach ($section->categories as $category)
                            <div class="bg-slate-100 p-3 rounded shadow text-sm">
                                <input type="checkbox" name="data" wire:model='data' value="{{$category->id}}">
                                <span>{{$category->name}}</span> 
                            </div>
                        @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class=" italic text-xs font-bold">  Debe seleccionar al menos una seccion para poder elegir las categorias bajo su seleccion.</p>
        @endif

    </div>
</div>
