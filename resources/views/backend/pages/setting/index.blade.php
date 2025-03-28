@extends('dashboard')
@section('contents')

    <div class="">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Company List</h3>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                            <span class="text-secondary fw-medium hover">Dashboard</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Companies</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Company List</span>
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

                    <div class="row row-cols-md-3 g-3 row-cols-1">
                        <div class="mb-3 col">
                            <label class="form-label">Address</label>
                            <input type="text" name="address" class="form-control"
                                value="{{ $settings['address'] ?? '' }}">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control"
                                value="{{ $settings['phone'] ?? '' }}">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="{{ $settings['email'] ?? '' }}">
                        </div>

                        {{-- Social links --}}
                        <div class="mb-3 col">
                            <label class="form-label">Facebook</label>
                            <input type="text" name="facebook" class="form-control"
                                value="{{ $settings['facebook'] ?? '' }}">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Twitter</label>
                            <input type="text" name="twitter" class="form-control"
                                value="{{ $settings['twitter'] ?? '' }}">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">YouTube</label>
                            <input type="text" name="youtube" class="form-control"
                                value="{{ $settings['youtube'] ?? '' }}">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">LinkedIn</label>
                            <input type="text" name="linkedin" class="form-control"
                                value="{{ $settings['linkedin'] ?? '' }}">
                        </div>


                        {{-- <div class="mb-3 col">
                        <label class="form-label">Business Hours</label>
                        <input type="text" name="business_hours" class="form-control"
                            value="{{ $settings['business_hours'] ?? '' }}">
                    </div> --}}

                        <div class="mb-3 col">
                            <label class="form-label">Footer Summary</label>
                            <textarea name="footer_summary" class="form-control">{{ $settings['footer_summary'] ?? '' }}</textarea>
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Navigation Logo</label>
                            <input type="file" name="nav_logo" class="form-control">
                            @if (isset($settings['nav_logo']))
                                <img class="mt-1" src="{{ asset($settings['nav_logo']) }}" width="100">
                            @endif
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Favicon</label>
                            <input type="file" name="favicon" class="form-control">
                            @if (isset($settings['favicon']))
                                <img class="mt-1" src="{{ asset($settings['favicon']) }}" width="50">
                            @endif
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label">Footer Logo</label>
                            <input type="file" name="footer_logo" class="form-control">
                            @if (isset($settings['footer_logo']))
                                <img class="mt-1" src="{{ asset($settings['footer_logo']) }}" width="100">
                            @endif
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg w-50">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
