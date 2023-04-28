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
            <a class="btn btn-primary">Create new testimonial</a>
        </div>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">job</th>
            <th scope="col">description</th>
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
    </div>
  </div>

@endsection
