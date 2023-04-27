@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>AboutUs Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">AboutUs</li>
      </ol>
    </nav>
</div>

<!-- Floating Labels Form -->

<div class="card">
    <div class="card-body">
      <h5 class="card-title">Floating labels Form</h5>

      <form class="row g-1" action="{{ isset($about) ? route('about.update', ['about' => $about->id]) : route('about.store')}}" method="POST" >
        @csrf
        @if (isset($about))
            @method('put')
        @endif
          <div class="col-md-12">
            <div class="form-floating">
              <input type="text" name="icon" class="form-control" id="floatingPassword" placeholder="Password" value="{{ isset($about) ? $about->icon : old('icon')}}">
              <label for="floatingPassword">Icon</label>
              @error('icon')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
            </div>
          </div>

        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="Your Name" value="{{ isset($about) ? $about->tittle : old('tittle')}}">
            <label for="floatingName">Tittle</label>
            @error('tittle')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-floating">
            <textarea name="description" class="form-control" id="floatingEmail" placeholder="Your Email">{{ isset($about) ? $about->description : old('description')}}</textarea>
            <label for="floatingEmail">Description</label>
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
              @enderror
          </div>
        </div>

        <div class="text-center ">
          <button type="submit" class="btn {{isset($about) ? 'btn-success' : 'btn-primary'}}">{{ isset($about) ?'UPDATE' : 'STORE'}}</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
      <!-- End floating Labels Form -->
    </div>
</div>


<!-- Table with hoverable rows -->
<div class="card">
        <div class="card-body">
        <h5 class="card-title">Table with hoverable rows</h5>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ICON</th>
                <th scope="col">TITTLE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">DELETE</th>
                <th scope="col">EDIT</th>
            </tr>
            </thead>

            <tbody>
                @foreach ($abouts as $key => $item)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$item->icon}}</td>
                        <td>{{$item->tittle}}</td>
                        <td>{{$item->description}}</td>
                        <form action="{{route('about.destroy',['about' => $item->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <th scope="col"><button class="btn btn-danger">DELETE</button></th>
                        </form>
                        <th scope="col"><a class="btn btn-primary" href="{{ route('about.edit' ,['about' => $item->id]) }}">EDIT</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
  </div>
@endsection
