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
            <h3 class="mb-0">Magazine List</h3>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                            <span class="text-secondary fw-medium hover">Dashboard</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Magazine</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Magazine List</span>
                    </li>
                </ol>
            </nav>
        </div>

        @include('components.notification')

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="text-end">
                    <!-- Button to trigger the modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        Upload PDF
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="uploadModalLabel">Upload PDF</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="card bg-white border-0 rounded-3 mb-4">
                                        <div class="card-body p-4">
                                            <div id="drag-drop-area" data-upload-url="{{ route('magazine.chunk_upload') }}">
                                            </div>
                                            <div id="upload-progress" style="margin-top: 20px; font-weight: bold;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-3 row-cols-md-5 g-4">
                    @foreach ($magazines as $magazine)
                        <div class="col">
                            <div class="card">
                                <img src="{{ asset('assets/images/pdf.png') }}" class="img-fluid p-2" alt="Magazine Banner">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $magazine->title }}</h5>
                                    <a href="{{ route('magazines.show', $magazine->id) }}" class="btn btn-info">Download</a>
                                    <form action="{{ route('magazines.destroy', $magazine->id) }}" method="POST"
                                        class="d-inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-3">
                    {{ $magazines->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Uppy JS -->
    <script src="https://releases.transloadit.com/uppy/v3.0.0/uppy.min.js"></script>
    <script src="{{ asset('assets/js/uppy-upload.js') }}"></script>
@endsection
