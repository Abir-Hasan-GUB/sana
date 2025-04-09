<!-- Start Sidebar Area -->
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('dashboard') }}" class="d-block text-decoration-none position-relative">
            {{-- <img src="assets/images/logo-icon.png" alt="logo-icon"> --}}
            <span class="logo-text fw-bold text-dark">SANA</span>
        </a>
        <button
            class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
            id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>
    <style>
        .menu-inner .menu-item.active {
            background: #00ddff3a;
            color: #fff !important;
        }
    </style>
    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">

            <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            {{-- Messages --}}
            <li class="menu-item {{ request()->routeIs('contact-us.index') ? 'active' : '' }}">
                <a href="{{ route('contact-us.index') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">mail</span>
                    <span class="title">Waitlist</span>
                </a>
            </li>
            {{-- Home --}}
            <li class="menu-item {{ request()->routeIs('homepage.index') ? 'active' : '' }}">
                <a href="{{route('homepage.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">home</span>
                    <span class="title">Home Page</span>
                </a>
            </li>
            {{-- Feature Us --}}
            <li class="menu-item {{ request()->routeIs('aboutPage.index') ? 'active' : '' }}">
                <a href="{{route('aboutPage.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">info</span>
                    <span class="title">Feature Page</span>
                </a>
            </li>

              {{-- FAQ Page --}}
              <li class="menu-item {{ request()->routeIs('faqPage.index') ? 'active' : '' }}">
                <a href="{{ route('faqPage.index') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">card_membership</span>
                    <span class="title">FAQ Page</span>
                </a>
            </li>
           
            <li class="menu-item {{ request()->routeIs('settings.index') ? 'active' : '' }}">
                <a href="{{ route('settings.index') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">tune</span>
                    <span class="title">Settings</span>
                </a>
            </li>

            {{-- My Profile --}}
            <li class="menu-item {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">My Profile</span>
                </a>
            </li>

            {{-- Logout --}}
            <li class="menu-item">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="menu-link btn d-flex align-items-center">
                        <span class="material-symbols-outlined menu-icon">logout</span>
                        <span class="title">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </aside>

</div>
<!-- End Sidebar Area -->
