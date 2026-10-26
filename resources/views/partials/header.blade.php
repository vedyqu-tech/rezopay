<header class="site-header" id="site-header">
    <a href="{{ url('/') }}" class="brand" aria-label="Rezopay Technologies home">
        <img
            src="{{ asset('images/rezopay-logo.png') }}"
            alt="Rezopay Technologies"
            class="brand-logo"
            width="180"
            height="55">
    </a>

    <button class="menu-toggle" id="menu-toggle"
        aria-label="Toggle navigation" aria-expanded="false">
        <span></span><span></span>
    </button>

    <nav class="main-nav" id="main-nav">
        <a href="{{ url('/') }}" class="nav-link active">Home</a>
        <a href="{{ route('services') }}" class="nav-link">Services</a>
        <a href="{{ route('about') }}" class="nav-link">About</a>
        <a href="{{ route('contact') }}" class="nav-link">Contact us</a>
        <a href="#rzTalkModal" class="nav-contact" data-talk-open>
            Let's Talk <span>↗</span>
        </a>
    </nav>
</header>