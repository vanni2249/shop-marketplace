<div>
    <form wire:submit.prevent="update" class="space-y-4">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($sections as $section)
                <div class="bg-white p-4 flex flex-row items-center text-sm space-x-2 rounded shadow">
                    <input type="checkbox" name="data" wire:model='data' value="{{$section->id}}"  {{($item->categories->count())? 'disabled':''}}>
                    <span>{{$section->name}}</span> 
                </div>
            @endforeach
        </div>
    </form>

</div>
