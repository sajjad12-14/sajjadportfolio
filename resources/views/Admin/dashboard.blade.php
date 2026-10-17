@extends('Layouts.Adminlayouts')

@section('title', 'Dashboard | Admin Panel')

@section('page-heading', 'Welcome back, Sajjad 👋')

@section('content')

    {{-- =========================
         STATISTICS
    ========================== --}}

    <div class="row g-4 mb-4">

        {{-- Projects --}}
        <div class="col-xl-3 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-folder-fill"></i>
                </div>

                <div>
                    <span>Total Projects</span>

                    <h3>3+</h3>

                    <small>
                        <i class="bi bi-arrow-up"></i>
                        Portfolio Projects
                    </small>
                </div>

            </div>

        </div>


        {{-- Skills --}}
        <div class="col-xl-3 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-lightning-charge-fill"></i>
                </div>

                <div>
                    <span>Total Skills</span>

                    <h3>10+</h3>

                    <small>
                        <i class="bi bi-check-circle"></i>
                        Technologies
                    </small>
                </div>

            </div>

        </div>


        {{-- Profile --}}
        <div class="col-xl-3 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-person-fill"></i>
                </div>

                <div>
                    <span>Profile</span>

                    <h3>01</h3>

                    <small>
                        <i class="bi bi-check-circle"></i>
                        Active
                    </small>
                </div>

            </div>

        </div>


        {{-- Messages --}}
        <div class="col-xl-3 col-md-6">

            <div class="admin-stat-card">

                <div class="admin-stat-icon">
                    <i class="bi bi-envelope-fill"></i>
                </div>

                <div>
                    <span>Messages</span>

                    <h3>00</h3>

                    <small>
                        <i class="bi bi-chat-dots"></i>
                        No new messages
                    </small>
                </div>

            </div>

        </div>

    </div>


    {{-- =========================
         MAIN DASHBOARD CONTENT
    ========================== --}}

    <div class="row g-4">

        {{-- Recent Projects --}}
        <div class="col-lg-8">

            <div class="admin-panel-card">

                <div class="admin-panel-header">

                    <div>

                        <h5>
                            Recent Projects
                        </h5>

                        <p>
                            Your latest portfolio projects
                        </p>

                    </div>

                    <a href="#" class="admin-view-btn">
                        View All
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>


                {{-- Project 1 --}}
                <div class="admin-project-item">

                    <div class="admin-project-icon">
                        <i class="bi bi-book"></i>
                    </div>

                    <div class="admin-project-info">

                        <h6>
                            Online E-Book System
                        </h6>

                        <span>
                            Laravel • MySQL • Bootstrap
                        </span>

                    </div>

                    <span class="admin-status">
                        Active
                    </span>

                </div>


                {{-- Project 2 --}}
                <div class="admin-project-item">

                    <div class="admin-project-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>

                    <div class="admin-project-info">

                        <h6>
                            Personal Portfolio
                        </h6>

                        <span>
                            Laravel • Bootstrap • JavaScript
                        </span>

                    </div>

                    <span class="admin-status">
                        Active
                    </span>

                </div>


                {{-- Project 3 --}}
                <div class="admin-project-item">

                    <div class="admin-project-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <div class="admin-project-info">

                        <h6>
                            Web Development Project
                        </h6>

                        <span>
                            PHP • Laravel • MySQL
                        </span>

                    </div>

                    <span class="admin-status">
                        Active
                    </span>

                </div>

            </div>

        </div>


        {{-- Quick Actions --}}
        <div class="col-lg-4">

            <div class="admin-panel-card">

                <div class="admin-panel-header">

                    <div>

                        <h5>
                            Quick Actions
                        </h5>

                        <p>
                            Manage your portfolio
                        </p>

                    </div>

                </div>

               
                {{-- Add Project --}}
                <a href="{{ route('admin.projects.create') }}" class="quick-action">

                    <div>
                        <i class="bi bi-plus-lg"></i>
                    </div>

                    <span>
                        Add New Project
                    </span>

                    <i class="bi bi-chevron-right"></i>

                </a>


                {{-- Edit Profile --}}
                <a href="#" class="quick-action">

                    <div>
                        <i class="bi bi-pencil-square"></i>
                    </div>

                    <span>
                        Edit Profile
                    </span>

                    <i class="bi bi-chevron-right"></i>

                </a>


                {{-- Manage Skills --}}
                <a href="#" class="quick-action">

                    <div>
                        <i class="bi bi-stars"></i>
                    </div>

                    <span>
                        Manage Skills
                    </span>

                    <i class="bi bi-chevron-right"></i>

                </a>


                {{-- Messages --}}
                <a href="{{ route('admin.contacts.index') }}" class="quick-action">

                    <div>
                        <i class="bi bi-chat-left-text"></i>
                    </div>

                    <span>
                        View Messages
                    </span>

                    <i class="bi bi-chevron-right"></i>

                </a>


            </div>

        </div>

    </div>

@endsection
