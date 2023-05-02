<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        @foreach ($pricing as $item)
            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="50">
                    <div class="pricing-item">
                    <h3>{{$item->tittle}}</h3>
                    <h4><sup>$</sup>{{$item->price}}<span>/ month</span></h4>
                    <ul>
                        <li><i class="bi bi-check"></i>{{$item->description}}</li>
                        <li><i class="bi bi-check"></i>{{$item->description}}</li>
                        <li><i class="bi bi-check"></i>{{$item->description}}</li>
                        <li class="na"><i class="bi bi-x"></i> <span>{{$item->description}}</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>{{$item->description}}</span></li>
                    </ul>
                    <a href="#" class="buy-btn">Buy Now</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
