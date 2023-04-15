@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Action Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Action</li>
      </ol>
    </nav>
</div>

<!-- Floating Labels Form -->

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Floating labels Form</h5>

      <form class="row g-1" method="POST" action="{{route('about.store')}}">
        @csrf
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" name="icon" class="form-control" id="floatingPassword" placeholder="Password" value:{{old('icon')}}>
              <label for="floatingPassword">Icon</label>
              @error('icon')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
            </div>
          </div>

        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="Your Name" value:{{old('tittle')}}>
            <label for="floatingName">Tittle</label>
            @error('tittle')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-floating">
            <textarea name="description" class="form-control" id="floatingEmail" placeholder="Your Email" value:{{old('description')}}></textarea>
            <label for="floatingEmail">Description</label>
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
          </div>
        </div>

        <div class="text-center ">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
      <!-- End floating Labels Form -->
    </div>
  </div>
@endsection
