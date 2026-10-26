<div class="rz-talk-modal" id="rzTalkModal"
    aria-hidden="true">

    <div class="rz-talk-backdrop" data-talk-close></div>

    <section class="rz-talk-dialog"
        role="dialog"
        aria-modal="true"
        aria-labelledby="rzTalkTitle"
        tabindex="-1">

        <button type="button"
            class="rz-talk-close"
            aria-label="Close contact form"
            data-talk-close>
            &times;
        </button>

        {{-- LEFT: ROBOT BANNER --}}
        <div class="rz-talk-visual">
            <div class="rz-talk-visual-content">
                <span class="rz-talk-eyebrow">
                    <span></span> LET'S TALK
                </span>

                <h2 id="rzTalkTitle">
                    Have an Idea?
                    <br>
                    Let's <span>Build It Together.</span>
                </h2>

                <p>
                    Share your requirements and let's explore
                    how we can bring your next big idea to life.
                </p>
            </div>

            <div class="rz-talk-image-wrap">
                <img
                    src="{{ asset('images/rezopay-contact-robot.png') }}"
                    alt="Rezopay Technologies AI assistant"
                    class="rz-talk-robot-image"
                    loading="lazy">
            </div>

            <div class="rz-talk-benefits">
                <div>
                    <span class="rz-talk-benefit-icon">✦</span>
                    <span><strong>Quick response</strong><small>Let's connect</small></span>
                </div>
                <div>
                    <span class="rz-talk-benefit-icon">✓</span>
                    <span><strong>Personalized</strong><small>Solutions for you</small></span>
                </div>
            </div>
        </div>

        {{-- RIGHT: CONTACT FORM --}}
        <div class="rz-talk-form-panel">
            <div class="rz-talk-form-heading">
                <span class="rz-talk-form-label">SEND US A MESSAGE</span>
                <h3>Let's start a conversation.</h3>
                <p>Fill in the details and tell us what you need.</p>
            </div>

            <form id="rzTalkForm">
                @csrf

                <div class="rz-talk-fields-two">
                    <div class="rz-talk-field">
                        <label for="rzTalkName">Your name <span>*</span></label>
                        <input id="rzTalkName" name="name"
                            type="text" placeholder="John Doe"
                            autocomplete="name" required maxlength="100">
                    </div>

                    <div class="rz-talk-field">
                        <label for="rzTalkEmail">Email address <span>*</span></label>
                        <input id="rzTalkEmail" name="email"
                            type="email" placeholder="you@company.com"
                            autocomplete="email" required maxlength="150">
                    </div>
                </div>

                <div class="rz-talk-field">
                    <label for="rzTalkPhone">Phone number</label>
                    <input id="rzTalkPhone" name="phone"
                        type="tel" placeholder="+91 00000 00000"
                        autocomplete="tel" maxlength="25">
                </div>

                <div class="rz-talk-field">
                    <label for="rzTalkService">Project type <span>*</span></label>
                    <select id="rzTalkService" name="service" required>
                        <option value="" selected disabled>Select a service</option>
                        <option value="Website Development">Website Development</option>
                        <option value="Custom App Development">Custom App Development</option>
                        <option value="Mobile App Development">Mobile App Development</option>
                        <option value="Ecommerce Solutions">Ecommerce Solutions</option>
                        <option value="Quick Commerce Solutions">Quick Commerce Solutions</option>
                        <option value="Billing Software">Billing Management Software</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="AI Solutions">AI Solutions</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="rz-talk-field">
                    <label for="rzTalkMessage">Tell us about your project <span>*</span></label>
                    <textarea id="rzTalkMessage" name="message"
                        rows="3" required maxlength="3000"
                        placeholder="A few details about your idea..."></textarea>
                </div>

                <button type="submit" class="rz-talk-submit">
                    <span>Send Message</span>
                    <span aria-hidden="true">↗</span>
                </button>

                <p class="rz-talk-status" id="rzTalkStatus"
                    role="status" aria-live="polite"></p>

                <p class="rz-talk-privacy">
                    Your information will only be used to respond to your enquiry.
                </p>
            </form>
        </div>
    </section>
</div>