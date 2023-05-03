@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Action Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{route('admin')}}>admin</a></li>
        <li class="breadcrumb-item active">Action</li>
      </ol>
    </nav>
  </div>

  <!-- Vertical Form -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>
      <form class="row g-3" action="{{ isset($action) ? route('Action.update',['action' => $action->id]) : route('Action.store') }}" method="POST">
        @csrf
        @if (isset($action))
        @method('put')
        @endif
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Tittle</label>
          <input type="text" name="tittle" class="form-control" id="inputNanme4" value="{{ isset($action) ? $action->tittle : old('tittle')}}">
          @error('tittle')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputNanme4" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="inputNanme4">{{ isset($action) ? $action->description : old('description')}}</textarea>
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
      <h5 class="card-title">Table with hoverable rows</h5>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITTLE</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($actions as $key => $item)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->tittle}}</td>
                <td>{{$item->description}}</td>
                    <form action="{{route('Action.destroy',['Action' => $item->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger">DELETE</button></td>
                    </form>
                <td><a class="btn btn-primary" href="{{route('Action.edit',['Action' => $item->id])}}">EDIT</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
