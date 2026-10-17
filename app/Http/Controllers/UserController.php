<?php

namespace App\Http\Controllers;

use App\Models\HomeSection;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;


class UserController extends Controller
{
    public function Home()
    {
        $homeSection = HomeSection::where('status', 1)->first();

        $skills = Skill::where('status', 1)
            ->latest()
            ->take(6)
            ->get();

        $projects = Project::where('status', 1)
            ->where('show_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        return view('User.home', compact(
            'homeSection',
            'skills',
            'projects'
        ));
    }
    public function about()
    {
        return view('User.about');
    }

    public function skills()
    {
        $skills = Skill::where('status', 1)
            ->latest()
            ->get();

        return view('User.skills', compact('skills'));
    }

    public function projects()
    {
        $projects = Project::where('status', 1)
            ->latest()
            ->paginate(3);

        return view('User.projects', compact('projects'));
    }

    public function contact()
    {
        return view('User.contact');
    }
}
