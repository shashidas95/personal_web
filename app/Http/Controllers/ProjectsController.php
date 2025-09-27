<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProjectFormRequest;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = ProjectResource::collection(Project::latest()->get());
        return view('projects.index', compact('projects'));
    }
    public function create()
    {
        return view('projects.create'); // make sure this view exists
    }
    public function store(ProjectFormRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('project_images', 'public');
        }

        auth()->user()->projects()->create($data);

        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }
    public function show(Project $project)
    {
        // $this->authorize('view', $project);

        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        // $this->authorize('update', $project);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectFormRequest $request, Project $project)
    {
        // $this->authorize('update', $project);

        $data = $request->validated();

        if ($request->hasFile('image')) {
            if ($project->image_path) {
                Storage::disk('public')->delete($project->image_path);
            }
            $data['image_path'] = $request->file('image')->store('project_images', 'public');
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        // $this->authorize('delete', $project);

        if ($project->image_path) {
            Storage::disk('public')->delete($project->image_path);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully!');
    }
}
