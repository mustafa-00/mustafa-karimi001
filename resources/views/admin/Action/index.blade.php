
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
            <input type="text" name="tittle" class="form-control" id="floatingName">
            <label for="floatingName">Tittel</label>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
              <label for="floatingtexteara">Description</label>
          </div>
        </div>

        <div class="text-center p-2">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->

    </div>
  </div>

  @endsection
