@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
   <div class="col-md-10">
    <div class="card">
      <div class="card-header" style="background-color:#dee0e1">Create New Resume</div>

      <div class="card-body">
       <form method="POST" action="{{ route('resumes.store') }}">
        @csrf
        <div class="row mb-3 py-3">
          <label for="title" class="col-md-4 col-form-label text-md-end">
           Title
          </label>

          <div class="col-md-6">
           <input
           type="text"
           class="form-control @error('title') is-invalid @enderror"
           name="title"
           value="{{ old('title') }}"
           required autocomplete="title"
           autofocus
        >

           @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
           @enderror
          </div>
        </div>
        </div>
        <div class="row mb-0">
          <div class="col-md-8 offset-md-4">
           <button type="submit" class="btn btn-primary">
            Submit
           </button>
          </div>
        </div>
       </form>
      </div>
    </div>
   </div>
  </div>
</div>
@endsection