<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();

        return view('index', ['projects' => $projects]);
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
