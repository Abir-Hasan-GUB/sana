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

        <div class="card bg-white border-0 rounded-3 mb-4">
            <div class="card-body p-4">
                <div class="default-table-area all-products">
                    <div class="table-responsive">
                        <table class="table align-middle" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Join Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    <tr>
                                        <td class="text-body">{{ $loop->index + 1 }}</td>
                                        <td>
                                            <h6 class="fw-medium fs-14 mb-0">{{ $team->name }}</h6>
                                        </td>
                                        <td class="text-secondary">{{ $company->email ?? "---" }}</td>
                                        <td class="text-secondary">{{ $company->creatd_at ?? "---" }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-1">
                                                <a href="{{ route('comittee') }}" target="_blank"
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
