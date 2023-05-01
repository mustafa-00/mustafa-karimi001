
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
            @foreach ($team_memberses as $key => $item)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <th scope="row"><img src="{{ $item->photo }}" alt="" width="50px"></th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->field}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <form action="{{route('team_members.destroy',['team_member' => $item->id])}}" method="POST">
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
