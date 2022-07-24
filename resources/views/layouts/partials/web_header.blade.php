<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between {{ (\Request::route()->getName())=='home'? 'homeClass' : '' }}">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center">
      <img src="{{ asset($content->logo) }}" alt="">
      <span>Backlight</span>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="{{route('home')}}#hero">Home</a></li>
        <li><a class="nav-link scrollto {{(@$pageName=='about')? 'active': ''}}" href="{{ route('about') }}">About</a></li>
        <li><a class="nav-link scrollto" href="{{ route('product') }}">Product</a></li>
        {{-- <li><a class="nav-link scrollto" href="#values">Speciality</a></li> --}}
        <li><a class="nav-link scrollto" href="{{route('home')}}#features">Factory</a></li>
        {{-- <li><a class="nav-link scrollto" href="#history">History</a></li> --}}
        <li><a class="nav-link scrollto" href="{{ route('faq') }}">FAQ</a></li>
        <li><a class="nav-link scrollto" href="{{ route('gallery') }}">Gallery</a></li>
        <li><a class="nav-link scrollto" href="{{ route('team') }}">Team</a></li>
        <li><a class="nav-link scrollto" href="{{ route('webnews') }}">News</a></li>
        <li><a class="nav-link scrollto" href="{{ route('home') }}#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->