
@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Team_members Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Team_members</li>
      </ol>
    </nav>
</div>

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>
      <a class="btn btn-primary" href="{{route('team_members.index')}}">Team_members Table</a>
      <form class="row g-3" action="{{route('team_members.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="col-4">
                <label for="inputNanme4" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" id="inputNanme4" value="{{old('photo')}}">
                @error('photo')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-4">
                <label for="inputNanme4" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="inputNanme4" value="{{old('name')}}">
                @error('name')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-4">
                <label for="inputPassword4" class="form-label">Field</label>
                <input type="text" name="field" class="form-control" id="inputPassword4" value="{{old('field')}}">
                @error('field')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">description</label>
                <textarea class="form-control" name="description" id="inputAddress">{{old('description')}}</textarea>
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
