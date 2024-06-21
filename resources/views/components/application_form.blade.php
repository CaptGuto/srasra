@extends('components.header')

@section('content')


<div class="container mt-5">
    <h2 class="text-center">Apply for {{ $job->title }}</h2>
    <form method="POST" action={{route('submit_application', $job->id)}}>
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
            <p class="text-danger small mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" required>
            @error('email')
            <p class="text-danger small mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover_letter" class="form-label">Cover Letter</label>
            <textarea class="form-control" id="cover_letter" name="cover_letter" rows="5" required></textarea>
            @error('cover_letter')
            <p class="text-danger small mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit Application</button>
            <a href="" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>


@endsection