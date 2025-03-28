{{-- Start Comanies list here --}}

<div class="property-lists-area position-relative z-1 mt-5" id="property-lists">
    <div class="property-lists pt-4">
        <div class="container">
            <form class="src-form position-relative" method="GET" action="{{ route('search_company') }}">
                <div class="row pb-4">
                    <!-- Category Dropdown -->
                    <div class="col-sm-2">
                        <select name="categories" id="categories" class="form-control w-100">
                            <option value="" selected>Select Category</option>
                            @foreach ($company_categories as $category)
                                <option value="{{ $category->category_name }}"
                                    {{ request('categories') == $category->category_name ? 'selected' : '' }}>
                                    {{ $category->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Company Name Input -->
                    <div class="col-sm-6">
                        <input type="text" name="company_name" class="form-control w-100"
                            placeholder="Company Name Search Here..." value="{{ request('company_name') }}">
                    </div>

                    <!-- Search Button -->
                    <div class="col-sm-2">
                        <button class="btn btn-primary px-4 fw-medium fs-16 text-white rounded-3 w-100"
                            style="height: 45px;">
                            Search
                        </button>
                    </div>

                    <!-- Register Button -->
                    <div class="col-sm-2">
                        <a href="{{ route('register_company') }}" target="_blank"
                            class="btn btn-dark px-4 fw-medium fs-16 text-white rounded-3 w-100"
                            style="height: 45px;">
                            Register New
                        </a>
                    </div>
                </div>
            </form>


            <div class="row">
                @if ($companies->isEmpty())
                    <div class="col-12">
                        <div class="alert alert-warning text-center">
                            No companies found matching your search criteria.
                        </div>
                    </div>
                @else
                    @foreach ($companies as $company)
                        <div class="col-sm-6 col-xl-6 col-xxl-4 mb-4">
                            <div class="card border-0 rounded-3 bg-white property-list-hover h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex flex-wrap gap-2 justify-content-between align-items-center">
                                        {{-- Action buttons (if needed) --}}
                                    </div>

                                    <!-- Company Banner -->
                                    <a href="{{ route('company.show', $company->id) }}"
                                        class="text-decoration-none d-block mb-4">
                                        <img src="{{ asset('storage/' . $company->company_banner) }}"
                                            class="rounded-2 w-100" alt="property" style="height: 350px;">
                                    </a>

                                    <!-- Company Name -->
                                    <a href="{{ route('company.show', $company->id) }}" class="text-decoration-none">
                                        <h3 class="mb-0">{{ $company->business_name }}</h3>
                                    </a>

                                    <!-- Location -->
                                    <div class="d-flex align-items-center mt-3">
                                        <span class="material-symbols-outlined fs-20 text-primary">location_on</span>
                                        <span class="ms-1">{{ $company->business_location }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination -->
                    <div class="col-lg-12">
                        <div class="card border-0 p-4 mb-4 rounded-3">
                            <div
                                class="d-flex justify-content-center align-items-center text-center flex-wrap gap-2 showing-wrap">
                                {{ $companies->links('vendor.pagination.bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

{{-- End Comanies list here --}}
