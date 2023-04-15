@extends('admin.layouts.index')

@section('contents')
<div class="pagetitle">
    <h1>About Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">About</li>
      </ol>
    </nav>
  </div>

<div class="card">
    <div class="card-body">
      <h5 class="card-title">AboutUs Form</h5>

      <!-- Floating Labels Form -->
      <form class="row g-1" method="POST" action="{{route('about.store')}}">
        @csrf
        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="Your Name" value="{{old('tittle')}}">
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
            <textarea name="description" class="form-control" id="floatingEmail" placeholder="Your Email"tex></textarea value="{{old('description')}}">
            <label for="floatingEmail">Description</label>
            @error('description')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-floating">
            <input type="text" name="icon" class="form-control" id="floatingPassword" placeholder="Password" value="{{old('icon')}}">
            <label for="floatingPassword">Icon</label>
            @error('icon')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-12">
          <div class="form-floating">
            <input type="text" name="Subtittle" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" value="{{old('Subtittle')}}">
            <label for="floatingTextarea">SubTittle</label>
            @error('')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-12">
            <div class="form-floating">
              <textarea name="Subdescription" class="form-control" id="floatingEmail" placeholder="Your Email"tex></textarea value="{{old('Subdescriptionp')}}">
              <label for="floatingEmail">SubDescription</label>
            @error('Subdescription')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            </div>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- End floating Labels Form -->
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
            <th scope="col">Tittle</th>
            <th scope="col">Description</th>
            <th scope="col">Icon</th>
            <th scope="col">SubTittle</th>
            <th scope="col">SubDescription</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($aboutus as $key => $item)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$item->tittle}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->icon}}</td>
                <td>{{$item->Subtittle}}</td>
                <td>{{$item->Subdescription}}</td>
                <td>
                    <form action="{{route('about.destroy',['about' => $item->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">DELETE</button>
                    </form>
                </td>
                <td><button class="btn btn-primary">EDIT</button></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection
