<!-- section cta -->
<section id="cta" class="mb-5 pb-4 mt-5">
    <div class="mb-5">
        <div class="container text-center text-md-start">
            <div class="card-body">
                <div class="row mt-3 row-cols-md-4 g-4">
                    @foreach ($magazines as $magazine)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('assets/images/pdf.png') }}" class="img-fluid p-2" alt="Magazine Banner">
                            <div class="card-body">
                                <h5 class="card-title">{{ $magazine->title }}</h5>
                                <a href="{{ route('magazines.show', $magazine->id) }}" class="btn btn-info w-100">Download</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="mt-3">
                    {{ $magazines->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
