
@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Action Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Action</li>
      </ol>
    </nav>
</div>

  {{-- form --}}
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="{{ route('Action.store') }}" method="POST">
        @csrf
        <div class="col-12">
            <input type="text" name="tittle" class="form-control" id="inputNanme4" value="{{ isset($action) ? $action->tittle : old('tittle') }}">
          <label for="inputNanme4" class="form-label">Tittle</label>
          @error('tittle')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-12">
            <textarea type="text" name="description" class="form-control" id="inputEmail4">{{ isset($action) ? $action->description : old('description') }}</textarea>
          <label for="inputEmail4" class="form-label">Description</label>
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


  {{-- Table --}}
  <div class="card p-2">
    <div class="card-body">
      <h5 class="card-title">Table with hoverable rows</h5>

      <!-- Table with hoverable rows -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Age</th>
            <th scope="col">Start Date</th>
          </tr>
        </thead>

        {{-- This foreach will display us the data of database in the table --}}
        <tbody>
            @foreach ($actions as $key=> $item)
            <tr>
              <th scope="row">{{$key+1}}</th>
              <td>{{$item->tittle}}</td>
              <td>{{$item->description}}</td>
              <td>
                <form action="{{ route('Action.destroy' ,['Action' => $item->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">DELETE</button>
                </form>
              </td>
              <td><a class="btn btn-primary" href="{{ route('Action.edit', ['Action' => $item->id]) }}">EDIT</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

  @endsection
