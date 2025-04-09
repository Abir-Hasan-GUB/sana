{{-- <link rel="stylesheet" href="{{asset('assets/css/sidebar-menu.css')}}"> --}}
<script src="{{asset('assets/frontend/js/fontawesome.solid.js')}}" defer></script>
<script src="{{asset('assets/frontend/js/splide.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/splide.scroll.min.js')}}"></script>

<script src="{{asset('assets/frontend/js/script.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.js')}}"></script>

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