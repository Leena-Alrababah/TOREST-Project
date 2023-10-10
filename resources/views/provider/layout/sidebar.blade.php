<!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <img src="{{asset('backend/img/avatars/logo.png')}}" alt="" style="width: 50%; height: 40px; margin: 10px 20px;">

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="{{ route('provider.home') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>

                    

                    {{-- <li class="@setActive(Route::is('customers.*')) menu-item">
    <a href="{{ route('admin.customers.index') }}" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
        <div>Customers</div>
    </a>
</li> --}}

<li class="menu-item ">
        <a href="" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-store"></i>
          <div >About Restaurant</div>
        </a>
      </li>


      <li class="menu-item ">
        <a href="{{ route('admin.reservations.index') }}" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
          <div >Reservations</div>
        </a>
      </li>

      <li class="menu-item ">
        <a href="{{ route('admin.reviews.index') }}" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-star"></i>
          <div >Reviews</div>
        </a>
      </li>
       <li class="menu-item ">
        <a href="{{ route('provider.menu.index') }}" class="menu-link">
          <i class="menu-icon fa fa-cutlery"></i>
          <div >Menu</div>
        </a>
      </li>
      <li class="menu-item ">
        <a href="{{ route('provider.tables.index') }}" class="menu-link">
          <i class="menu-icon tf-icons mdi mdi-table"></i>
          <div >Tables</div>
        </a>
      </li>
            </aside>
            <!-- / Menu -->