@extends('Layouts.Adminlayouts')

@section('page-heading', 'Projects')

@section('content')

    <div class="projects-admin-page">

        {{-- Header --}}
        <div class="projects-admin-header">

            <div class="projects-admin-header-content">

                <h5>
                    <i class="bi bi-folder-fill me-2"></i>
                    Projects Section
                </h5>

                <p>
                    Manage the projects displayed on your portfolio website.
                </p>

            </div>

            <a href="{{ route('admin.projects.create') }}"
                class="projects-admin-btn">

                <i class="bi bi-plus-lg"></i>
                Add Project

            </a>

        </div>


        {{-- Success Message --}}
        @if (session('success'))

            <div class="alert alert-success border-0 shadow-sm mb-4">

                <i class="bi bi-check-circle me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        {{-- Projects Card --}}
        <div class="projects-admin-card">

            @if ($projects->count() > 0)

                <div class="table-responsive">

                    <table class="projects-table">

                        <thead>

                            <tr>

                                <th>Project</th>

                                <th>Category</th>

                                <th>Home</th>

                                <th>Status</th>

                                <th>Actions</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($projects as $project)

                                <tr>

                                    {{-- Project --}}
                                    <td>

                                        <div class="project-admin-name-box">

                                            <div class="project-admin-image">

                                                @if ($project->image)

                                                    <img src="{{ asset($project->image) }}"
                                                        alt="{{ $project->title }}">

                                                @else

                                                    <i class="bi bi-folder2-open"></i>

                                                @endif

                                            </div>

                                            <div>

                                                <div class="project-admin-title">

                                                    {{ $project->title }}

                                                </div>

                                                <div class="project-admin-description">

                                                    {{ Str::limit($project->description, 60) }}

                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    {{-- Category --}}
                                    <td>

                                        <span class="project-category">

                                            {{ $project->category ?? '—' }}

                                        </span>

                                    </td>


                                    {{-- Show on Home --}}
                                    <td>

                                        @if ($project->show_on_home)

                                            <span class="project-home-status active">

                                                <i class="bi bi-house-fill"></i>
                                                Home

                                            </span>

                                        @else

                                            <span class="project-home-status inactive">

                                                <i class="bi bi-house"></i>
                                                Projects Only

                                            </span>

                                        @endif

                                    </td>


                                    {{-- Status --}}
                                    <td>

                                        @if ($project->status)

                                            <span class="project-status active">

                                                Active

                                            </span>

                                        @else

                                            <span class="project-status inactive">

                                                Inactive

                                            </span>

                                        @endif

                                    </td>


                                    {{-- Actions --}}
                                    <td>

                                        <div class="project-actions">

                                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                class="project-action-btn"
                                                title="Edit">

                                                <i class="bi bi-pencil"></i>

                                            </a>


                                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST"
                                                class="d-inline">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                    class="project-action-btn project-delete-btn"
                                                    title="Delete">

                                                    <i class="bi bi-trash3"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                {{-- Empty State --}}
                <div class="projects-empty">

                    <div class="projects-empty-icon">

                        <i class="bi bi-folder2-open"></i>

                    </div>

                    <h3>
                        No Projects Added Yet
                    </h3>

                    <p>
                        Start by adding your first portfolio project.
                    </p>

                    <a href="{{ route('admin.projects.create') }}"
                        class="add-project-btn">

                        <i class="bi bi-plus-lg"></i>

                        Add Your First Project

                    </a>

                </div>

            @endif

        </div>

    </div>

@endsection
