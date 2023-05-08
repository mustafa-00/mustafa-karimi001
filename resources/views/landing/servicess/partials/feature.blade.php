<section id="features" class="features">
    <div class="container " >
        <div class="section-header">
            <span>Feature</span>
            <h2>Feature</h2>
          </div>
          @foreach ($feature as $item)
            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
                <div class="col-md-5">
                <img src="{{ $item->photo }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7">
                <h3>{{$item->tittle}}</h3>
                <p class="fst-italic">
                    {{$item->description}}
                </p>
                <ul>
                    <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                    <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                    <li><i class="bi bi-check"></i>{{$item->markeddescription}}</li>
                </ul>
                </div>
            </div>
            <!-- Features Item -->
          @endforeach
    </div>
  </section>
