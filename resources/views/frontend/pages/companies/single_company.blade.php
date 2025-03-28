{{-- Start Company details here --}}

<div class="property-details-area position-relative z-1 mt-5 pt-5 pb-5" id="property-details-area">
    <div class="container">
        <div class="row">
            <div class="position-relative mb-4">
                <img style="height: 445px;" class="img-fluid w-100 rounded" src="{{ asset('storage' . '/' . $company->company_banner) }}"
                    alt="property">
            </div>
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 bg-white mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0 text-white">Profile Information</h4>
                    </div>
                    <div class="card-body p-4">
                        <!-- Email -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Email:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">
                                    <a href="mailto:info@abbc.org.au"
                                        class="text-decoration-none text-dark">{{ $company->email }}</a>
                                </p>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Name:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->name }}</p>
                            </div>
                        </div>

                        <!-- Mobile Number -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Mobile Number:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->mobile }}</p>
                            </div>
                        </div>

                        <!-- Business Location -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Business Location:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->business_location }}</p>
                            </div>
                        </div>

                        <!-- Business Name -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Business Name:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->business_name }}</p>
                            </div>
                        </div>

                        <!-- ABN / ACN -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">ABN / ACN:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->abn_acn }}</p>
                            </div>
                        </div>

                        <!-- Position -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Position:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->position }}</p>
                            </div>
                        </div>

                        <!-- Age of Business -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Age of Business:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->business_age }}</p>
                            </div>
                        </div>

                        <!-- Website + Facebook -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Website:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">
                                    <a href="{{ $company->website }}" class="text-decoration-none text-dark"
                                        target="_blank">{{ $company->website }}</a>
                                </p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Facebook:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">
                                    <a href="{{ $company->facebook }}" class="text-decoration-none text-dark"
                                        target="_blank">{{ $company->facebook }}</a>
                                </p>
                            </div>
                        </div>

                        <!-- Success Story -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Success Story:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->success_story }}</p>
                            </div>
                        </div>

                        <!-- Special Offer -->
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Special Message for BD Community:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->special_offer }}</p>
                            </div>
                        </div>

                        <!-- Special Instructions -->
                        <div class="row">
                            <div class="col-md-5">
                                <h5 class="text-primary mb-0">Special Instructions:</h5>
                            </div>
                            <div class="col-md-7">
                                <p class="mb-0">{{ $company->special_instructions }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div
                    class="card border-0 rounded-3 bg-white mb-4 text-center position-relative z-1 overflow-hidden h-100">
                    <div class="card-body px-4 d-flex align-items-center justify-content-center">
                        <h2 class="fs-60">
                            GROW YOUR BUSINESS WITH OUR HELP!
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- End Company details here --}}
