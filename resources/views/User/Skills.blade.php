@extends('Layouts.Userslayouts')

@section('title', 'Skills - Sajjad Hussain')

@section('content')


<section class="skills-page-hero">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- LEFT CONTENT --}}
            <div class="col-lg-7">

                <span class="skills-page-label gsap-skills-label">
                    MY EXPERTISE
                </span>

                <h1 class="skills-page-title gsap-skills-title">
                    Skills That Turn
                    <span>Ideas Into Reality.</span>
                </h1>

                <p class="skills-page-intro gsap-skills-intro">
                    I specialize in building modern, responsive and functional
                    web applications using Laravel, PHP, MySQL and modern
                    frontend technologies.
                </p>

                <div class="skills-hero-buttons gsap-skills-buttons">

                    <a href="#technical-skills" class="skills-primary-btn">
                        Explore My Skills
                        <i class="bi bi-arrow-down"></i>
                    </a>

                    <a href="{{ url('/contact') }}" class="skills-secondary-btn">
                        Let's Work Together
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                </div>

            </div>

            {{-- RIGHT PROFILE CARD --}}
            <div class="col-lg-5 gsap-skills-card-wrapper">

                <div class="skills-hero-card">

                    <div class="skills-card-top">
                        <span>DEVELOPER PROFILE</span>
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <div class="skills-card-main">

                        <div class="skills-main-icon">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <h3>Junior Laravel Developer</h3>

                        <p>
                            Passionate about backend development,
                            clean code and building real-world applications.
                        </p>

                    </div>

                    <div class="skills-card-footer">
                        <span>PHP</span>
                        <span>Laravel</span>
                        <span>MySQL</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


    <section id="technical-skills" class="technical-skills-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="skills-section-label">
                    TECHNICAL SKILLS
                </span>

                <h2 class="skills-section-title">
                    Technologies I <span>Work With.</span>
                </h2>

                <p class="skills-section-description mx-auto">
                    These are the technologies and tools I use to develop
                    responsive websites, Laravel applications and database-driven
                    systems.
                </p>

            </div>

            <div class="row g-4">

                @forelse ($skills as $skill)
                    <div class="col-md-6 col-lg-4">

                        <div class="skill-page-card">

                            <div class="skill-card-icon">

                                @if ($skill->icon)
                                    <i class="{{ $skill->icon }}"></i>
                                @else
                                    <i class="bi bi-code-slash"></i>
                                @endif

                            </div>

                            <div class="skill-card-content">

                                <div class="skill-card-heading">

                                    <h3>
                                        {{ $skill->name }}
                                    </h3>

                                    <span>
                                        {{ $skill->percentage }}%
                                    </span>

                                </div>

                                <p>
                                    {{ $skill->description }}
                                </p>

                                <div class="skill-progress">

                                    <span style="width: {{ $skill->percentage }}%;"></span>

                                </div>

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

    </section>

    <section class="skills-approach-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <span class="skills-section-label">
                        MY APPROACH
                    </span>

                    <h2 class="skills-section-title">
                        More Than Just
                        <span>Writing Code.</span>
                    </h2>

                    <p class="skills-section-description">
                        I focus on creating solutions that are clean,
                        maintainable, responsive and useful for real users.
                    </p>

                </div>


                <div class="col-lg-7">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="approach-card">

                                <div class="approach-number">
                                    01
                                </div>

                                <i class="bi bi-lightbulb"></i>

                                <h3>Problem Solving</h3>

                                <p>
                                    Understanding the problem first and
                                    creating practical solutions.
                                </p>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="approach-card">

                                <div class="approach-number">
                                    02
                                </div>

                                <i class="bi bi-phone"></i>

                                <h3>Responsive Design</h3>

                                <p>
                                    Building interfaces that work smoothly
                                    across desktop, tablet and mobile.
                                </p>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="approach-card">

                                <div class="approach-number">
                                    03
                                </div>

                                <i class="bi bi-code-square"></i>

                                <h3>Clean Code</h3>

                                <p>
                                    Writing organized and maintainable code
                                    following modern development practices.
                                </p>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="approach-card">

                                <div class="approach-number">
                                    04
                                </div>

                                <i class="bi bi-arrow-repeat"></i>

                                <h3>Continuous Learning</h3>

                                <p>
                                    Continuously learning new technologies
                                    and improving development skills.
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="skills-cta-section">

        <div class="container">

            <div class="skills-cta-card">

                <div>

                    <span class="skills-section-label">
                        LET'S BUILD SOMETHING
                    </span>

                    <h2>
                        Have an Idea?
                        <span>Let's Build It.</span>
                    </h2>

                    <p>
                        I'm always interested in learning, building new projects
                        and exploring opportunities in web development.
                    </p>

                </div>

                <a href="{{ url('/contact') }}" class="skills-cta-btn">
                    Contact Me
                    <i class="bi bi-arrow-up-right"></i>
                </a>

            </div>

        </div>

    </section>

@endsection
