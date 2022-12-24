<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a  @if (Route::currentRouteName() == "/") class="active" @endif href="{{url('/')}}">Home</a></li>
          <li><a @if (Route::currentRouteName() == "/about") class="active" @endif href="{{url('/about')}}">About</a></li>
          <li><a @if (Route::currentRouteName() == "/service") class="active" @endif href="{{url('/service')}}">Services</a></li>
          <li><a @if (Route::currentRouteName() == "/portfolio") class="active" @endif href="{{url('/portfolio')}}">Portfolio</a></li>
          <li><a @if (Route::currentRouteName() == "/team") class="active" @endif href="{{url('/team')}}">Team</a></li>
          <li><a @if (Route::currentRouteName() == "/blog") class="active" @endif href="{{url('/blog')}}">Blog</a></li>
          <li><a @if (Route::currentRouteName() == "/contact") class="active" @endif href="{{url('/contact')}}">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
