<style>
    .form-container {
        background-color: #f0f5e9;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .form-section {
        padding: 40px;
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 25px 0;
    }

    .divider-line {
        flex-grow: 1;
        height: 1px;
        background-color: #dee2e6;
    }

    .divider-text {
        padding: 0 15px;
        color: var(--bs-primary);
    }

    .form-control {
        border: none;
        border-bottom: 1px solid #5f5f5f;
        border-radius: 0;
        padding-left: 0;
        background-color: transparent;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #198754;
    }

    .btn-waitlist {
        background-color: #3c6e37;
        color: white;
        border-radius: 25px;
        padding: 8px 30px;
        border: none;
    }

    .btn-waitlist:hover {
        background-color: #2c5128;
        color: white;
    }

    .password-container {
        position: relative;
    }

    .password-toggle {
        position: absolute;
        right: 0;
        top: 10px;
        cursor: pointer;
        color: #6c757d;
    }
</style>
   
   <!-- form -->
   <section class="bg-secondary">
    <div class="overlay py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="form-container">
                        <div class="row g-0">
                            <!-- Form Section -->
                            <div class="col-md-6">
                                <div class="form-section bg-white px-5">
                                    <h1 class="mb-4 text-primary fw-bold text-center">Get Started.</h1>
                                    @if (session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                    <form action="{{route('contact-us.store')}}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label small text-muted mb-0">Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                placeholder="Mark Norman" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label small text-muted mb-0">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                            placeholder="info@gmail.com" required>
                                        </div>

                                        <div class="text-center mb-4">
                                            <button type="submit" class="btn btn-waitlist">join
                                                Waitlist</button>
                                        </div>
                                    </form>

                                    <div class="divider">
                                        <div class="divider-line"></div>
                                        <div class="divider-text">Continue With...</div>
                                        <div class="divider-line"></div>
                                    </div>

                                    <div class="d-flex gap-4 justify-content-center">
                                        <a href="">
                                            <img src="{{asset('assets/images/google.png')}}" alt="" height="40">
                                        </a>
                                        <a href="">
                                            <img src="{{asset('assets/images/facebook.png')}}" alt="" height="40">
                                        </a>
                                        <a href="">
                                            <img src="{{asset('assets/images/twitter.png')}}" alt="" height="40">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Image Section -->
                            <div class="col-md-6 d-none d-md-block">
                                <img class="h-100 w-100 object-fit-cover" src="{{asset('assets/images/fitness-image.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>
</section>
<!-- form : end -->