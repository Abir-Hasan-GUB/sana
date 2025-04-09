  <!-- header -->
<!-- header -->
<header class="bg-secondary" style="z-index: 10000;">
    <div class="container text-center text-md-start">
        <nav class="navbar navbar-expand-lg navbar-light py-3 justify-content-between gap-4">
            <div class="">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img id="navbar-logo-img" src="{{asset('assets/images/logo.png')}}" alt="Navbar Logo" height="50">
                </a>
            </div>
            <button id="navbar-menu-btn" class="navbar-toggler py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="width: 2.7rem;">
                <i id="navbar-menu-open-icon" class="fas fa-bars"></i>
                <i id="navbar-menu-close-icon" class="fas fa-times d-none"></i>
            </button>
            <div id="navbarNav" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav align-items-center gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('features')}}">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item ms-lg-3 d-flex gap-2">
                        <a href="{{route('join_waitlist')}}" class="btn btn-primary rounded-pill p-2 px-4">
                            join Waitlist
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- header : end -->
