@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('alert'))
        <div class="alert alert-{{ session('alert')['type'] }} alert-dismissible fade show" role="alert">
            {{ session('alert')['message'] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-striped">
       <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col"></th>
            </tr>
       </thead>
       <tbody>
            @foreach ($resumes as $resumes)
              <tr>
                <td>
                    <a href="{{ route('resumes.show', $resumes->id) }}" class="text-decoration-none">{{ $resumes->title }}</a>
                </td>
                <td>
                    <div class="d-flex justify-content-end">
                        <div>
                            <a href="{{ route('resumes.edit', $resumes->id) }}" class="btn btn-primary">
                                Edit
                            </a>
                        </div>

                        <div class="ms-2">
                            <form method="POST" action="{{ route('resumes.destroy', $resumes->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
              </tr>  
            @endforeach
       </tbody>
    </table>
</div>
@endsection