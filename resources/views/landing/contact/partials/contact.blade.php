<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      {{-- google map --}}
      <div>
        <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="row gy-4 mt-4">
        @foreach ($contact as $item)
            <div class="col-lg-4">
                <div class="info-item d-flex">
                    {!! $item->icon !!}
                    <div>
                        <h4>{{$item->tittle}}</h4>
                        <p>{{$item->description}}</p>
                    </div>
                </div>
            </div>
        @endforeach


        <!-- Floating Labels Form -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Contact Form</h5>

              <form class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Your Email</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Address" id="floatingTextarea" style="height: 100px;"></textarea>
                    <label for="floatingTextarea">Message</label>
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Send</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </section>
