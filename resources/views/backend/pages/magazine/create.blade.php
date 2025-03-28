@extends('dashboard')

@section('contents')
    <!-- Uppy CSS -->
    <link rel="stylesheet" href="https://releases.transloadit.com/uppy/v3.0.0/uppy.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }

        #drag-drop-area {
            max-width: 500px;
            margin: auto;
        }
    </style>

    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Upload Magazine</h3>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                            <span class="text-secondary fw-medium hover">Dashboard</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Messages</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Messages Details</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="col-lg-12">
            <div class="card bg-white border-0 rounded-3 mb-4">
                <div class="card-body p-4">
                    <div id="drag-drop-area" data-upload-url="{{ route('magazine.chunk_upload') }}"></div>
                    <div id="upload-progress" style="margin-top: 20px; font-weight: bold;"></div>
                </div>
            </div>
        </div>
    </div>

     <!-- Uppy JS -->
    <script src="https://releases.transloadit.com/uppy/v3.0.0/uppy.min.js"></script>
    <script src="{{ asset('assets/js/uppy-upload.js') }}"></script>
@endsection

{{-- @section('scripts')

@endsection --}}
