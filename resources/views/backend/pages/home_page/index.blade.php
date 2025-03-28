@extends('dashboard')
@section('contents')

    <div class="">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Home Page</h3>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                            <span class="text-secondary fw-medium hover">Dashboard</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Home Page</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Home Page</span>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="card bg-white">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row row-cols-md-1 g-3 row-cols-1">
                        <div class="mb-3 col">
                            <label class="form-label">Banner Title</label>
                            <input type="text" name="banner_title" class="form-control"
                                value="{{ $settings['banner_title'] ?? '' }}">
                        </div>


                        <div class="mb-3 col">
                            <label class="form-label">Banner Details</label>
                            <input type="text" name="banner_details" class="form-control"
                                value="{{ $settings['banner_details'] ?? '' }}">
                        </div>


                        <div class="mb-3 col">
                            <label class="form-label">Homepage Banner</label>
                            <input type="file" name="home_banner" class="form-control">
                            @if (isset($settings['home_banner']))
                                <img class="mt-1" src="{{ asset($settings['home_banner']) }}" width="100">
                            @endif
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Home Page Down Text</label>
                            <input type="text" name="down_text" class="form-control"
                                value="{{ $settings['down_text'] ?? '' }}">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-50">Update Chenges</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
