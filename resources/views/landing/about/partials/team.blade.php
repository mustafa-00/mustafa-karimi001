
    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team pt-0">
        <div class="container" data-aos="fade-up">

          <div class="section-header">
            <span>Our Team</span>
            <h2>Our Team</h2>
          </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                @foreach ($team_members as $item)
                    <div class="col-lg-4 col-md-6 d-flex">
                        <div class="member">
                            <img src="{{$item->photo}}" class="img-fluid" alt="">
                            <div class="member-content">
                            <h4>{{$item->name}}</h4>
                            <span>{{$item->field}}</span>
                            <p>
                            {{$item->description}}
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Our Team Section -->

