@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Contact Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">contact</li>
      </ol>
    </nav>
</div>


  <!-- Floating Labels Form -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Floating labels Form</h5>

      <form class="row g-3" action="{{route('contact.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" name="icon" class="form-control" id="floatingName" placeholder="Icon" value="{{old('icon')}}">
            <label for="floatingName">Icon</label>
            @error('icon')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
              <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="Tittle" value="{{old('tittle')}}">
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
            <textarea name="description" class="form-control" id="floatingPassword" placeholder="description">{{old('description')}}</textarea>
            <label for="floatingPassword">Description</label>
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
  </div>
@endsection
