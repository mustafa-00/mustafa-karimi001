@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Testimonial Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Testimonial</li>
      </ol>
    </nav>
</div>

<!-- Table with hoverable rows -->
<div class="card">
    <div class="card-body">
        <div>
            <h5 class="card-title d-flex">Table with hoverable rows</h5>
            <a class="btn btn-primary" href="{{route('testimonial.create')}}">Create new testimonial</a>
        </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">NAME</th>
            <th scope="col">JOB</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($testimonials as $key => $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <th scope="row"><img src="{{ $item->photo }}" alt="" width="50px"></th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->job}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <form action="{{route('testimonial.destroy',['testimonial' => $item->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                    <td>
                        <button class="btn btn-primary">EDIT</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
