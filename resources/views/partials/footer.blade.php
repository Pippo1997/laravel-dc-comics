<footer>

    <!-- sezione blu -->
    <div class="blue-section p-3">
        <div class="container">
            <div class="icon justify-content-between">
                @foreach ($icone as $iconeItem)
                <img src="/images/{{ $iconeItem['image'] }}" alt="{{ $iconeItem['label'] }}">
                <span class="label me-2">{{ $iconeItem['label'] }}</span>
                @endforeach
            </div>
        </div>
    </div>

    <!-- sezione centrale -->
    <div class="main-section">
        <div class="container flex d-flex justify-content-between">
            <div class="col">
                <h4>DC COMICS</h4>
                <ul>
                    <li><a href="#">Characters</a></li>
                    <li><a href="#">Comics</a></li>
                    <li><a href="#">Movies</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">Games</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">News</a></li>
                </ul>
                <h4>SHOP</h4>
                <ul>
                    <li><a href="#">Shop DC</a></li>
                    <li><a href="#">Shop DC Collectibles</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>DC</h4>
                <ul>
                    <li><a href="#">Temos Of Use</a></li>
                    <li><a href="#">Privacy policy (New)</a></li>
                    <li><a href="#">Ad Choices</a></li>
                    <li><a href="#">Advertising</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Subscriptions</a></li>
                    <li><a href="#">Talent Workshops</a></li>
                    <li><a href="#">CPSC Cerrificates</a></li>
                    <li><a href="#">Ratings</a></li>
                    <li><a href="#">Shop Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col">
                <h4>SITES</h4>
                <ul>
                    <li><a href="#">DC</a></li>
                    <li><a href="#">MAD Magazine</a></li>
                    <li><a href="#">DC Kids</a></li>
                    <li><a href="#">DC Universe</a></li>
                    <li><a href="#">DC Power Visa</a></li>
                </ul>
            </div>

            <div class="">
                <img src="{{ Vite::asset('public/images/dc-logo-bg.png') }}" alt="dc-logo">
            </div>
        </div>
    </div>

    <!-- sezione social -->
    <div class="social-section">
        <div class="container row-social d-flex justify-content-between">
            <div>
                <button class="btn">SING-UP NOW!</button>
            </div>
            <div class="social">
                <h3 class="follow">FOLLOW US</h3>
                <ul>
                    @foreach($social as $socialItem)
                    <li class="active">
                        <a href="#"><img src="/images/{{ $socialItem['logo'] }}" alt="social"></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</footer>