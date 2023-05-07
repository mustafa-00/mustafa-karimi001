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

      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputName5" class="form-label">Photo</label>
          <input type="file" name="photo" class="form-control" id="inputName5">
        </div>

        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Tittle</label>
          <input type="text" name="tittle" class="form-control" id="inputEmail5">
        </div>

        <div class="col-md-12">
          <label for="inputPassword5" class="form-label">Description</label>
          <textarea type="text" name="description" class="form-control" id="inputPassword5"></textarea>
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
      <h5 class="card-title">OurServices Table</h5>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITTLE</th>
            <th scope="col">DSCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td><button class="btn btn-danger">Delete</button></td>
            <td><button class="btn btn-primary">Edit</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
