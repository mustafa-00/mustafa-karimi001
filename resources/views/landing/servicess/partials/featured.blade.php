
<section id="featured-services" class="featured-services">
    <div class="container">
        <div class="row gy-4">
            @foreach ($featured as $item)
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="icon flex-shrink-0">{!! $item->icon !!}</div>
                    <div>
                        <h4 class="title">{{ $item->tittle }}</h4>
                        <p class="description">{{ $item->description }}</p>
                        <a href="service-details.html" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



