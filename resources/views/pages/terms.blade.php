@extends('layouts.app')

@section('title', 'Terms & Conditions | Rezopay Technologies')

@section('content')
<main class="rz-terms-page">

    <section class="rz-terms-hero">
        <div class="rz-terms-container">
            <div class="rz-terms-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Terms & Conditions</span>
            </div>

            <div class="rz-terms-label">
                <span></span> TERMS OF SERVICE
            </div>

            <h1>Terms <span>& Conditions</span></h1>

            <p>
                Please read these terms before using our website
                or engaging with Rezopay Technologies services.
            </p>

            <span class="rz-terms-updated">
                Last updated: 26 October 2026
            </span>
        </div>
    </section>

    <section class="rz-terms-content">
        <div class="rz-terms-container rz-terms-card">

            <div class="rz-terms-icon">§</div>

            <h2>Welcome to Rezopay Technologies</h2>
            <p>
                These Terms & Conditions govern your access to and use
                of our website and services, including software
                development, website development, mobile applications,
                ecommerce solutions and digital marketing services.
                By using our website or engaging our services, you
                agree to these terms.
            </p>

            <div class="rz-terms-divider"></div>

            <h3>1. Our Services</h3>
            <p>
                The scope, deliverables, pricing and timeline of any
                project will be agreed upon separately through a
                quotation, proposal or service agreement.
            </p>

            <h3>2. Client Responsibilities</h3>
            <p>
                Clients must provide accurate information, necessary
                content, approvals and access required for the project.
                Delays in providing these may affect delivery timelines.
            </p>

            <h3>3. Payments & Refunds</h3>
            <p>
                Fees, payment schedules and any applicable taxes will
                be communicated before work begins. Refunds and
                cancellations are governed by our
                <a href="{{ route('refund-policy') }}">Refund Policy</a>
                and any applicable project agreement.
            </p>

            <h3>4. Intellectual Property</h3>
            <p>
                Ownership and usage rights for project deliverables
                will be determined by the relevant agreement and
                payment terms. Third-party tools, libraries and
                materials remain subject to their respective licences.
            </p>

            <h3>5. Acceptable Use</h3>
            <p>
                You must not use our website or services for unlawful
                activities, fraud, infringement of others' rights,
                distribution of malicious software or any activity
                prohibited by applicable law.
            </p>

            <h3>6. Third-Party Services</h3>
            <p>
                Our services may integrate with third-party platforms,
                hosting providers, APIs or payment providers. Their
                availability and use may be governed by separate terms
                and policies.
            </p>

            <h3>7. Limitation of Liability</h3>
            <p>
                To the extent permitted by applicable law, Rezopay
                Technologies will not be liable for indirect or
                consequential losses arising from use of the website
                or services. Nothing in these terms excludes liability
                that cannot legally be excluded.
            </p>

            <h3>8. Changes to These Terms</h3>
            <p>
                We may update these terms from time to time. Updated
                terms will be published on this page with a revised
                date. Project-specific agreements may contain
                additional conditions.
            </p>

            <h3>9. Governing Law</h3>
            <p>
                These terms are subject to applicable laws of India.
                Any dispute will be handled in accordance with
                applicable law and any valid dispute-resolution
                provisions in the relevant service agreement.
            </p>

            <div class="rz-terms-contact">
                <div>
                    <span>HAVE QUESTIONS ABOUT THESE TERMS?</span>
                    <h3>Let's talk.</h3>
                    <p>Contact our team if you need clarification.</p>
                    <a href="mailto:hello@rezopay.com?subject=Terms%20and%20Conditions">
                        hello@rezopay.com
                    </a>
                </div>

                <a href="{{ route('contact') }}" class="rz-terms-btn">
                    Contact Us <span>↗</span>
                </a>
            </div>

            <p class="rz-terms-disclaimer">
                These terms are a general template and should be reviewed
                for your actual business, contracts and applicable law
                before publication.
            </p>
        </div>
    </section>

</main>
@endsection