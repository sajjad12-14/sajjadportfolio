@extends('Layouts.Adminlayouts')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home-section.css') }}">
@endpush

@section('title', 'Edit Home Section | Admin Panel')

@section('page-heading', 'Edit Home Section')

@section('content')

    <div class="home-section-page">

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger border-0 shadow-sm mb-4">
                <div class="fw-bold mb-2">
                    <i class="bi bi-exclamation-triangle-fill me-2"></i>
                    Please fix the following errors:
                </div>

                <ul class="mb-0 ps-4">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        {{-- Page Header --}}
        <div class="home-section-header">

            <div class="home-section-header-content">

                <h5>
                    <i class="bi bi-house-door-fill me-2"></i>
                    Edit Home Section
                </h5>

                <p>
                    Update the content and information displayed on your portfolio homepage.
                </p>

            </div>

            <a href="{{ route('admin.home-section.index') }}" class="home-section-btn">

                <i class="bi bi-arrow-left"></i>
                Back to Home Section

            </a>

        </div>


        {{-- Edit Form --}}
        <form action="{{ route('admin.home-section.update') }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')


            <div class="home-edit-grid">


                {{-- LEFT COLUMN --}}
                <div>


                    {{-- Personal Information --}}
                    <div class="home-edit-card mb-4">

                        <div class="home-edit-card-title">

                            <div>
                                <h5>
                                    <i class="bi bi-person-circle me-2"></i>
                                    Personal Information
                                </h5>

                                <p>
                                    Add your name and professional job title.
                                </p>
                            </div>

                        </div>


                        <div class="row g-4">

                            {{-- Name --}}
                            <div class="col-md-6">

                                <div class="home-form-group">

                                    <label class="home-form-label">
                                        Full Name
                                        <span>*</span>
                                    </label>

                                    <input type="text" name="name" class="form-control home-form-control"
                                        value="{{ old('name', $homeSection->name ?? 'Sajjad Hussain') }}"
                                        placeholder="Enter your full name" required>

                                    <div class="home-form-help">
                                        Your name will appear on the homepage.
                                    </div>

                                </div>

                            </div>


                            {{-- Job Title --}}
                            <div class="col-md-6">

                                <div class="home-form-group">

                                    <label class="home-form-label">
                                        Job Title
                                        <span>*</span>
                                    </label>

                                    <input type="text" name="job_title" class="form-control home-form-control"
                                        value="{{ old('job_title', $homeSection->job_title ?? 'Junior Laravel Developer') }}"
                                        placeholder="e.g. Junior Laravel Developer" required>

                                    <div class="home-form-help">
                                        Your professional designation.
                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>



                    {{-- Homepage Content --}}
                    <div class="home-edit-card mb-4">

                        <div class="home-edit-card-title">

                            <div>
                                <h5>
                                    <i class="bi bi-layout-text-window-reverse me-2"></i>
                                    Homepage Content
                                </h5>

                                <p>
                                    Manage your main homepage heading and introduction.
                                </p>
                            </div>

                        </div>
 
                        {{-- Description --}}
                        <div class="home-form-group">

                            <label class="home-form-label">
                                Description
                                <span>*</span>
                            </label>

                            <textarea name="description" rows="6" class="form-control home-form-control"
                                placeholder="Write a short introduction about yourself..." required>{{ old('description', $homeSection->description ?? '') }}</textarea>

                            <div class="home-form-help">
                                Write a professional introduction about yourself and your development skills.
                            </div>

                        </div>

                    </div>



                    {{-- Profile Image --}}
                    <div class="home-edit-card mb-4">

                        <div class="home-edit-card-title">

                            <div>
                                <h5>
                                    <i class="bi bi-image me-2"></i>
                                    Profile Image
                                </h5>

                                <p>
                                    Upload the image that will appear on your homepage.
                                </p>
                            </div>

                        </div>


                        {{-- Current Image --}}
                        @if (!empty($homeSection?->image))
                            <div class="home-current-image mb-4">

                                <div class="mb-3">

                                    <span class="home-info-label">
                                        Current Image
                                    </span>

                                </div>

                                <img src="{{ asset($homeSection->image) }}"
                                    alt="{{ $homeSection->name ?? 'Profile Image' }}">

                            </div>
                        @endif


                        {{-- Upload Box --}}
                        <div class="home-upload-box">

                            <div class="home-upload-icon">
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                            </div>

                            <div class="home-upload-content">

                                <label for="image" class="home-form-label mb-1">
                                    Upload New Image
                                </label>

                                <input type="file" name="image" id="image" class="form-control home-form-control"
                                    accept=".jpg,.jpeg,.png,.webp,.avif">

                                <div class="home-form-help">
                                    Allowed: JPG, JPEG, PNG, WEBP, AVIF. Maximum size: 2MB.
                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- CV / Resume --}}
                    <div class="home-edit-card">

                        <div class="home-edit-card-title">

                            <div>
                                <h5>
                                    <i class="bi bi-file-earmark-pdf-fill me-2"></i>
                                    CV / Resume
                                </h5>

                                <p>
                                    Upload your latest CV in PDF format.
                                </p>
                            </div>

                        </div>


                        {{-- Current CV --}}
                        @if (!empty($homeSection?->cv))
                            <div class="home-current-cv mb-4">

                                <div class="home-cv-icon">
                                    <i class="bi bi-file-earmark-pdf-fill"></i>
                                </div>

                                <div class="home-cv-info">

                                    <strong>
                                        Current CV
                                    </strong>

                                    <small>
                                        PDF Resume
                                    </small>

                                </div>

                                <a href="{{ asset($homeSection->cv) }}" target="_blank"
                                    class="btn btn-sm btn-outline-dark">

                                    <i class="bi bi-eye me-1"></i>
                                    View

                                </a>

                            </div>
                        @endif


                        {{-- Upload CV --}}
                        <div class="home-upload-box">

                            <div class="home-upload-icon">
                                <i class="bi bi-file-earmark-arrow-up-fill"></i>
                            </div>

                            <div class="home-upload-content">

                                <label for="cv" class="home-form-label mb-1">
                                    Upload New CV
                                </label>

                                <input type="file" name="cv" id="cv" class="form-control home-form-control"
                                    accept=".pdf">

                                <div class="home-form-help">
                                    Only PDF files are allowed. Maximum size: 5MB.
                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- RIGHT COLUMN --}}
                <div>


                    {{-- Status --}}
                    <div class="home-edit-card mb-4">

                        <div class="home-edit-card-title">

                            <div>
                                <h5>
                                    <i class="bi bi-toggle-on me-2"></i>
                                    Website Status
                                </h5>

                                <p>
                                    Control whether this homepage section is active.
                                </p>
                            </div>

                        </div>


                        <div class="home-status-box">

                            <div>

                                <strong>
                                    Display Home Section
                                </strong>

                                <div class="home-form-help">
                                    Turn this off if you temporarily want to hide this section.
                                </div>

                            </div>

                            <div class="form-check form-switch">

                                <input class="form-check-input" type="checkbox" role="switch" name="status"
                                    value="1" id="status"
                                    {{ old('status', $homeSection->status ?? 1) ? 'checked' : '' }}>

                            </div>

                        </div>

                    </div>



                    {{-- Save Card --}}
                    <div class="home-save-card">

                        <div class="home-save-title">

                            <i class="bi bi-check-circle-fill"></i>

                            Save Changes

                        </div>

                        <div class="home-save-text">

                            Make sure all information is correct before saving your homepage section.

                        </div>


                        <div class="d-grid gap-2">

                            <button type="submit" class="home-save-btn">

                                <i class="bi bi-save2-fill"></i>
                                Save

                            </button>


                            <a href="{{ route('admin.home-section.index') }}" class="home-cancel-btn">

                                <i class="bi bi-x-lg"></i>
                                Cancel

                            </a>

                        </div>

                    </div>


                </div>

            </div>

        </form>

    </div>

@endsection
