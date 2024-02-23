<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', ['tasks'=>Task::all()]);
    }

    public function store(Request $request)
    {  
        $formFields = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        
        Task::create($formFields);
        // ddd("Success");
        return redirect('/');
    }
}
