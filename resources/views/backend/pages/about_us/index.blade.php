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
                        <span class="fw-medium">About Us Page</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">About Us Page</span>
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
                            <label class="form-label">Board Of Directors</label>
                            <textarea name="director_speach" class="form-control" rows="4">{{ $settings['director_speach'] ?? '' }}</textarea>
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">CEO Speach</label>
                            <textarea name="ceo_speach" class="form-control" rows="4">{{ $settings['ceo_speach'] ?? '' }}</textarea>
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Member Starter Kit</label>
                            <textarea name="member_starter_kit" class="form-control" rows="4">{{ $settings['member_starter_kit'] ?? '' }}</textarea>
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
