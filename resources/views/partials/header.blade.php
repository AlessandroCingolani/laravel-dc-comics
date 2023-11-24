<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'ac_active' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Route::currentRouteName() === 'comics.index' ? 'ac_active' : '' }}"
                            href="{{ route('comics.index') }}">Lista Fumetti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Route::currentRouteName() === 'comics.create' ? 'ac_active' : '' }}"
                            href="{{ route('comics.create') }}">Nuovo Fumetto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
