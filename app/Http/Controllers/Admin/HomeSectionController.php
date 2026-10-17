<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    /**
     * Show Home Section.
     */
    public function index()
    {
        $homeSection = HomeSection::first();

        return view('Admin.HomeSection.index', compact('homeSection'));
    }

    /**
     * Show edit form.
     */
    public function edit()
    {
        $homeSection = HomeSection::first();

        return view('Admin.HomeSection.edit', compact('homeSection'));
    }

    /**
     * Update Home Section.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

            'job_title' => 'required|string|max:255',

            'description' => 'required|string',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'cv' => 'nullable|mimes:pdf|max:5120',

            'status' => 'nullable|boolean',
        ]);

        $homeSection = HomeSection::first();

        if (!$homeSection) {
            $homeSection = new HomeSection();
        }

        $homeSection->name = $request->name;

        $homeSection->job_title = $request->job_title;

        $homeSection->description = $request->description;

        $homeSection->status = $request->has('status') ? 1 : 0;


        /*
        |--------------------------------------------------------------------------
        | Profile Image
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . $image->getClientOriginalName();

            $image->move(
                public_path('uploads/home'),
                $imageName
            );

            $homeSection->image = 'uploads/home/' . $imageName;
        }


        /*
        |--------------------------------------------------------------------------
        | CV PDF
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('cv')) {

            $cv = $request->file('cv');

            $cvName = time() . '_' . $cv->getClientOriginalName();

            $cv->move(
                public_path('uploads/cv'),
                $cvName
            );

            $homeSection->cv = 'uploads/cv/' . $cvName;
        }


        $homeSection->save();


        return redirect()
            ->route('admin.home-section.index')
            ->with('success', 'Home section updated successfully.');
    }
}
