document.addEventListener("DOMContentLoaded", () => {
    // Register GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Initial Header Entrance Animation
    const headerTimeline = gsap.timeline();

    headerTimeline
        .from(".logo", {
            duration: 1,
            x: -50,
            opacity: 0,
            ease: "power4.out"
        })
        .from(".nav-link", {
            duration: 0.8,
            y: -20,
            opacity: 0,
            stagger: 0.1,
            ease: "power3.out",
            clearProps: "all" // Important: clear GSAP's inline styles after animation finishes
        }, "-=0.5")
        .from(".contact-info", {
            duration: 1,
            x: 50,
            opacity: 0,
            ease: "power4.out"
        }, "-=0.8")
        .to(".nav-line", {
            duration: 1.5,
            width: "100%",
            ease: "power2.inOut"
        }, "-=0.5");

    // Magnetic Effect for items
    const magneticItems = document.querySelectorAll('.magnetic-item');
    magneticItems.forEach(item => {
        item.addEventListener('mousemove', (e) => {
            const rect = item.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(item, {
                duration: 0.3,
                x: x * 0.3,
                y: y * 0.3,
                ease: "power2.out"
            });
        });
        
        item.addEventListener('mouseleave', () => {
            gsap.to(item, {
                duration: 0.5,
                x: 0,
                y: 0,
                ease: "elastic.out(1, 0.3)"
            });
        });
    });

    // Hero Section Entrance Animation
    const heroTimeline = gsap.timeline();

    heroTimeline
        .from(".hero-bg-img", {
            duration: 2,
            x: "-10%",
            scale: 1.1,
            ease: "power2.out"
        })
        .from(".hero-card", {
            duration: 1.2,
            x: -100,
            opacity: 0,
            ease: "power4.out"
        }, "-=1.5")
        .from(".hero-card-header", {
            duration: 0.8,
            y: 30,
            opacity: 0,
            ease: "power3.out"
        }, "-=0.8")
        .from(".hero-headline", {
            duration: 1,
            y: 100,
            ease: "power4.out"
        }, "-=0.6")
        .from(".hero-subtext", {
            duration: 1,
            y: 50,
            ease: "power4.out"
        }, "-=0.8")
        .from(".hero-cta-wrapper", {
            duration: 1,
            y: 30,
            opacity: 0,
            ease: "back.out(1.7)"
        }, "-=0.6");

    // Hero Background Swiper (Horizontal)
    const bgSwiper = new Swiper(".hero-bg-swiper", {
        direction: "horizontal",
        loop: true,
        allowTouchMove: false, // Background doesn't need touch
        speed: 1200,
        effect: 'slide',
    });

    // Hero Text Swiper Initialization (Vertical)
    const textSwiper = new Swiper(".hero-text-swiper", {
        direction: "vertical",
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 1000,
        mousewheel: true,
    });

    // Synchronize Sliders
    textSwiper.on('slideChange', () => {
        setTimeout(() => {
            bgSwiper.slideToLoop(textSwiper.realIndex);
        }, 500); // Increased delay as requested
    });

    // Decorative Visual Animation
    gsap.from(".hero-visual-wrapper", {
        duration: 1.5,
        x: 100,
        opacity: 0,
        ease: "power4.out",
        delay: 0.8
    });

    // About Section Assembly Animation
    gsap.from(".about-img-slide", {
        scrollTrigger: {
            trigger: ".about-section",
            start: "top 60%",
            end: "top 20%",
            scrub: 2, // Increased scrub for a smoother "catch-up" delay
        },
        y: 150,
        opacity: 0,
        ease: "none"
    });

    // Swiper Initialization
    const swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
    });

    // Feature Cards Scroll Animation
    if (document.querySelector('.features')) {
        gsap.from(".feature-card", {
            scrollTrigger: {
                trigger: ".features",
                start: "top 80%",
            },
            duration: 1.2,
            y: 80,
            opacity: 0,
            stagger: 0.2,
            ease: "power3.out",
        });
    }
});
