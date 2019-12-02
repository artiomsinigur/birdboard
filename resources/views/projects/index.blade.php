@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="main-content col-12 col-md-9 mb-4">
                <!-- Heading -->
                <div class="heading d-flex align-items-center my-4">
                    <h1 class="h5">My Projects</h1>
                    <a href="/projects/create" class="btn btn-primary ml-auto">New project</a>
                </div>

                <!-- Projects -->
                <div class="projects">
                    <div class="row">
                        @forelse($projects as $project)
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card" style="height: 150px; font-size: .85rem; border-top: 4px solid #007BFF">
                                    <div class="card-body">
                                        <h2 class="card-title h6 text-capitalize"><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h2>
                                        <p class="card-text text-black-50">{{ Illuminate\Support\Str::limit($project->description, 100) }}
                                            @if(strlen($project->description) > 100)
                                                <a href="/projects/{{ $project->id }}">Read more</a></p>
                                            @endif
                                    </div>
                                </div><!-- /End card -->
                            </div>
                        @empty
                            <p>No projects yet.</p>
                        @endforelse
                    </div>
                </div><!-- /End projects -->
            </div><!-- /End main-content -->

            <!-- Latest updates -->
            <aside class="latest-updates col-12 col-md-3 bg-white pt-4 mb-4">
                <h3 class="latest-updates-title h5">Latest Updates</h3>

                <ul class="latest-updates-list list-unstyled" style="font-size: .85rem">
                    <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 1</a></li>
                    <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 2</a></li>
                    <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 3</a></li>
                </ul>
            </aside><!-- /End latest-update -->

        </div>
    </div><!-- /End container -->
@endsection