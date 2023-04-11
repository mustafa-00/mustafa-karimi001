@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Featured Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Featured</li>
      </ol>
    </nav>
  </div>


  <form action="{{route('featured.store')}}" method="POST">
    @csrf
      <div class="row mb-3">
            <div class="d-flex col-md-12">
                <div class="form-floating mb-1 col-md-6 p-2">
                    <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('icon')}}">
                    <label for="floatingInput">Icon</label>
                    @error('icon')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-1 col-md-6 p-2">
                    <input type="text" name="tittle" class="form-control" id="floatingPassword" placeholder="Password" value="{{old('tittle')}}">
                    <label for="floatingPassword">Tittle</label>
                    @error('tittle')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="form-floating mb-1">
                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" value="{{old('description')}}"></textarea>
                <label for="floatingTextarea">description</label>
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="btn btn-primary m-1 w-100">Save</button>
       </div>
  </form>

   {{-- table --}}
   <div class="card">
    <div class="card-body">
      <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tittle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Start Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($featured as $key=> $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$item->icon}}</td>
                    <td>{{$item->tittle}}</td>
                    <td>{{$item->description}}</td>
                    <td class="d-flex">
                        <form action="{{route('featured.destroy', ['featured' => $item->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">DELTE</button>
                        </form>
                    <button class="btn btn-primary">EDIT</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

@endsection
