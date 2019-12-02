<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Show all projects
     */
    public function index() {
        // Get all titles
        // $titlesProjects = Project::all()->map->title;

        $projects = Project::all();
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
    public function store()
    {
        $attributes = $this->validateProject();
        Project::create($attributes);

        return redirect('/projects');
    }

    /**
     * Show the project with project id
     * @param Project $project
     */
    public function show(Project $project) {
        return view('projects/project', compact('project'));
    }

    /**
     * Show the form for editing a project
     */
    public function edit($id) {
        $project = Project::find($id);
        return view('projects/edit', compact('project'));
    }

    /**
     * Update the project
     */
    public function update(Project $project) {
        $project->update($this->validateProject());

//        return redirect()->route('projects', [$project]); // ???
        return redirect()->action('ProjectsController@show', [$project]);
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
