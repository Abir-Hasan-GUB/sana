   <!-- hero section -->
   <section class="bg-secondary">
    <div class="pat-overlay">
        <div class="container text-center">
            <div class="col-lg-5 py-5 mx-auto">
                <div class="py-4 d-none d-lg-block"></div>
                <h1 class="text-center">{{$title}}</h1>
                <div class="mx-auto text-center mb-4">
                    {{$description}}
                </div>
                <a href="{{route('join_waitlist')}}" class="btn btn-primary rounded-pill p-2 px-4">
                    Join the Waitlist
                </a>
                <div class="py-4 d-none d-lg-block"></div>
            </div>
        </div>
    </div>
</section>