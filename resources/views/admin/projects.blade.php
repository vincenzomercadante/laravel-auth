@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <div class="container" id="projects">
    <h1 class="my-3">Projects</h1>

    <div class="row row-cols-3 mt-4">
      {{-- project card generator --}}
      @foreach ($projects as $project)
        <div class="col">
          <div class="card">
            {{-- project image --}}
            <img src="" class="card-img-top border border-bottom-1 text-center" alt="{{$project->title}} image">
            <div class="card-body">
              {{-- project title --}}
              <h5 class="card-title">{{$project->title}}</h5>
              {{-- project description --}}
              <p class="card-text">{{$project->get_description(60)}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                {{-- link to the project detail --}}
                <a href={{route('admin.projects.show', $project)}} class="card-link">{{$project->slug}}</a>
              </li>
            </ul>
            {{-- link for github --}}
            <div class="card-body">
              <a href="{{$project->github_reference}}" class="card-link">{{$project->github_reference}}</a>
              <div class="d-flex justify-content-center gap-2 mt-3">
                <a class="btn btn-primary text-uppercase" href="{{route('admin.projects.edit', $project)}}">modify project</a>
                <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button class="btn btn-danger text-uppercase">delete project</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach

    </div>
  </div>
@endsection
