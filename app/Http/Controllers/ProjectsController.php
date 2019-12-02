<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        // Get all titles
        // $titlesProjects = Project::all()->map->title;

        $projects = Project::all();
        return view('projects/index', compact('projects'));
    }

    public function show() {
        return view('projects/project');
    }

    public function create() {
        return view('projects/create');
    }

    public function store()
    {
        // Exemple
        // Book c'est le Model
        // create() c'est la method
        /*
        $data = request()->validate([
            'title' => 'required',
            'author' => 'required'
        ]);
        Book::create($data);
        */
        // ou Refactory
        // Book::create($this->validateRequest());


        // validate the date
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Project::create($attributes);

        // redirect
        return redirect('/projects');
    }
}
