    <!-- FAQ -->
    <section id="faq" class="bg-white py-5">
        <div class="overlay p-3" data-aos="fade-up">
            <div class="containerpx-4">
                <h1 class="mb-3 text-center ">
                    Frequently Asked Question
                </h1>
                <div class="col-lg-5 mb-4 mx-auto text-center">
                    Effortless booking, streamlined management, and a built-in health shop—on mobile.
                </div>
                <div class="accordion col-md-6 mx-auto" id="faqAccordion">

                    @foreach ($faqs as $index => $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $faq->id }}">
                                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-controls="collapse-{{ $faq->id }}">
                                    Q: {{ $faq->question }}
                                </button>
                            </h2>
                            <div id="collapse-{{ $faq->id }}"
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ : end -->
