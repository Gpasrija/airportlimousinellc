<header class="header sticky-bar">
    <div class="container">
      <div class="main-header">
        <div class="header-left">
          <div class="header-logo"><a class="d-flex" href="{{ url('/') }}"><img alt="airportlimousinellc" src="{{ asset('imgs/template/logo.svg') }}"></a></div>
          <div class="header-nav">
            <nav class="nav-main-menu d-none d-xl-block">
              <ul class="main-menu">
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li><a class="active" href="{{ url('/aboutus') }}">About</a></li>
                <li><a class="active" href="{{ url('/fleet') }}">Our Fleet</a></li>
                <li><a class="active" href="{{ url('/services') }}">Services</a></li>
                <li><a class="active" href="{{ url('/corporateAccount') }}">Corporate Account</a></li>
                <li><a class="active" href="{{ url('/contact') }}">Contact</a></li>
              </ul>
            </nav>
            <div class="burger-icon burger-icon-white"><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
          </div>
          <div class="header-right">
            <div class="d-xxl-inline-block align-middle mr-10"><a class="text-14-medium call-phone color-white hover-up" href="tel:+1 765-315-6780">+1 765-315-6780</a></div>
            <!-- <div class="d-xxl-inline-block box-dropdown-cart align-middle mr-10"><span class="text-14-medium icon-list icon-account"><span class="text-14-medium color-white arrow-down">EN</span></span>
            </div> -->
            <!-- <div class="box-button-login d-inline-block mr-10 align-middle"><a class="btn btn-default hover-up" href="login.html">Log In</a></div>
            <div class="box-button-login d-none2 d-inline-block align-middle"><a class="btn btn-white hover-up" href="register.html">Sign Up</a></div> --}} -->
          </div>
        </div>
      </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                          <li><a href="{{ url('/') }}">Home</a></li>
                          <li><a href="{{ url('/aboutus') }}">About</a></li>
                          <li><a href="{{ url('/fleet') }}">Our Fleet</a></li>
                          <li><a href="{{ url('/services') }}">Services</a></li>
                          <li><a href="{{ url('/corporateAccount') }}">Corporate Account</a></li>
                          <li><a href="{{ url('/contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
