@extends('layouts.app')

@section('title', 'Refund Policy | Rezopay Technologies')

@section('content')
<main class="rz-refund-page">

    <section class="rz-refund-hero">
        <div class="rz-refund-container">
            <div class="rz-refund-breadcrumb">
                <a href="{{ url('/') }}">Home</a>
                <span>/</span>
                <span>Refund Policy</span>
            </div>

            <div class="rz-refund-label">
                <span></span> OUR POLICIES
            </div>

            <h1>Refund <span>Policy</span></h1>

            <p>
                Clear and transparent information about refunds
                for services purchased from Rezopay Technologies.
            </p>

            <span class="rz-refund-updated">
                Last updated: 26 October 2026
            </span>
        </div>
    </section>

    <section class="rz-refund-content">
        <div class="rz-refund-container rz-refund-card">

            <div class="rz-refund-icon">↻</div>

            <h2>Our Refund Policy</h2>
            <p>
                At Rezopay Technologies, we aim to provide quality
                software development, website development, digital
                marketing and other technology services.
            </p>

            <div class="rz-refund-divider"></div>

            <h3>1. Refund Eligibility</h3>
            <p>
                Refund requests will be reviewed on a case-by-case basis,
                considering the service purchased, work completed,
                agreed project terms and applicable law.
            </p>

            <h3>2. Non-Refundable Payments</h3>
            <p>
                Payments for completed work, services already delivered,
                or approved milestones may not be refundable, subject
                to the applicable agreement and legal requirements.
            </p>

            <h3>3. Cancellation Requests</h3>
            <p>
                If you wish to cancel a project or service, contact us
                as soon as possible. Any eligible refund will be
                assessed according to the agreed terms and work already
                completed.
            </p>

            <h3>4. Refund Processing</h3>
            <p>
                Once a refund is approved, the processing time may vary
                depending on the payment method and payment provider.
                We will communicate the applicable details to you.
            </p>

            <div class="rz-refund-contact">
                <div>
                    <span>NEED HELP WITH A REFUND?</span>
                    <h3>Contact our team</h3>
                    <p>
                        Email us with your order or project details
                        so we can review your request.
                    </p>
                    <a href="mailto:hello@rezopay.com?subject=Refund%20Request">
                        hello@rezopay.com
                    </a>
                </div>

                <a href="{{ route('contact') }}" class="rz-refund-btn">
                    Contact Us <span>↗</span>
                </a>
            </div>

            <p class="rz-refund-disclaimer">
                This policy should be read alongside your service
                agreement, quotation and applicable terms and conditions.
            </p>
        </div>
    </section>

</main>
@endsection