@extends('dashboard')

@section('contents')
    <div class="main-content-container overflow-hidden">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
            <h3 class="mb-0">Messages List</h3>

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
                        <span class="fw-medium">Messages List</span>
                    </li>
                </ol>
            </nav>
        </div>

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="default-table-area all-products">
                    <div class="table-responsive">
                       <div class="text-end mb-3">
                        <a href="{{route('contacts.export')}}" class="btn btn-success text-white">Export All Waitlist</a>
                       </div>
                        <table class="table align-middle" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    {{-- <th scope="col">Industry</th> --}}
                                    <th scope="col">Is Seen</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td class="text-body">{{ $loop->index + 1 }}</td>
                                        <td>
                                            <h6 class="fw-medium fs-14 mb-0">{{ $message->created_at }}</h6>
                                        </td>
                                        <td class="text-secondary">{{ $message->fullname }}</td>
                                        <td class="text-secondary">{{ $message->email }}</td>
                                        {{-- <td class="text-secondary">{{ $message->industry }}</td> --}}
                                        <td class="text-secondary">
                                            @if ($message->is_seen == 1)
                                                <button class="btn btn-sm btn-success text-white">Seen</button>
                                            @else
                                                <button class="btn btn-sm btn-danger text-white">Un Read</button>
                                            @endif
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <a href="{{ route('contact-us.show', $message->id) }}"
                                                    class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                    <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                </a>
                                                {{-- <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                    <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                </button>
                                                <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                                                    <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                </button> --}}
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
