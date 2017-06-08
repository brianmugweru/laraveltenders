<body>
        <nav style="margin-bottom:0px;">
          <div class="nav-wrapper">
            <a href="/" class="brand-logo">Bids and Tenders</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!--@if (Route::has('login'))
                  @if (Auth::check())-->
                    <li><a href="{{URL::route('bids.index')}}">My Bids</a></li>
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
        @if (Auth::check())
          @if(Auth::User()->isActivated==0)
            <div class="row" style="margin-top:0;margin-bottom:0;">
              <h3 style="background:red;color:white;">PLEASE VISIT YOUR EMAIL FOR ACTIVATION LINK</h3>
            </div>
          @endif
        @endif

