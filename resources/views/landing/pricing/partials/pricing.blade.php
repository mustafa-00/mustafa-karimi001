<section id="pricing" class="pricing">
    <div class="container row mx-auto" data-aos="fade-up">
        <div class="section-header">
            <span>Pricing</span>
            <h2>Pricing</h2>
        </div>
        <div class="row gy-4">
            @foreach ($pricing as $item)
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="pricing-item">
                    <h3>{{$item->tittle}}</h3>
                    <h4><sup>$</sup>{{$item->price}}<span>/ month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i>{{$item->description}}</li>
                        <li class="na"><i class="bi bi-x"></i> <span>{{$item->description}}</span></li>
                    </ul>
                    <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
