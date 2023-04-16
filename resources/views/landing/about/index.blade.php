@extends('landing.layouts.index')

@section('contents')

<main id="main">

   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs">
    <div class="page-header d-flex align-items-center" style="background-image: url('assets_landing/img/page-header.jpg');">
      <div class="container position-relative">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6 text-center">
            <h2>About</h2>
            <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
          </div>
        </div>
      </div>
    </div>
    <nav>
      <div class="container">
        <ol>
          <li><a href="{{route('home')}}">Home</a></li>
          <li>Pricing</li>
        </ol>
      </div>
    </nav>
   </div>


{{-- About us section --}}
@include('landing.about.partials.aboutus')

<!-- ======= Stats Counter Section ======= -->
@include('landing.about.partials.statuscounter')

{{-- our team section --}}
@include('landing.about.partials.team')

{{-- testemonial section --}}
@include('landing.about.partials.testimonial')

{{-- partial section --}}
@include('landing.about.partials.faq')

</main>

@endsection
