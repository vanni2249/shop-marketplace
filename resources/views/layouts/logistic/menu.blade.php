<menu class="space-y-4">
    @if (request()->is('logistic'))
      <li>
        <a href="{{ route('catalog.index')}}">Catalog</a>
      </li>          
    @endif
    @if (request()->is('logistic/catalog') or request()->is('logistic/catalog/*'))
      @include('layouts.logistic.partials.menu-catalog')          
    @endif
</menu>