@extends('layouts.app')

@section('title', 'Contact Us | Rezopay Technologies')

@section('content')
<main class="rz-contact-page">

    {{-- HERO --}}
    <section class="rz-contact-hero">
        <div class="rz-contact-orb rz-contact-orb-one"></div>
        <div class="rz-contact-orb rz-contact-orb-two"></div>

        <div class="rz-contact-container rz-contact-hero-grid">
            <div class="rz-contact-hero-copy">
                <div class="rz-contact-eyebrow">
                    <span class="rz-contact-dot"></span>
                    LET'S BUILD SOMETHING GREAT
                </div>

                <h1>
                    Let's turn your
                    <span>ideas into impact.</span>
                </h1>

                <p>
                    Have a project in mind, need a technology partner, or
                    want to explore what's possible? Tell us about your goals.
                    Let's create something meaningful together.
                </p>

                <div class="rz-contact-hero-points">
                    <span><i>✓</i> Custom digital solutions</span>
                    <span><i>✓</i> Business-focused approach</span>
                    <span><i>✓</i> Support from idea to launch</span>
                </div>

                <a href="#contact-form" class="rz-contact-primary-btn">
                    Start a Conversation <span>↗</span>
                </a>
            </div>

            <div class="rz-contact-visual">
                <div class="rz-contact-visual-glow"></div>

                <div class="rz-contact-visual-card">
                    <div class="rz-contact-visual-top">
                        <div class="rz-contact-symbol">R<span>.</span></div>
                        <span class="rz-contact-live">
                            <span></span> READY TO CONNECT
                        </span>
                    </div>

                    <div class="rz-contact-visual-art">
                        <div class="rz-contact-ring ring-one"></div>
                        <div class="rz-contact-ring ring-two"></div>
                        <div class="rz-contact-ring ring-three"></div>

                        <div class="rz-contact-center-icon">
                            <svg viewBox="0 0 100 100" fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path d="M18 29L50 12L82 29V69L50 88L18 69V29Z"
                                    stroke="currentColor" stroke-width="2" />
                                <path d="M18 29L50 48L82 29M50 48V88"
                                    stroke="currentColor" stroke-width="2" />
                                <circle cx="50" cy="48" r="8"
                                    fill="#65C7FF" />
                            </svg>
                        </div>

                        <span class="rz-contact-node node-one">IDEAS</span>
                        <span class="rz-contact-node node-two">DESIGN</span>
                        <span class="rz-contact-node node-three">TECH</span>
                        <span class="rz-contact-node node-four">GROWTH</span>
                    </div>

                    <div class="rz-contact-visual-footer">
                        <div>
                            <small>YOUR NEXT CHAPTER</small>
                            <h3>Starts with a hello.</h3>
                        </div>
                        <span class="rz-contact-arrow">↗</span>
                    </div>
                </div>

                <div class="rz-contact-floating-tag">
                    <span class="rz-contact-tag-icon">✦</span>
                    <div>
                        <strong>Built around you</strong>
                        <small>Solutions that fit your goals</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="rz-contact-hero-bottom">
            <span>STRATEGY</span><i></i>
            <span>DESIGN</span><i></i>
            <span>TECHNOLOGY</span><i></i>
            <span>GROWTH</span>
        </div>
    </section>

    {{-- CONTACT CONTENT --}}
    <section class="rz-contact-main" id="contact-form">
        <div class="rz-contact-container">
            <div class="rz-contact-section-heading">
                <div>
                    <div class="rz-contact-eyebrow">
                        <span class="rz-contact-dot"></span>
                        GET IN TOUCH
                    </div>
                    <h2>Tell us what you're <span>building.</span></h2>
                </div>

                <p>
                    Share a few details and we'll have a better understanding
                    of how Rezopay Technologies can help.
                </p>
            </div>

            <div class="rz-contact-content-grid">

                {{-- CONTACT DETAILS --}}
                <aside class="rz-contact-info">
                    <div class="rz-contact-info-heading">
                        <span class="rz-contact-info-label">CONTACT DETAILS</span>
                        <h3>We're here to help you move forward.</h3>
                        <p>
                            Choose the most convenient way to connect with
                            our team.
                        </p>
                    </div>

                    <div class="rz-contact-info-item">
                        <div class="rz-contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.7"
                                aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14"
                                    rx="2" />
                                <path d="M3 7L12 13L21 7" />
                            </svg>
                        </div>
                        <div>
                            <small>EMAIL US</small>
                            <a href="mailto:rezopay24@gmail.com">
                                rezopay24@gmail.com
                            </a>
                            <small> PHONE </small>
                            <p> +91 88007 04495</p>
                            <p> +91 95555 73709</p>
                            <p>For projects and general enquiries
                        </div>
                    </div>

                    <div class="rz-contact-info-item">
                        <div class="rz-contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.7"
                                aria-hidden="true">
                                <path d="M20 10.2C20 15.3 12 22 12 22S4 15.3 4 10.2a8 8 0 1 1 16 0Z" />
                                <circle cx="12" cy="10" r="2.5" />
                            </svg>
                        </div>
                        <div>
                            <small>OUR APPROACH</small>
                            <strong>CORPORATE OFFICE</strong>
                            <p>Ghordaur Road, Near Girls School,
                                Digha, Patna – 800012, Bihar

                            </p>
                            <strong>REGISTERED OFFICE</strong>
                            <p>Agarwal Near Mai Asthan,
                                Motihari, Bihar – 845401

                            </p>
                        </div>
                    </div>

                    <div class="rz-contact-info-item">
                        <div class="rz-contact-info-icon">
                            <svg viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.7"
                                aria-hidden="true">
                                <circle cx="12" cy="12" r="9" />
                                <path d="M12 7V12L15.5 14" />
                            </svg>
                        </div>
                        <div>
                            <small>PROJECT ENQUIRIES</small>
                            <strong>Let's plan your next step</strong>
                            <p>Tell us your requirements and timeline</p>
                        </div>
                    </div>

                    <div class="rz-contact-info-note">
                        <span>✦</span>
                        <p>
                            Not sure where to start? That's okay.
                            Tell us your idea and we'll take it from there.
                        </p>
                    </div>
                </aside>

                {{-- FORM --}}
                <div class="rz-contact-form-card">
                    <div class="rz-contact-form-heading">
                        <div>
                            <span class="rz-contact-form-label">
                                PROJECT ENQUIRY
                            </span>
                            <h3>Start a conversation</h3>
                        </div>
                        <span class="rz-contact-form-step">01 / 01</span>
                    </div>

                    <form id="rzContactForm" class="rz-contact-form">
                        @csrf

                        <div class="rz-contact-field-row">
                            <div class="rz-contact-field">
                                <label for="rz-name">Your name <span>*</span></label>
                                <input id="rz-name" name="name" type="text"
                                    placeholder="John Doe"
                                    autocomplete="name" required
                                    maxlength="100">
                            </div>

                            <div class="rz-contact-field">
                                <label for="rz-email">Work email <span>*</span></label>
                                <input id="rz-email" name="email" type="email"
                                    placeholder="john@company.com"
                                    autocomplete="email" required
                                    maxlength="150">
                            </div>
                        </div>

                        <div class="rz-contact-field-row">
                            <div class="rz-contact-field">
                                <label for="rz-phone">Phone number</label>
                                <input id="rz-phone" name="phone" type="tel"
                                    placeholder="+91 00000 00000"
                                    autocomplete="tel" maxlength="25">
                            </div>

                            <div class="rz-contact-field">
                                <label for="rz-service">Service you're interested in <span>*</span></label>
                                <select id="rz-service" name="service" required>
                                    <option value="" disabled selected>
                                        Select a service
                                    </option>
                                    <option value="Custom App Development">Custom App Development</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="Website Design & Development">Website Design & Development</option>
                                    <option value="Ecommerce Solutions">Ecommerce Solutions</option>
                                    <option value="Quick Commerce Solutions">Quick Commerce Solutions</option>
                                    <option value="Billing Management Software">Billing Management Software</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="AI Solutions">AI Solutions</option>
                                    <option value="Other">Other / Not sure yet</option>
                                </select>
                            </div>
                        </div>

                        <div class="rz-contact-field">
                            <label for="rz-budget">Estimated budget</label>
                            <select id="rz-budget" name="budget">
                                <option value="" selected>Select your budget (optional)</option>
                                <option value="Under ₹25,000">Under ₹25,000</option>
                                <option value="₹25,000 – ₹50,000">₹25,000 – ₹50,000</option>
                                <option value="₹50,000 – ₹1,00,000">₹50,000 – ₹1,00,000</option>
                                <option value="₹1,00,000+">₹1,00,000+</option>
                                <option value="Need guidance">Need guidance</option>
                            </select>
                        </div>

                        <div class="rz-contact-field">
                            <label for="rz-message">Tell us about your project <span>*</span></label>
                            <textarea id="rz-message" name="message" rows="5"
                                placeholder="What are you looking to build? Share your goals, requirements or challenges..."
                                required maxlength="5000"></textarea>
                            <div class="rz-contact-textarea-footer">
                                <span>More detail helps us understand your needs.</span>
                                <span id="rzMessageCount">0 / 5000</span>
                            </div>
                        </div>

                        <label class="rz-contact-consent">
                            <input type="checkbox" name="consent" required>
                            <span>
                                I agree to be contacted by Rezopay Technologies
                                regarding this enquiry.
                            </span>
                        </label>

                        <button class="rz-contact-submit" type="submit">
                            <span>Send Enquiry</span>
                            <span class="rz-contact-submit-arrow">↗</span>
                        </button>

                        <p class="rz-contact-form-status" id="rzContactStatus"
                            role="status" aria-live="polite"></p>

                        <p class="rz-contact-privacy">
                            Your information will be used to respond to your enquiry.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- BOTTOM CTA --}}
    <section class="rz-contact-bottom-cta">
        <div class="rz-contact-container rz-contact-bottom-inner">
            <div>
                <span class="rz-contact-eyebrow">
                    <span class="rz-contact-dot"></span>
                    HAVE AN IDEA?
                </span>
                <h2>Great things begin with <span>a conversation.</span></h2>
            </div>
            <a href="#contact-form" class="rz-contact-outline-btn">
                Let's Talk <span>↗</span>
            </a>
        </div>
    </section>

</main>
@endsection