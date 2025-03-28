@extends('dashboard')

@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Events</h3>

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
                        <span class="fw-medium">Events List</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
              <div class="text-end">
                <a href="{{route('event.create')}}" class="btn btn-info text-white mb-2" style="widows: 250px;">Create Event</a>
              </div>
                <div class="default-table-area all-products">
                    <div class="table-responsive">
                        <table class="table align-middle" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Event Title</th>
                                    <th scope="col">created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td class="text-body">{{ $loop->index + 1 }}</td>
                                        <td class="text-secondary">{{ $event->title }}</td>
                                        <td class="text-secondary">{{ $event->date_time }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <a target="_blank" href="{{ route('event.show', $event->id) }}"
                                                    class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                    <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                </a>
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                </button>
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
