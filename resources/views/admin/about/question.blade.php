
@extends('admin.layouts.index')

@section('contents')

@include('common.alert')

<div class="pagetitle">
    <h1>FrequentQuestion Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">admin</a></li>
        <li class="breadcrumb-item active">FrequentQuestion</li>
      </ol>
    </nav>
</div>


<!-- Floating Labels Form -->
<div class="card-body">
    <h5 class="card-title">Floating labels Form</h5>

    <form class="row g-3" method="POST" action="{{ route('question.store') }}">
        @csrf
      <div class="col-md-12">
        <div class="form-floating">
          <input type="text" name="question" class="form-control" id="floatingName" placeholder="Your Name" value="{{ old('question') }}">
          <label for="floatingName">Question</label>
          @error('question')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
          @enderror
        </div>
      </div>

      <div class="col-12">
        <div class="form-floating">
          <textarea name="answer" class="form-control" placeholder="Address" id="floatingTextarea" style="height: 100px;" value="{{ old('answer') }}"></textarea>
          <label for="floatingTextarea">Answer</label>
          @error('answer')
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


  <!-- Table with hoverable rows -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Table with hoverable rows</h5>

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Answers</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($question as $key => $item)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->question }}</td>
                    <td>{{ $item->answer }}</td>
                    <form action="{{ route('question.destroy', ['question' => $item->id]) }}" method="POST">
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



