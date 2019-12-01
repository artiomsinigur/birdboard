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
                    <div class="block-invite">
                        <div class="inside d-flex">
                            <ul class="invited-user list-inline mb-0">
                                <li class="list-inline-item"><img class="rounded-circle" src="https://placeimg.com/35/35/people" alt="User"></li>
                                <li class="list-inline-item"><img class="rounded-circle" src="https://placeimg.com/35/35/people" alt="User"></li>
                            </ul>
                            <div>
                                <a href="" class="invite-project btn btn-primary ml-2">Invite to project</a>
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
                                <!-- To do -->
                                <div class="to-do mb-3">
                                    <div class="card" style="font-size: .85rem; border-left: 4px solid #FFC107">
                                        <div class="card-body d-flex justify-content-between p-2">
                                            <h3 class="card-title m-0 h6 text-capitalize text-dark">House move</h3>
                                            <div class="inside d-flex align-items-center">
                                                <span class="card-due-date mr-2 mb-1 text-black-50"><small>Due Tomorrow</small></span>
                                                <input type="checkbox" name="task">
                                            </div>
                                        </div>
                                    </div><!-- /End task card -->
                                </div><!-- /End to do -->
                            </section><!-- /End tasks -->

                            <!-- Notes -->
                            <section class="notes">
                                <h2 class="notes-title h5 mb-0">General notes</h2>
                                <textarea class="notes-text w-100 rounded" style="border-color:#DFDFDF"></textarea>
                            </section><!-- End notes -->
                        </div>

                        <div class="col-12 col-sm-4 mt-4">
                            <div class="card" style="font-size: .85rem; border-top: 4px solid #007BFF">
                                <div class="card-body">
                                    <h2 class="card-title h6 text-capitalize"><a href="">House move</a></h2>
                                    <p class="card-text text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>
                            </div><!-- /End card -->
                        </div>
                    </div>
                </div><!-- /End main content -->
            </div>

            <!-- Latest updates -->
            <div class="col-12 col-md-3 bg-white pt-4 mb-4">
                <aside class="latest-updates">
                    <h3 class="latest-updates-title h5">Latest Updates</h3>

                    <ul class="latest-updates-list list-unstyled" style="font-size: .85rem">
                        <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 1</a></li>
                        <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 2</a></li>
                        <li class="latest-updates-item"><a href="" class="py-1 d-block text-black-50">Task 3</a></li>
                    </ul>
                </aside><!-- /End latest-update -->
            </div>
        </div>
    </div><!-- /End container -->
@endsection