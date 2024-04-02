@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Projects</h1>

    <div class="row row-cols-3">
      @foreach ($projects as $project)
        <div class="col"></div>
      @endforeach

    </div>
  </div>
@endsection
