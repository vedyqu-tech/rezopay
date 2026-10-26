@extends('layouts.app')

@section('title', 'Rezopay Technologies — Turning Ideas Into Digital Impact')

@section('content')

<main>
    <section class="hero" id="home">
        <div class="hero-grid"></div>
        <div class="hero-glow"></div>

        <div class="hero-content">
            <div class="eyebrow hero-reveal">
                <span class="status-dot"></span>
                DIGITAL INNOVATION STUDIO
            </div>

            <h1 class="hero-title">
                <span class="title-line">Turning Ideas</span>
                <span class="title-line title-line-offset">
                    Into <span class="text-outline">Digital</span>
                </span>
                <span class="title-line">
                    <span class="title-blue">Impact.</span>
                    <span class="title-period"></span>
                </span>
            </h1>


            <div class="hero-bottom hero-reveal">
                <p class="hero-description">
                    We design and build digital experiences, intelligent
                    software and scalable products that move businesses forward.
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="primary-button" data-talk-open>
                        <span>Start a Project</span>
                        <span class="button-arrow">↗</span>
                    </a>

                    <a href="#services" class="watch-work" aria-label="Watch our work">
                        <span class="watch-play" aria-hidden="true">▶</span>
                        <span class="watch-copy">
                            <strong>Watch Our Work</strong>
                            <small>2 MIN OVERVIEW</small>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="hero-index hero-reveal">
            <span>01 / 06</span>
            <span class="index-line"></span>
            <span>IDEAS TO IMPACT</span>
        </div>


        <div class="hero-visual hero-visual-image">
            <img
                src="{{ asset('images/rezopay-hero.png') }}"
                alt="Rezopay Technologies modern architectural office at sunset"
                class="hero-background-image"
                fetchpriority="high"
                width="1648"
                height="928">

            <div class="image-overlay"></div>
            <div class="image-grid-overlay"></div>

            <div class="floating-card card-top">
                <span class="card-label">DIGITAL EXPERIENCE</span>
                <span class="card-value">Designed to move.</span>
                <span class="card-line"></span>
            </div>

            <div class="floating-card card-bottom">
                <span class="mini-icon">↗</span>
                <div>
                    <span class="card-label">BUILT FOR WHAT'S NEXT</span>
                    <span class="card-value">Ideas. Engineered.</span>
                </div>
            </div>

            <div class="visual-coordinate">REZOPAY / DIGITAL STUDIO</div>
        </div>


        <a href="#services" class="scroll-cue">
            <span class="scroll-mouse"></span>
            <span>SCROLL TO EXPLORE</span>
        </a>

        <div class="hero-side-label">INDEPENDENT THINKING. DIGITAL EXECUTION.</div>
    </section>


    <section class="technology-marquee" aria-label="Our technology services">
        <p class="technology-marquee-heading">
            TECHNOLOGY THAT MOVES BUSINESS FORWARD
        </p>

        <div class="marquee-viewport">
            <div class="marquee-track">

                <div class="marquee-group">
                    <span class="marquee-item">WEB EXPERIENCES</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">SOFTWARE SYSTEMS</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">DIGITAL PRODUCTS</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">GROWTH SOLUTIONS</span>
                    <span class="marquee-star">✳</span>
                </div>

                <div class="marquee-group" aria-hidden="true">
                    <span class="marquee-item">WEB EXPERIENCES</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">SOFTWARE SYSTEMS</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">DIGITAL PRODUCTS</span>
                    <span class="marquee-star">✳</span>

                    <span class="marquee-item">GROWTH SOLUTIONS</span>
                    <span class="marquee-star">✳</span>
                </div>

            </div>
        </div>
    </section>



    <section class="services-section section-pad" id="services">
        <div class="services-orbit" aria-hidden="true"></div>

        <div class="section-heading reveal">
            <div class="services-heading-main">
                <span class="eyebrow">
                    <span class="services-eyebrow-dot"></span>
                    WHAT WE DO / 01
                </span>

                <h2>
                    We turn complex<br>
                    into <span>possible.</span>
                </h2>
            </div>

            <div class="services-heading-copy">
                <span class="services-journey">
                    IDEA <i>→</i> STRATEGY <i>→</i> DESIGN
                    <i>→</i> PRODUCT <i>→</i> GROWTH
                </span>

                <p>
                    From the first idea to the final product, we bring
                    strategy, design and engineering together to create
                    meaningful results for your business.
                </p>

                <a href="{{ url('/services') }}" class="services-main-cta">
                    <span>Let's Build Together</span>
                    <span aria-hidden="true">↗</span>
                </a>
            </div>
        </div>

        <div class="services-grid">

            <article class="service-card reveal">
                <span class="service-number">01</span>
                <div class="service-art art-web" aria-hidden="true">
                    <div class="art-laptop">
                        <div class="art-screen">
                            <span></span><span></span><span></span>
                            <div class="art-wave"></div>
                        </div>
                        <div class="art-base"></div>
                    </div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">↗</div>
                    <h3>Web Design &amp;<br>Development</h3>
                    <p>
                        Distinctive, fast and responsive digital experiences
                        built around your business.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss web development">
                        Explore <span>→</span>
                    </a>
                </div>
            </article>

            <article class="service-card reveal">
                <span class="service-number">02</span>
                <div class="service-art art-software" aria-hidden="true">
                    <div class="art-cube cube-one"></div>
                    <div class="art-cube cube-two"></div>
                    <div class="art-cube cube-three"></div>
                    <div class="art-cube cube-four"></div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">⌘</div>
                    <h3>Custom Software<br>Solutions</h3>
                    <p>
                        Purpose-built systems that simplify operations
                        and support your next stage of growth.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss custom software">
                        Explore <span>→</span>
                    </a>
                </div>
            </article>

            <article class="service-card reveal">
                <span class="service-number">03</span>
                <div class="service-art art-mobile" aria-hidden="true">
                    <div class="art-phone phone-one"></div>
                    <div class="art-phone phone-two"></div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">▣</div>
                    <h3>Mobile App<br>Development</h3>
                    <p>
                        Useful, intuitive mobile applications designed
                        for real-world users.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss mobile apps">
                        Explore <span>→</span>
                    </a>
                </div>
            </article>

            <article class="service-card reveal">
                <span class="service-number">04</span>
                <div class="service-art art-commerce" aria-hidden="true">
                    <div class="art-cart">
                        <span></span><span></span><span></span>
                    </div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">◇</div>
                    <h3>E-commerce &amp;<br>Quick Commerce</h3>
                    <p>
                        Digital commerce experiences for products,
                        orders and modern delivery workflows.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss commerce solutions">
                        Explore <span>→</span>
                    </a>
                </div>
            </article>

            <article class="service-card reveal">
                <span class="service-number">05</span>
                <div class="service-art art-billing" aria-hidden="true">
                    <div class="art-dashboard">
                        <div class="dashboard-top"></div>
                        <div class="dashboard-bars">
                            <i></i><i></i><i></i><i></i><i></i>
                        </div>
                        <div class="dashboard-ring"></div>
                    </div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">⌁</div>
                    <h3>Business &amp; Billing<br>Systems</h3>
                    <p>
                        Practical tools to help teams manage sales,
                        billing and everyday business operations.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss billing systems">
                        Explore <span>→</span>
                    </a>
                </div>
            </article>

            <article class="service-card service-card-featured reveal">
                <span class="service-number">06</span>
                <div class="service-art art-growth" aria-hidden="true">
                    <div class="art-target">
                        <span><i></i></span>
                    </div>
                    <div class="art-target-arrow"></div>
                </div>

                <div class="service-card-content">
                    <div class="service-icon">✳</div>
                    <h3>Digital Growth<br>Solutions</h3>
                    <p>
                        Social media content and digital support that help
                        your brand communicate consistently.
                    </p>
                    <a href="{{ url('/services') }}" aria-label="Discuss digital growth">
                        Let's Talk <span>→</span>
                    </a>
                </div>
            </article>

        </div>

        <div class="rz-explore-services-wrap">
            <a href="{{ route('services') }}" class="rz-explore-services-btn">
                <span>Explore Services</span>
                <span class="rz-explore-services-arrow" aria-hidden="true">↗</span>
            </a>
        </div>

    </section>


    <section class="about-section section-pad" id="about">

        <div class="growth-visual reveal">
            <img
                src="{{ asset('images/growth-partner.png') }}"
                alt="Rezopay futuristic blue technology sculpture"
                class="growth-visual-image"
                loading="lazy">


        </div>


        <div class="about-copy reveal">
            <span class="eyebrow">A DIFFERENT KIND OF PARTNER / 02</span>
            <h2>More than a<br>tech company.<br><span>Your growth<br>partner.</span></h2>
            <p>
                Great technology starts with understanding people. We bring
                thoughtful design, practical engineering and a business-first
                mindset to every project we take on.
            </p>
            <a href="#contact" class="text-link">Discover Rezopay <span>↗</span></a>

            <div class="about-points">
                <div><span>01</span>
                    <p>Understand the real problem.</p>
                </div>
                <div><span>02</span>
                    <p>Build with purpose and precision.</p>
                </div>
                <div><span>03</span>
                    <p>Keep improving as you grow.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="process-section section-pad" id="process">
        <div class="section-heading reveal">
            <div>
                <span class="eyebrow">HOW WE WORK / 03</span>
                <h2>From first thought<br>to <span>what's next.</span></h2>
            </div>
            <p>
                A clear, collaborative process keeps every project moving
                from an initial idea to a considered digital solution.
            </p>
        </div>

        <div class="process-track">
            <div class="process-line"><span></span></div>

            <article class="process-step reveal">
                <span class="process-count">01</span>
                <span class="process-dot"></span>
                <h3>Discover</h3>
                <p>We listen, ask the right questions and define what success means for your business.</p>
            </article>

            <article class="process-step reveal">
                <span class="process-count">02</span>
                <span class="process-dot"></span>
                <h3>Design</h3>
                <p>We shape the user experience, visual direction and a practical project roadmap.</p>
            </article>

            <article class="process-step reveal">
                <span class="process-count">03</span>
                <span class="process-dot"></span>
                <h3>Develop</h3>
                <p>We build, test and refine your solution with performance and usability in mind.</p>
            </article>

            <article class="process-step reveal">
                <span class="process-count">04</span>
                <span class="process-dot"></span>
                <h3>Deliver</h3>
                <p>We prepare your launch and help you plan the next improvements.</p>
            </article>
        </div>
    </section>

    <section id="our-process" class="rp-process-section">
        <div class="rp-process-container">

            <div class="rp-process-heading">
                <span class="rp-process-eyebrow">
                    <span class="rp-process-eyebrow-dot"></span>
                    FROM IDEA TO IMPACT
                </span>

                <h2>
                    A smarter process.
                    <span>Built around your vision.</span>
                </h2>

                <p>
                    From the first conversation to the final launch,
                    we turn ambitious ideas into meaningful digital experiences.
                </p>
            </div>

            <div class="rp-process-stack">

                <article class="rp-process-card" data-process-card>
                    <div class="rp-process-card-top">
                        <span class="rp-process-number">01</span>
                        <span class="rp-process-label">THE FOUNDATION</span>
                    </div>

                    <div class="rp-process-card-content">
                        <div class="rp-process-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="10.8" cy="10.8" r="6.8" />
                                <path d="m16 16 4.5 4.5M8 10.8h5.6M10.8 8v5.6" />
                            </svg>
                        </div>

                        <div class="rp-process-copy">
                            <h3>Discover &amp; Strategize</h3>
                            <p>
                                We understand your business, audience and goals
                                to define the right digital strategy before development begins.
                            </p>
                        </div>

                        <span class="rp-process-arrow" aria-hidden="true">↗</span>
                    </div>

                    <div class="rp-process-card-bottom">
                        <span>Research</span>
                        <span>Requirements</span>
                        <span>Strategy</span>
                    </div>
                </article>

                <article class="rp-process-card" data-process-card>
                    <div class="rp-process-card-top">
                        <span class="rp-process-number">02</span>
                        <span class="rp-process-label">THE EXPERIENCE</span>
                    </div>

                    <div class="rp-process-card-content">
                        <div class="rp-process-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <rect x="3.5" y="3.5" width="17" height="17" rx="3" />
                                <path d="M3.5 9h17M9 9v11.5M6.2 6.2h.1M8.5 6.2h.1" />
                            </svg>
                        </div>

                        <div class="rp-process-copy">
                            <h3>Design &amp; Prototype</h3>
                            <p>
                                We shape your vision into a polished, intuitive
                                experience with thoughtful interfaces and clear user journeys.
                            </p>
                        </div>

                        <span class="rp-process-arrow" aria-hidden="true">↗</span>
                    </div>

                    <div class="rp-process-card-bottom">
                        <span>UI / UX</span>
                        <span>Visual Design</span>
                        <span>Prototype</span>
                    </div>
                </article>

                <article class="rp-process-card" data-process-card>
                    <div class="rp-process-card-top">
                        <span class="rp-process-number">03</span>
                        <span class="rp-process-label">THE BUILD</span>
                    </div>

                    <div class="rp-process-card-content">
                        <div class="rp-process-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m8 7-5 5 5 5M16 7l5 5-5 5M14 4l-4 16" />
                            </svg>
                        </div>

                        <div class="rp-process-copy">
                            <h3>Develop &amp; Integrate</h3>
                            <p>
                                We build reliable websites, applications and
                                digital products with performance, security and scalability in mind.
                            </p>
                        </div>

                        <span class="rp-process-arrow" aria-hidden="true">↗</span>
                    </div>

                    <div class="rp-process-card-bottom">
                        <span>Engineering</span>
                        <span>Integration</span>
                        <span>Performance</span>
                    </div>
                </article>

                <article class="rp-process-card" data-process-card>
                    <div class="rp-process-card-top">
                        <span class="rp-process-number">04</span>
                        <span class="rp-process-label">THE LAUNCH</span>
                    </div>

                    <div class="rp-process-card-content">
                        <div class="rp-process-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 16V3m-5 5 5-5 5 5" />
                                <path d="M5 13v7h14v-7" />
                            </svg>
                        </div>

                        <div class="rp-process-copy">
                            <h3>Test, Launch &amp; Grow</h3>
                            <p>
                                We test every detail, deploy your product and
                                help you move forward with confidence.
                            </p>
                        </div>

                        <span class="rp-process-arrow" aria-hidden="true">↗</span>
                    </div>

                    <div class="rp-process-card-bottom">
                        <span>Quality Assurance</span>
                        <span>Deployment</span>
                        <span>Growth</span>
                    </div>
                </article>

            </div>

            <div class="rp-process-footer">
                <span class="rp-process-footer-line"></span>
                <p>One clear process. Better digital outcomes.</p>
                <span class="rp-process-footer-line"></span>
            </div>

        </div>
    </section>



    <section class="contact-cta" id="contact">
        <div class="contact-cta__background"></div>
        <div class="contact-cta__grid"></div>

        <div class="contact-cta__content">
            <span class="contact-cta__eyebrow">
                <span class="contact-cta__dot"></span>
                HAVE AN IDEA? LET'S BUILD IT.
            </span>

            <h2 class="contact-cta__title">
                Your next big<br>
                thing starts <span>here.</span>
            </h2>

            <p class="contact-cta__description">
                Tell us what you're imagining. We'll help you work out the next step.
            </p>

            <a href="mailto:hello@rezopay.com" class="contact-cta__button">
                <span>Start a Conversation</span>
                <span class="contact-cta__arrow">↗</span>
            </a>

            <div class="contact-cta__note">
                <span class="contact-cta__note-line"></span>
                GOOD IDEAS START WITH A CONVERSATION
            </div>
        </div>

        <div class="contact-cta__visual" aria-hidden="true">
            <div class="contact-cta__orbit contact-cta__orbit--one"></div>
            <div class="contact-cta__orbit contact-cta__orbit--two"></div>
            <div class="contact-cta__orbit contact-cta__orbit--three"></div>

            <div class="contact-cta__visual-caption">
                <span class="contact-cta__visual-dot"></span>
                BUILT FOR WHAT'S NEXT
            </div>

            <div class="contact-cta__visual-bottom">
                <span>R / 01</span>
                <span>IDEAS INTO IMPACT</span>
            </div>
        </div>
    </section>

</main>

<!-- Rezopay Contact Modal -->





@endsection