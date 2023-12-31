<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
            <img src="{{ asset('frontend/img2/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link @if (request()->is('/')) active @endif">Home</a>
                <a href="{{ route('restaurants.index') }}" class="nav-item nav-link @if (request()->is('all_restaurants')) active @endif">Restaurants</a>
                <a href="{{ route('services') }}" class="nav-item nav-link @if (request()->is('services')) active @endif">Services</a>
                <a href="{{ route('about') }}" class="nav-item nav-link @if (request()->is('about')) active @endif">About</a>
                <a href="{{ route('contact.index') }}" class="nav-item nav-link @if (request()->is('contact')) active @endif">Contact</a>
            </div>
            @auth
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="{{ Auth::user()->image }}" style="width: 50px; height: 50px; border-radius: 50%;">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title" style="margin-top: 5px; margin-left: 18px">{{ Auth::user()->name }}</div>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <center><button type="submit" class="btn btn-primary btn-lg btn-block" style="font-size: 15px; margin-bottom:10px" >Logout</button></center>
                        </form>
                    </div>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4">Login</a>

            @endauth



        </div>
    </nav>
