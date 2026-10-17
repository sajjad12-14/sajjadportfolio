<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sajjad | Junior Laravel Developer')</title>

    <meta name="description" content="@yield('meta_description', 'Portfolio of Sajjad, Junior Laravel Developer specializing in Laravel, PHP, MySQL and modern web development.')">

    <meta name="theme-color" content="#FAF9F6">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>

    <!-- GSAP ScrollTrigger CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/About.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Skills.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Project.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    @stack('styles')
</head>

<body id="top">

    <nav class="navbar navbar-expand-lg   portfolio-navbar">

        <div class="container-fluid px-4 px-lg-5 gsap-navbar">

            {{-- BRAND LOGO --}}
            <a href="{{ url('/') }}" class="navbar-brand fw-bold portfolio-logo">
                SAJJAD<span>.</span>
            </a>

            {{-- MOBILE TOGGLER --}}
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainPortfolioNav" aria-controls="mainPortfolioNav" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- NAVIGATION LINKS --}}
            <div class="collapse navbar-collapse" id="mainPortfolioNav">

                <ul class="navbar-nav mx-auto gap-lg-4 text-center mt-3 mt-lg-0">
                    <li class="nav-item">
                        <a href="{{ url('/') }}" class="nav-link fw-semibold">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link fw-semibold">
                            About
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/skills') }}" class="nav-link fw-semibold">
                            Skills
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/projects') }}" class="nav-link fw-semibold">
                            Projects
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class="nav-link fw-semibold">
                            Contact
                        </a>
                    </li>

                </ul>

                <div class="d-flex align-items-center justify-content-center gap-2 mt-3 mt-lg-0">

                    {{-- Admin Panel Button --}}
                    <a href="{{ route('admin.login') }}" class="btn rounded-pill admin-btn">
                        <i class="bi bi-speedometer2 me-1"></i>
                        Admin Panel
                    </a>
                    {{-- Contact Us Button --}}
                    <a href="{{ url('/contact') }}" class="btn rounded-pill connect-btn">
                        Contact Us
                        <span class="connect-arrow">↗</span>
                    </a>

                </div>
            </div>
        </div>
    </nav>

    {{-- SPACE FOR FIXED NAVBAR --}}
    <div class="navbar-space"></div>




    {{-- PAGE CONTENT --}}
    <main>
        @yield('content')

    </main>



    {{-- PREMIUM FOOTER --}}
    <footer class="portfolio-footer gsap-footer">

        <div class="container">

            {{-- TOP FOOTER --}}
            <div class="footer-top">
                <a href="#home" class="footer-brand">
                    Sajjad<span>.</span>
                </a>

                <p class="footer-tagline gsap-footer-top">
                    Building digital experiences with creativity and code.
                </p>

                <div class="footer-socials">
                    <a href="https://github.com/sajjad12-14" target="_blank" rel="noopener" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=61553231847214" aria-label="Email">

                        <i class="bi bi-facebook"></i>

                    </a>
                </div>
            </div>

            {{-- FOOTER LINKS --}}
            <div class="footer-links gsap-footer-links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/skills">Skills</a>
                <a href="/projects">Projects</a>
                <a href="/contact">Contact Me</a>

            </div>

            {{-- BIG BACKGROUND BRAND --}}
            <div class="footer-watermark gsap-footer-watermark" aria-hidden="true">
                SAJJAD
            </div>

            {{-- BOTTOM FOOTER --}}
            <div class="footer-bottom">
                <p>
                    © {{ date('Y') }} Sajjad Hussain. All Rights Reserved.
                </p>

                <a href="#top" class="back-to-top">
                    Back to Top <i class="bi bi-arrow-up"></i>
                </a>
            </div>

        </div>

    </footer>



    {{-- Bootstrap JavaScript: navbar toggle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
<script src="{{ asset('js/script.js') }}"></script>

</html>
