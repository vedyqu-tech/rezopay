@extends('layouts.app')

@section('title', 'About Us | Rezopay Technologies')

@section('content')

<main class="about-page">

    <!-- Page Header -->
    <section class="about-hero">
        <span class="eyebrow">
            <span class="status-dot"></span>
            ABOUT REZOPAY
        </span>

        <h1>
            Technology that moves<br>
            <span>your business forward.</span>
        </h1>

        <p>
            We build digital experiences, software and mobile
            applications that help businesses turn ideas into reality.
        </p>
    </section>

    <!-- About Content -->
    <section class="about-content">

        <div class="about-content-label">
            <span class="eyebrow">WHO WE ARE</span>
            <span class="about-line"></span>
        </div>

        <div class="about-content-grid">

            <h2>
                Your ideas.<br>
                Our expertise.<br>
                <span>Better possibilities.</span>
            </h2>

            <div class="about-description">
                <p>
                    Rezopay Technologies is a technology company focused
                    on helping businesses build and improve their digital
                    presence.
                </p>

                <p>
                    We provide website design and development, custom
                    software solutions, mobile app development,
                    e-commerce platforms and business management systems.
                </p>

                <p>
                    Our goal is simple: understand your requirements
                    and create reliable, user-friendly digital solutions
                    that support your business goals.
                </p>

                <a href="{{ url('/services') }}" class="about-link">
                    Explore Our Services <span>↗</span>
                </a>
            </div>

        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="about-purpose">

        <article class="purpose-card">
            <span class="purpose-number">01 / OUR MISSION</span>
            <h3>Making technology useful.</h3>
            <p>
                To deliver practical and reliable digital solutions
                that help businesses work smarter and grow.
            </p>
        </article>

        <article class="purpose-card purpose-card-highlight">
            <span class="purpose-number">02 / OUR VISION</span>
            <h3>Building for the future.</h3>
            <p>
                To become a trusted technology partner by creating
                meaningful digital experiences and innovative products.
            </p>
        </article>

    </section>

    <!-- Contact CTA -->
    <!--<section class="about-cta">
        <div>
            <span class="eyebrow">LET'S WORK TOGETHER</span>
            <h2>Have an idea in mind?</h2>
            <p>Let's discuss your project and explore what's possible.</p>
        </div>

        <a href="{{ url('/#contact') }}" class="primary-button">
            <span>Start a Project</span>
            <span class="button-arrow">↗</span>
        </a>
    </section>-->

</main>

@endsection