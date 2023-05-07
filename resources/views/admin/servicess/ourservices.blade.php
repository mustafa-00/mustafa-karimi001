@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>OurServices Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">admin</a></li>
        <li class="breadcrumb-item active">OurServices</li>
      </ol>
    </nav>
</div>


<!-- Multi Columns Form -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">OurServices Form</h5>

      <form class="row g-3" action="{{route('ourservices.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="inputName5" class="form-label">Photo</label>
          <input type="file" name="photo" class="form-control" id="inputName5">
          @error('photo')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-md-6">
            <label for="inputName5" class="form-label">Tittle</label>
            <input type="text" name="tittle" class="form-control" id="inputName5">
            @error('tittle')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
            @enderror
        </div>

        <div class="col-md-12">
          <label for="inputPassword5" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="inputPassword5"></textarea>
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


  <!-- Table with hoverable rows -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">OurServices Table</h5>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">TITTLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($ourservices as $key => $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="{{$item->photo}}" alt=""></td>
                    <td>{{$item->tittle}}</td>
                    <td>{{$item->description}}</td>
                    <td><button class="btn btn-danger">Delete</button></td>
                    <td><button class="btn btn-primary">Edit</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
