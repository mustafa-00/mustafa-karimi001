    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
          <div class="section-header">
            <span>Frequently Asked Questions</span>
            <h2>Frequently Asked Questions</h2>
          </div>
          @foreach ($question as $key=>$item)
              <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-10">
                      <div class="accordion accordion-flush" id="faqlist{{ $key }}">
                          <div class="accordion-item">
                              <h3 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1{{ $key }}">
                                  <i class="bi bi-question-circle question-icon"></i>
                                  {{ $item->question }}
                              </button>
                              </h3>
                              <div id="faq-content-1{{ $key }}" class="accordion-collapse collapse" data-bs-parent="#faqlist{{ $key }}">
                              <div class="accordion-body">
                                  {{ $item->answer }}
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          @endforeach
        </div>
      </section>
