@extends('layouts.tempapp')

@section('title', 'Edit the task')

@section('content')
    <div class="container">
        <div class="heading my-4">
            <!-- Navigation -->
            <nav aria-label="breadcrumb" style="font-size: .85rem">
                <ol class="breadcrumb mb-0 pl-0 bg-transparent">
                    <li class="breadcrumb-item" aria-current="page"><a href="/projects" class="font-weight-bold text-black-50">My projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="" class="font-weight-bold text-black-50">Edit a task</a></li>
                </ol>
            </nav><!-- /End navigation -->
        </div>

        <div class="main-content">
            <h1 class="h5">Edit a task</h1>

            <form method="POST" action="/projects/{{ $project->id }}/tasks/{{ $task->id }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="descControl">Description</label>
                    <input type="text" name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" id="descControl" value="{{ $task->description }}" placeholder="Description the task">
                </div>
                @if($errors->has('description'))
                    <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                @endif

                <div>
                    <button class="btn btn-primary" type="submit" name="edit">Edit</button>
                    <a href="/projects/{{ $project->id }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div><!-- /End container -->
@endsection