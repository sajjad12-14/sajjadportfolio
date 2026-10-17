@extends('Layouts.Userslayouts')

@section('title', 'About Me - Sajjad Hussain')

@section('content')

    <section class="about-page-hero">

        <div class="container">

            <div class="row align-items-center g-5">

                {{-- LEFT CONTENT --}}
                <div class="col-lg-7">

                    <span class="about-page-label gsap-about-label">
                        ABOUT ME
                    </span>

                    <h1 class="about-page-title gsap-about-title">
                        I'm Sajjad Hussain,
                        <span>Junior Laravel Developer.</span>
                    </h1>

                    <p class="about-page-intro gsap-about-intro">
                        I’m a passionate Web Developer focused on building
                        modern, responsive and user-friendly web applications.
                        I enjoy turning ideas into practical digital solutions
                        using Laravel, PHP, MySQL and modern frontend technologies.
                    </p>

                    <div class="about-page-buttons gsap-about-buttons">

                        <a href="#journey" class="about-page-primary-btn">
                            My Journey
                            <i class="bi bi-arrow-down"></i>
                        </a>

                        <a href="{{ url('/contact') }}" class="about-page-secondary-btn">
                            Contact Me
                            <i class="bi bi-arrow-up-right"></i>
                        </a>

                    </div>

                </div>

                {{-- RIGHT PROFILE CARD --}}
                <div class="col-lg-5 gsap-about-profile">

                    <div class="about-profile-card">

                        <div class="about-profile-image-wrapper">

                            <img src="{{ asset('images/sajjad.png') }}" alt="Sajjad Hussain"
                                class="about-profile-image gsap-about-image">

                        </div>

                        <div class="about-profile-content">

                            <h3>Sajjad Hussain</h3>

                            <p>Junior Laravel Developer</p>

                            <div class="about-profile-line"></div>

                            <span>PHP • Laravel • MySQL</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="about-who-section">

        <div class="container">

            <div class="row g-5 align-items-center">

                {{-- LEFT CONTENT --}}
                <div class="col-lg-5">

                    <span class="about-section-label gsap-who-label">
                        WHO I AM
                    </span>

                    <h2 class="about-section-title gsap-who-title">
                        Turning Ideas Into
                        <span>Digital Solutions.</span>
                    </h2>

                </div>

                {{-- RIGHT CONTENT --}}
                <div class="col-lg-7">

                    <p class="about-large-text gsap-who-text">
                        I’m a Web Developer who enjoys creating clean,
                        functional and meaningful digital experiences.
                        My main focus is backend development with Laravel,
                        while also building responsive interfaces using
                        HTML, CSS, Bootstrap and JavaScript.
                    </p>

                    <p class="about-normal-text gsap-who-text">
                        I believe good development is not only about writing
                        code. It is also about understanding problems,
                        creating simple solutions and continuously improving
                        the quality of the final product.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <section id="journey" class="about-journey-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="about-section-label">
                    MY JOURNEY
                </span>

                <h2 class="about-section-title">
                    My Development
                    <span>Journey.</span>
                </h2>

                <p class="about-section-description mx-auto">
                    A continuous journey of learning, building and improving
                    my web development skills.
                </p>

            </div>


            <div class="row g-4">

                {{-- CARD 01 --}}
                <div class="col-md-4">

                    <div class="about-journey-card">

                        <div class="about-card-number">
                            01
                        </div>

                        <div class="about-card-icon">
                            <i class="bi bi-code-slash"></i>
                        </div>

                        <h3>
                            Started Development
                        </h3>

                        <p>
                            I started my web development journey by learning
                            HTML, CSS, Bootstrap and JavaScript fundamentals.
                        </p>

                    </div>

                </div>


                {{-- CARD 02 --}}
                <div class="col-md-4">

                    <div class="about-journey-card">

                        <div class="about-card-number">
                            02
                        </div>

                        <div class="about-card-icon">
                            <i class="bi bi-layers"></i>
                        </div>

                        <h3>
                            Learned Laravel
                        </h3>

                        <p>
                            I moved into PHP and Laravel development, learning
                            MVC architecture, CRUD systems, authentication,
                            databases and REST APIs.
                        </p>

                    </div>

                </div>


                {{-- CARD 03 --}}
                <div class="col-md-4">

                    <div class="about-journey-card">

                        <div class="about-card-number">
                            03
                        </div>

                        <div class="about-card-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>

                        <h3>
                            Building Projects
                        </h3>

                        <p>
                            I continue improving my skills by building real
                            projects and exploring modern technologies and
                            professional development practices.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="about-education-section">

        <div class="container">

            <div class="row g-5">

                <div class="col-lg-5">

                    <span class="about-section-label">
                        EDUCATION
                    </span>

                    <h2 class="about-section-title">
                        My Learning
                        <span>Foundation.</span>
                    </h2>

                    <p class="about-section-description">
                        My education and technical training have helped me
                        develop a strong foundation in programming and
                        web development.
                    </p>

                </div>


                <div class="col-lg-7">

                    <div class="education-item">

                        <div class="education-year">
                            2025 – 2026
                        </div>

                        <div class="education-content">

                            <h3>
                                Intermediate
                            </h3>

                            <p>
                                Intermediate Education
                            </p>

                        </div>

                    </div>


                    <div class="education-item">

                        <div class="education-year">
                            2023 – 2024
                        </div>

                        <div class="education-content">

                            <h3>
                                Matriculation
                            </h3>

                            <p>
                                Matric Education
                            </p>

                        </div>

                    </div>


                    <div class="education-item">

                        <div class="education-year">
                            1 Year
                        </div>

                        <div class="education-content">

                            <h3>
                                APTECH DISM
                            </h3>

                            <p>
                                Diploma in Information System Management
                                — APTECH Garden Center.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="about-services-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="about-section-label">
                    WHAT I DO
                </span>

                <h2 class="about-section-title">
                    What I Can
                    <span>Build.</span>
                </h2>

            </div>


            <div class="row g-4">

                <div class="col-md-4">

                    <div class="about-service-card">

                        <i class="bi bi-server"></i>

                        <h3>
                            Backend Development
                        </h3>

                        <p>
                            Building secure and scalable backend systems
                            using PHP, Laravel and MySQL.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="about-service-card">

                        <i class="bi bi-window"></i>

                        <h3>
                            Responsive Websites
                        </h3>

                        <p>
                            Creating responsive and user-friendly interfaces
                            using HTML, CSS, Bootstrap and JavaScript.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="about-service-card">

                        <i class="bi bi-database-check"></i>

                        <h3>
                            Database Solutions
                        </h3>

                        <p>
                            Designing and managing relational databases
                            using MySQL with Laravel applications.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="about-goal-section">

        <div class="container">

            <div class="about-goal-card">

                <div>

                    <span class="about-section-label">
                        MY GOAL
                    </span>

                    <h2>
                        Always Learning.
                        <span>Always Building.</span>
                    </h2>

                    <p>
                        My goal is to grow as a professional Laravel Developer,
                        gain real-world industry experience and build reliable,
                        modern web applications that solve real problems.
                    </p>

                </div>

                <a href="{{ url('/contact') }}" class="about-goal-btn">
                    Let's Connect
                    <i class="bi bi-arrow-up-right"></i>
                </a>

            </div>

        </div>

    </section>

@endsection
