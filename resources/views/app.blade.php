<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Index | SANA
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A description of the website for search engines and social media.">
    <meta property="og:title" content="Index">
    <meta property="og:description" content="A description of the page.">
    <meta property="og:image" content="./images/og-image.png">
    <meta property="og:url" content="https://example.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rasa:ital,wght@0,300..700;1,300..700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="canonical" href="https://example.com/">

    <!-- Links Of CSS File -->
    @include('frontend.layouts.styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Title -->
    <title>Homepage</title>
</head>

<body>
    <main>
        {{-- Header --}}
        @include('frontend.layouts.header')

        <!-- Start Main Content Area -->
        <div class="container-fluid px-0">
            {{-- All Inner main contents load here --}}
            @yield('contents')
        </div>
        <!-- End Main Content Area -->

        @include('frontend.layouts.footer')
        <!-- Link Of JS File -->
        @include('frontend.layouts.scripts')
    </main>
</body>

</html>
