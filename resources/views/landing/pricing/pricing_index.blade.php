@extends('landing.layouts.index')

@section('contents')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('landing.pricing.partials.breadcrump')

        <!-- ======= Pricing Section ======= -->
        @include('landing.pricing.partials.pricing')
        <!-- End Pricing Section -->

        <!-- ======= Horizontal Pricing Section ======= -->
        @include('landing.pricing.partials.horizan_pricing')
        <!-- End Horizontal Pricing Section -->

    </main>
@endsection
