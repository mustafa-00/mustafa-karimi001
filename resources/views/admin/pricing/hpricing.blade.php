@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>HorizintalPricing Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin') }}">admin</a></li>
        <li class="breadcrumb-item active">HorizintalPricing</li>
      </ol>
    </nav>
</div>


<!-- Floating Labels Form -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Floating labels Form</h5>

      <form class="row g-3" action="{{ route('hpricing.store') }}" method="POST">
        @csrf
        <div class="col-md-6">
          <div class="form-floating">
            <input type="text" name="tittle" class="form-control" id="floatingName" placeholder="Your Tittle" value="{{ old('tittle') }}">
            <label for="floatingName">Tittle</label>
            @error('tittle')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <input type="number" name="price" class="form-control" id="floatingEmail" placeholder="Your Price" value="{{ old('price') }}">
            <label for="floatingEmail">Pricing</label>
            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-floating">
            <textarea type="text" name="markeddescription" class="form-control" id="floatingPassword" placeholder="Your Description">{{ old('markeddescription') }}</textarea>
            <label for="floatingPassword">MarkedDescription</label>
            @error('markeddescription')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-floating">
              <textarea type="text" name="unmarkeddescription" class="form-control" id="floatingPassword" placeholder="Your Description">{{ old('unmarkeddescription') }}</textarea>
              <label for="floatingPassword">UnmarkedDescription</label>
              @error('unmarkeddescription')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            </div>
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
      <h5 class="card-title">Table with hoverable rows</h5>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">TITTLE</th>
            <th scope="col">PRICE</th>
            <th scope="col">MARKED_DESCRIPTION</th>
            <th scope="col">UNMARKED_DESCRIPTION</th>
            <th scope="col">ACTION</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hprices as $key => $item)
                <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $item->tittle }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->markeddescription }}</td>
                <td>{{ $item->unmarkeddescription }}</td>
                    <form action="{{route('hpricing.destroy')}}" method="POST">
                        @csrf
                        @method('delete')
                        <td><button class="btn btn-danger">Delete</button></td>
                    </form>
                <td><button class="btn btn-primary">Edit</button></td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
