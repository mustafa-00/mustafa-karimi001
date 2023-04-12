
@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>Action Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Action</li>
      </ol>
    </nav>
  </div>

<div class="card">
    <div class="card-body m-3 p-2">

      <!-- Floating Labels Form -->
      <form action="{{ route('Action.store') }}" method="POST">
        @csrf
        <div class="col-md-12 p-2">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" value="{{old('tittle')}}">
            <label for="floatingName">Tittle</label>
            @error('tittle')
                <div class= "alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" value="{{old('description')}}"></textarea>
            <label for="floatingtexteara">Description</label>
            @error('description')
                <div class = "alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>

        <div class="text-center p-2">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form><!-- End floating Labels Form -->

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
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <td>2011-08-12</td>
          </tr>
        </tbody>
      </table>
      <!-- End Table with hoverable rows -->

    </div>
  </div>

  @endsection
