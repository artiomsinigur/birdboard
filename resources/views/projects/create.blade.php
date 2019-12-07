@extends('layouts.app')

@section('title', 'Create a project')

@section('content')
    <div class="container pt-4">
        <h1 class="h5">Create the project</h1>

        <form method="POST" action="/projects">
            @include('projects.form', [
                'project' => new App\Project,
                'buttonText' => 'Create Project'
            ])
        </form>
    </div><!-- /End container -->
@endsection