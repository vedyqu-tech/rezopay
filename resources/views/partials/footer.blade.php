<footer class="rz-footer" id="contact">
    <div class="rz-footer__background" aria-hidden="true"></div>
    <div class="rz-footer__glow" aria-hidden="true"></div>

    <div class="rz-footer__container">

        {{-- Top CTA --}}
        <!-- <div class="rz-footer__hero">
            <div class="rz-footer__hero-copy">
                <span class="rz-eyebrow">
                    <span class="rz-eyebrow__dot"></span>
                    HAVE AN IDEA? LET'S BUILD IT.
                </span>

                <h2>
                    Let's build something
                    <span>meaningful.</span>
                </h2>

                <p>
                    Tell us what you're imagining. We'll help you
                    turn your ideas into digital experiences.
                </p>
            </div>

            <a href="#contact-form" class="rz-footer__cta">
                <span>Start a Conversation</span>
                <span class="rz-footer__cta-arrow" aria-hidden="true">↗</span>
            </a>
        </div>-->

        {{-- Footer columns --}}
        <div class="rz-footer__main">

            {{-- Brand --}}
            <div class="rz-footer__brand">
                <a href="{{ url('/') }}" class="rz-footer__logo"
                    aria-label="Rezopay home">
                    <img
                        src="{{ asset('images/rezopay-logo.png') }}"
                        alt="Rezopay"
                        class="brand-logo"
                        width="180"
                        height="55">
                </a>

                <p class="rz-footer__brand-description">
                    Thoughtful technology. Meaningful impact.
                    We design and build digital solutions that
                    move businesses forward.
                </p>

                <div class="rz-footer__socials">
                    <a href="https://www.linkedin.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="LinkedIn">in</a>

                    <a href="https://www.instagram.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Instagram">ig</a>

                    <a href="https://www.facebook.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        aria-label="Facebook">f</a>
                </div>
            </div>

            {{-- Explore --}}
            <div class="rz-footer__column">
                <h3>EXPLORE</h3>

                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/services') }}">Services</a>
                <a href="{{ url('/about') }}">About Us</a>
                <a href="{{ url('/contact') }}">Contact us</a>
                <a href="{{ route('privacy-policy') }}">Privacy Policy</a>
                <a href="{{ route('refund-policy') }}">Refund Policy</a>
                <a href="{{ route('terms') }}">Terms & Conditions</a>

            </div>

            {{-- Services --}}
            <div class="rz-footer__column">
                <h3>WHAT WE DO</h3>

                <a href="{{ url('/services') }}">Web Development</a>
                <a href="{{ url('/services') }}">Custom Software</a>
                <a href="{{ url('/services') }}">Mobile Applications</a>
                <a href="{{ url('/services') }}">E-commerce Solutions</a>
                <a href="{{ url('/services') }}">Digital Growth</a>
            </div>

            {{-- Company information --}}
            <div class="rz-footer__company">
                <h3>COMPANY INFORMATION</h3>

                <h4>REZOPAY SOLUTIONS PRIVATE LIMITED</h4>

                <div class="rz-footer__company-item">
                    <span class="rz-footer__company-label">
                        REGISTERED OFFICE
                    </span>
                    <p>
                        Agarwal Near Mai Asthan,<br>
                        Motihari, Bihar – 845401
                    </p>
                </div>

                <div class="rz-footer__company-item">
                    <span class="rz-footer__company-label">
                        CORPORATE OFFICE
                    </span>
                    <p>
                        Ghordaur Road, Near Girls School,<br>
                        Digha, Patna – 800012, Bihar
                    </p>
                </div>

                <div class="rz-footer__company-item">
                    <span class="rz-footer__company-label">
                        CIN
                    </span>
                    <p>U74999BR2021PTC051989</p>
                </div>

                <div class="rz-footer__company-item">
                    <span class="rz-footer__company-label">
                        EMAIL
                    </span>
                    <a href="mailto:rezopay24@gmail.com">
                        rezopay24@gmail.com
                    </a>
                </div>

                <div class="rz-footer__company-item">
                    <span class="rz-footer__company-label">
                        PHONE
                    </span>
                    <p>
                        <a href="tel:+918800704495">+91 88007 04495</a><br>
                        <a href="tel:+919555573709">+91 95555 73709</a>
                    </p>
                </div>
            </div>

            {{-- Contact CTA --}}
            <div class="rz-footer__contact">
                <span class="rz-footer__contact-label">
                    LET'S CONNECT
                </span>

                <h3>
                    Have a project<br>
                    <span>in mind?</span>
                </h3>

                <p>Let's turn your next big idea into reality.</p>

                <a href="#contact-form"
                    class="rz-footer__contact-link" data-talk-open>
                    Discuss Your Project
                    <span aria-hidden="true">↗</span>
                </a>
            </div>

        </div>

        {{-- Bottom bar --}}
        <div class="rz-footer__bottom">
            <p>
                © {{ date('Y') }} REZOPAY SOLUTIONS PRIVATE LIMITED.
                All rights reserved.
            </p>

            <span class="rz-footer__bottom-note">
                BUILT FOR WHAT'S NEXT
            </span>

            <a href="#top" class="rz-footer__back-top">
                BACK TO TOP <span aria-hidden="true">↑</span>
            </a>
        </div>

    </div>
</footer>