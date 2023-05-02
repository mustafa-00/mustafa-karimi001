@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>OurServices Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">OurServices</li>
      </ol>
    </nav>
</div>


<!-- Vertical Form -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>
      <a class="btn btn-primary" href="{{route('OurServices.index')}}">OurServices Table</a>
      <form class="row g-3" action="{{route('OurServices.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="col-6">
                <label for="inputNanme4" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" id="inputNanme4" value="{{old('photo')}}">
                @error('photo')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-6">
                <label for="inputNanme4" class="form-label">Tittle</label>
                <input type="text" name="tittle" class="form-control" id="inputNanme4" value="{{old('tittle')}}">
                @error('tittle')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputPassword4" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="inputPassword4">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
      </form>
    </div>
</div>
@endsection
