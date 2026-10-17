
// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach((link) => {
    link.addEventListener("click", function (e) {
        const target = document.querySelector(this.getAttribute("href"));

        if (target) {
            e.preventDefault();

            target.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    });
});

// Portfolio Navbar Shadow on Scroll
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".portfolio-navbar");

    if (!navbar) {
        return;
    }

    function updateNavbarShadow() {
        if (window.scrollY > 20) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    }

    window.addEventListener("scroll", updateNavbarShadow, {
        passive: true,
    });

    updateNavbarShadow();
});
document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".gsap-navbar .portfolio-logo", {
        y: -25,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out",
    });

    gsap.from(".gsap-navbar .nav-item", {
        y: -20,
        opacity: 0,
        duration: 0.7,
        stagger: 0.12,
        delay: 0.2,
        ease: "power3.out",
    });

    gsap.fromTo(
        ".gsap-navbar .admin-btn, .gsap-navbar .connect-btn",
        {
            y: -25,
            autoAlpha: 0,
        },
        {
            y: 0,
            autoAlpha: 1,
            duration: 0.8,
            stagger: 0.2,
            delay: 0.4,
            ease: "power3.out",
            clearProps: "all",
        },
    );
});

gsap.registerPlugin(ScrollTrigger);

const footerTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: ".gsap-footer",
        start: "top 85%",
        toggleActions: "play none none none",
    },
});

footerTimeline
    .from(".gsap-footer-top", {
        y: 35,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out",
    })
    .from(
        ".gsap-footer-links a",
        {
            y: 20,
            opacity: 0,
            stagger: 0.1,
            duration: 0.5,
            ease: "power2.out",
        },
        "-=0.35",
    )
    .from(
        ".gsap-footer-watermark",
        {
            y: 30,
            opacity: 0,
            duration: 0.7,
            ease: "power3.out",
        },
        "-=0.2",
    )
    .from(
        ".gsap-footer-bottom",
        {
            y: 20,
            opacity: 0,
            duration: 0.6,
            ease: "power2.out",
        },
        "-=0.25",
    );

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") {
        return;
    }

    const hero = document.querySelector(".gsap-hero");

    if (!hero) {
        return;
    }

    const tl = gsap.timeline({
        defaults: {
            ease: "power3.out",
        },
    });

    tl.from(".gsap-hero-eyebrow", {
        x: -35,
        opacity: 0,
        duration: 0.7,
    })
        .from(
            ".gsap-hero-title",
            {
                x: -45,
                opacity: 0,
                duration: 0.9,
            },
            "-=0.35",
        )
        .from(
            ".gsap-hero-description",
            {
                y: 20,
                opacity: 0,
                duration: 0.7,
            },
            "-=0.45",
        )
        .from(
            ".gsap-hero-buttons a",
            {
                y: 20,
                autoAlpha: 0,
                stagger: 0.15,
                duration: 0.6,
                clearProps: "all",
            },
            "-=0.3",
        )

        .from(
            ".gsap-hero-skills",
            {
                y: 25,
                opacity: 0,
                duration: 0.7,
            },
            "-=0.2",
        )
        .from(
            ".gsap-hero-image",
            {
                x: 45,
                scale: 0.96,
                opacity: 0,
                duration: 1,
            },
            "-=0.8",
        );
});

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const aboutSection = document.querySelector(".gsap-about");

    if (!aboutSection) return;

    const aboutTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: aboutSection,
            start: "top 75%",
            toggleActions: "play none none none",
        },
    });

    aboutTimeline
        .from(".gsap-about-image", {
            x: -70,
            opacity: 0,
            duration: 1,
            ease: "power3.out",
        })
        .from(
            ".gsap-about-title",
            {
                x: 40,
                opacity: 0,
                duration: 0.7,
                ease: "power3.out",
            },
            "-=0.5",
        )
        .from(
            ".gsap-about-text",
            {
                y: 25,
                opacity: 0,
                stagger: 0.2,
                duration: 0.7,
                ease: "power2.out",
            },
            "-=0.3",
        )
        .from(
            ".gsap-about-button",
            {
                y: 20,
                opacity: 0,
                duration: 0.6,
                ease: "power2.out",
            },
            "-=0.2",
        );
});
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const skillsSection = document.querySelector(".gsap-skills");

    if (!skillsSection) return;

    const heading = skillsSection.querySelector(".gsap-skills-heading");
    const cards = skillsSection.querySelectorAll(".gsap-skill-card");
    const bars = skillsSection.querySelectorAll(".gsap-skill-progress");

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: skillsSection,
            start: "top 75%",
            toggleActions: "play none none none",
        },
    });
    if (heading) {
        tl.from(heading.querySelector("h2"), {
            x: 70,
            opacity: 0,
            duration: 0.9,
            ease: "power3.out",
        });

        // Paragraph: neeche se aaye
        tl.from(
            heading.querySelector("p"),
            {
                y: 35,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out",
            },
            "-=0.4",
        );
    }

    if (cards.length) {
        tl.from(
            cards,
            {
                y: 45,
                opacity: 0,
                scale: 0.96,
                duration: 0.65,
                stagger: 0.13,
                ease: "power3.out",
            },
            "-=0.25",
        );
    }

    bars.forEach(function (bar) {
        const width = Number(bar.dataset.width) || 0;

        gsap.from(bar, {
            width: Math.min(100, Math.max(0, width)) + "%",
            duration: 1.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: bar,
                start: "top 90%",
                once: true,
            },
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const projectsSection = document.querySelector(".gsap-projects");

    if (!projectsSection) return;

    const heading = projectsSection.querySelector(".gsap-projects-heading");
    const cards = projectsSection.querySelectorAll(".gsap-project-card");

    const tl = gsap.timeline({
        scrollTrigger: {
            trigger: projectsSection,
            start: "top 75%",
            toggleActions: "play none none none",
        },
    });

    // Heading right se
    if (heading) {
        tl.from(heading.querySelector("h2"), {
            x: 70,
            opacity: 0,
            duration: 0.9,
            ease: "power3.out",
        });

        // Paragraph: neeche se aaye
        tl.from(
            heading.querySelector("p"),
            {
                y: 35,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out",
            },
            "-=0.4",
        );
    }
    // Project cards ek ek karke
    if (cards.length) {
        tl.from(
            cards,
            {
                y: 45,
                opacity: 0,
                duration: 0.7,
                stagger: 0.18,
                ease: "power3.out",
            },
            "-=0.15",
        );
    }
});

// ABOUT PAGE HERO ANIMATION
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") {
        return;
    }

    // Register ScrollTrigger if available
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
    }

    const aboutHero = document.querySelector(".about-page-hero");

    if (!aboutHero) {
        return;
    }

    // Left content animation
    const aboutTimeline = gsap.timeline({
        defaults: {
            ease: "power3.out",
        },
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? {
                      trigger: aboutHero,
                      start: "top 80%",
                      once: true,
                  }
                : undefined,
    });

    aboutTimeline
        .from(".gsap-about-label", {
            y: 25,
            opacity: 0,
            duration: 0.6,
        })
        .from(
            ".gsap-about-title",
            {
                y: 40,
                opacity: 0,
                duration: 0.8,
            },
            "-=0.3",
        )
        .from(
            ".gsap-about-intro",
            {
                y: 25,
                opacity: 0,
                duration: 0.7,
            },
            "-=0.4",
        )
        .from(
            ".gsap-about-buttons",
            {
                y: 20,
                opacity: 0,
                duration: 0.6,
            },
            "-=0.3",
        );

    // Profile card animation
    gsap.from(".gsap-about-profile", {
        y: 55,
        opacity: 0,
        scale: 0.96,
        duration: 1,
        ease: "power3.out",
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? {
                      trigger: aboutHero,
                      start: "top 80%",
                      once: true,
                  }
                : undefined,
    });

    // Profile image zoom-in
    gsap.from(".gsap-about-image", {
        scale: 1.12,
        opacity: 0,
        duration: 1.2,
        delay: 0.2,
        ease: "power2.out",
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? {
                      trigger: aboutHero,
                      start: "top 80%",
                      once: true,
                  }
                : undefined,
    });
});

// ABOUT WHO I AM SECTION ANIMATION
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") {
        return;
    }

    const whoSection = document.querySelector(".about-who-section");

    if (!whoSection) {
        return;
    }

    const whoLabel = whoSection.querySelector(".gsap-who-label");
    const whoTitle = whoSection.querySelector(".gsap-who-title");
    const whoTexts = whoSection.querySelectorAll(".gsap-who-text");

    const whoTimeline = gsap.timeline({
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? {
                      trigger: whoSection,
                      start: "top 80%",
                      once: true,
                  }
                : undefined,

        defaults: {
            ease: "power3.out",
        },
    });

    // Section label
    whoTimeline.from(whoLabel, {
        y: 20,
        opacity: 0,
        duration: 0.6,
    });

    // Heading animation
    whoTimeline.from(
        whoTitle,
        {
            x: -45,
            opacity: 0,
            duration: 0.8,
        },
        "-=0.2",
    );

    // Paragraphs appear one by one
    whoTimeline.from(
        whoTexts,
        {
            y: 30,
            opacity: 0,
            duration: 0.7,
            stagger: 0.2,
        },
        "-=0.3",
    );
});

// PROJECTS PAGE HERO ANIMATION
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") {
        return;
    }

    const projectsHero = document.querySelector(".projects-page-hero");

    if (!projectsHero) {
        return;
    }

    const label = projectsHero.querySelector(".gsap-projects-label");

    const title = projectsHero.querySelector(".gsap-projects-title");

    const intro = projectsHero.querySelector(".gsap-projects-intro");

    const buttons = projectsHero.querySelector(".gsap-projects-buttons");

    const card = projectsHero.querySelector(".gsap-projects-card-wrapper");

    const animationSettings = {
        trigger: projectsHero,
        start: "top 80%",
        once: true,
    };

    const projectsTimeline = gsap.timeline({
        defaults: {
            ease: "power3.out",
        },
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? animationSettings
                : undefined,
    });

    // Label animation
    projectsTimeline.from(label, {
        y: 20,
        opacity: 0,
        duration: 0.5,
    });

    // Main heading animation
    projectsTimeline.from(
        title,
        {
            y: 40,
            opacity: 0,
            duration: 0.8,
        },
        "-=0.2",
    );

    // Description animation
    projectsTimeline.from(
        intro,
        {
            y: 25,
            opacity: 0,
            duration: 0.7,
        },
        "-=0.35",
    );

    // Buttons animation
    projectsTimeline.from(
        buttons,
        {
            y: 20,
            opacity: 0,
            duration: 0.6,
        },
        "-=0.3",
    );

    // Right card animation
    gsap.from(card, {
        x: 45,
        y: 15,
        opacity: 0,
        scale: 0.96,
        duration: 1,
        delay: 0.15,
        ease: "power3.out",
        scrollTrigger:
            typeof ScrollTrigger !== "undefined"
                ? animationSettings
                : undefined,
    });
});

// SKILLS PAGE HERO ANIMATION
document.addEventListener("DOMContentLoaded", function () {
    if (typeof gsap === "undefined") {
        return;
    }

    const skillsHero = document.querySelector(".skills-page-hero");

    if (!skillsHero) {
        return;
    }

    const label = skillsHero.querySelector(".gsap-skills-label");
    const title = skillsHero.querySelector(".gsap-skills-title");
    const intro = skillsHero.querySelector(".gsap-skills-intro");
    const buttons = skillsHero.querySelector(".gsap-skills-buttons");
    const card = skillsHero.querySelector(".gsap-skills-card-wrapper");

    const scrollSettings = {
        trigger: skillsHero,
        start: "top 80%",
        once: true,
    };

    const skillsTimeline = gsap.timeline({
        defaults: {
            ease: "power3.out",
        },
        scrollTrigger:
            typeof ScrollTrigger !== "undefined" ? scrollSettings : undefined,
    });

    // Label
    skillsTimeline.from(label, {
        y: 20,
        opacity: 0,
        duration: 0.5,
    });

    // Heading
    skillsTimeline.from(
        title,
        {
            y: 40,
            opacity: 0,
            duration: 0.8,
        },
        "-=0.2",
    );

    // Description
    skillsTimeline.from(
        intro,
        {
            y: 25,
            opacity: 0,
            duration: 0.7,
        },
        "-=0.35",
    );

    // Buttons
    skillsTimeline.from(
        buttons,
        {
            y: 20,
            opacity: 0,
            duration: 0.6,
        },
        "-=0.3",
    );

    // Developer profile card
    gsap.from(card, {
        x: 45,
        y: 15,
        opacity: 0,
        scale: 0.96,
        duration: 1,
        delay: 0.15,
        ease: "power3.out",
        scrollTrigger:
            typeof ScrollTrigger !== "undefined" ? scrollSettings : undefined,
    });
});
