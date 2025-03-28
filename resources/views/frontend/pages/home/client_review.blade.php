    <!-- clients reviews -->
    <section id="reviews" class="bg-white py-5">
        <div class="overlay py-3" data-aos="fade-up">
            <div class="container text-center px-4">
                <h1 class="mb-3">
                    What Professionals Are Saying
                </h1>
                <div class="col-lg-5 mb-4 mx-auto">
                    Effortless booking, streamlined management, and a built-in health shop—on mobile.
                </div>
            </div>
            <div class="splide reviews" role="group">
                <div class="splide__track px-4 py-4">
                    <ul class="splide__list align-items-center">

                            <li class="splide__slide">
                                <div class="review-card d-flex flex-column gap-3 border rounded-4 p-4 h-100">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                    "SANA addresses the biggest headaches in my practice-scheduling and client documentation. I joined the SANA waitlist because it's the one-stop solution our field has been waiting for."
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="./images/client-review-profile.png" alt="" height="70">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0">Dr. Anika Warren,</h5>
                                            <div>
                                                Acupuncturist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="review-card d-flex flex-column gap-3 border rounded-4 p-4 h-100">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                    "SANA addresses the biggest headaches in my practice-scheduling and client documentation. I joined the SANA waitlist because it's the one-stop solution our field has been waiting for."
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="./images/client-review-profile.png" alt="" height="70">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0">Dr. Anika Warren,</h5>
                                            <div>
                                                Acupuncturist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="review-card d-flex flex-column gap-3 border rounded-4 p-4 h-100">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                    "SANA addresses the biggest headaches in my practice-scheduling and client documentation. I joined the SANA waitlist because it's the one-stop solution our field has been waiting for."
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="./images/client-review-profile.png" alt="" height="70">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0">Dr. Anika Warren,</h5>
                                            <div>
                                                Acupuncturist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="splide__slide">
                                <div class="review-card d-flex flex-column gap-3 border rounded-4 p-4 h-100">
                                    <i class="fas fa-quote-left fa-2x"></i>
                                    "SANA addresses the biggest headaches in my practice-scheduling and client documentation. I joined the SANA waitlist because it's the one-stop solution our field has been waiting for."
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="">
                                            <img src="./images/client-review-profile.png" alt="" height="70">
                                        </div>
                                        <div class="">
                                            <h5 class="mb-0">Dr. Anika Warren,</h5>
                                            <div>
                                                Acupuncturist
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                    </ul>
                    <div class="py-3"></div>
                </div>
            </div>
            <script>
                let client_reviews = new Splide('.splide.reviews', {
                    type: 'loop', perPage: 3, focus: 0, gap: "1rem",
                    autoplay: true, interval: 3000, pauseOnHover: true,
                    arrows: false, pagination: true,
                    breakpoints: {
                        1200: {
                            perPage: 2,
                        },
                        768: {
                            perPage: 1,
                            focus: 1,
                        }
                    }
                }).mount();

                let review_cards = document.querySelectorAll('.review-card');
                review_cards[client_reviews.index + 7].classList.add('active');

                client_reviews.on( 'move', function () {

                    review_cards = document.querySelectorAll('.review-card');
                    review_cards.forEach((card, index) => {
                        card.classList.remove('active');
                    })
                    review_cards[client_reviews.index + 7].classList.add('active');

                });

            </script>
        </div>
    </section>
    <!-- clients reviews : end -->
