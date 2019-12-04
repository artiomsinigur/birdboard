@extends('layouts.app')

@section('title', 'Create a project')

@section('content')
    <div class="container">
        <div class="heading my-4">
            <!-- Navigation -->
            <nav aria-label="breadcrumb" style="font-size: .85rem">
                <ol class="breadcrumb mb-0 pl-0 bg-transparent">
                    <li class="breadcrumb-item" aria-current="page"><a href="/projects" class="font-weight-bold text-black-50">My projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="" class="font-weight-bold text-black-50">Create a project</a></li>
                </ol>
            </nav><!-- /End navigation -->
        </div>

        <div class="main-content">
            <h1 class="h5">Create a project</h1>

            <form method="POST" action="/projects">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="titleControl">Title</label>
                    <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : 'is-valid' }}" id="titleControl" value="{{ old('title') }}" placeholder="Title">
                </div>
                @if($errors->has('title'))
                    <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                @endif

                <div class="form-group">
                    <label for="descriptionControl">Description</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : 'is-valid' }}" name="description" id="descriptionControl" rows="3" placeholder="Description">{{ old('description') }}</textarea>
                </div>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div>
                    <button class="btn btn-primary" type="submit" name="create">Create</button>
                    <a href="/projects" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div><!-- /End container -->
@endsection