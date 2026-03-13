document.addEventListener("DOMContentLoaded", () => {
  // Register GSAP ScrollTrigger
  gsap.registerPlugin(ScrollTrigger);

  // 1. "How Can We Help You?" Assembly Animation
  if (document.querySelector(".part-left") && document.querySelector("#how-we-help")) {
    gsap.to(".part-left", {
      x: 0,
      opacity: 0.6,
      scrollTrigger: {
        trigger: "#how-we-help",
        start: "top bottom",
        end: "top top",
        scrub: 1,
      },
    });
  }
  if (document.querySelector(".part-right") && document.querySelector("#how-we-help")) {
    gsap.to(".part-right", {
      x: 0,
      opacity: 0.6,
      scrollTrigger: {
        trigger: "#how-we-help",
        start: "top bottom",
        end: "top top",
        scrub: 1,
      },
    });
  }

  // Modern Sidebar Navigation Logic
  const hamburgerBtn = document.getElementById("hamburger-btn");
  const closeBtn = document.getElementById("menu-close-btn");
  const sidebarNav = document.getElementById("sidebar-nav");
  const menuOverlay = document.getElementById("menu-overlay");
  const navLinks = document.querySelectorAll(".sidebar-link");

  const toggleMenu = (isOpen) => {
    hamburgerBtn.classList.toggle("active", isOpen);
    sidebarNav.classList.toggle("active", isOpen);
    menuOverlay.classList.toggle("active", isOpen);
    document.body.style.overflow = isOpen ? "hidden" : "";

    // Hide/Show WhatsApp badge when menu is open
    const whatsappBadge = document.querySelector(".whatsapp-badge-ticket");
    if (whatsappBadge) {
      if (isOpen) {
        whatsappBadge.style.display = "none";
      } else {
        // We don't just set it to block, we let the scroll listener handle visibility
        whatsappBadge.style.display = ""; 
        // Trigger scroll event to recalculate visibility immediately
        window.dispatchEvent(new Event('scroll'));
      }
    }

    if (isOpen) {
      // Stagger animate links when menu opens
      gsap.to(navLinks, {
        duration: 0.9,
        y: 0,
        opacity: 1,
        stagger: 0.08,
        ease: "expo.out",
        delay: 0.25,
      });
    } else {
      // Reset links position when menu closes
      gsap.set(navLinks, { y: "110%", opacity: 0 });
    }
  };

  hamburgerBtn.addEventListener("click", () => toggleMenu(true));
  closeBtn.addEventListener("click", () => toggleMenu(false));
  menuOverlay.addEventListener("click", () => toggleMenu(false));

  // Close menu when a link is clicked
  navLinks.forEach((link) => {
    link.addEventListener("click", () => toggleMenu(false));
  });

  // Initial Header Entrance Animation
  const headerTimeline = gsap.timeline();

  headerTimeline
    .from(".main-header", {
      duration: 1.2,
      y: -100,
      opacity: 0,
      ease: "power4.out",
    })
    .from(
      ".header-logo",
      {
        duration: 0.8,
        x: -30,
        opacity: 0,
        ease: "power3.out",
      },
      "-=0.6",
    )
    .from(
      ".header-controls",
      {
        duration: 0.8,
        x: 30,
        opacity: 0,
        ease: "power3.out",
      },
      "-=0.6",
    );

  // Helper function to check if Swiper has enough slides for loop
  const canLoop = (selector) => {
    const el = document.querySelector(selector);
    if (!el) return false;
    const slides = el.querySelectorAll('.swiper-slide');
    return slides.length > 1;
  };

  // Scroll visibility for header and WhatsApp Badge
  window.addEventListener("scroll", () => {
    const header = document.getElementById("main-header");
    const whatsappBadge = document.querySelector(".whatsapp-badge-ticket");
    const heroSection = document.querySelector(".hero-section");
    
    if (window.scrollY > 50) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }

    if (whatsappBadge) {
      const hero = heroSection || document.querySelector(".about-hero");
      
      if (hero) {
        const heroHeight = hero.offsetHeight;
        if (window.scrollY > heroHeight - 100) {
          whatsappBadge.classList.add("visible");
        } else {
          whatsappBadge.classList.remove("visible");
        }
      } else {
        // If there is no hero section at all, show the badge by default
        whatsappBadge.classList.add("visible");
      }
    }
  });

  // Magnetic Effect for items
  const magneticItems = document.querySelectorAll(".magnetic-item");
  magneticItems.forEach((item) => {
    item.addEventListener("mousemove", (e) => {
      const rect = item.getBoundingClientRect();
      const x = e.clientX - rect.left - rect.width / 2;
      const y = e.clientY - rect.top - rect.height / 2;

      gsap.to(item, {
        duration: 0.3,
        x: x * 0.3,
        y: y * 0.3,
        ease: "power2.out",
      });
    });

    item.addEventListener("mouseleave", () => {
      gsap.to(item, {
        duration: 0.5,
        x: 0,
        y: 0,
        ease: "elastic.out(1, 0.3)",
      });
    });
  });

  // Hero Section Entrance Animation
  const heroTimeline = gsap.timeline();

  heroTimeline
    .from(".hero-bg-wrapper", {
      duration: 2,
      scale: 1.1,
      ease: "power2.out",
    })
    .from(
      ".hero-card",
      {
        duration: 1.2,
        x: -100,
        opacity: 0,
        ease: "power4.out",
      },
      "-=1.5",
    )
    .from(
      ".hero-card-header",
      {
        duration: 0.8,
        y: 30,
        opacity: 0,
        ease: "power3.out",
      },
      "-=0.8",
    )
    .from(
      ".hero-headline",
      {
        duration: 1,
        y: 100,
        ease: "power4.out",
      },
      "-=0.6",
    )
    .from(
      ".hero-subtext",
      {
        duration: 1,
        y: 50,
        ease: "power4.out",
      },
      "-=0.8",
    )
    .from(
      ".hero-cta-wrapper",
      {
        duration: 1,
        y: 30,
        opacity: 0,
        ease: "back.out(1.7)",
      },
      "-=0.6",
    );


  // Decorative Visual Animation
  if (document.querySelector(".hero-visual-wrapper")) {
    gsap.from(".hero-visual-wrapper", {
      duration: 1.5,
      x: 100,
      opacity: 0,
      ease: "power4.out",
      delay: 0.8,
    });
  }

  // About Section Entrance
  gsap.from(".about-img-slide", {
    scrollTrigger: {
      trigger: document.querySelector(".about-hero") ? ".about-hero" : ".about-section",
      start: "top 80%",
      toggleActions: "play none none reverse",
    },
    duration: 1.5,
    y: 150,
    opacity: 0,
    ease: "power3.out",
  });

  // Swiper Initialization
  const swiperOptions = {
    loop: canLoop(".mySwiper"),
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
  };
  
  const swiper = new Swiper(".mySwiper", swiperOptions);

  // Feature Cards Entrance
  if (document.querySelector(".features")) {
    gsap.from(".feature-card", {
      duration: 1.2,
      y: 80,
      opacity: 0,
      stagger: 0.2,
      ease: "power3.out",
    });
  }

  // Banner Text Entrance
  gsap.from(".banner-text-container", {
    duration: 1.5,
    opacity: 0,
    y: 30,
    ease: "power4.out",
  });

  // Tabs Widget Logic (Premium GSAP version)
  function initTabs() {
    const widgets = document.querySelectorAll('[data-widget="tabs"]');

    widgets.forEach((widget) => {
      const controls = widget.querySelectorAll(".tabs-control");
      const animValue = widget.getAttribute("data-tabs-animate");
      let animDuration = 0.5;
      let animOffset = 50;

      if (animValue) {
        const parts = animValue.split(",");
        animDuration = parseInt(parts[0]) / 1000 || 0.5;
        animOffset = parseInt(parts[1]) || 50;
      }

      controls.forEach((control, idx) => {
        control.addEventListener("click", () => {
          if (control.getAttribute("aria-selected") === "true") return;

          const targetId = control.getAttribute("aria-controls");
          const targetPanel = widget.querySelector(`#${targetId}`);
          const activeControl = widget.querySelector(
            '.tabs-control[aria-selected="true"]',
          );
          const activePanel = widget.querySelector(
            '.tabs-panel[aria-selected="true"]',
          );

          // Update controls
          activeControl.setAttribute("aria-selected", "false");
          control.setAttribute("aria-selected", "true");

          // Update panels with animation
          const prevIdx = Array.from(controls).indexOf(activeControl);
          const direction = idx > prevIdx ? 1 : -1;

          activePanel.setAttribute("aria-selected", "false");
          targetPanel.setAttribute("aria-selected", "true");

          // Kill any running tweens on the target panel first
          gsap.killTweensOf([
            targetPanel,
            targetPanel.querySelector(".help-panel-img-wrap"),
            targetPanel.querySelector(".col-lg-7"),
          ]);

          // Animate full panel fade-in
          gsap.fromTo(
            targetPanel,
            { opacity: 0 },
            {
              opacity: 1,
              duration: animDuration,
              ease: "power3.out",
              clearProps: "opacity",
            },
          );

          // Use rAF so panel is display:block before GSAP measures the elements
          requestAnimationFrame(() => {
            const partLeft = targetPanel.querySelector(".panel-part-left");
            const partRight = targetPanel.querySelector(".panel-part-right");
            const textCol = targetPanel.querySelector(".col-lg-7");

            // Left image slides in from LEFT
            if (partLeft) {
              gsap.fromTo(
                partLeft,
                { x: -150, opacity: 0 },
                {
                  x: 0,
                  opacity: 1,
                  duration: 0.7,
                  ease: "power3.out",
                  clearProps: "all",
                },
              );
            }

            // Right image slides in from RIGHT
            if (partRight) {
              gsap.fromTo(
                partRight,
                { x: 150, opacity: 0 },
                {
                  x: 0,
                  opacity: 1,
                  duration: 0.7,
                  ease: "power3.out",
                  clearProps: "all",
                },
              );
            }

            // Text slides in from RIGHT
            if (textCol) {
              gsap.fromTo(
                textCol,
                { x: 100, opacity: 0 },
                {
                  x: 0,
                  opacity: 1,
                  duration: 0.65,
                  delay: 0.15,
                  ease: "power3.out",
                  clearProps: "all",
                },
              );
            }
          });

          // GSAP Assembly Merge Animation (Background Elements)
          const leftPart = widget.querySelector(".help-assembly-left");
          const rightPart = widget.querySelector(".help-assembly-right");
          const bars = widget.querySelectorAll(".help-bg-bar");

          if (leftPart && rightPart) {
            gsap.set([leftPart, rightPart], { opacity: 0 });
            gsap.fromTo(
              leftPart,
              { x: -150, opacity: 0 },
              { x: 0, opacity: 1, duration: 1.5, ease: "power3.out" },
            );
            gsap.fromTo(
              rightPart,
              { x: 150, opacity: 0 },
              { x: 0, opacity: 1, duration: 1.5, ease: "power3.out" },
            );
          }

          if (bars.length) {
            gsap.fromTo(
              bars,
              { scaleX: 0, opacity: 0 },
              {
                scaleX: 1,
                opacity: 0.15,
                duration: 1.5,
                stagger: 0.2,
                ease: "expo.out",
              },
            );
          }
        });
      });
    });
  }

  initTabs();
  // Initial Trigger for Help Section
  if (document.querySelector(".help-assembly-left")) {
    gsap.fromTo(
      ".help-assembly-left",
      { x: -100, opacity: 0 },
      { x: 0, opacity: 1, duration: 2, ease: "power3.out" },
    );
    gsap.fromTo(
      ".help-assembly-right",
      { x: 100, opacity: 0 },
      { x: 0, opacity: 1, duration: 2, ease: "power3.out" },
    );
    gsap.fromTo(
      ".help-bg-bar",
      { scaleX: 0, opacity: 0 },
      { scaleX: 1, opacity: 0.15, duration: 2, stagger: 0.2, ease: "expo.out" },
    );
  }

  // 4. Expanding Card Gallery Interaction with Autoplay
  const options = document.querySelectorAll(".option");
  let currentIndex = 0;
  let autoplayInterval;

  function setActiveOption(index) {
    options.forEach((opt) => opt.classList.remove("active"));
    options[index].classList.add("active");
    currentIndex = index;
  }

  function startAutoplay() {
    autoplayInterval = setInterval(() => {
      let nextIndex = (currentIndex + 1) % options.length;
      setActiveOption(nextIndex);
    }, 5000); // Change every 5 seconds
  }

  function stopAutoplay() {
    clearInterval(autoplayInterval);
  }

  options.forEach((option, index) => {
    option.addEventListener("click", function () {
      stopAutoplay();
      setActiveOption(index);
      startAutoplay(); // Restart timer after manual click
    });
  });

  // Start autoplay initially
  if (options.length > 0) {
    startAutoplay();
  }

  // 5. Animated Stats Counters (GSAP version)
  const counters = document.querySelectorAll(".counter");

  if (counters.length > 0) {
    ScrollTrigger.create({
      trigger: ".impact-stats",
      start: "top bottom-100px", // Trigger when 100px of section is visible
      onEnter: () => {
        counters.forEach((counter) => {
          const target = parseInt(counter.getAttribute("data-target"));
          const duration = 2; // seconds

          gsap.to(counter, {
            innerText: target,
            duration: duration,
            snap: { innerText: 1 },
            ease: "power2.out",
          });
        });
      },
      once: true,
    });
  }

  // Refresh ScrollTrigger to account for any dynamic layout shifts
  window.addEventListener("load", () => {
    ScrollTrigger.refresh();
  });
});

/* ============================================================ */
/*  LANGUAGE SELECTOR LOGIC                                     */
/* ============================================================ */
document.addEventListener("DOMContentLoaded", () => {
    const langBtn = document.getElementById("lang-hamburger-btn");
    const languageModalElement = document.getElementById("languageModal");
    
    if (langBtn && languageModalElement) {
        const languageModal = new bootstrap.Modal(languageModalElement);

        langBtn.addEventListener("click", (e) => {
            e.preventDefault();
            languageModal.show();
        });

        const langOptions = document.querySelectorAll(".lang-option-item");
        langOptions.forEach(option => {
            option.addEventListener("click", function() {
                const langCode = this.getAttribute("data-lang-code");
                const langName = this.getAttribute("data-lang-name");

                // Visual feedback: Highlight selected
                langOptions.forEach(opt => opt.classList.remove("active-lang"));
                this.classList.add("active-lang");

                setGoogleLanguage(langCode, langName);
                
                // Close modal after selection
                setTimeout(() => {
                    languageModal.hide();
                }, 300);
            });
        });
    }
});

function setGoogleLanguage(langCode, langName) {
    const googleSelect = document.querySelector(".goog-te-combo");
    if (googleSelect) {
        googleSelect.value = langCode;
        googleSelect.dispatchEvent(new Event("change"));
        
        // Update trigger button text
        const langBtnText = document.querySelector("#lang-btn span");
        if (langBtnText) {
            langBtnText.innerText = langName;
        }

        // Show a discrete notification
        Swal.fire({
            title: 'Language Changed',
            text: `Website is now being translated to ${langName}`,
            icon: 'success',
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: 'rgba(255, 255, 255, 0.9)',
            backdrop: 'none'
        });
    } else {
        console.warn("Google Translate initialization in progress...");
        setTimeout(() => setGoogleLanguage(langCode, langName), 500);
    }
}

