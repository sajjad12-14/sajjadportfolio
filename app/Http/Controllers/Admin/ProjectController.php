<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display all projects.
     */
    public function index()
    {
        $projects = Project::latest()->get();

        return view('Admin.Projects.index', compact('projects'));
    }

    /**
     * Show create project form.
     */
    public function create()
    {
        return view('Admin.Projects.create');
    }

    /**
     * Store new project.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'technologies' => 'nullable|string',
            'features' => 'nullable|string',
            'github_url' => 'nullable|url|max:255',
            'demo_url' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
            'show_on_home' => 'nullable|boolean',
        ]);

        $project = new Project();

        $project->title = $request->title;
        $project->category = $request->category;
        $project->description = $request->description;
        $project->technologies = $request->technologies;
        $project->features = $request->features;
        $project->github_url = $request->github_url;
        $project->demo_url = $request->demo_url;
        $project->status = $request->has('status') ? 1 : 0;
        $project->show_on_home = $request->has('show_on_home') ? 1 : 0;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(
                public_path('uploads/projects'),
                $imageName
            );

            $project->image = 'uploads/projects/' . $imageName;
        }



        $project->save();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project added successfully.');
    }

    /**
     * Show edit project form.
     */
    public function edit(Project $project)
    {
        return view('Admin.Projects.edit', compact('project'));
    }

    /**
     * Update project.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'technologies' => 'nullable|string',
            'features' => 'nullable|string',
            'github_url' => 'nullable|url|max:255',
            'demo_url' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
            'show_on_home' => 'nullable|boolean',
        ]);

        $project->title = $request->title;
        $project->category = $request->category;
        $project->description = $request->description;
        $project->technologies = $request->technologies;
        $project->features = $request->features;
        $project->github_url = $request->github_url;
        $project->demo_url = $request->demo_url;
        $project->status = $request->has('status') ? 1 : 0;
        $project->show_on_home = $request->has('show_on_home') ? 1 : 0;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(
                public_path('uploads/projects'),
                $imageName
            );

            $project->image = 'uploads/projects/' . $imageName;
        }

        

        $project->save();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project updated successfully.');
    }

    /**
     * Delete project.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()
            ->route('admin.projects.index')
            ->with('success', 'Project deleted successfully.');
    }
}
