@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Featured Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Featured</li>
      </ol>
    </nav>
  </div>


  <form action="{{ isset($featured) ? route('featured.update',['featured' => $featured->id]) : route('featured.store') }}" method="POST">
    @csrf

    @if (isset($featured))
        @method('put')
    @endif
      <div class="row mb-3">
            <div class="d-flex col-md-12">
                <div class="form-floating mb-1 col-md-6 p-2">
                    <input type="text" name="icon" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ isset($featured) ? $featured->icon : old('icon')}}">
                    <label for="floatingInput">Icon</label>
                    @error('icon')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-1 col-md-6 p-2">
                    <input type="text" name="tittle" class="form-control" id="floatingPassword" placeholder="Password" value="{{ isset($featured) ? $featured->tittle : old('tittle')}}">
                    <label for="floatingPassword">Tittle</label>
                    @error('tittle')
                        <div class="alert alert-danger">
                            {{$message}}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="form-floating mb-1">
                <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;">{{ isset($featured) ? $featured->description : old('description')}}</textarea>
                <label for="floatingTextarea">description</label>
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <button class="btn {{isset($featured) ? 'btn-success' : 'btn-primary'}} m-1 w-100">{{isset($featured) ? 'UPDATE' : 'STORE'}}</button>
       </div>
  </form>

   {{-- table --}}
   <div class="card">
    <div class="card-body">
      <!-- Table with hoverable rows -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">number</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Tittle</th>
                    <th scope="col">Description</th>
                    <th scope="col">DELETE</th>
                    <th scope="col">EDIT</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($featureds as $key=> $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$item->icon}}</td>
                    <td>{{$item->tittle}}</td>
                    <td>{{$item->description}}</td>
                        <form action="{{route('featured.destroy', ['featured' => $item->id])}}" method="POST">
                            @csrf
                            @method('delete')
                           <th scope="col"><button class="btn btn-danger">DELTE</button></th>
                        </form>
                    <th scope="col"><a class="btn btn-primary" href= {{route('featured.edit',['featured' => $item->id])}}>EDIT</a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

@endsection
