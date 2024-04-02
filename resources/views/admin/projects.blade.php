@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="my-3">Projects</h1>

    <div class="row row-cols-3 mt-4">
      {{-- project card generator --}}
      @foreach ($projects as $project)
        <div class="col">
          <div class="card" style="width: 18rem;">
            {{-- project image --}}
            <img src="" class="card-img-top" alt="{{$project->title}} image">
            <div class="card-body">
              {{-- project title --}}
              <h5 class="card-title">{{$project->title}}</h5>
              {{-- project description --}}
              <p class="card-text">{{$project->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                {{-- link to the project detail --}}
                <a href={{route('admin.projects.show', $project)}}>{{$project->slug}}</a>
              </li>
            </ul>
            {{-- link for github --}}
            <div class="card-body">
              <a href="{{$project->github_reference}}" class="card-link">{{$project->github_reference}}</a>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection
