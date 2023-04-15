@extends('admin.layouts.index')

@section('contents')

<div class="pagetitle">
    <h1>FreqQuestion Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">FreqQuestion</li>
      </ol>
    </nav>
</div>


<!-- Vertical Form -->

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>

      <form class="row g-3">
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Your Name</label>
          <input type="text" class="form-control" id="inputNanme4">
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
  </div>
@endsection
