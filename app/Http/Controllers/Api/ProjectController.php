<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//model

use App\Models\Project;

class ProjectController extends Controller
{
    //serve per esporre i dati tramite api
    public function index() 
    {
        $projects = Project::with('type', 'tags')->paginate(1);
        
        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }

    public function show(string $slug) 
    {
        $projects = Project::where('slug' , $slug)->firstOrFail();
        
        return response()->json([
            'success' => true,
            'results' => $projects,
        ]);
    }
};
