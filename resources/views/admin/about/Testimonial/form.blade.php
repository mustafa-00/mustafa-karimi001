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
            <a class="btn btn-primary" href="{{route('testimonial.index')}}">Testimonial Table</a>

            <form class="row g-3" action="{{isset($testimonial) ? route('testimonial.update',['testimonial' => $testimonial->id]) : route('testimonial.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                    <div>
                        <label for="inputName5" class="form-label">photo</label>
                        <input type="file" name="photo" class="form-control" id="inputName5" value="{{ isset($testimonial) ? $testimonial->photo : old('photo') }}">
                    </div>
                  @error('photo')
                      <div class="alert alert-danger">
                          {{$message}}
                      </div>
                  @enderror
                </div>

                <div class="col-md-4">
                    <div>
                        <label for="inputName5" class="form-label">name</label>
                        <input type="text" name="name" class="form-control" id="inputName5" value="{{ isset($testimonial) ? $testimonial->name : old('name')}}">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="col-md-4">
                    <div>
                        <label for="inputName5" class="form-label">job</label>
                        <input type="text" name="job" class="form-control" id="inputName5" value="{{ isset($testimonial) ? $testimonial->job : old('job')}}">
                    </div>
                    @error('job')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div>
                        <label for="inputName5" class="form-label">description</label>
                        <textarea class="form-control" name="description" id="inputName5">{{ isset($testimonial) ? $testimonial->description : old('description')}}</textarea>
                    </div>
                    @error('description')
                        <div class="alert alert-danger">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
