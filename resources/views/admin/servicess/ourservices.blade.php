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

      <form class="row g-3" action="{{ isset($ourservice) ? route('ourservices.update',['ourservice' => $ourservice->id]) : route('ourservices.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if($ourservices)
            @method('put')
        @endif
        <div class="col-md-6">
          <label for="inputName5" class="form-label">Photo</label>
          <input type="file" name="photo" class="form-control" id="inputName5" value="{{ isset($ourservice) ? $ourservice->photo : old('photo') }}">
          @error('photo')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-md-6">
            <label for="inputName5" class="form-label">Tittle</label>
            <input type="text" name="tittle" class="form-control" id="inputName5" value="{{ isset($ourservice) ? $ourservice->tittle :old('tittle') }}">
            @error('tittle')
              <div class="alert alert-danger">
                  {{$message}}
              </div>
            @enderror
        </div>

        <div class="col-md-12">
          <label for="inputPassword5" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="inputPassword5">{{ isset($ourservice) ? $ourservice->description : old('description') }}</textarea>
          @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn {{ isset($ourservice) ? "btn btn-success" : "btn btn-primary" }}">{{ isset($ourservice) ? "Update" : "Store" }}</button>
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
                    <td><img src="{{$item->photo}}" alt="" style="width: 50px""></td>
                    <td>{{$item->tittle}}</td>
                    <td>{{$item->description}}</td>
                        <form action="{{ route('ourservices.destroy',['ourservice' => $item->id]) }}" method="POST">
                            @csrf
                            @method('delete')
                            <td><button class="btn btn-danger">Delete</button></td>
                        </form>
                    <td><a class="btn btn-primary" href="{{ route('ourservices.edit',['ourservice' => $item->id]) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
