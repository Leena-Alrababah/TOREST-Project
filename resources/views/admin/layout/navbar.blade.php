<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="mdi mdi-menu mdi-24px"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <ul class="navbar-nav flex-row align-items-center ms-auto">


            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ Auth::user()->image }}" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                        <a class="dropdown-item pb-2 mb-1" href="pages-account-settings-account.html">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 me-2 pe-1">
                                    <div class="avatar avatar-online">
                                        <img src="{{ Auth::user()->image }}" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider my-0"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="profile.html">

                            <span class="align-middle"> <x-dropdown-link :href="route('profile.edit')">
                                    <i class="mdi mdi-account-outline me-1 mdi-20px"></i>{{ __('Profile') }}
                                </x-dropdown-link></span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="mdi mdi-logout me-1 mdi-20px"></i>{{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->



        </ul>
    </div>






</nav>

<!-- / Navbar -->
