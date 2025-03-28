<!-- section cta -->
<section id="cta" class="mb-5 pb-4">
    <div class="mb-5">
        <div class="container text-center text-md-start">
            <div class="bg-white rounded-4 border shadow mt-negative">
                <div class="d-flex flex-column flex-xl-row gap-3 justify-content-between align-items-start rounded-4 px-2">
                    <form id="cta-form" action="{{route('contact-us.store')}}" method="POST" class="col w-100 d-flex flex-column gap-4 py-5 px-4">
                        @csrf
                        <div class="col w-100 d-flex flex-column flex-lg-row justify-content-between align-items-center gap-4">
                            <div class="col w-100">
                                <label for="name" class="mb-2">Name *</label>
                                <input type="text" name="fullname" class="form-control" placeholder="Enter your full name"
                                    aria-label="Name*" required minlength="2" maxlength="50">
                            </div>
                            <div class="col w-100">
                                <label for="phone" class="mb-2">Phone *</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number"
                                    required pattern="\d{10,15}">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="mb-2">Email *</label>
                            <input type="email" name="email" class="form-control"
                                placeholder="Enter your email address" required>
                        </div>
                        <div>
                            <label for="industry" class="mb-2">Industry *</label>
                            <select name="industry" class="form-select" required>
                                <option value="" disabled selected>Select your industry</option>
                                <option value="technology">Technology</option>
                                <option value="finance">Finance</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="education">Education</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="retail">Retail</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="bg-white">
                            <label for="message" class="mb-2 d-flex justify-content-between">
                                Message *
                                <span>Max. 1000 characters</span>
                            </label>
                            <textarea name="message" class="form-control" placeholder="Type your message here..."
                                rows="5" maxlength="1000"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary py-3 px-5">
                                Submit <i class="fa fa-angle-right"></i>
                            </button>
                        </div>
                    </form>
                    <div class="d-flex flex-column gap-3 col py-5 px-4">
                        <div>
                            Contact <br>
                            Email: <a href="#">info@abbc.org.au</a><br>
                            Phone: <a href="#" id="">0411 250 443</a>
                        </div>
                        Address: Level 3, 83 York Street, Sydney NSW 2000 Australia
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
