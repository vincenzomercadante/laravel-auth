@extends('layouts.app')

@section('title', 'Create Project')

@section('content')

    <div class="container">
        <h1 class="my-3">Add a new Project</h1>

        <form action="{{ route('admin.projects.store') }}" method="POST" class="row gy-4">
            @csrf

            <div class="col-12">
                <label for="title" class="form-label mb-2">Project's Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Project's Title">
            </div>
            <div class="col-12">
                <label for="github_reference" class="form-label mb-2">Github Link</label>
                <input type="url" name="github_reference" id="github_reference" class="form-control"
                    placeholder="Project's Github Link">
            </div>
            <div class="col-12">
                <label for="description" class="form-label mb-2">Project's Description</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                    placeholder="Project's Description"></textarea>
            </div>
            <div class="col-12 d-flex gap-2">
                <input type="submit" value="Save" class="btn btn-success">
                <input type="reset" value="Clear" class="btn btn-warning">
            </div>
        </form>
    </div>

@endsection
