<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links Of CSS File -->
    @include('backend.layouts.styles')

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Title -->
    <title>Dashboard</title>
</head>

<body class="boxed-size">
    <!-- Start Preloader Area -->
    @include('backend.layouts.preloader')

    <!-- Start Sidebar Area -->
    @include('backend.layouts.sidebar')

    <!-- Start Main Content Area -->

    <!-- End Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <!-- Start Header Area -->
            @include('backend.layouts.header')

            {{-- All Inner main contents load here --}}
            @yield('contents')

            <!-- Start Footer Area -->
            <div class="flex-grow-1"></div>
            @include('backend.layouts.footer')
        </div>
    </div>

    <!-- Link Of JS File -->
    @include('backend.layouts.scripts')
</body>

</html>
