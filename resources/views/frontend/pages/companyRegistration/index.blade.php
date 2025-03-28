@extends('app')
@section('contents')
    @include('frontend.componants.page_title', ['page_title' => 'Register for Membership', 'description' => null])
    <!-- Start Contact Us Area -->

    @include('components.notification')

    <div class="contact-us-area pt-5 position-relative z-2 mb-5 pb-5" id="contact">
        <div class="container">
            <div class="">
                <div class="card shadow-lg">
                    <div class="card-header bg-dark text-white text-center">
                        <h4 class="mb-0 text-white">Register Your Company</h4>
                    </div>
                    <div class="card-body p-4">
                        <div class="contact-us-form">
                            <form action="{{ route('company-registration.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="email" class="label text-secondary">Your Email Address *</label>
                                            <input type="email" id="email" name="email"
                                                class="form-control bg-light h-55" placeholder="Your email address"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="name" class="label text-secondary">Your Name *</label>
                                            <input type="text" id="name" name="name"
                                                class="form-control bg-light h-55" placeholder="Your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-4">
                                            <label for="category_id" class="label text-secondary">Category *</label>
                                            <select name="category_id" id="category_id" class="form-control w-100">
                                                <option value="" selected>Select Category</option>
                                                @foreach ($company_categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="mobile" class="label text-secondary">Your Mobile Number</label>
                                            <input type="tel" id="mobile" name="mobile"
                                                class="form-control bg-light h-55" placeholder="Your mobile number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="business-location" class="label text-secondary">Your Business
                                                Location *</label>
                                            <input type="text" id="business-location" name="business-location"
                                                class="form-control bg-light h-55"
                                                placeholder="Mention if you have multiple branches" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="business-name" class="label text-secondary">Your Business Name or
                                                Trading Name *</label>
                                            <input type="text" id="business-name" name="business-name"
                                                class="form-control bg-light h-55" placeholder="Your business name"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="abn-acn" class="label text-secondary">Your Business ABN / ACN
                                                *</label>
                                            <input type="text" id="abn-acn" name="abn-acn"
                                                class="form-control bg-light h-55" placeholder="Your ABN/ACN" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="position" class="label text-secondary">Your Position in Your
                                                Business *</label>
                                            <input type="text" id="position" name="position"
                                                class="form-control bg-light h-55" placeholder="Your position" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="business-age" class="label text-secondary">Age of Your Business
                                                *</label>
                                            <input type="text" id="business-age" name="business-age"
                                                class="form-control bg-light h-55"
                                                placeholder="How long has your business been operating?" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="website" class="label text-secondary">Business Website Link</label>
                                            <input type="url" id="website" name="website"
                                                class="form-control bg-light h-55" placeholder="Your website link">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="facebook" class="label text-secondary">Facebook Page Link</label>
                                            <input type="url" id="facebook" name="facebook"
                                                class="form-control bg-light h-55" placeholder="Your Facebook Page link">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="company-banner" class="label text-secondary">Company
                                                Banner</label>
                                            <input type="file" id="company-banner" name="company_banner"
                                                class="form-control bg-light h-55" accept="image/*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">
                                                By submitting this form, you are authorizing us to publish your business
                                                contact and basic information in our business directory. *
                                            </label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="authorize"
                                                    id="yes" value="yes" required>
                                                <label class="form-check-label" for="yes">Yes</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="authorize"
                                                    id="no" value="no">
                                                <label class="form-check-label" for="no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="success-story" class="label text-secondary">Please tell us a brief about
                                        your success story, your expertise, and your specialty to know more about your
                                        business.</label>
                                    <textarea id="success-story" name="success-story" rows="5" class="form-control bg-light"
                                        placeholder="Write your story..."></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="special-offer" class="label text-secondary">What is your special offer or
                                        message to the Bangladeshi community?</label>
                                    <textarea id="special-offer" name="special-offer" rows="5" class="form-control bg-light"
                                        placeholder="Your special offer or message..."></textarea>
                                </div>

                                <div class="form-group mb-4">
                                    <label for="special-instructions" class="label text-secondary">Special Instructions:
                                        If you do not wish to display any particular information or contacts, please let us
                                        know here.</label>
                                    <textarea id="special-instructions" name="special-instructions" rows="5" class="form-control bg-light"
                                        placeholder="Your special instructions..."></textarea>
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary py-2 px-4 w-100">
                                        <i class="ri-refresh-line fs-18 text-white position-relative top-1 me-1"></i>
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us Area -->
@endsection
