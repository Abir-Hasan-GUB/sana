@extends('dashboard')

@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h4 class="fw-bold">Total Messages</h4>
                            <p class="fs-3 text-dark">{{ $total_messages }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-building fa-3x text-success"></i>
                            </div>
                            <h4 class="fw-bold">Total Registered Companies</h4>
                            <p class="fs-3 text-dark">{{ $total_companies }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-users fa-3x text-warning"></i>
                            </div>
                            <h4 class="fw-bold">Total Members</h4>
                            <p class="fs-3 text-dark">{{ $total_memebers }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-calendar-alt fa-3x text-danger"></i>
                            </div>
                            <h4 class="fw-bold">Total Events</h4>
                            <p class="fs-3 text-dark">{{ $total_events }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-book-open fa-3x text-info"></i>
                            </div>
                            <h4 class="fw-bold">Total Magazines</h4>
                            <p class="fs-3 text-dark">{{ $total_magazines }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
