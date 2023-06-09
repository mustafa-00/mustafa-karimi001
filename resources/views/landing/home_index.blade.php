@extends('landing.layouts.index')

@include('landing.layouts.partials.hero')

@section('contents')

    <!-- ======= Call To Action Section ======= -->

    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
            @foreach ($action as $item)
                <div class="col-lg-8 text-center">
                    <h3>{{$item->tittle}}</h3>
                    <p>{{$item->description}}</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            @endforeach
        </div>
      </div>
    </section>

@endsection
