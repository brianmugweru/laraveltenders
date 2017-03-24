<body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        </div>
        <nav>
          <div class="nav-wrapper">
            <a href="/" class="brand-logo">Bids and Tenders</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#">Bid Opportunities</a></li>
              <li><a href="{{url('/login') }}">login</a></li>
              <li><a href="{{url('/signup') }}" class="btn">Register</a></li>
            </ul>
          </div>
        </nav>

