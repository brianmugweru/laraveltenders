<body>
        <nav>
          <div class="nav-wrapper">
            <a href="/" class="brand-logo">Bids and Tenders</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="#">Bid Opportunities</a></li>
                <!--@if (Route::has('login'))
                  @if (Auth::check())-->
                  <!--@else-->
                    <li><a href="{{url('/login') }}">login</a></li>
                    <li><a href="{{url('/users/create') }}" class="btn">register</a></li>
                  <!--@endif
                @endif-->
            </ul>
          </div>
        </nav>

