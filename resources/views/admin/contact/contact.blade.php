@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Contact Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href={{route('admin')}}>admin</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
</div>

  <!-- Vertical Form -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Contact Form</h5>
      <form class="row g-3" action="{{ isset($contact) ? route('contact.update',['contact' => $contact->id]) : route('contact.store') }}" method="POST">
        @csrf
        @if (isset($contact))
            @method('put')
        @endif
        <div class="col-6">
          <label for="inputNanme4" class="form-label">Icon</label>
          <input type="text" name="icon" class="form-control" id="inputNanme4" value="{{ isset($contact) ? $contact->tittle : old('icon')}}">
          @error('icon')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-6">
          <label for="inputNanme4" class="form-label">Tittle</label>
          <input type="text" name="tittle" class="form-control" id="inputNanme4" value="{{ isset($contact) ? $contact->tittle : old('tittle')}}">
          @error('tittle')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputNanme4" class="form-label">Description</label>
          <textarea name="description" class="form-control" id="inputNanme4">{{ isset($contact) ? $contact->description : old('description')}}</textarea>
          @error('description')
            <div class="alert alert-danger">
                {{$message}}
            </div>
          @enderror
        </div>

        <div class="text-center">
          <button type="submit" class="btn {{isset($contact) ? "btn-success" : "btn-primary"}} btn-primary">{{isset($contact) ? "Update" : "Store"}}</button>
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
            <th scope="col">Icon</th>
            <th scope="col">Tittle</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $key => $item)
                <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->icon}}</td>
                <td>{{$item->tittle}}</td>
                <td>{{$item->description}}</td>
                    <form action="{{route('contact.destroy',['contact' => $item->id])}}" method="POST">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger">DELETE</button></td>
                    </form>
                <td><a class="btn btn-primary" href="{{route('contact.edit',['contact' => $item->id])}}">EDIT</a></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
