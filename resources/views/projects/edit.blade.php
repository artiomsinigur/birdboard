@extends('layouts.app')

@section('title', 'Edit the project')

@section('content')
    <div class="container pt-4">
        <h1 class="h5">Edit the project</h1>

        <form method="POST" action="/projects/{{ $project->id }}/">
            @method('PATCH')

            @include('projects.form', [
                'buttonText' => 'Update Project'
                ])
        </form>
    </div><!-- /End container -->
@endsection