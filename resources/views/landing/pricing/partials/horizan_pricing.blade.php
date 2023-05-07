<section id="horizontal-pricing" class="horizontal-pricing pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Horizontal Pricing</span>
        <h2>Horizontal Pricing</h2>
      </div>

      <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
        @foreach ($hprices as $item)
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>{{$item->tittle}}</h3>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>{{$item->price}}<span> / month</span></h4>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
                <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                <li class="na"><i class="bi bi-x"></i> <span>{{$item->unmarkeddescription}}</span></li>
            </ul>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
        @endforeach
      </div>

      {{-- {{-- <div class="row gy-4 pricing-item featured mt-2" data-aos="fade-up" data-aos-delay="200">
        @foreach ($hprices as $item)
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>{{$item->tittle}}</h3>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>{{$item->price}}<span> / month</span></h4>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
                <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                <li><i class="bi bi-check"></i> <strong>{{$item->markeddescription}}</strong></li>
                <li><i class="bi bi-check"></i>{{$item->unmarkeddescription}}</li>
            </ul>
            </div>
            <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
        @endforeach
        </div> --}}
    </div>
  </section>
