@extends('layouts.app')


@section('content')

    <div id="project-details" class="container mt-4">
        <h1 class="">
            {{$project->title}}
        </h1>

        <div class="d-flex gap-4">
            <figure>
                <img src="" alt="{{$project->title}} image">
            </figure>

            <div>
                <h2><span class="fw-semibold text-capitalize mb-2 fs-4 d-inline-block me-2">Title:</span>{{$project->title}}</h2>
                <h3><span class="fw-semibold text-capitalize mb-2 fs-4 d-inline-block">description: </span><br>{{$project->description}}</h3>
                <a href="{{$project->github_reference}}">See on GitHub!</a>
            </div>
        </div>
    </div>

@endsection