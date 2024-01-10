<div>
    <div class="">
        <form wire:submit.prevent="update" class="flex flex-col space-y-4">
            <textarea wire:model='title' cols="30" rows="8" class="p-4 rounded-xl border text-sm"></textarea>

            @if ($button)
                <button type="submit" class="text-white text-sm py-1 rounded text-center bg-slate-600">Save Contact</button>
                
            @endif
        </form>
    </div>
</div>
