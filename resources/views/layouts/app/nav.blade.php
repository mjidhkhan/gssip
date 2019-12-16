 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-gray-900" style="margin-left: 0px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav ">
      <li class="nav-item brand-link" style="padding: 0.125rem 0.5rem; width:auto">
         <img src={{ asset('./images/sip-2.png')}} alt="G3T" class=" brand-image img-circle elevation-0"
             style="opacity: 1.0">
      </li>

      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link text-white h4">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link text-white h4">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto ">
      <!-- Messages Dropdown Menu -->
       @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}">Home</a>
                <div class="top-right links">
                    @else
                         <li class="nav-item">
                            <a class="nav-link text-white h4"  href="{{ route('login') }}">
                            <i class="fa fa-user"></i> Login
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link text-white h4"href="{{ route('register') }}">
                                <i class="far fa-bell"></i>
                                Register
                                </a>
                            </li>
                        @endif
                    @endauth
                </div>
            @endif
     
      <!-- Notifications Dropdown Menu -->
      
    </ul>
  </nav>
  <!-- /.navbar -->