@extends('layouts.app')

@section('title', 'Privacy Policy | Rezopay Technologies')

@section('content')
<main class="rz-privacy-page">

    {{-- HERO --}}
    <section class="rz-privacy-hero">
        <div class="rz-privacy-grid-bg"></div>
        <div class="rz-privacy-glow"></div>

        <div class="rz-privacy-container rz-privacy-hero-inner">
            <div class="rz-privacy-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Privacy Policy</span>
            </div>

            <div class="rz-privacy-label">
                <span></span>
                YOUR PRIVACY MATTERS
            </div>

            <h1>
                Your trust is our
                <span>priority.</span>
            </h1>

            <p>
                We respect your privacy and are committed to handling
                your personal information responsibly, transparently
                and securely.
            </p>

            <div class="rz-privacy-meta">
                <span class="rz-privacy-meta-icon">◷</span>
                <div>
                    <small>LAST UPDATED</small>
                    <strong>26 October 2026</strong>
                </div>
            </div>

            <div class="rz-privacy-hero-decoration" aria-hidden="true">
                <div class="rz-privacy-shield">
                    <svg viewBox="0 0 100 100" fill="none">
                        <path d="M50 9L82 21V45C82 66 69 82 50 92C31 82 18 66 18 45V21L50 9Z"
                            stroke="currentColor" stroke-width="2" />
                        <path d="M35 50L45 60L66 38"
                            stroke="currentColor" stroke-width="3"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="rz-privacy-orbit orbit-a"></span>
                <span class="rz-privacy-orbit orbit-b"></span>
                <span class="rz-privacy-orbit orbit-c"></span>
            </div>
        </div>
    </section>

    {{-- POLICY CONTENT --}}
    <section class="rz-privacy-content-section">
        <div class="rz-privacy-container rz-privacy-layout">

            {{-- TABLE OF CONTENTS --}}
            <aside class="rz-privacy-sidebar">
                <div class="rz-privacy-toc">
                    <span class="rz-privacy-toc-label">ON THIS PAGE</span>
                    <nav aria-label="Privacy policy sections">
                        <a href="#introduction" class="active">01. Introduction</a>
                        <a href="#information">02. Information We Collect</a>
                        <a href="#usage">03. How We Use Information</a>
                        <a href="#sharing">04. Sharing Information</a>
                        <a href="#cookies">05. Cookies & Tracking</a>
                        <a href="#security">06. Data Security</a>
                        <a href="#retention">07. Data Retention</a>
                        <a href="#rights">08. Your Privacy Rights</a>
                        <a href="#third-party">09. Third-Party Services</a>
                        <a href="#children">10. Children's Privacy</a>
                        <a href="#changes">11. Policy Updates</a>
                        <a href="#contact">12. Contact Us</a>
                    </nav>

                    <div class="rz-privacy-sidebar-note">
                        <span>✦</span>
                        <p>
                            Questions about your data?
                            <a href="{{ route('contact') }}">Talk to our team ↗</a>
                        </p>
                    </div>
                </div>
            </aside>

            {{-- POLICY --}}
            <article class="rz-privacy-document">

                <div class="rz-privacy-intro-note">
                    <span class="rz-privacy-note-icon">i</span>
                    <p>
                        This policy explains how Rezopay Technologies
                        collects, uses, stores and protects information
                        when you visit our website or contact us about
                        our services.
                    </p>
                </div>

                <section id="introduction" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">01</span>
                    <div>
                        <h2>Introduction</h2>
                        <p>
                            Rezopay Technologies ("we", "our" or "us")
                            respects your privacy. This Privacy Policy
                            describes how information may be collected
                            and processed when you use our website,
                            submit an enquiry or interact with our
                            services.
                        </p>
                        <p>
                            By using our website, you acknowledge that
                            you have read this policy. Where consent is
                            required by applicable law, we will seek
                            that consent separately.
                        </p>
                    </div>
                </section>

                <section id="information" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">02</span>
                    <div>
                        <h2>Information We Collect</h2>
                        <p>
                            The information we collect depends on how
                            you interact with our website and services.
                            It may include:
                        </p>

                        <div class="rz-privacy-info-cards">
                            <div class="rz-privacy-info-card">
                                <span>01</span>
                                <h3>Contact Information</h3>
                                <p>
                                    Name, email address, phone number
                                    and other details you voluntarily
                                    provide through enquiry forms.
                                </p>
                            </div>

                            <div class="rz-privacy-info-card">
                                <span>02</span>
                                <h3>Project Information</h3>
                                <p>
                                    Service preferences, project
                                    requirements, budget estimates,
                                    messages and related business
                                    information you submit.
                                </p>
                            </div>

                            <div class="rz-privacy-info-card">
                                <span>03</span>
                                <h3>Technical Information</h3>
                                <p>
                                    Information such as browser type,
                                    device details, IP address and
                                    website activity may be collected
                                    through server logs or analytics,
                                    where enabled.
                                </p>
                            </div>

                            <div class="rz-privacy-info-card">
                                <span>04</span>
                                <h3>Communication Records</h3>
                                <p>
                                    Messages and correspondence
                                    exchanged with us when you request
                                    information, support or a service.
                                </p>
                            </div>
                        </div>

                        <p>
                            Please do not submit passwords, payment
                            credentials or sensitive personal
                            information through a general contact form.
                        </p>
                    </div>
                </section>

                <section id="usage" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">03</span>
                    <div>
                        <h2>How We Use Your Information</h2>
                        <p>Information may be used for the following purposes:</p>
                        <ul class="rz-privacy-list">
                            <li>To respond to enquiries and discuss project requirements.</li>
                            <li>To provide, maintain and improve our website and services.</li>
                            <li>To communicate about quotations, projects, support and service updates.</li>
                            <li>To maintain website security and prevent misuse or fraudulent activity.</li>
                            <li>To understand website performance and improve the user experience, where analytics are enabled.</li>
                            <li>To comply with applicable legal obligations and protect our legitimate interests.</li>
                        </ul>
                        <p>
                            We will process personal information only
                            where we have an appropriate legal basis,
                            such as consent, contractual necessity,
                            legitimate interests or a legal obligation,
                            as applicable.
                        </p>
                    </div>
                </section>

                <section id="sharing" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">04</span>
                    <div>
                        <h2>Sharing of Information</h2>
                        <p>
                            We do not sell your personal information
                            to third parties. We may share relevant
                            information in limited circumstances:
                        </p>
                        <ul class="rz-privacy-list">
                            <li>With hosting, email, analytics and other service providers supporting our operations.</li>
                            <li>With project partners or vendors when necessary to deliver a service you request.</li>
                            <li>When disclosure is required by applicable law, a court order or a lawful authority.</li>
                            <li>When necessary to protect our rights, users, systems or business from fraud or security threats.</li>
                        </ul>
                        <p>
                            Service providers are expected to handle
                            information appropriately and in accordance
                            with their applicable obligations.
                        </p>
                    </div>
                </section>

                <section id="cookies" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">05</span>
                    <div>
                        <h2>Cookies & Tracking Technologies</h2>
                        <p>
                            Our website may use cookies or similar
                            technologies to support essential website
                            functionality, remember preferences,
                            understand site usage and improve
                            performance.
                        </p>
                        <p>
                            You can manage or block cookies through
                            your browser settings. Disabling certain
                            cookies may affect some website features.
                            Where required, we will request consent
                            before using non-essential cookies or
                            tracking technologies.
                        </p>
                        <div class="rz-privacy-highlight">
                            <strong>Transparency matters</strong>
                            <p>
                                The cookies and analytics tools actually
                                used on the live website should be
                                identified here once your implementation
                                is confirmed.
                            </p>
                        </div>
                    </div>
                </section>

                <section id="security" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">06</span>
                    <div>
                        <h2>Data Security</h2>
                        <p>
                            We use reasonable technical and
                            organisational measures designed to protect
                            personal information against unauthorised
                            access, alteration, disclosure or
                            destruction.
                        </p>
                        <p>
                            However, no website, internet transmission
                            or storage system can be guaranteed to be
                            completely secure. Please contact us if you
                            believe your information has been exposed
                            or misused in connection with our website.
                        </p>
                    </div>
                </section>

                <section id="retention" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">07</span>
                    <div>
                        <h2>Data Retention</h2>
                        <p>
                            We retain personal information only for as
                            long as reasonably necessary for the
                            purposes described in this policy, including
                            responding to enquiries, managing projects,
                            maintaining records and meeting legal
                            requirements.
                        </p>
                        <p>
                            When information is no longer required, we
                            will take appropriate steps to delete it,
                            anonymise it or otherwise dispose of it
                            securely, subject to applicable law.
                        </p>
                    </div>
                </section>

                <section id="rights" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">08</span>
                    <div>
                        <h2>Your Privacy Rights</h2>
                        <p>
                            Depending on applicable law and the
                            circumstances of processing, you may have
                            the right to:
                        </p>
                        <ul class="rz-privacy-list">
                            <li>Request access to personal information we hold about you.</li>
                            <li>Request correction of inaccurate or incomplete information.</li>
                            <li>Request deletion of information where applicable.</li>
                            <li>Withdraw consent where processing relies on consent.</li>
                            <li>Raise a concern or submit a privacy-related request.</li>
                        </ul>
                        <p>
                            To exercise an applicable right, contact us
                            using the details below. We may need to
                            verify your identity before responding.
                            Some requests may be subject to legal
                            exceptions or record-retention obligations.
                        </p>
                    </div>
                </section>

                <section id="third-party" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">09</span>
                    <div>
                        <h2>Third-Party Services & Links</h2>
                        <p>
                            Our website may link to third-party websites
                            or use external services. These services
                            operate under their own privacy policies
                            and terms. We are not responsible for the
                            privacy practices of independent third
                            parties.
                        </p>
                        <p>
                            Please review the applicable privacy
                            notices before sharing information with
                            any external provider.
                        </p>
                    </div>
                </section>

                <section id="children" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">10</span>
                    <div>
                        <h2>Children's Privacy</h2>
                        <p>
                            Our website is intended for businesses,
                            professionals and general users. We do not
                            knowingly seek to collect personal
                            information from children in violation of
                            applicable law. If you believe a child has
                            provided personal information improperly,
                            please contact us so we can review the
                            matter.
                        </p>
                    </div>
                </section>

                <section id="changes" class="rz-privacy-section">
                    <span class="rz-privacy-section-number">11</span>
                    <div>
                        <h2>Changes to This Policy</h2>
                        <p>
                            We may update this Privacy Policy to reflect
                            changes in our services, technology,
                            operational practices or legal requirements.
                            Any revised policy will be published on
                            this page with an updated revision date.
                        </p>
                        <p>
                            We encourage you to review this page
                            periodically.
                        </p>
                    </div>
                </section>

                <section id="contact" class="rz-privacy-section rz-privacy-last-section">
                    <span class="rz-privacy-section-number">12</span>
                    <div>
                        <h2>Contact Us</h2>
                        <p>
                            If you have questions about this Privacy
                            Policy, wish to make a privacy request or
                            have concerns about how information is
                            handled, please contact Rezopay Technologies.
                        </p>

                        <div class="rz-privacy-contact-card">
                            <div class="rz-privacy-contact-icon">✉</div>
                            <div>
                                <small>PRIVACY ENQUIRIES</small>
                                <a href="mailto:hello@rezopay.com">
                                    hello@rezopay.com
                                </a>
                                <p>
                                    Please use “Privacy Request” in your
                                    email subject line.
                                </p>
                            </div>
                            <a href="mailto:hello@rezopay.com?subject=Privacy%20Request"
                                class="rz-privacy-contact-arrow"
                                aria-label="Email us about privacy">↗</a>
                        </div>

                        <p class="rz-privacy-disclaimer">
                            This page provides general information
                            about privacy practices. It is not legal
                            advice. Please ensure the policy reflects
                            your actual business practices and applicable
                            legal requirements before publishing.
                        </p>
                    </div>
                </section>

            </article>
        </div>
    </section>

    {{-- BOTTOM CTA --}}
    <section class="rz-privacy-bottom">
        <div class="rz-privacy-container rz-privacy-bottom-inner">
            <div>
                <span class="rz-privacy-label">
                    <span></span> HERE WHEN YOU NEED US
                </span>
                <h2>Have a privacy question?</h2>
                <p>We're happy to help clarify how your information is handled.</p>
            </div>

            <a href="{{ route('contact') }}" class="rz-privacy-bottom-btn">
                Contact Our Team <span>↗</span>
            </a>
        </div>
    </section>

</main>
@endsection