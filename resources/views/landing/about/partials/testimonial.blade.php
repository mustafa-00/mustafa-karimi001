
   <!-- ======= Testimonials Section ======= -->
 <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @foreach ($testimonial as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{$item->photo}}" class="testimonial-img" alt="">
                                <h3>{{$item->name}}</h3>
                                <h4>{{$item->job}}</h4>
                                <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                {{$item->description}}
                                <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
              <div class="swiper-pagination"></div>
            </div>
        </div>
 </section><!-- End Testimonials Section -->
