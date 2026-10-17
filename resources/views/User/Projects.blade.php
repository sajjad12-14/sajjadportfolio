@extends('Layouts.Userslayouts')

@section('title', 'Projects - Sajjad Hussain')

@section('content')

<section class="projects-page-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-7">

                <span class="projects-page-label gsap-projects-label">
                    MY WORK
                </span>

                <h1 class="projects-page-title gsap-projects-title">
                    Projects Built With
                    <span>Passion & Code.</span>
                </h1>

                <p class="projects-page-intro gsap-projects-intro">
                    A collection of web development projects where I have
                    applied Laravel, PHP, MySQL, Bootstrap and JavaScript
                    to build practical and modern digital solutions.
                </p>

                <div class="projects-hero-buttons gsap-projects-buttons">

                    <a href="#featured-projects"
                       class="projects-primary-btn">
                        Explore Projects
                        <i class="bi bi-arrow-down"></i>
                    </a>

                    <a href="{{ url('/contact') }}"
                       class="projects-secondary-btn">
                      Let's Work Together
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                </div>

            </div>

            {{-- RIGHT PROJECT CARD --}}
            <div class="col-lg-5 gsap-projects-card-wrapper">

                <div class="projects-hero-card">

                    <div class="projects-hero-icon">
                        <i class="bi bi-code-square"></i>
                    </div>

                    <span class="projects-hero-small">
                        PROJECT PORTFOLIO
                    </span>

                    <h3>
                        Building Ideas Into
                        <span>Real Applications.</span>
                    </h3>

                    <div class="projects-hero-line"></div>



                </div>

            </div>

        </div>

    </div>

</section>



    <section id="featured-projects" class="projects-list-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="projects-section-label">
                    FEATURED PROJECTS
                </span>

                <h2 class="projects-section-title">
                    Things I've <span>Built.</span>
                </h2>

                <p class="projects-section-description mx-auto">
                    Here are some of the projects I have worked on while
                    learning and improving my web development skills.
                </p>

            </div>

            @forelse($projects as $index => $project)

                <div class="project-page-card mb-5">

                    <div class="row g-0 align-items-stretch">

                        <div class="col-lg-6 order-lg-1">

                            <div class="project-page-content">

                                @if ($project->category)
                                    <span class="project-page-category">
                                        {{ $project->category }}
                                    </span>
                                @endif


                                <!-- Title -->
                                <h3>
                                    {{ $project->title }}
                                </h3>


                                <!-- Description -->
                                @if ($project->description)
                                    <p>
                                        {{ $project->description }}
                                    </p>
                                @endif


                                <!-- Technologies -->
                                @if ($project->technologies)
                                    <div class="project-tech-list">

                                        @foreach (explode(',', $project->technologies) as $technology)
                                            @if (trim($technology))
                                                <span>
                                                    {{ trim($technology) }}
                                                </span>
                                            @endif
                                        @endforeach

                                    </div>
                                @endif

                                @if ($project->features)
                                    <div class="project-page-features">

                                        @foreach (explode(',', $project->features) as $feature)
                                            @if (trim($feature))
                                                <div>
                                                    <i class="bi bi-check-circle-fill"></i>
                                                    {{ trim($feature) }}
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                @endif

                                <div class="project-page-buttons">

                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer"
                                            class="project-github-btn">

                                            <i class="bi bi-github"></i>
                                            GitHub

                                        </a>
                                    @endif


                                    @if ($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer"
                                            class="project-demo-btn">

                                            Live Demo
                                            <i class="bi bi-arrow-up-right"></i>

                                        </a>
                                    @endif

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 order-lg-2">

                            <div class="project-page-image">

                                @if ($project->image)
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                        class="project-background" loading="lazy">
                                @else
                                    <img src="{{ asset('images/portfolio-img.avif') }}" alt="{{ $project->title }}"
                                        class="project-background" loading="lazy">
                                @endif

                                <div class="project-image-overlay"></div>


                                <!-- Project Number -->
                                <span class="project-page-number">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            @empty

                <div class="text-center py-5">

                    <h4>
                        No projects available.
                    </h4>

                    <p class="text-muted mb-0">
                        Projects will appear here once they are added
                        from the Admin Panel.
                    </p>

                </div>

            @endforelse

            @if ($projects->hasPages())
                <div class="projects-pagination mt-5">
                    {{ $projects->links() }}
                </div>
            @endif

        </div>

    </section>



    <section class="projects-cta-section">

        <div class="container">

            <div class="projects-cta-card">

                <div>

                    <span class="projects-section-label">
                        HAVE A PROJECT IN MIND?
                    </span>

                    <h2>
                        Let's Build Something
                        <span>Great Together.</span>
                    </h2>

                    <p>
                        I'm always interested in new opportunities, interesting
                        projects and collaborations. Let's turn your idea into
                        a real digital experience.
                    </p>

                </div>

                <a href="{{ url('/contact') }}" class="projects-cta-btn">
                    Let's Talk
                    <i class="bi bi-arrow-up-right"></i>
                </a>

            </div>

        </div>

    </section>

@endsection
