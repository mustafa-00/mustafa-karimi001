@extends('admin.layouts.index')

@section('contents')

{{-- This is the main part --}}
<div class="pagetitle">
    <h1>Profile</h1>
    @include('common.alert')
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
        <li class="breadcrumb-item active">profile</li>
      </ol>
    </nav>
 </div>

 @endsection
