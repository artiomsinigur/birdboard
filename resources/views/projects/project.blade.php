@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-12 col-md-9">
                <!-- Heading -->
                <div class="heading d-flex justify-content-between align-items-center my-4">
                    <!-- Navigation -->
                    <nav aria-label="breadcrumb" style="font-size: .85rem">
                        <ol class="breadcrumb mb-0 pl-0 bg-transparent">
                            <li class="breadcrumb-item" aria-current="page"><a href="/projects" class="font-weight-bold text-black-50">My projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="" class="font-weight-bold text-black-50">Projects</a></li>
                        </ol>
                    </nav><!-- /End navigation -->

                    <!-- Block invite to project -->
                    <div class="block-invite flex-grow-1">
                        <div class="inside d-flex align-items-center">
                            <a href="/projects/{{ $project->id }}/create" class="invite-project mr-auto align-self-start btn btn-sm btn-outline-secondary">Add a task</a>
                            <ul class="invited-user list-inline mb-0">
                                <li class="list-inline-item"><img class="rounded-circle" src="https://placeimg.com/35/35/people" alt="User"></li>
                                <li class="list-inline-item"><img class="rounded-circle" src="https://placeimg.com/35/35/people" alt="User"></li>
                            </ul>
                            <div>
                                <a href="/projects/{{ $project->id }}/edit" class="invite-project btn btn-sm btn-outline-info ml-2">Edit</a>
                                <form method="POST" action="/projects/{{ $project->id }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="invite-project btn btn-sm btn-outline-danger">Delete</button>
                                </form>
                                <a href="" class="invite-project btn btn-sm btn-primary">Invite to project</a>
                            </div>
                        </div>
                    </div><!-- /End invite -->
                </div><!-- /End heading -->

                <div class="main-content mb-4">
                    <div class="row">
                        <div class="col-12 col-sm-8 pr-sm-0">

                            <!-- Tasks -->
                            <section class="tasks mb-4">
                                <h2 class="tasks-title h5 mb-0">Tasks</h2>
                                @if($project->tasks->count())
                                    @foreach($project->tasks as $task)
                                        <!-- To do -->
                                        <div class="to-do mb-3">
                                            <div class="card" style="font-size: .85rem; border-left: 4px solid #FFC107">
                                                <div class="card-body d-flex p-2">

                                                    <form method="POST" action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" class="flex-grow-1 mr-2">
                                                        @method('PATCH')
                                                        @csrf
                                                        <div class="d-flex align-items-center">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" name="completed" class="custom-control-input" id="customCheck{{ $task->id }}" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                                                <label class="custom-control-label" for="customCheck{{ $task->id }}"></label>
                                                            </div>

                                                            <div class="flex-grow-1">
                                                                <input type="text" name="description" value="{{ $task->description }}" class="card-title w-100 m-0 border-0 p-1 h6 text-capitalize text-dark {{ $task->completed ? 'is-complete' : '' }}">
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="inside d-flex align-items-center">
                                                        <span class="card-due-date mr-2 mb-1 text-black-50"><small>Due Tomorrow</small></span>
                                                        <form method="POST" action="/projects/{{ $project->id }}/tasks/{{ $task->id }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">Del</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div><!-- /End task card -->
                                        </div><!-- /End to do -->
                                    @endforeach
                                @else
                                    <p>No tasks yet.</p>
                                @endif
                            </section><!-- /End tasks -->

                            <!-- Notes -->
                            <section class="notes">
                                <h2 class="notes-title h5 mb-0">General notes</h2>
                                <form method="POST" action="/projects/{{ $project->id }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="notes" class="notes-text w-100 rounded form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" >{{ $project->notes }}</textarea>
                                        @error('notes')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success">Save</button>
                                </form>
                            </section><!-- End notes -->
                        </div>

                        <div class="col-12 col-sm-4 mt-4">
                            @include('projects/card')
                        </div>
                    </div>
                </div><!-- /End main content -->
            </div>

            <!-- Latest updates -->
            <div class="col-12 col-md-3 bg-white pt-4 mb-4">
                <aside class="latest-updates">
                    <h3 class="latest-updates-title h5">Latest Updates</h3>
                    @include('projects.activity.card')
                </aside><!-- /End latest-update -->
            </div>
        </div>
    </div><!-- /End container -->
@endsection