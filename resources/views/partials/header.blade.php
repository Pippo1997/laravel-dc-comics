<header>
    <div class="blue-section">

    </div>
    <div class="container d-flex justify-content-between align-items-center text-center">
        <a href="/" class="logo">
            <img src="{{Vite::asset('public/images/dc-logo.png')}}" alt="logo">
        </a>
        <nav>
            <ul class="d-flex">
                <li class="active {{ Route::currentRouteName() == 'homepage' ? 'active' : ''}}">
                    <a href="{{ route('homepage')}}">Homepage</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'comics.index' ? 'active' : ''}}">
                    <a href="{{ route('comics.index')}}">comics.index</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Movie' ? 'active' : ''}}">
                    <a href="{{ route('homepage')}}">Movie</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'TV' ? 'active' : ''}}">
                    <a href="{{ route('homepage')}}">TV</a>
                </li>
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
        </div>
    </div>
    {{-- Jumbotron --}}
    <div class="img-comcic"></div>
</header>

