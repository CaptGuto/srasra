@extends('components.header')

@section('content')
<a href="/" class="btn btn-dark text-decoration-none text-white m-2"><i class="fas fa-arrow-left"></i>
    Back</a>

<div class="mx-4">
    <div class="bg-light border border-secondary p-4 rounded">
        <div class="d-flex flex-column align-items-center text-center">
            <img class="w-25 mb-4" src="{{asset('images/work.png')}}" alt="">

            <h3 class="h3 mb-2">{{$jobListing->title}}</h3>
            <div class="h4 font-weight-bold mb-4">{{$jobListing->company}}</div>
            <ul class="list-inline">
                {{--A fix is needed here to pass a class to adjust the size --}}
                <x-tagListing :tags="$jobListing->tags" />
            </ul>
            <div class="h5 my-4">
                <i class="fas fa-map-marker-alt"> {{$jobListing->location}}</i> 
            </div>
            <div class="border border-secondary w-100 mb-4"></div>
            <div>
                <h3 class="h3 font-weight-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-4">
                    <p>
                        {{$jobListing->description}}
                    </p>

                    <a href="mailto:{{$jobListing->email}}" class="btn btn-danger "><i class="fas fa-envelope"></i>
                        Contact
                        Employer</a>

                    <a href="{{$jobListing->website}}" target="_blank" class="btn btn-dark "><i class="fas fa-globe"></i>
                        Visit Website</a>
                        <a href={{route('edit', ['jobListing' => $jobListing->id])}} class="btn btn-danger ">Edit</a>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection