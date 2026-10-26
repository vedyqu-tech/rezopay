@extends('layouts.app')

@section('content')
<main class="rz-services-page">

    {{-- Hero --}}
    <section class="rz-services-hero">
        <div class="rz-services-hero-bg"></div>
        <div class="rz-services-hero-inner">
            <div class="rz-services-hero-copy">
                <span class="rz-service-eyebrow">
                    <span class="rz-service-dot"></span>
                    OUR SERVICES
                </span>

                <h1>
                    Digital Solutions<br>
                    for <span>Real Growth.</span>
                </h1>

                <p>
                    We design, develop and deliver digital solutions
                    that help businesses grow, scale and stay ahead
                    in a fast-changing world.
                </p>

                <div class="rz-service-actions">
                    <a href="#core-services" class="rz-service-btn">
                        Explore Our Services <span>↗</span>
                    </a>
                    <a href="#service-contact" class="rz-service-text-link" data-talk-open>
                        Let's Talk <span>→</span>
                    </a>
                </div>
            </div>

            <div class="rz-services-hero-note">
                <span>SOLUTIONS THAT SCALE</span>
                <strong>Ideas to Impact.</strong>
                <i></i>
            </div>
        </div>
    </section>

    {{-- Services --}}
    <section class="rz-services-list" id="core-services">
        <div class="rz-services-container">

            <div class="rz-services-section-heading">
                <div>
                    <span class="rz-service-eyebrow">
                        <span class="rz-service-dot"></span>
                        WHAT WE OFFER
                    </span>
                    <h2>Our Core <span>Services</span></h2>
                </div>
                <p>
                    End-to-end digital services tailored to your
                    business goals. From strategy to execution,
                    we turn ideas into powerful digital experiences.
                </p>
            </div>

            <div class="rz-services-grid">

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="13" rx="2" />
                                <path d="M8 21h8M12 17v4M7 8h10" />
                            </svg>
                        </div>
                        <span class="rz-service-number">01</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>Web Development</h3>
                    <p>
                        Modern, responsive and high-performing websites
                        built around your brand and business goals.
                    </p>
                    <div class="rz-service-tags">
                        <span>Business Websites</span>
                        <span>Web Applications</span>
                    </div>
                </article>

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="6" y="2" width="12" height="20" rx="2" />
                                <path d="M10 5h4M11 18h2" />
                            </svg>
                        </div>
                        <span class="rz-service-number">02</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>Mobile App Development</h3>
                    <p>
                        Intuitive Android and iOS applications designed
                        for performance, usability and growth.
                    </p>
                    <div class="rz-service-tags">
                        <span>Android</span>
                        <span>iOS</span>
                        <span>Flutter</span>
                    </div>
                </article>

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M6 18H5a4 4 0 0 1 0-8 7 7 0 0 1 13-2 5 5 0 0 1 1 10H6Z" />
                                <path d="m9 14 3-3 3 3" />
                            </svg>
                        </div>
                        <span class="rz-service-number">03</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>Cloud & Deployment</h3>
                    <p>
                        Secure deployment, server configuration and
                        scalable infrastructure for your applications.
                    </p>
                    <div class="rz-service-tags">
                        <span>VPS Hosting</span>
                        <span>Deployment</span>
                    </div>
                </article>

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m14 6 4 4M3 21l5-1 12-12a2.8 2.8 0 0 0-4-4L4 16l-1 5Z" />
                                <path d="M3 7h5M3 12h3M16 20h5" />
                            </svg>
                        </div>
                        <span class="rz-service-number">04</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>UI/UX Design</h3>
                    <p>
                        Thoughtful interfaces and user journeys that
                        make your digital product easy to use.
                    </p>
                    <div class="rz-service-tags">
                        <span>Web UI</span>
                        <span>Mobile UI</span>
                        <span>Prototyping</span>
                    </div>
                </article>

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M3 3v18h18" />
                                <rect x="6" y="12" width="3" height="6" rx="1" />
                                <rect x="12" y="8" width="3" height="10" rx="1" />
                                <rect x="18" y="4" width="3" height="14" rx="1" />
                            </svg>
                        </div>
                        <span class="rz-service-number">05</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>
                        Digital campaigns and social media strategies
                        that strengthen your brand and online reach.
                    </p>
                    <div class="rz-service-tags">
                        <span>Social Media</span>
                        <span>SEO</span>
                        <span>Ads</span>
                    </div>
                </article>

                <article class="rz-service-card">
                    <div class="rz-service-card-top">
                        <div class="rz-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M12 3v3M12 18v3M3 12h3M18 12h3" />
                                <path d="m5.6 5.6 2.1 2.1m8.6 8.6 2.1 2.1m0-12.8-2.1 2.1m-8.6 8.6-2.1 2.1" />
                                <circle cx="12" cy="12" r="5" />
                            </svg>
                        </div>
                        <span class="rz-service-number">06</span>
                        <span class="rz-service-arrow">↗</span>
                    </div>
                    <h3>Custom Software</h3>
                    <p>
                        Business-specific software, dashboards and
                        automation tools built for your workflow.
                    </p>
                    <div class="rz-service-tags">
                        <span>Laravel</span>
                        <span>REST APIs</span>
                        <span>SaaS</span>
                    </div>
                </article>

            </div>

            {{-- Product solutions --}}
            <div class="rz-product-strip">
                <div>
                    <span class="rz-service-eyebrow">
                        <span class="rz-service-dot"></span>
                        OUR DIGITAL PRODUCTS
                    </span>
                    <h2>Built for the way<br>your business works.</h2>
                    <p>
                        From online commerce to everyday operations,
                        we build software that helps businesses do more.
                    </p>
                </div>

                <div class="rz-product-list">
                    <div class="rz-product-item">
                        <span class="rz-product-symbol">01</span>
                        <div>
                            <h3>E-commerce Solutions</h3>
                            <p>Online stores and digital shopping experiences.</p>
                        </div>
                        <span class="rz-product-arrow">↗</span>
                    </div>
                    <div class="rz-product-item">
                        <span class="rz-product-symbol">02</span>
                        <div>
                            <h3>Quick Commerce</h3>
                            <p>Grocery, restaurant and food delivery platforms.</p>
                        </div>
                        <span class="rz-product-arrow">↗</span>
                    </div>
                    <div class="rz-product-item">
                        <span class="rz-product-symbol">03</span>
                        <div>
                            <h3>Billing Management</h3>
                            <p>Practical tools for billing and business operations.</p>
                        </div>
                        <span class="rz-product-arrow">↗</span>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <!--<section class="rz-services-cta" id="service-contact">
                <div class="rz-cta-orb" aria-hidden="true"></div>
                <span class="rz-service-eyebrow">
                    <span class="rz-service-dot"></span>
                    LET'S BUILD TOGETHER
                </span>
                <div class="rz-services-cta-content">
                    <div>
                        <h2>Have a project<br>in <span>mind?</span></h2>
                        <p>
                            Let's turn your next big idea into a
                            powerful digital solution.
                        </p>
                    </div>
                    <a href="{{ url('/#contact') }}" class="rz-service-btn">
                        Start a Conversation <span>↗</span>
                    </a>
                </div>
            </section>-->

        </div>
    </section>
</main>
@endsection