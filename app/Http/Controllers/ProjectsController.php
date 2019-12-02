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
        Project::create(request(['title', 'description']));

        return redirect('/projects');
    }

    /**
     * Show the project with project id
     * @param Project $project
     */
    public function show(Project $project) {
        return view('projects/project', compact('project'));
    }
}
