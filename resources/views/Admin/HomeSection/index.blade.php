@extends('Layouts.Adminlayouts')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home-section.css') }}">
@endpush

@section('title', 'Home Section | Admin Panel')

@section('page-heading', 'Home Section')

@section('content')

    <div class="home-section-page">

        {{-- =====================================================
            SUCCESS MESSAGE
        ====================================================== --}}

        @if(session('success'))

            <div class="alert alert-success border-0 shadow-sm mb-4">

                <i class="bi bi-check-circle-fill me-2"></i>

                {{ session('success') }}

            </div>

        @endif


        {{-- =====================================================
            PAGE HEADER
        ====================================================== --}}

        <div class="home-section-header">

            <div class="home-section-header-content">

                <h5>
                    <i class="bi bi-house-door-fill me-2"></i>
                    Home Section
                </h5>

                <p>
                    Manage the main content displayed on your portfolio homepage.
                </p>

            </div>


            <a href="{{ route('admin.home-section.edit') }}"
                class="home-section-btn">

                <i class="bi bi-pencil-square"></i>

                Edit Home Section

            </a>

        </div>


        {{-- =====================================================
            CHECK HOME SECTION
        ====================================================== --}}

        @if($homeSection)


            <div class="home-section-grid">


                {{-- =================================================
                    PROFILE PREVIEW
                ================================================== --}}

                <div class="home-section-card">

                    <div class="home-section-card-title">

                        <h5>
                            Profile Preview
                        </h5>

                        <p>
                            Your homepage profile information.
                        </p>

                    </div>


                    <div class="home-profile-preview">


                        {{-- Profile Image --}}

                        @if($homeSection->image)

                            <img
                                src="{{ asset($homeSection->image) }}"
                                alt="{{ $homeSection->name }}"
                                class="home-profile-image">

                        @else

                            <div class="home-profile-placeholder">

                                <i class="bi bi-person-fill"></i>

                            </div>

                        @endif


                        {{-- Name --}}

                        <h4 class="home-profile-name">

                            {{ $homeSection->name ?: 'Name Not Added' }}

                        </h4>


                        {{-- Job Title --}}

                        <p class="home-profile-job">

                            {{ $homeSection->job_title ?: 'Job Title Not Added' }}

                        </p>


                    </div>

                </div>



                {{-- =================================================
                    HOME CONTENT
                ================================================== --}}

                <div class="home-section-card">

                    <div class="home-section-card-title">

                        <h5>
                            Homepage Content
                        </h5>

                        <p>
                            Current content of your portfolio homepage.
                        </p>

                    </div>


                    {{-- Main Heading --}}

                    <div class="home-info-item">

                        <span class="home-info-label">
                            Main Heading
                        </span>

                        <div class="home-info-heading">

                            {{ $homeSection->heading ?: 'Heading Not Added' }}

                        </div>

                    </div>


                    {{-- Description --}}

                    <div class="home-info-item">

                        <span class="home-info-label">
                            Description
                        </span>

                        <div class="home-info-description">

                            {{ $homeSection->description ?: 'Description not added yet.' }}

                        </div>

                    </div>


                    {{-- Status --}}

                    <div class="home-info-item">

                        <span class="home-info-label">
                            Website Status
                        </span>


                        @if($homeSection->status)

                            <span class="home-status active">

                                <i class="bi bi-check-circle-fill"></i>

                                Active

                            </span>

                        @else

                            <span class="home-status inactive">

                                <i class="bi bi-x-circle-fill"></i>

                                Inactive

                            </span>

                        @endif

                    </div>


                    {{-- CV --}}

                    <div class="home-info-item">

                        <span class="home-info-label">
                            CV / Resume
                        </span>


                        @if($homeSection->cv)

                            <div class="home-cv-box">

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


                                <a href="{{ asset($homeSection->cv) }}"
                                    target="_blank"
                                    class="btn btn-sm btn-outline-dark">

                                    <i class="bi bi-eye me-1"></i>

                                    View

                                </a>

                            </div>

                        @else

                            <div class="text-muted small">

                                <i class="bi bi-file-earmark-x me-1"></i>

                                CV has not been uploaded yet.

                            </div>

                        @endif

                    </div>


                </div>

            </div>


        @else


            {{-- =================================================
                NO DATA
            ================================================== --}}

            <div class="home-section-card text-center py-5">

                <div class="mb-4">

                    <div class="home-profile-placeholder">

                        <i class="bi bi-house-door-fill"></i>

                    </div>

                </div>


                <h4 class="fw-bold mb-2">

                    Home Section Not Created

                </h4>


                <p class="text-muted mb-4">

                    Your homepage information has not been added yet.
                    Click the button below to create it.

                </p>


                <a href="{{ route('admin.home-section.edit') }}"
                    class="home-section-btn">

                    <i class="bi bi-plus-lg"></i>

                    Create Home Section

                </a>

            </div>


        @endif


    </div>

@endsection
