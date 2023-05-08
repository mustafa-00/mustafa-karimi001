@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Feature Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">admin</a></li>
        <li class="breadcrumb-item active">Feature</li>
      </ol>
    </nav>
</div>


<!-- Vertical Form -->
<div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vertical Form</h5>

        <form class="row g-3" action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="col-6">
            <label for="inputNanme4" class="form-label">Photo</label>
            <input type="file" name="photo" class="form-control" id="inputNanme4">
            @error('photo')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="col-6">
            <label for="inputNanme4" class="form-label">Tittle</label>
            <input type="text" name="tittle" class="form-control" id="inputNanme4">
            @error('tittle')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="col-12">
            <label for="inputNanme4" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="inputNanme4"></textarea>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>

          <div class="col-12">
            <label for="inputNanme4" class="form-label">Markeddescripton</label>
            <textarea name="markeddescription" class="form-control" id="inputNanme4"></textarea>
            @error('markeddescription')
                <div class="alert alert-danger">
                    {{ $message }}
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
    <div class="card-body">
        <h5 class="card-title">Feature Data Table</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Photo</th>
              <th scope="col">Tittle</th>
              <th scope="col">Description</th>
              <th scope="col">Markeddescription</th>
              <th scope="col">Action</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($features as $key => $item)
                <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td><img src="{{ $item->photo }}" alt="" style="width: 50px"></td>
                <td>{{ $item->tittle }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->markeddescription }}</td>
                <td><button class="btn btn-danger">Delete</td>
                <td><button class="btn btn-primary">Edit</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection
