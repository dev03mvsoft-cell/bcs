document.addEventListener("DOMContentLoaded", () => {
  // Register GSAP ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // Initial Hero Animation
  gsap.from(".hero-content h1", {
    duration: 1.2,
    y: 50,
    opacity: 0,
    ease: "power4.out",
    delay: 0.2,
  });

  gsap.from(".hero-content p", {
    duration: 1.2,
    y: 30,
    opacity: 0,
    ease: "power4.out",
    delay: 0.4,
  });

  gsap.from(".hero-content .cta-btns", {
    duration: 1.2,
    y: 20,
    opacity: 0,
    ease: "power4.out",
    delay: 0.6,
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
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });

  // Scroll Animations for Feature Cards
  gsap.from(".feature-card", {
    scrollTrigger: {
      trigger: ".features",
      start: "top 80%",
    },
    duration: 1,
    y: 60,
    opacity: 0,
    stagger: 0.2,
    ease: "power3.out",
  });
});
