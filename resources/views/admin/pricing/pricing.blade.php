@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Pricing Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Pricing</li>
      </ol>
    </nav>
</div>

<!-- Floating Labels Form -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Floating labels Form</h5>
      <form class="row g-3" action="{{route('Pricing.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="tittle" value="{{old('tittle')}}">
            <label for="floatingName">Tittle</label>
            @error('tittle')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <input type="number" name="price" class="form-control" id="floatingName" placeholder="price" value="{{old('price')}}">
            <label for="floatingName">Price</label>
            @error('price')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-floating">
            <textarea name="description" class="form-control" id="floatingPassword" placeholder="description">{{old('description')}}</textarea>
            <label for="floatingPassword">description</label>
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

  <!-- Table with hoverable rows -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Table with hoverable rows</h5>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITTLE</th>
            <th scope="col">PRICE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pricings as $key => $item)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->tittle}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->description}}</td>
                <form action="{{route('Pricing.destroy',['Pricing'=> $item->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <td><button class="btn btn-danger">DELETE</button></td>
                </form>
                <td><button class="btn btn-primary">EDIT</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
