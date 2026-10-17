@extends('Layouts.Userslayouts')

@section('title', 'Contact | Sajjad Hussain')

@section('content')

    <section class="contact-page">

        <div class="container">

            <div class="contact-page-hero text-center">

                <span class="contact-page-label">
                    GET IN TOUCH
                </span>

                <h1>
                    Let's Work
                    <span>Together.</span>
                </h1>

                <p>
                    Have a project in mind, need a Laravel developer,
                    or simply want to connect? I'd love to hear from you.
                </p>

            </div>

            <div class="row g-4 align-items-stretch">

                <div class="col-lg-5">

                    <div class="contact-page-info">

                        <span class="contact-info-label">
                            CONTACT INFORMATION
                        </span>

                        <h2>
                            Let's start a
                            <span>conversation.</span>
                        </h2>

                        <p class="contact-info-text">
                            I'm open to internships, junior developer
                            opportunities, freelance projects and exciting
                            web development collaborations.
                        </p>


                        <!-- EMAIL -->
                        <a href="mailto:your-email@example.com" class="contact-detail">

                            <div class="contact-detail-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div>
                                <small>Email Address</small>
                                <strong>your-email@example.com</strong>
                            </div>

                        </a>


                        <!-- LOCATION -->
                        <div class="contact-detail">

                            <div class="contact-detail-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>
                                <small>Location</small>
                                <strong>Karachi, Pakistan</strong>
                            </div>

                        </div>


                        <!-- SPECIALIZATION -->
                        <div class="contact-detail">

                            <div class="contact-detail-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <div>
                                <small>Specialization</small>
                                <strong>Laravel & Web Development</strong>
                            </div>

                        </div>


                        <div class="contact-page-divider"></div>


                        <span class="contact-connect-title">
                            CONNECT WITH ME
                        </span>

                        <div class="contact-page-socials">

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

                </div>

                <div class="col-lg-7">

                    <div class="contact-page-form">

                        <span class="contact-form-label">
                            SEND A MESSAGE
                        </span>

                        <h2>
                            Tell me about your
                            <span>project.</span>
                        </h2>

                        <p>
                            Fill out the form below and I'll get back to you
                            as soon as possible.
                        </p>


                        <form action="{{ route('contact.store') }}" method="POST">

                            @csrf

                            @if (session('success'))
                                <div class="alert alert-success border-0 mb-4">
                                    <i class="bi bi-check-circle me-2"></i>
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger border-0 mb-4">

                                    <ul class="mb-0 ps-3">

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                    </ul>

                                </div>
                            @endif


                            <div class="row g-3">

                                <div class="col-md-6">

                                    <label for="name">
                                        Your Name
                                    </label>

                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                        placeholder="Enter your name" required>

                                </div>


                                <div class="col-md-6">

                                    <label for="email">
                                        Your Email
                                    </label>

                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Enter your email" required>

                                </div>

                                <div class="col-12">

                                    <label for="subject">
                                        Subject
                                    </label>

                                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                        placeholder="What would you like to discuss?" required>

                                </div>

                                <div class="col-12">

                                    <label for="message">
                                        Your Message
                                    </label>

                                    <textarea id="message" name="message" rows="6" placeholder="Write your message here..." required>{{ old('message') }}</textarea>

                                </div>

                                <div class="col-12">

                                    <button type="submit" class="contact-page-submit">

                                        Send Message

                                        <i class="bi bi-arrow-up-right"></i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
