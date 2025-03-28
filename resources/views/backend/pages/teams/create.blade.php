@extends('dashboard')
@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Comittee List</h3>

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
                        <span class="fw-medium">Comittee List</span>
                    </li>
                </ol>
            </nav>
        </div>

        @include('components.notification')

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="name">Team Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <label for="logo">Team Logo</label>
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Twitter Link</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group mb-4">
                        <label for="twitter">Twitter Link</label>
                        <input type="url" name="twitter" id="twitter" class="form-control" placeholder="https://twitter.com/yourprofile">
                    </div>
                    <div class="form-group mb-4">
                        <label for="facebook">Facebook Link</label>
                        <input type="url" name="facebook" id="facebook" class="form-control" placeholder="https://facebook.com/yourprofile">
                    </div>
                    <div class="form-group mb-4">
                        <label for="linkedin">LinkedIn Link</label>
                        <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="https://linkedin.com/in/yourprofile">
                    </div>
                    <button type="submit" class="btn btn-primary">Create Team</button>
                </form>
            </div>
        </div>
    </div>
@endsection
