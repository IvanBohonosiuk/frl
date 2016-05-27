<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\User;
use App\projects;

class ProjectsController extends MainController
{
    public function index(projects $project)
    {   
        $this->data['project'] = $project->getActive();

    	return view('projects.index', $this->data);
    }
    public function create()
    {

    }
    public function store()
    {

    }
    public function show($id)
    {

    }
    public function update($id)
    {

    }
}
