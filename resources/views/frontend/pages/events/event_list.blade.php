<section class="contact-us-area position-relative z-2" id="event_list">

    {{-- <div class="container-fluid px-0">
        <img src="{{asset('assets/images/banner-yellow.png')}}" alt="banner" class="img-fluid w-100">
    </div> --}}

    <div class="container mt-5 mb-5">
        {{-- <h2 class="text-center fs-60">Upcomming Events</h2>
        <div class="row row-cols-md-3 row-cols-1 g-4 mt-5">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card bg-white border-0 rounded-3 mb-4 transition-y">
                        <div class="card-body p-4">
                            <div class="position-relative mb-3">
                                <a href="{{ route('event.show', $event->id) }}">
                                    <img src="{{ asset('storage/' . $event->banner) }}" class="rounded-3"
                                        alt="event">
                                </a>
                            </div>
                            <a href="{{ route('event.show', $event->id) }}"
                                class="text-secondary text-decoration-none fs-18 fw-bold hover d-block mb-2">{{ $event->title }}</a>

                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="material-symbols-outlined fs-16 text-body me-1">location_on</i>
                                    <span class="fw-medium text-secondary">{{ $event->location }}</span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="material-symbols-outlined fs-16 text-body me-1">schedule</i>
                                    <span class="fw-medium text-secondary">{{ $event->date_time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}

        {{-- <h2 class="text-center fs-60">Past Events</h2> --}}
        <div class="row row-cols-md-3 row-cols-1 g-4 mt-5">
            @foreach ($events as $event)
                <div class="col">
                    <div class="card bg-white border-0 rounded-3 mb-4 transition-y">
                        <div class="card-body p-4">
                            <div class="position-relative mb-3">
                                <a href="{{ route('event.show', $event->id) }}">
                                    <img src="{{ $event->banner ? asset('storage/' . $event->banner) : 'https://i.ibb.co/cScFqHH/event.png' }}"
                                    class="rounded-3"
                                    alt="event">
                                </a>
                            </div>
                            <a href="{{ route('event.show', $event->id) }}"
                                class="text-secondary text-decoration-none fs-18 fw-bold hover d-block mb-2">{{ $event->title }}</a>

                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex align-items-center">
                                    <i class="material-symbols-outlined fs-16 text-body me-1">location_on</i>
                                    <span class="fw-medium text-secondary">{{ $event->location }}</span>
                                </div>

                                <div class="d-flex align-items-center">
                                    <i class="material-symbols-outlined fs-16 text-body me-1">schedule</i>
                                    <span class="fw-medium text-secondary">{{ $event->date_time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div
                        class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                        <span>Showing 12 of 30 Results</span>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link icon" href="events.html" aria-label="Previous">
                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="events.html">1</a></li>
                                <li class="page-item"><a class="page-link" href="events.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="events.html">3</a></li>
                                <li class="page-item"><a class="page-link" href="events.html">4</a></li>
                                <li class="page-item">
                                    <a class="page-link icon" href="events.html" aria-label="Next">
                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
