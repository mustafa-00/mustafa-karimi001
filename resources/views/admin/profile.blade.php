@extends('admin.layouts.index')

@section('contents')

{{-- This is the main part --}}
<div class="pagetitle">
    <h1>Blank Page</h1>
    @include('common.alert')
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
 </div>

 @endsection
