<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\project;

class ProjectsController extends Controller
{
    //
    public function index(){
        $projects=project::all();
      
        return view('projects.index',compact('projects'));

    }
    public function create(){
        return view('projects.create');

    }
    public function store(Project $project)
    {
        $project = $this->validate(request(), [
          'title' => 'required | min:6 | unique:projects',
          'description' => 'required|min:6',
        ]);
        
        Product::create($project);

        return back()->with('success', 'Project has been added');;
    }
    public function edit(Project $project){

        return view('projects.edit',compact('project'));
    }

  
       
        
   
   
        public function update(Project $project, $id)
    {
        $project = Project::find($id);
        $this->validate(request(), [
          'title' => 'required',
          'description' => 'required|numeric',        
      ]);
        $project->title = $request->get('title');
        $project->description = $request->get('description');
        $project->save();
        return redirect('/projects')->with('success','Project has been updated');
    }
        
       
      
        public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect('/projects')->with('success','Project has been  deleted');
    }
       
};
