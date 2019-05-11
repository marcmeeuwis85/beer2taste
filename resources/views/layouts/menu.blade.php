<ul class="nav nav-pills mb-3 mt-3">
    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'beer-tasting.index' ? 'active' : ''  }}" href="{{route('beer-tasting.index')}}">Overzicht</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::current()->getName() == 'beer-tasting.create' ? 'active' : ''  }}" href="{{route('beer-tasting.create')}}">Nieuwe bierproeverij</a>
    </li>
</ul>