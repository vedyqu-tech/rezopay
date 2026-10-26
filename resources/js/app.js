import "./bootstrap";
import "../css/app.css";

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    const reduceMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    // Mobile navigation
    const menuButton = document.querySelector("#menu-toggle");
    const nav = document.querySelector("#main-nav");

    menuButton?.addEventListener("click", () => {
        if (!nav) return;

        const isOpen = nav.classList.toggle("open");

        menuButton.setAttribute("aria-expanded", String(isOpen));
    });

    nav?.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            nav.classList.remove("open");
            menuButton?.setAttribute("aria-expanded", "false");
        });
    });

    // Respect accessibility preferences
    if (reduceMotion) {
        gsap.set([".reveal", ".hero-reveal"], {
            opacity: 1,
            y: 0,
            clearProps: "transform",
        });

        gsap.set(".title-line", {
            clipPath: "inset(0 0 0% 0)",
        });

        return;
    }

    // Hero entrance animation
    const intro = gsap.timeline({
        defaults: {
            ease: "power3.out",
        },
    });

    intro
        .to(".hero-reveal", {
            opacity: 1,
            y: 0,
            duration: 0.75,
            stagger: 0.13,
        })
        .to(
            ".title-line",
            {
                clipPath: "inset(0 0 0% 0)",
                duration: 0.85,
                stagger: 0.16,
            },
            "-=0.4",
        )
        .from(
            ".hero-visual",
            {
                opacity: 0,
                x: 35,
                duration: 1.1,
            },
            "-=0.7",
        )
        .from(
            ".floating-card",
            {
                opacity: 0,
                y: 16,
                duration: 0.65,
                stagger: 0.15,
            },
            "-=0.5",
        );

    // Scroll reveal
    gsap.utils.toArray(".reveal").forEach((element) => {
        gsap.to(element, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
            scrollTrigger: {
                trigger: element,
                start: "top 88%",
                once: true,
            },
        });
    });

    // Hero image cinematic zoom and parallax
    const heroImage = document.querySelector(".hero-background-image");

    if (heroImage) {
        gsap.to(heroImage, {
            scale: 1,
            duration: 2.2,
            ease: "power2.out",
            delay: 0.15,
        });

        gsap.to(heroImage, {
            yPercent: -3,
            ease: "none",
            scrollTrigger: {
                trigger: ".hero",
                start: "top top",
                end: "bottom top",
                scrub: 1,
            },
        });
    }

    // Process timeline animation
    const processProgress = document.querySelector(".process-line span");

    if (processProgress) {
        gsap.to(processProgress, {
            width: "100%",
            ease: "none",
            scrollTrigger: {
                trigger: ".process-track",
                start: "top 75%",
                end: "bottom 70%",
                scrub: 1,
            },
        });
    }

    // About section ring animation
    if (document.querySelector(".about-ring")) {
        gsap.to(".about-ring", {
            rotation: 45,
            duration: 25,
            repeat: -1,
            ease: "none",
        });
    }

    // Refresh ScrollTrigger after images and layout settle
    const refreshAnimations = () => ScrollTrigger.refresh();

    if (document.readyState === "complete") {
        refreshAnimations();
    } else {
        window.addEventListener("load", refreshAnimations, {
            once: true,
        });
    }

    if (document.readyState === "loading") {
        document.addEventListener(
            "DOMContentLoaded",
            initRezopayProcessAnimation,
            { once: true },
        );
    } else {
        initRezopayProcessAnimation();
    }

    const contactCta = document.querySelector(".contact-cta");

    if (contactCta && !reduceMotion) {
        const ctaElements = contactCta.querySelectorAll(
            ".contact-cta__eyebrow, .contact-cta__title, " +
                ".contact-cta__description, .contact-cta__button, " +
                ".contact-cta__note",
        );

        gsap.from(ctaElements, {
            opacity: 0,
            y: 28,
            duration: 0.8,
            stagger: 0.13,
            ease: "power3.out",
            scrollTrigger: {
                trigger: contactCta,
                start: "top 78%",
                once: true,
            },
        });

        gsap.to(".contact-cta__orbit--one", {
            rotation: 360,
            duration: 32,
            repeat: -1,
            ease: "none",
            transformOrigin: "center center",
        });

        gsap.to(".contact-cta__orbit--two", {
            rotation: -360,
            duration: 45,
            repeat: -1,
            ease: "none",
            transformOrigin: "center center",
        });

        gsap.to(".contact-cta__orbit--three", {
            scale: 1.06,
            opacity: 0.45,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
        });
    }
});

function initRezopayProcessAnimation() {
    const section = document.querySelector("#our-process");

    if (!section || section.dataset.stackInitialized === "true") {
        return;
    }

    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    const cards = gsap.utils.toArray(
        section.querySelectorAll("[data-process-card]"),
    );

    if (cards.length < 2) return;

    section.dataset.stackInitialized = "true";

    const reducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)",
    ).matches;

    const header = document.querySelector("#site-header");

    function getHeaderHeight() {
        return header ? header.getBoundingClientRect().height : 78;
    }

    function getStickyTop() {
        return getHeaderHeight() + 14;
    }

    function getCardTilt(index) {
        return index % 2 === 0 ? -1.2 : 1.2;
    }

    // Keep sticky offset synchronized with the header.
    function updateStickyOffset() {
        const top = getStickyTop();

        section.style.setProperty("--rp-process-sticky-top", `${top}px`);
    }

    updateStickyOffset();

    if (reducedMotion) {
        cards.forEach((card) => {
            gsap.set(card, {
                clearProps: "transform,opacity,visibility",
            });
        });

        return;
    }

    // Incoming cards appear above older cards.
    cards.forEach((card, index) => {
        card.style.zIndex = String(index + 1);

        gsap.set(card, {
            rotation: getCardTilt(index),
            scale: 1,
            autoAlpha: 1,
            transformOrigin: "center center",
            force3D: true,
        });
    });

    /*
     * Incoming card rotates toward a neutral position
     * while moving into its sticky position.
     */
    cards.forEach((card, index) => {
        gsap.to(card, {
            rotation: 0,
            ease: "none",

            scrollTrigger: {
                trigger: card,

                start: "top 85%",

                end: () => `top ${getStickyTop()}px`,

                scrub: 0.65,

                invalidateOnRefresh: true,
            },
        });

        /*
         * When the next card arrives, shrink the
         * previous card slightly to reveal its corners.
         */
        if (index < cards.length - 1) {
            const nextCard = cards[index + 1];

            gsap.to(card, {
                scale: 0.965,
                rotation: getCardTilt(index) * 1.1,

                ease: "none",

                scrollTrigger: {
                    trigger: nextCard,

                    start: "top 75%",

                    end: () => `top ${getStickyTop()}px`,

                    scrub: 0.65,

                    invalidateOnRefresh: true,
                },
            });
        }
    });

    /*
     * Older cards remain behind the active card.
     * No visibility animation, which avoids
     * flickering during reverse scrolling.
     */

    ScrollTrigger.addEventListener("refreshInit", updateStickyOffset);

    if (document.readyState === "complete") {
        ScrollTrigger.refresh();
    } else {
        window.addEventListener("load", () => ScrollTrigger.refresh(), {
            once: true,
        });
    }
}
function initRezopayServicesAnimations() {
    const page = document.querySelector(".rz-services-page");

    // Sirf Services page par run karein
    if (!page || page.dataset.gsapInitialized === "true") return;

    page.dataset.gsapInitialized = "true";

    const mm = gsap.matchMedia();

    // Respect reduced-motion accessibility setting
    mm.add("(prefers-reduced-motion: no-preference)", () => {
        const hero = page.querySelector(".rz-services-hero");
        const heroCopy = page.querySelector(".rz-services-hero-copy");
        const eyebrow = page.querySelector(
            ".rz-services-hero .rz-service-eyebrow",
        );
        const heading = page.querySelector(".rz-services-hero h1");
        const paragraph = page.querySelector(".rz-services-hero-copy > p");
        const actions = page.querySelector(".rz-service-actions");
        const heroNote = page.querySelector(".rz-services-hero-note");

        /* 1. Hero entrance */
        if (heroCopy) {
            const heroElements = [eyebrow, heading, paragraph, actions].filter(
                Boolean,
            );

            gsap.from(heroElements, {
                y: 28,
                autoAlpha: 0,
                duration: 0.85,
                stagger: 0.14,
                ease: "power3.out",
                delay: 0.15,
            });
        }

        if (heroNote) {
            gsap.from(heroNote, {
                x: 35,
                autoAlpha: 0,
                duration: 0.9,
                delay: 0.55,
                ease: "power3.out",
            });
        }

        /* 2. Section headings reveal */
        const sectionHeadings = page.querySelectorAll(
            ".rz-services-section-heading",
        );

        sectionHeadings.forEach((element) => {
            gsap.from(element, {
                y: 35,
                autoAlpha: 0,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: element,
                    start: "top 85%",
                    once: true,
                },
            });
        });

        /* 3. Service cards stagger reveal */
        const cards = gsap.utils.toArray(
            page.querySelectorAll(".rz-service-card"),
        );

        if (cards.length) {
            gsap.from(cards, {
                y: 48,
                autoAlpha: 0,
                scale: 0.97,
                duration: 0.7,
                stagger: 0.12,
                ease: "power3.out",
                clearProps: "transform",
                scrollTrigger: {
                    trigger: ".rz-services-grid",
                    start: "top 82%",
                    once: true,
                },
            });
        }

        /* 4. Product section reveal */
        const productStrip = page.querySelector(".rz-product-strip");

        if (productStrip) {
            const productIntro = productStrip.children[0];
            const productItems =
                productStrip.querySelectorAll(".rz-product-item");

            gsap.from(productIntro, {
                x: -35,
                autoAlpha: 0,
                duration: 0.8,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: productStrip,
                    start: "top 82%",
                    once: true,
                },
            });

            gsap.from(productItems, {
                x: 30,
                autoAlpha: 0,
                duration: 0.65,
                stagger: 0.15,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: productStrip,
                    start: "top 82%",
                    once: true,
                },
            });
        }

        /* 5. CTA reveal */
        const cta = page.querySelector(".rz-services-cta");

        if (cta) {
            gsap.from(cta, {
                y: 45,
                autoAlpha: 0,
                duration: 0.85,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: cta,
                    start: "top 88%",
                    once: true,
                },
            });
        }

        /* 6. Subtle background movement */
        const heroBackground = page.querySelector(".rz-services-hero-bg");

        if (hero && heroBackground) {
            gsap.fromTo(
                heroBackground,
                { scale: 1.04 },
                {
                    scale: 1,
                    ease: "none",
                    scrollTrigger: {
                        trigger: hero,
                        start: "top top",
                        end: "bottom top",
                        scrub: 0.5,
                    },
                },
            );
        }

        /* Refresh measurements after images/fonts/layout settle */
        requestAnimationFrame(() => ScrollTrigger.refresh());

        return () => {
            // GSAP matchMedia automatically reverts its animations
        };
    });

    // Card hover interaction
    const cards = page.querySelectorAll(".rz-service-card");

    cards.forEach((card) => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, {
                y: -5,
                duration: 0.25,
                ease: "power2.out",
                overwrite: "auto",
            });
        });

        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                y: 0,
                duration: 0.3,
                ease: "power2.out",
                overwrite: "auto",
            });
        });
    });
}

if (document.readyState === "loading") {
    document.addEventListener(
        "DOMContentLoaded",
        initRezopayServicesAnimations,
        { once: true },
    );
} else {
    initRezopayServicesAnimations();
}

/* Rezopay Contact Page */
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("rzContactForm");
    const message = document.getElementById("rz-message");
    const counter = document.getElementById("rzMessageCount");
    const status = document.getElementById("rzContactStatus");

    if (message && counter) {
        const updateCounter = () => {
            counter.textContent = `${message.value.length} / 5000`;
        };

        message.addEventListener("input", updateCounter);
        updateCounter();
    }

    if (form && status) {
        form.addEventListener("submit", (event) => {
            event.preventDefault();

            if (!form.reportValidity()) return;

            status.className = "rz-contact-form-status is-visible is-demo";
            status.textContent =
                "The contact form UI is ready. Connect a Laravel POST route and mail handler to send enquiries.";
        });
    }
});

/* ==================================
   REZOPAY GLOBAL LET'S TALK MODAL
================================== */

document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("rzTalkModal");

    if (!modal) return;

    const dialog = modal.querySelector(".rz-talk-dialog");
    const closeButtons = modal.querySelectorAll("[data-talk-close]");
    const openButtons = document.querySelectorAll("[data-talk-open]");
    const form = document.getElementById("rzTalkForm");
    const status = document.getElementById("rzTalkStatus");

    let previousFocus = null;

    function openTalkModal(event) {
        if (event) event.preventDefault();

        previousFocus = document.activeElement;

        modal.classList.add("is-open");
        modal.setAttribute("aria-hidden", "false");
        document.body.classList.add("rz-talk-open");

        requestAnimationFrame(() => {
            const firstInput = modal.querySelector(
                'input:not([type="hidden"]), select, textarea',
            );

            (firstInput || dialog).focus();
        });
    }

    function closeTalkModal() {
        modal.classList.remove("is-open");
        modal.setAttribute("aria-hidden", "true");
        document.body.classList.remove("rz-talk-open");

        if (previousFocus && typeof previousFocus.focus === "function") {
            previousFocus.focus();
        }
    }

    openButtons.forEach((button) => {
        button.addEventListener("click", openTalkModal);
    });

    closeButtons.forEach((button) => {
        button.addEventListener("click", closeTalkModal);
    });

    document.addEventListener("keydown", (event) => {
        if (!modal.classList.contains("is-open")) return;

        if (event.key === "Escape") {
            closeTalkModal();
        }

        // Keep keyboard focus inside the modal.
        if (event.key === "Tab") {
            const focusable = [
                ...modal.querySelectorAll(
                    "a[href], button:not(:disabled), input:not(:disabled), " +
                        "select:not(:disabled), textarea:not(:disabled), " +
                        '[tabindex]:not([tabindex="-1"])',
                ),
            ].filter((element) => element.getClientRects().length > 0);

            if (!focusable.length) {
                event.preventDefault();
                dialog.focus();
                return;
            }

            const first = focusable[0];
            const last = focusable[focusable.length - 1];

            if (event.shiftKey && document.activeElement === first) {
                event.preventDefault();
                last.focus();
            } else if (!event.shiftKey && document.activeElement === last) {
                event.preventDefault();
                first.focus();
            }
        }
    });

    // Frontend validation only. Connect a Laravel POST endpoint
    // before using this form for real enquiries.
    if (form && status) {
        form.addEventListener("submit", (event) => {
            event.preventDefault();

            if (!form.reportValidity()) return;

            status.textContent =
                "The form is ready. Connect your Laravel backend to send this enquiry.";
            status.classList.add("is-visible");
        });
    }
});
