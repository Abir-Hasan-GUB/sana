    <!-- clients section -->
    <section class="bg-primary">
        <div class="py-4 position-relative">
            <div class="fade-side-overlay "></div>
            <div class="d-flex flex-column gap-2 text-center text-md-start">
                <div class="splide clients" role="group">
                    <div class="splide__track">
                        <ul class="splide__list align-items-center text-center">
                            <li class="splide__slide"><img src="./images/client1.png" alt="" loading="lazy" height="40" /></li>
                        </ul>
                    </div>
                </div>
                <script>
                    new Splide('.splide.clients', {
                        type: 'loop', drag: 'free',
                        focus: 'center', perPage: 5,
                        autoScroll: { speed: 1, },
                        arrows: false, pagination: false,
                        breakpoints: {
                            1200: {
                                perPage: 3,
                            },
                            768: {
                                perPage: 1,
                            }
                        }
                    }).mount(window.splide.Extensions);
                </script>
            </div>
        </div>
    </section>
    <!-- clients section : end -->
