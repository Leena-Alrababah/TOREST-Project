<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <img src="{{ asset('backend/img/avatars/logo.png') }}" alt=""
        style="width: 50%; height: 40px; margin: 10px 20px;">

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item @if (request()->is('home')) active @endif">
            <a href="{{ route('dashboard.home') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-home-circle"></i>
                <div>Dashboard</div>
            </a>
        </li>



        <li class="menu-item @if (request()->is('customers')) active @endif">
            <a href="{{ route('dashboard.customers.index') }}" class="menu-link ">
                <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                <div>Customers</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('restaurants')) active @endif ">
            <a href="{{ route('dashboard.restaurants.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-store"></i>
                <div>Restaurants</div>
            </a>
        </li>


        <li class="menu-item @if (request()->is('reservations')) active @endif ">
            <a href="{{ route('dashboard.reservations.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                <div>Reservations</div>
            </a>
        </li>

        <li class="menu-item @if (request()->is('reviews')) active @endif ">
            <a href="{{ route('dashboard.reviews.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-star"></i>
                <div>Reviews</div>
            </a>
        </li>
        <li class="menu-item @if (request()->is('admins')) active @endif ">
            <a href="{{ route('dashboard.admins.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-human-male"></i>
                <div>Admin</div>
            </a>
        </li>
        <li class="menu-item @if (request()->is('providers')) active @endif ">
            <a href="{{ route('dashboard.providers.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-content-paste"></i>
                <div>Provider</div>
            </a>
        </li>
        <li class="menu-item @if (request()->is('all_contact')) active @endif ">
            <a href="{{ route('dashboard.all_contact.index') }}" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-email"></i>
                <div>Contacts</div>
            </a>
        </li>
</aside>
<!-- / Menu -->
