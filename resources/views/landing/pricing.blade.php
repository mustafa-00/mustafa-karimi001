<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logis Bootstrap Template - Pricing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets_landing/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets_landing/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets_landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_landing/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets_landing/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_landing/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_landing/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets_landing/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets_landing/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('landing.layouts.partials.header')
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets_landing/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pricing</h2>
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
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Horizontal Pricing Section ======= -->
    <section id="horizontal-pricing" class="horizontal-pricing pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Horizontal Pricing</span>
          <h2>Horizontal Pricing</h2>

        </div>

        <div class="row gy-4 pricing-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Free Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>0<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="row gy-4 pricing-item featured mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Business Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>29<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> <strong>Nec feugiat nisl pretium</strong></li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

        <div class="row gy-4 pricing-item mt-4" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h3>Developer Plan</h3>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <h4><sup>$</sup>49<span> / month</span></h4>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <ul>
              <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
            </ul>
          </div>
          <div class="col-lg-3 d-flex align-items-center justify-content-center">
            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
          </div>
        </div><!-- End Pricing Item -->

      </div>
    </section><!-- End Horizontal Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('landing.layouts.partials.fotter')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets_landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets_landing/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets_landing/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets_landing/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets_landing/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets_landing/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets_landing/js/main.js')}}"></script>

</body>

</html>
