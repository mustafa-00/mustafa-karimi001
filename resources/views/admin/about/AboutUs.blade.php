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
            @error('Subtittle')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-12">
            <div class="form-floating">
              <textarea name="Subdescription" class="form-control" id="floatingEmail" placeholder="Your Email"tex></textarea value="{{old('Subdescription')}}">
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
          <tr>
            <th scope="row">1</th>
            <td>Brandon Jacob</td>
            <td>Designer</td>
            <td>28</td>
            <td>2016-05-25</td>
            <td>2016-05-25</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Bridie Kessler</td>
            <td>Developer</td>
            <td>35</td>
            <td>2014-12-05</td>
            <td>2014-12-05</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Ashleigh Langosh</td>
            <td>Finance</td>
            <td>45</td>
            <td>2011-08-12</td>
            <td>2011-08-12</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Angus Grady</td>
            <td>HR</td>
            <td>34</td>
            <td>2012-06-11</td>
            <td>2012-06-11</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Raheem Lehner</td>
            <td>Dynamic Division Officer</td>
            <td>47</td>
            <td>2011-04-19</td>
            <td>2011-04-19</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>


@endsection
