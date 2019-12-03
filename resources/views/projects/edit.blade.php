@extends('layouts.tempapp')

@section('title', 'Edit the project')

@section('content')
    <div class="container">
        <div class="heading my-4">
            <!-- Navigation -->
            <nav aria-label="breadcrumb" style="font-size: .85rem">
                <ol class="breadcrumb mb-0 pl-0 bg-transparent">
                    <li class="breadcrumb-item" aria-current="page"><a href="/projects" class="font-weight-bold text-black-50">My projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="" class="font-weight-bold text-black-50">Edit the project</a></li>
                </ol>
            </nav><!-- /End navigation -->
        </div>

        <div class="main-content">
            <h1 class="h5">Edit the project</h1>

            <form method="POST" action="/projects/{{ $project->id }}">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label for="titleControl">Title</label>
                    <input type="text" name="title" class="form-control" id="titleControl" placeholder="Title" value="{{ $project->title }}">
                </div>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="descriptionControl">Description</label>
                    <textarea class="form-control" name="description" id="descriptionControl" rows="3" placeholder="Description">{{ $project->description }}</textarea>
                </div>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div>
                    <button class="btn btn-primary" type="submit" name="edit">Update</button>
                    <a href="/projects" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div><!-- /End container -->
@endsection