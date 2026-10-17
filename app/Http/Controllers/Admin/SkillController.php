<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display all skills.
     */
    public function index()
    {
        $skills = Skill::latest()->get();

        return view('Admin.Skills.index', compact('skills'));
    }

    /**
     * Show create skill form.
     */
    public function create()
    {
        return view('Admin.Skills.create');
    }

    /**
     * Store new skill.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
        ]);

        Skill::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'percentage' => $request->percentage,
            'description' => $request->description,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()
            ->route('admin.skills.index')
            ->with('success', 'Skill added successfully.');
    }

    /**
     * Show edit skill form.
     */
    public function edit(Skill $skill)
    {
        return view('Admin.Skills.edit', compact('skill'));
    }

    /**
     * Update skill.
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'percentage' => 'required|integer|min:0|max:100',
            'description' => 'required|string',
            'status' => 'nullable|boolean',
        ]);

        $skill->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'percentage' => $request->percentage,
            'description' => $request->description,
            'status' => $request->has('status') ? 1 : 0,
        ]);

        return redirect()
            ->route('admin.skills.index')
            ->with('success', 'Skill updated successfully.');
    }

    /**
     * Delete skill.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()
            ->route('admin.skills.index')
            ->with('success', 'Skill deleted successfully.');
    }
}
