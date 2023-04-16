@extends('landing.layouts.index')

@section('contents')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        @include('landing.servicess.partials.breadcrump')

        <!-- ======= Featured Services Section ======= -->
        @include('landing.servicess.partials.featured')

        <!-- ======= Services Section ======= -->
        @include('landing.servicess.partials.services')

        <!-- ======= Features Section ======= -->
        @include('landing.servicess.partials.feature')>

        <!-- ======= Frequently Asked Questions Section ======= -->
        @include('landing.servicess.partials.freAskQues')

    </main>

@endsection
