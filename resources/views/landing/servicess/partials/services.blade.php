<section id="service" class="services pt-0">
    <div class="container row mx-auto" data-aos="fade-up">
        <div class="section-header">
            <span>Our Services</span>
            <h2>Our Services</h2>
        </div>
        @foreach ($ourservice as $item)
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <div class="card-img">
                    <img src="{{ $item->photo }}" alt="" class="img-fluid">
                </div>
                <h3><a href="service-details.html" class="stretched-link">{{ $item->tittle }}</a></h3>
                <p>{{ $item->description }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
