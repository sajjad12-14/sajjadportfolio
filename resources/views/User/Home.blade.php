@extends('Layouts.Userslayouts')

@section('content')

    <div class="portfolio-page">

        <section class="hero-section gsap-hero">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row align-items-center g-4 g-lg-5 hero-row">

                    <div class="col-12 col-lg-6 order-1 order-lg-1">

                        <div class="hero-eyebrow gsap-hero-eyebrow">
                            {{ $homeSection->job_title }}
                        </div>

                        <h1 class="hero-title gsap-hero-title">
                            Hi, I'm
                            <span class="hero-title-highlight">
                                {{ $homeSection->name }}.
                            </span>

                        </h1>

                        <p class="hero-description gsap-hero-description">
                            {{ $homeSection->description }}
                        </p>

                        <div class="hero-buttons gsap-hero-buttons">

                            <a href="{{ $homeSection->cv ? asset($homeSection->cv) : asset('images/SajjadCV.pdf') }}"
                                download class="btn rounded-pill px-4 py-3 fw-semibold hero-primary-btn">

                                <i class="bi bi-download me-2"></i>
                                Download CV

                            </a>

                            <a href="{{ url('/#projects') }}"
                                class="btn rounded-pill px-4 py-3 fw-semibold hero-secondary-btn">

                                View my work
                                <span class="ms-2">↗</span>

                            </a>

                        </div>

                        <div class="skills-carousel-wrapper gsap-hero-skills">

                            <h2 class="skills-heading">
                                Technologies &amp; Skills
                            </h2>

                            <div id="skillsCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                                data-bs-interval="3000" data-bs-pause="false" data-bs-touch="false">

                                <div class="carousel-inner">

                                    {{-- PHP --}}
                                    <div class="carousel-item active">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-php">
                                                <i class="bi bi-code-slash"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">PHP</div>
                                                <div class="skill-description">
                                                    Server-side Development
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- LARAVEL --}}
                                    <div class="carousel-item">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-laravel">
                                                <i class="bi bi-boxes"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">Laravel</div>
                                                <div class="skill-description">
                                                    MVC &amp; Web Application Development
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- MYSQL --}}
                                    <div class="carousel-item">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-mysql">
                                                <i class="bi bi-database"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">MySQL</div>
                                                <div class="skill-description">
                                                    Database Design &amp; Management
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- BOOTSTRAP --}}
                                    <div class="carousel-item">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-bootstrap">
                                                <i class="bi bi-bootstrap"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">Bootstrap 5</div>
                                                <div class="skill-description">
                                                    Responsive UI Development
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- JAVASCRIPT --}}
                                    <div class="carousel-item">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-javascript">
                                                <i class="bi bi-braces"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">JavaScript</div>
                                                <div class="skill-description">
                                                    Interactive Web Experiences
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- WORDPRESS --}}
                                    <div class="carousel-item">
                                        <div class="skill-item">
                                            <div class="skill-icon skill-icon-wordpress">
                                                <i class="bi bi-wordpress"></i>
                                            </div>
                                            <div>
                                                <div class="skill-name">WordPress</div>
                                                <div class="skill-description">
                                                    Website Development &amp; Customization
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-lg-6 order-2 order-lg-2">

                        <div class="hero-image-wrapper gsap-hero-image">

                            @if ($homeSection && $homeSection->image)
                                <img src="{{ asset($homeSection->image) }}"
                                    alt="{{ $homeSection->name }} - {{ $homeSection->job_title }}"
                                    class="hero-profile-image">
                            @else
                                <img src="{{ asset('images/sajjad.avif') }}" alt="Sajjad Hussain"
                                    class="hero-profile-image">
                            @endif


                            <div class="hero-floating-label">

                                <div class="hero-floating-title">
                                    {{ $homeSection->job_title }}
                                </div>

                                <div class="hero-floating-description">
                                    Developing with purpose.
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section id="about" class="about-section gsap-about">

            <div class="container-fluid about-container">

                <div class="row align-items-center g-0">

                    <div class="col-lg-5 about-image-column gsap-about-image">
                        <div class="about-image-wrapper">
                            <img src="{{ asset('images/sajjad1.png') }}" alt="Sajjad Hussain" class="about-profile-image">
                        </div>
                    </div>

                    <div class="col-lg-7 about-content-column">

                        <h2 class="about-title gsap-about-title">About Me</h2>

                        <p class="about-description gsap-about-text">
                            I'm a passionate Web Developer focused on creating
                            meaningful digital experiences using PHP, Laravel,
                            MySQL, Bootstrap, and JavaScript.
                        </p>

                        <p class="about-description about-description-second gsap-about-text">
                            My goal is to build modern, responsive web applications
                            and continuously improve my development skills.
                        </p>

                        <div class="hero-buttons gsap-about-button">
                            <a href="/about" class="btn rounded-pill px-4 py-3 fw-semibold hero-primary-btn">
                                <span class="me-2">↗</span>
                                About Page
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <section id="skills" class="skills-section gsap-skills">

            <div class="container">

                <div class="skills-heading text-center gsap-skills-heading">

                    <h2>
                        Technical <span>Skills</span>
                    </h2>

                    <p>
                        I work with modern web technologies to build responsive,
                        user-friendly and reliable web applications.
                        Here are the tools and technologies I use.
                    </p>
                    <a href="{{ url('/skills') }}" class="section-more-btn">
                        Explore My Skills
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                </div>


                <div class="container">

                    <div class="row g-3 skills-grid gsap-skills-grid">

                        @forelse ($skills as $skill)
                            <div class="col-6 col-md-4 col-lg-4">

                                <div class="skill-card gsap-skill-card">

                                    <div class="skill-card-top">

                                        <span class="skill-number">
                                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                        </span>

                                        @if ($skill->icon)
                                            <i class="{{ $skill->icon }} skill-icon"></i>
                                        @else
                                            <i class="bi bi-code-slash skill-icon"></i>
                                        @endif

                                    </div>

                                    <h3>
                                        {{ $skill->name }}
                                    </h3>

                                    <p class="skill-description">
                                        {{ $skill->description }}
                                    </p>

                                    <div class="skill-progress">

                                        <div class="skill-progress-bar gsap-skill-progress"
                                            style="width: {{ $skill->percentage }}%">
                                        </div>

                                    </div>

                                    <div class="skill-card-bottom">

                                        <span>
                                            Proficiency
                                        </span>

                                        <span class="skill-level">
                                            {{ $skill->percentage }}%
                                        </span>

                                    </div>

                                </div>

                            </div>

                        @empty

                            <div class="col-12">

                                <div class="text-center py-5">

                                    <i class="bi bi-stars fs-1 text-muted"></i>

                                    <h4 class="mt-3">
                                        No Skills Available
                                    </h4>

                                    <p class="text-muted">
                                        Skills will appear here once they are added
                                        from the admin panel.
                                    </p>

                                </div>

                            </div>
                        @endforelse

                    </div>

                </div>
            </div>

        </section>

        <section id="projects" class="projects-section gsap-projects">
            <div class="container">

                <div class="projects-heading text-center gsap-projects-heading">


                    <h2>Featured <span>Projects</span></h2>

                    <p>
                        Here are some of the projects I have built while learning
                        and developing my web development skills.
                    </p>
                    <a href="{{ url('/projects') }}" class="section-more-btn">
                        View All Projects
                        <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>

                <div class="row g-4">

                    @forelse ($projects as $index => $project)
                        <div class="col-lg-4 col-md-6">

                            <article class="project-card  ">

                                <div class="project-image ">

                                    @if ($project->image)
                                        <img class="project-background" src="{{ asset($project->image) }}"
                                            alt="{{ $project->title }} preview" loading="lazy"
                                            onerror="this.style.display='none';">
                                    @else
                                        <img class="project-background" src="{{ asset('images/portfolio-img.avif') }}"
                                            alt="{{ $project->title }} preview" loading="lazy">
                                    @endif

                                    <div class="project-video-overlay"></div>

                                    <span class="project-number">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>

                                </div>

                                <div class="project-content">

                                    <h3>
                                        {{ $project->title }}
                                    </h3>

                                    <p class="project-description">
                                        {{ $project->description }}
                                    </p>

                                    @if ($project->technologies)
                                        <div class="project-technologies">

                                            @foreach (explode(',', $project->technologies) as $technology)
                                                <span>
                                                    {{ trim($technology) }}
                                                </span>
                                            @endforeach

                                        </div>
                                    @endif


                                    <div class="project-actions">

                                        @if ($project->demo_url)
                                            <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                                                class="project-btn project-btn-primary">
                                                Live Demo
                                                <i class="bi bi-arrow-up-right"></i>
                                            </a>
                                        @endif


                                        @if ($project->github_url)
                                            <a href="{{ $project->github_url }}" target="_blank"
                                                rel="noopener noreferrer" class="project-btn project-btn-outline">
                                                <i class="bi bi-github"></i>
                                                Source Code
                                            </a>
                                        @endif

                                    </div>

                                </div>

                            </article>

                        </div>

                    @empty

                        <div class="col-12">

                            <div class="text-center py-5">

                                <i class="bi bi-folder2-open" style="font-size: 50px; color: #b9795c;"></i>

                                <h4 class="mt-3">
                                    No Projects Available
                                </h4>

                                <p class="text-muted">
                                    Projects will appear here once they are added from the Admin Panel.
                                </p>

                            </div>

                        </div>
                    @endforelse

                </div>



            </div>
        </section>
    </div>
@endsection
