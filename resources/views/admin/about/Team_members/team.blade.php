
@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>Team_members Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">Team_members</li>
      </ol>
    </nav>
</div>

<!-- Table with hoverable rows -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Table with hoverable rows</h5>
      <a class="btn btn-primary" href="{{route('team_members.create')}}">Add new team member</a>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">PHOTO</th>
            <th scope="col">NAME</th>
            <th scope="col">FIELD</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
            <td><button class="btn btn-danger">DELETE</button></td>
            <td><button class="btn btn-primary">EDIT</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  @endsection
