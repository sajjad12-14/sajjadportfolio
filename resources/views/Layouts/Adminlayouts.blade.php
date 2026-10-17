<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Admin Panel | Sajjad')
    </title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- Admin CSS --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Admin-skills.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Admin-projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Admin-messages.css') }}">






    @stack('styles')

</head>

<body class="admin-body">

    <div class="admin-dashboard">

        {{-- =====================================================
             ADMIN SIDEBAR
        ====================================================== --}}

        <aside class="admin-sidebar">

            {{-- Logo --}}
            <div class="admin-logo">

                SAJJAD<span>.</span>

                <small>
                    ADMIN PANEL
                </small>

            </div>


            {{-- Navigation --}}
            <nav class="admin-nav">

                {{-- Dashboard --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                    <i class="bi bi-grid-1x2-fill"></i>

                    <span>
                        Dashboard
                    </span>

                </a>


                {{-- Home --}}
                <a href="{{ route('admin.home-section.index') }}"
                    class="admin-nav-link {{ request()->routeIs('admin.home-section.*') ? 'active' : '' }}">

                    <i class="bi bi-house-door-fill"></i>

                    <span>
                        Home
                    </span>

                </a>
                {{-- Skills --}}
                {{-- Skills --}}
                <a href="{{ route('admin.skills.index') }}"
                    class="admin-nav-link {{ request()->routeIs('admin.skills.*') ? 'active' : '' }}">

                    <i class="bi bi-lightning-charge-fill"></i>

                    <span>
                        Skills
                    </span>

                </a>


                {{-- Projects --}}
                <a href="{{ route('admin.projects.index') }}"
                    class="admin-nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">

                    <i class="bi bi-folder-fill"></i>

                    <span>
                        Projects
                    </span>

                </a>


                {{-- Messages --}}
                <a href="{{ route('admin.contacts.index') }}" class="admin-nav-link">

                    <i class="bi bi-envelope-fill"></i>

                    <span>
                        Messages
                    </span>

                </a>


                {{-- Settings --}}
                <a href="{{ route('admin.settings.index') }}" class="admin-nav-link">

                    <i class="bi bi-gear-fill"></i>

                    <span>
                        Settings
                    </span>

                </a>

            </nav>


            {{-- Sidebar Bottom --}}
            <div class="admin-sidebar-bottom">

                {{-- View Website --}}
                <a href="{{ url('/') }}" target="_blank" class="admin-nav-link">

                    <i class="bi bi-globe2"></i>

                    <span>
                        View Website
                    </span>

                </a>


                {{-- Logout --}}
                <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                    @csrf

                    <button type="submit" class="admin-nav-link logout-link border-0 w-100 text-start">
                        <i class="bi bi-box-arrow-right"></i>

                        <span>
                            Logout
                        </span>
                    </button>
                </form>
            </div>

        </aside>


        {{-- =====================================================
             MAIN ADMIN AREA
        ====================================================== --}}

        <main class="admin-main">

            {{-- Topbar --}}
            <div class="admin-topbar">

                <div>

                    <h4>
                        @yield('page-heading', 'Admin Dashboard')
                    </h4>

                    <p>
                        Manage your portfolio from your admin panel.
                    </p>

                </div>


                {{-- Admin Profile --}}
                <div class="admin-profile">

                    {{-- Notification --}}
                    <div class="admin-notification">

                        <i class="bi bi-bell"></i>

                        <span>
                            0
                        </span>

                    </div>


                    {{-- Avatar --}}
                    <div class="admin-avatar">
                        S
                    </div>


                    {{-- Profile Info --}}
                    <div class="admin-profile-info">

                        <strong>
                            Sajjad Hussain
                        </strong>

                        <small>
                            Administrator
                        </small>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 PAGE CONTENT
            ================================================== --}}

            @yield('content')

        </main>

    </div>


    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>

</html>
