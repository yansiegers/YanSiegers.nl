<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller {   
    public function index() {
        $projects = Project::all();

        return view('pages.projects.index', [
            'projects' => $projects
        ]);
    }

    public function show($id) {
        return view('pages.projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
}
