<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function __construct()
    {
        // The middleware will be apply for every methods in this ProjectsController
        $this->middleware('auth');
    }

    /**
     * Show all user's projects
     */
    public function index() {
        $projects = auth()->user()->projects;

        return view('projects/index', compact('projects'));
    }

    /**
     * Show the form for creating a new project
     */
    public function create() {
        return view('projects/create');
    }

    /**
     * Create a new project
     */
    public function store() {
        $attributes = $this->validateProject();

//         Define owner_id for new project
//        $attributes['owner_id'] = auth()->id();
//        $project = Project::create($attributes);

        // Or we can call projects() method from User that will automatically set the owner_id
        $project = auth()->user()->projects()->create($attributes);

        return redirect('/projects/' . $project->id);
    }

    /**
     * Show the project with project id
     * @param Project $project
     */
    public function show(Project $project) {
//        abort_if($project->owner_id !== auth()->id(), 403);
        $this->authorize('view', $project);

        return view('projects/project', compact('project'));
    }

    /**
     * Show the form for editing a project
     */
    public function edit(Project $project) {
        $this->authorize('update', $project);

        return view('projects/edit', compact('project'));
    }

    /**
     * Update the specified project
     */
    public function update(Project $project) {
        $this->authorize('update', $project);

        if (request()->has('notes')) {
            $attributes = request()->validate(['notes' => 'min:5|max:255']);
            $attributes['title'] = $project->title;
            $attributes['description'] = $project->description;
        } else {
            $attributes = $this->validateProject();
        }

//        $attributes = request()->validate([
//            'title'     => ['required', 'min:3', 'max:50'],
//            'description'     => ['required', 'min:5', 'max:255'],
//            'notes' => ['min:5', 'max:255']
//        ]);

        $project->update($attributes);

//        return redirect()->route('projects', [$project]); // ???
        return redirect()->action('ProjectsController@show', [$project]);
    }

    /**
     * Delete the specified project
     */
    public function destroy(Project $project) {
        $this->authorize('delete', $project);

        // Delete the specified project without retrieving it
        Project::destroy($project->id);

        return redirect('projects');
    }

    /**
     * Validate the project form
     */
    private function validateProject() {
        return request()->validate([
            'title'     => ['required', 'min:3', 'max:50'],
            'description'     => ['required', 'min:5', 'max:500']
        ]);
    }
}
