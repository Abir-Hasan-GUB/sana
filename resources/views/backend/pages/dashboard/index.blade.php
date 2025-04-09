@extends('dashboard')

@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-lg-4">
               <a href="{{route('contact-us.index')}}" class="text-decoration-none">
                <div class="card bg-white border-0 shadow rounded-3 mb-4" style="height: 250px;">
                    <div class="card-body p-4 text-center d-flex align-items-center justify-content-center">
                        <div class="inner">
                            <div class="mb-3">
                                <i class="fas fa-envelope fa-3x text-primary"></i>
                            </div>
                            <h4 class="fw-bold">Total Waitlist Request</h4>
                            <p class="fs-3 text-dark">{{ $total_messages }}</p>
                        </div>
                    </div>
                </div>
               </a>
            </div>

        </div>
    </div>
@endsection
