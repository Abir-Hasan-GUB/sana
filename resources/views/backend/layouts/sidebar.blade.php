<!-- Start Sidebar Area -->
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{ route('dashboard') }}" class="d-block text-decoration-none position-relative">
            {{-- <img src="assets/images/logo-icon.png" alt="logo-icon"> --}}
            <span class="logo-text fw-bold text-dark">ABBC</span>
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
                    <span class="title">Messages</span>
                </a>
            </li>
            {{-- Home --}}
            <li class="menu-item {{ request()->routeIs('homepage.index') ? 'active' : '' }}">
                <a href="{{route('homepage.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">home</span>
                    <span class="title">Home Page</span>
                </a>
            </li>
            {{-- About Us --}}
            <li class="menu-item {{ request()->routeIs('aboutPage.index') ? 'active' : '' }}">
                <a href="{{route('aboutPage.index')}}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">info</span>
                    <span class="title">About Us Page</span>
                </a>
            </li>

              {{-- Membership Page --}}
              <li class="menu-item {{ request()->routeIs('membershipPage.index') ? 'active' : '' }}">
                <a href="{{ route('membershipPage.index') }}" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">card_membership</span>
                    <span class="title">Membership Page</span>
                </a>
            </li>

            {{-- Companies --}}
            <li class="menu-item {{ request()->routeIs('company-registration.index') ? 'active' : '' }}">
                <a href="{{ route('company-registration.index') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">business</span>
                    <span class="title">Companies</span>
                </a>
            </li>


            {{-- Other Pages --}}
            <li class="menu-item {{ request()->routeIs('team.create') ? 'active' : '' }}">
                <a href="{{ route('team.create') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">group_add</span>
                    <span class="title">Add Committee Member</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('team.index') ? 'active' : '' }}">
                <a href="{{ route('team.index') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">groups</span>
                    <span class="title">Committee List</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('event.index') ? 'active' : '' }}">
                <a href="{{ route('event.index') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">event</span>
                    <span class="title">Events</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('magazines.index') ? 'active' : '' }}">
                <a href="{{ route('magazines.index') }}" class="menu-link ">
                    <span class="material-symbols-outlined menu-icon">menu_book</span>
                    <span class="title">Magazines</span>
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
