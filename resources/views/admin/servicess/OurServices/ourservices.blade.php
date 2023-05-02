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

<!-- Table with hoverable rows -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Table with hoverable rows</h5>
        <a class="btn btn-primary" href="{{route('OurServices.create')}}">Add new services</a>

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
            @foreach ($OurServices as $key => $item)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <th scope="row"><img src="{{$item->photo}}" alt="" width="50px"></th>
                <td>{{$item->tittle}}</td>
                <td>{{$item->description}}</td>
                <form action="{{route('OurServices.destroy',['OurService' => $item->id])}}" method="POST">
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
