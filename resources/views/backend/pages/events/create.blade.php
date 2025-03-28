@extends('dashboard')

@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Creat Event</h3>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center mb-0 lh-1">
                    <li class="breadcrumb-item">
                        <a href="#" class="d-flex align-items-center text-decoration-none">
                            <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                            <span class="text-secondary fw-medium hover">Dashboard</span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Events</span>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span class="fw-medium">Create Event</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Title -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Banner Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <!-- Date & Time -->
                    <div class="mb-3">
                        <label for="date_time" class="form-label">Date & Time</label>
                        <input type="datetime-local" class="form-control" id="date_time" name="date_time" required>
                    </div>

                    <!-- Location -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <!-- Total Seat -->
                    <div class="mb-3">
                        <label for="total_seat" class="form-label">Total Seat</label>
                        <input type="number" class="form-control" id="total_seat" name="total_seat" min="1"
                            required>
                    </div>

                    <!-- Banner Upload -->
                    <div class="mb-3">
                        <label for="banner" class="form-label">Event Banner</label>
                        <input type="file" class="form-control" id="banner" name="banner" required>
                        <small class="text-muted">Upload a banner image for the event (Max 2MB).</small>
                    </div>

                    <!-- About Event -->
                    <div class="mb-3">
                        <label for="about_event" class="form-label">About Event</label>
                        <textarea class="form-control" id="about_event" name="about_event" rows="4" required></textarea>
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label for="images" class="form-label">Event Images</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple required>
                        <small class="text-muted">You can upload multiple images (Max 2MB per image).</small>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </form>
            </div>
        </div>
    </div>
@endsection
