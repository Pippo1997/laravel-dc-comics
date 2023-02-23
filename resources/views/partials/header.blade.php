<header>
    <div class="blue-section">

    </div>
    <div class="container d-flex justify-content-between align-items-center text-center">
        <a href="/" class="logo">
            <img src="{{Vite::asset('public/images/dc-logo.png')}}" alt="logo">
        </a>
        <nav>
            <ul class="d-flex">
                <li class="active {{ Route::currentRouteName() == 'characters' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Characters</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Comics' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Comics</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Movie' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Movie</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'TV' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">TV</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Games' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Games</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Collectibles' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Collectibles</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Video' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Video</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Fans' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Fans</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'News' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">News</a>
                </li>
                <li class="active {{ Route::currentRouteName() == 'Shop' ? 'active' : ''}}">
                    <a href="{{ route('Home')}}">Shop</a>
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

