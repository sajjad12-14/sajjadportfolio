@extends('Layouts.Adminlayouts')

@section('page-heading', 'Edit Project')

@section('content')

    <div class="projects-admin-page">

        {{-- Header --}}
        <div class="projects-admin-header">

            <div class="projects-admin-header-content">
                <h5>
                    <i class="bi bi-pencil-square me-2"></i>
                    Edit Project
                </h5>

                <p>
                    Update your project information and visibility settings.
                </p>
            </div>

            <a href="{{ route('admin.projects.index') }}"
                class="projects-admin-btn">
                <i class="bi bi-arrow-left"></i>
                Back to Projects
            </a>

        </div>


        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm mb-4">

                <div class="fw-bold mb-2">
                    <i class="bi bi-exclamation-triangle me-2"></i>
                    Please fix the following errors:
                </div>

                <ul class="mb-0 ps-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif


        {{-- Form --}}
        <div class="projects-form-card">

            <form action="{{ route('admin.projects.update', $project->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')


                {{-- Project Information --}}
                <div class="projects-form-section">

                    <div class="projects-form-section-title">
                        <i class="bi bi-info-circle"></i>

                        <div>
                            <h6>Project Information</h6>
                            <p>Update the basic information of your project.</p>
                        </div>
                    </div>


                    <div class="row g-4">

                        {{-- Title --}}
                        <div class="col-md-8">

                            <label class="projects-form-label">
                                Project Title
                                <span>*</span>
                            </label>

                            <input type="text"
                                name="title"
                                value="{{ old('title', $project->title) }}"
                                class="projects-form-control"
                                placeholder="e.g. Online E-Book System"
                                required>

                        </div>


                        {{-- Category --}}
                        <div class="col-md-4">

                            <label class="projects-form-label">
                                Category
                            </label>

                            <input type="text"
                                name="category"
                                value="{{ old('category', $project->category) }}"
                                class="projects-form-control"
                                placeholder="e.g. Laravel Web Application">

                        </div>


                        {{-- Description --}}
                        <div class="col-12">

                            <label class="projects-form-label">
                                Description
                                <span>*</span>
                            </label>

                            <textarea name="description"
                                rows="5"
                                class="projects-form-control"
                                placeholder="Write a short description about your project..."
                                required>{{ old('description', $project->description) }}</textarea>

                        </div>

                    </div>

                </div>


                {{-- Project Media --}}
                <div class="projects-form-section">

                    <div class="projects-form-section-title">
                        <i class="bi bi-images"></i>

                        <div>
                            <h6>Project Media</h6>
                            <p>Update project image and demo video if needed.</p>
                        </div>
                    </div>


                    <div class="row g-4">

                        {{-- Current Image --}}
                        <div class="col-md-6">

                            <label class="projects-form-label">
                                Current Project Image
                            </label>

                            @if ($project->image)

                                <div class="project-edit-preview">

                                    <img src="{{ asset($project->image) }}"
                                        alt="{{ $project->title }}">

                                </div>

                            @else

                                <div class="project-edit-no-media">
                                    <i class="bi bi-image"></i>
                                    <span>No image uploaded</span>
                                </div>

                            @endif


                            <label class="projects-form-label mt-3">
                                Replace Image
                            </label>

                            <input type="file"
                                name="image"
                                class="projects-form-control"
                                accept=".jpg,.jpeg,.png,.webp,.avif">

                            <div class="projects-form-help">
                                Leave empty to keep the current image.
                            </div>

                        </div>


                        
                    </div>

                </div>


                {{-- Technologies & Features --}}
                <div class="projects-form-section">

                    <div class="projects-form-section-title">
                        <i class="bi bi-code-slash"></i>

                        <div>
                            <h6>Technologies & Features</h6>
                            <p>Update technologies and features used in this project.</p>
                        </div>
                    </div>


                    <div class="row g-4">

                        {{-- Technologies --}}
                        <div class="col-md-6">

                            <label class="projects-form-label">
                                Technologies
                            </label>

                            <textarea name="technologies"
                                rows="5"
                                class="projects-form-control"
                                placeholder="Laravel, PHP, MySQL, Bootstrap, JavaScript">{{ old('technologies', $project->technologies) }}</textarea>

                            <div class="projects-form-help">
                                Separate each technology with a comma.
                            </div>

                        </div>


                        {{-- Features --}}
                        <div class="col-md-6">

                            <label class="projects-form-label">
                                Features
                            </label>

                            <textarea name="features"
                                rows="5"
                                class="projects-form-control"
                                placeholder="Authentication, Shopping Cart, Admin Panel">{{ old('features', $project->features) }}</textarea>

                            <div class="projects-form-help">
                                Separate each feature with a comma.
                            </div>

                        </div>

                    </div>

                </div>


                {{-- Links --}}
                <div class="projects-form-section">

                    <div class="projects-form-section-title">
                        <i class="bi bi-link-45deg"></i>

                        <div>
                            <h6>Project Links</h6>
                            <p>Update GitHub and live demo links.</p>
                        </div>
                    </div>


                    <div class="row g-4">

                        {{-- GitHub --}}
                        <div class="col-md-6">

                            <label class="projects-form-label">
                                GitHub URL
                            </label>

                            <div class="projects-input-group">

                                <span>
                                    <i class="bi bi-github"></i>
                                </span>

                                <input type="url"
                                    name="github_url"
                                    value="{{ old('github_url', $project->github_url) }}"
                                    class="projects-form-control"
                                    placeholder="https://github.com/username/project">

                            </div>

                        </div>


                        {{-- Demo --}}
                        <div class="col-md-6">

                            <label class="projects-form-label">
                                Live Demo URL
                            </label>

                            <div class="projects-input-group">

                                <span>
                                    <i class="bi bi-globe2"></i>
                                </span>

                                <input type="url"
                                    name="demo_url"
                                    value="{{ old('demo_url', $project->demo_url) }}"
                                    class="projects-form-control"
                                    placeholder="https://example.com">

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Visibility --}}
                <div class="projects-form-section">

                    <div class="projects-form-section-title">
                        <i class="bi bi-eye"></i>

                        <div>
                            <h6>Project Visibility</h6>
                            <p>Control where this project appears on your website.</p>
                        </div>
                    </div>


                    <div class="row g-4">

                        {{-- Status --}}
                        <div class="col-md-6">

                            <div class="projects-toggle-card">

                                <div class="projects-toggle-content">

                                    <div class="projects-toggle-icon">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>

                                    <div>
                                        <h6>Active Project</h6>
                                        <p>
                                            Show this project on the Projects page.
                                        </p>
                                    </div>

                                </div>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="status"
                                        value="1"
                                        id="status"
                                        {{ $project->status ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                        for="status">
                                    </label>

                                </div>

                            </div>

                        </div>


                        {{-- Home --}}
                        <div class="col-md-6">

                            <div class="projects-toggle-card">

                                <div class="projects-toggle-content">

                                    <div class="projects-toggle-icon home">
                                        <i class="bi bi-house-fill"></i>
                                    </div>

                                    <div>
                                        <h6>Show on Home</h6>
                                        <p>
                                            Display this project in the Home section.
                                        </p>
                                    </div>

                                </div>

                                <div class="form-check form-switch">

                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="show_on_home"
                                        value="1"
                                        id="show_on_home"
                                        {{ $project->show_on_home ? 'checked' : '' }}>

                                    <label class="form-check-label"
                                        for="show_on_home">
                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                {{-- Buttons --}}
                <div class="projects-form-footer">

                    <a href="{{ route('admin.projects.index') }}"
                        class="projects-cancel-btn">
                        Cancel
                    </a>

                    <button type="submit"
                        class="projects-save-btn">

                        <i class="bi bi-check2-circle"></i>

                        Update Project

                    </button>

                </div>

            </form>

        </div>

    </div>

@endsection
