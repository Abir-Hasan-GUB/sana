<!-- Start Main Content Area -->
<div class="container">
    <div class="">
        <div class="main-content-container overflow-hidden">

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <i
                                                class="material-symbols-outlined d-inline-block wh-70 lh-70 text-center fs-35 text-primary bg-gary-light rounded-circle bg-for-dark-mode">schedule</i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="fs-14 fw-semibold mb-1">Time</h4>
                                            <span>{{ $event->date_time ?? 'N/A' }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <i
                                                class="material-symbols-outlined d-inline-block wh-70 lh-70 text-center fs-35 text-info bg-gary-light rounded-circle bg-for-dark-mode">place</i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="fs-14 fw-semibold mb-1">Location</h4>
                                            <span>{{ $event->location }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-lg-6 col-md-4 col-sm-6">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="flex-shrink-0">
                                            <i
                                                class="material-symbols-outlined d-inline-block wh-70 lh-70 text-center fs-35 text-primary-div bg-gary-light rounded-circle bg-for-dark-mode">event_seat</i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="fs-14 fw-semibold mb-1">Event Seat</h4>
                                            <span>{{ $event->total_seat }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <h3 class="mb-3 mb-lg-4">{{ $event->title }}</h3>
                            <p>{{ $event->about_event }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="event-gallery pb-5">
                <div class="card bg-white border-0 rounded-3 mb-4">
                    <div class="card-body p-4 pb-0">
                        <h3 class="mb-4">Gallery</h3>
                        <div class="row">
                            @foreach ($event->galleries as $gallery)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="mb-4">
                                        <a href="{{ asset('storage/' . $gallery->image_path) }}" target="_blank">
                                            <img src="{{ asset('storage/' . $gallery->image_path) }}"
                                            class="rounded-3 img-fluid w-100" alt="product" style="height: 250px;">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-grow-1"></div>
    </div>
</div>
<!-- Start Main Content Area -->
