<body>
        <nav>
          <div class="nav-wrapper">
            <a href="/" class="brand-logo">Bids and Tenders</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!--@if (Route::has('login'))
                  @if (Auth::check())-->
                    <li><a href="#">My Bids</a></li>
                    <li><a href="#">{{Auth::User()->firstname}} {{Auth::User()->lastname}}</a></li>
                    <li><a href="{{url('/logout') }}">logout</a></li>
                  <!--@else-->
                    <li><a href="{{url('/login') }}">login</a></li>
                    <li><a href="{{url('/users/create') }}" class="btn">register</a></li>
                  <!--@endif
                @endif-->
            </ul>
          </div>
        </nav>

