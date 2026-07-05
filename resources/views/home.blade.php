@extends('layouts.app')

@section('title', 'NovaStackHub — NextGen Software Innovators')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
<!-- LOADER -->
<div id="loader">
    <div class="loader-ring">
        <svg width="140" height="140" viewBox="0 0 140 140">
            <defs>
                <linearGradient id="rg" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#00c8ff" />
                    <stop offset="100%" stop-color="#00c8ff" stop-opacity="0" />
                </linearGradient>
            </defs>
            <circle cx="70" cy="70" r="63" fill="none" stroke="#1a2e42" stroke-width="4" />
            <path d="M 70 7 A 63 63 0 0 1 133 70" fill="none" stroke="url(#rg)" stroke-width="4"
                stroke-linecap="round" />
        </svg>
        <div class="loader-logo">
            <img src="/img/logo.png" alt="Novastackhub Logo" style="height: 74px; width: auto; object-fit: contain;">
        </div>
    </div>
</div>


<!-- TOP BAR -->
<div id="topbar">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
            <div class="d-flex gap-4 flex-wrap">
                <a href="https://www.google.com/maps/search/?api=1&query=China+Shopping+Center+A.H.+Road+Saddar+Karachi" target="_blank" rel="noopener"><i class="bi bi-geo-alt me-1"></i>Office # M-3-61, Plot # 1, Sheet # SB-5, China Shopping Center, A.H. Road, Saddar, Karachi.</a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@novastackhub.com" target="_blank" rel="noopener"><i class="bi bi-envelope me-1"></i>info@novastackhub.com</a>
                <a href="https://wa.me/923168738819" target="_blank" rel="noopener"><i class="bi bi-whatsapp me-1"></i>+92 316 8738819</a>
            </div>
            <div class="d-flex gap-3 align-items-center">
                <a href="#">Help</a><a href="#">Support</a><a href="#">FAQs</a>
                <a href="https://www.facebook.com/share/1CzWv5wcNX/" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/novastackhub?igsh=YWd5bXF4cW44MHNn" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/novastackhub/" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

    <!-- NAVBAR -->
    <!-- <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="NovaStackhub Logo"
                    style="height: 60px; width: auto; object-fit: contain; margin-right: 10px;">
                <span class="brand-text">NovaStackhub</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="#hero"><i class="ti ti-home me-1"></i>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about"><i class="ti ti-info-circle me-1"></i>About Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#services" data-bs-toggle="dropdown"><i class="ti ti-briefcase me-1"></i>Services</a>
                        <ul class="dropdown-menu" style="background:#0d1f2d;border:1px solid #1a2e42;">
                            <li><a class="dropdown-item" href="#" style="color:#ccd;font-size:14px;"><i class="ti ti-world me-2"></i>Web Development</a>
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#ccd;font-size:14px;"><i class="ti ti-device-mobile me-2"></i>Mobile Apps</a>
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#ccd;font-size:14px;"><i class="ti ti-cloud me-2"></i>Cloud Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="#" style="color:#ccd;font-size:14px;"><i class="ti ti-shield-lock me-2"></i>Cybersecurity</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio"><i class="ti ti-layout-grid me-1"></i>Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog"><i class="ti ti-article me-1"></i>Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cta"><i class="ti ti-mail me-1"></i>Contact Us</a></li>
                </ul>
                <a href="#cta" class="btn-quote nav-link px-4">CONTACT US &rarr;</a>
            </div>
        </div>
    </nav> -->


   @include('partials.navbar')
    <!-- HERO -->
    <section id="hero">
        <div class="hero-bg-img"></div>
        <div class="hero-overlay"></div>
        <div class="hero-right-img"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-6">
                    <p class="hero-eyebrow fade-up">Welcome to NovaStackhub</p>
                    <h1 class="hero-title fade-up" style="transition-delay:.1s">
  Custom <span class="hl">Software</span> That Powers Your Business Growth
</h1>
<p class="hero-desc fade-up" style="transition-delay:.2s">We design, build, and scale powerful software — web apps, mobile apps, and cloud solutions — that help businesses transform, grow, and lead in the digital age.</p>   
               <div class="hero-btns fade-up" style="transition-delay:.3s">
    <a href="#services" class="btn-primary-c">Explore Services &rarr;</a>
     <!-- <button class="btn-outline-c"><i class="bi bi-play-circle me-2"></i>Watch Demo</button>  -->
</div>
                    <div class="hero-stats fade-up" style="transition-delay:.4s">
                        <div>
                            <div class="hero-stat-num" id="cnt1">0+</div>
                            <div class="hero-stat-label">Projects Delivered</div>
                        </div>
                        <div>
                            <div class="hero-stat-num" id="cnt2">0+</div>
                            <div class="hero-stat-label">Happy Clients</div>
                        </div>
                        <div>
                            <div class="hero-stat-num" id="cnt3">0+</div>
                            <div class="hero-stat-label">Team Experts</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SCROLLING HEADLINE + ROTATING CIRCLE -->
    <div style="background:#0d1f2d; padding:60px 40px 70px; overflow:hidden;">

        <!-- Marquee Headline -->
    <div id="marqueeWrap"
            style="overflow:hidden; white-space:nowrap; border-top:1px solid #1a3050; border-bottom:1px solid #1a3050; padding:10px 0; margin-bottom:60px;">
            <span id="marqueeText"
    style="display:inline-block; animation:marquee 20s linear infinite; font-size:clamp(52px,9vw,100px); font-weight:900; color:#fff; letter-spacing:-2px;">
    Web Development <span style="color:#00c8ff; margin:0 24px;">●</span> Mobile Apps <span
        style="color:#00c8ff; margin:0 24px;">●</span> Cloud Solutions <span
        style="color:#00c8ff; margin:0 24px;">●</span> UI/UX Design <span
        style="color:#00c8ff; margin:0 24px;">●</span> Custom Software <span
        style="color:#00c8ff; margin:0 24px;">●</span> AI &amp; Automation <span
        style="color:#00c8ff; margin:0 24px;">●</span> Web Development <span
        style="color:#00c8ff; margin:0 24px;">●</span> Mobile Apps <span
        style="color:#00c8ff; margin:0 24px;">●</span> Cloud Solutions <span
        style="color:#00c8ff; margin:0 24px;">●</span> UI/UX Design <span
        style="color:#00c8ff; margin:0 24px;">●</span>
</span>
        </div>

       <!-- Circle + Text -->
<div style="display:flex; align-items:center; gap:40px; flex-wrap:wrap;">
    <div style="position:relative; width:140px; height:140px; flex-shrink:0;">
        <div style="position:absolute; inset:0; animation:spin 9s linear infinite;">
            <svg width="140" height="140" viewBox="0 0 140 140">
                <defs>
                    <path id="cp" d="M 70,70 m -52,0 a 52,52 0 1,1 104,0 a 52,52 0 1,1 -104,0" />
                </defs>
                <text font-size="10" font-family="Inter,sans-serif" font-weight="600" fill="#ffffff"
                    letter-spacing="1.5">
                    <textPath href="#cp">NovaStackhub · Software Agency · Since 2024 · </textPath>
                </text>
            </svg>
        </div>
        <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center;">
            <a href="/about"
                style="width:56px; height:56px; border-radius:50%; background:#fff; display:flex; align-items:center; justify-content:center; font-size:22px; color:#0d1f2d; text-decoration:none;">↗</a>
        </div>
    </div>
    <div style="flex:1; min-width:220px;">
        <div
            style="font-size:13px; font-weight:700; color:#00c8ff; letter-spacing:2px; text-transform:uppercase; margin-bottom:12px;">
            We Are NovaStackhub</div>
        <div
            style="font-size:clamp(26px,4vw,42px); font-weight:900; color:#fff; line-height:1.15; margin-bottom:16px;">
            Building Smart Software<br>to <span style="color:#00c8ff;">Grow Your</span> Business</div>
        <div style="font-size:15px; color:#8899aa; line-height:1.7;">With a growing portfolio of successful projects across multiple industries, our team turns ideas into reliable, high-performing digital products — built to scale with your business.</div>
    </div>
</div>

    <!-- CLIENTS
    <div id="clients">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-4">
                <img src="https://assets.streamlinehq.com/image/private/w_50,h_50,ar_1/f_auto/v1/icons/3/google-hxlxemrfsog5qd3gy7ykml.png/google-ap7owd7tyqa9kklany80e.png?_a=DATAiZAAZAA0"
                    class="client-logo" alt="Google">
                <img src="https://assets.streamlinehq.com/image/private/w_50,h_50,ar_1/f_auto/v1/icons/1/aws-p6uhslxapkcul44oz9p9c.png/aws-gbjt9gv5a2k6sa2slac0u.png?_a=DATAiZAAZAA0"
                    class="client-logo" alt="Amazon">
                <img src="https://assets.streamlinehq.com/image/private/w_50,h_50,ar_1/f_auto/v1/icons/4/microsoft-84ereg2icvdy6lij6v9sm.png/microsoft-jby4c80zpsasr3r6lzf22b.png?_a=DATAiZAAZAA0"
                    class="client-logo" alt="Microsoft" style="height: 70px;">
                <img src=""
                    class="client-logo" alt="Netflix">
                <img src=""
                    class="client-logo" alt="IBM">
                <img src=""
                    class="client-logo" style="height:50px;" alt="Apple">
            </div>
        </div>
    </div> -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 fade-up">
                    <p class="section-eyebrow">What We Offer</p>
                    <h2 class="section-title">Powerful Software Services<br>Built for Growth</h2>
                    <p class="section-desc">From web apps to cloud infrastructure, we deliver end-to-end digital
                        solutions tailored to your needs.</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 fade-up">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=600&q=80"
                            class="service-card-img" alt="Web Development">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
                            </div>
                            <div class="service-title">Web Development</div>
                            <div class="service-desc">High-performance websites and web apps built with modern frameworks and best practices.</div>
                            <a href="/services/web-application-development" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-up" style="transition-delay:.1s">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80"
                            class="service-card-img" alt="Mobile Apps">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg>
                            </div>
                            <div class="service-title">Mobile Applications</div>
                            <div class="service-desc">Native and cross-platform apps for iOS and Android that deliver seamless user experiences.</div>
                            <a href="/services/android-app-development" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-up" style="transition-delay:.2s">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=600&q=80"
                            class="service-card-img" alt="Cloud">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"/></svg>
                            </div>
                            <div class="service-title">Cloud Solutions</div>
                            <div class="service-desc">Scalable cloud architecture on AWS, Azure, and GCP to power your digital infrastructure.</div>
                            <a href="/services/cloud-solutions" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-up" style="transition-delay:.1s">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?w=600&q=80"
                            class="service-card-img" alt="Security">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            </div>
                            <div class="service-title">Cybersecurity</div>
                            <div class="service-desc">Comprehensive security audits, penetration testing, and ongoing threat monitoring.</div>
                            <a href="/services/cybersecurity" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-up" style="transition-delay:.2s">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=600&q=80"
                            class="service-card-img" alt="AI ML">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="1" x2="9" y2="4"/><line x1="15" y1="1" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="23"/><line x1="15" y1="20" x2="15" y2="23"/><line x1="20" y1="9" x2="23" y2="9"/><line x1="20" y1="14" x2="23" y2="14"/><line x1="1" y1="9" x2="4" y2="9"/><line x1="1" y1="14" x2="4" y2="14"/></svg>
                            </div>
                            <div class="service-title">AI &amp; Machine Learning</div>
                            <div class="service-desc">Custom AI models and intelligent automation solutions that drive real business value.</div>
                            <a href="/services/ai-machine-learning" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 fade-up" style="transition-delay:.3s">
                    <div class="service-card">
                        <img src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?w=600&q=80"
                            class="service-card-img" alt="Data">
                        <div class="service-card-body">
                            <div class="service-icon">
                              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                            </div>
                            <div class="service-title">Data Engineering</div>
                            <div class="service-desc">Robust data pipelines, warehousing, and analytics platforms for data-driven decisions.</div>
                            <a href="/services/data-engineering" class="service-link">Learn More <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="14" height="14"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- SCROLL PROGRESS BUTTON -->
<div id="scrollProgressBtn" onclick="handleScrollBtn()">
  <div class="spb-glow"></div>
  <div class="spb-tooltip"><i class="bi bi-arrow-bar-up"></i> Back to Top</div>
  <svg class="spb-svg" viewBox="0 0 72 72">
    <defs>
      <linearGradient id="spbGrad" x1="0%" y1="0%" x2="100%" y2="100%">
        <stop offset="0%" stop-color="#00c8ff"/>
        <stop offset="100%" stop-color="#0044ff"/>
      </linearGradient>
      <filter id="spbGlowFx" x="-30%" y="-30%" width="160%" height="160%">
        <feGaussianBlur stdDeviation="2.5" result="blur"/>
        <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
      </filter>
    </defs>
    <circle class="spb-track" cx="36" cy="36" r="30"/>
    <circle class="spb-inner-ring" cx="36" cy="36" r="22"/>
    <circle id="pgRing" class="spb-fill" cx="36" cy="36" r="30" filter="url(#spbGlowFx)"/>
    <g class="spb-ticks" transform="translate(36,36)">
      <line x1="0" y1="-33" x2="0" y2="-30" transform="rotate(0)"/>
      <line x1="0" y1="-33" x2="0" y2="-30" transform="rotate(90)"/>
      <line x1="0" y1="-33" x2="0" y2="-30" transform="rotate(180)"/>
      <line x1="0" y1="-33" x2="0" y2="-30" transform="rotate(270)"/>
    </g>
  </svg>
  <div class="spb-center">
    <i class="bi bi-arrow-up spb-icon"></i>
    <span id="pgPct" class="spb-pct">0%</span>
  </div>
</div>
<section class="hero-section">
 
  <!-- floating particles -->
  <div class="hero-particles">
    <span></span><span></span><span></span>
    <span></span><span></span><span></span>
  </div>
 
  <!-- ══ LEFT: Image panel ══ -->
  <div class="hero-left">
 
   
      <img src="/img/banner2.jpg" alt="Team" class="hero-img">
    <div class="hero-img" style="background:linear-gradient(160deg,#0d2a42 0%,#1b4a6a 50%,#0d2a42 100%);"></div>
 
    <!-- shimmer scan -->
    <div class="hero-img-shimmer"></div>
 
    <!-- LOGO BOX — apna logo/img yahan replace karein -->
    <div class="hero-logo-box">
      <div class="logo-pulse"></div>
      
 
     
      <div class="logo-icon-wrap">
        <img src="/img/logo.png" alt="NovaStackhub" style="height:44px;width:auto;object-fit:contain;">
      </div>
      <span class="logo-name">NovaStackhub</span>
    </div>
 
    <!-- clients pill -->
    <div class="hero-clients-pill">
      <div class="cp-label">5m+ Trusted<br>Global Clients</div>
      <div class="cp-divider"></div>
      <div class="cp-avatars">
        <div class="cp-avatar a1"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="cp-avatar a2"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="cp-avatar a3"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
        <div class="cp-avatar-more">+</div>
      </div>
    </div>
  </div>
 
  <!-- ══ RIGHT: Content ══ -->
  <div class="hero-right">
 
    <!-- accent bar -->
    <div class="hero-accent-bar"></div>
 
    <p class="hero-eyebrow">Explore Our Achievement</p>
 
    <h1 class="hero-headline">
      <span class="hl">Premier</span> Tech Innovations
    </h1>
    <p class="hero-subline">NovaStackhub Software Agency</p>
 
    <div class="hero-stats">
 
      <div class="stat-card accent">
        <div class="stat-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><polyline points="20 6 9 17 4 12"/></svg></div>
        <div class="stat-number" data-target="36" data-suffix="k+">0</div>
        <div class="stat-label">Trusted Global Clients</div>
      </div>

      <div class="stat-card light">
        <div class="stat-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="16" height="16"><polyline points="20 6 9 17 4 12"/></svg></div>
        <div class="stat-number" data-target="850" data-suffix="+">0</div>
        <div class="stat-label">Best Project Complete</div>
      </div>
 
    </div>
  </div>
 
</section>
<!-- ============ ABOUT / GROW SECTION ============ -->
<section class="about-section" id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6" data-aos="fade-right">
        <span class="eyebrow"><i class="bi bi-asterisk"></i> Grow &amp; Development</span>
<h2 class="section-title">Built to Help Your Business <span>Grow &amp; Scale</span></h2>
        <div class="accordion teckko-accordion mt-4" id="aboutAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#missionBox">
                Learn Our Company Mission
              </button>
            </h2>
            <div id="missionBox" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
        <div class="accordion-body">
  <div class="d-flex gap-3 align-items-start mb-3">
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=200&q=80" class="mission-thumb" alt="Mission">
    <p class="mb-0">Our mission is to help businesses grow by building reliable, modern software — turning complex ideas into simple, scalable digital products that deliver real results.</p>
  </div>
  <ul class="check-list">
    <li><i class="bi bi-asterisk"></i> Client-first, transparent process</li>
    <li><i class="bi bi-asterisk"></i> Modern, scalable technology</li>
  </ul>
</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#visionBox">
                Our Company Vision
              </button>
            </h2>
            <div id="visionBox" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
              <div class="accordion-body">
<p class="mb-0">To become a trusted software partner for businesses worldwide — known for quality, honesty, and technology that genuinely helps our clients grow.</p> 
             </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#philoBox">
                Our Philosophy
              </button>
            </h2>
            <div id="philoBox" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
              <div class="accordion-body">
                <p class="mb-0">We believe great software is built on collaboration, transparency, and relentless attention to detail at every stage of development.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#strategyBox">
                Our Strategy
              </button>
            </h2>
            <div id="strategyBox" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
              <div class="accordion-body">
                <p class="mb-0">A data-driven, client-first approach that combines modern engineering practices with measurable business outcomes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-left">
        <div class="about-img-wrap">
          <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80" alt="About NovaStack Hub" class="rounded-4 w-100">
        </div>
      </div>
    </div>

    <!-- marquee strip -->
    <div class="marquee-wrap mt-5">
      <div class="marquee-track">
  <span>Innovation <i class="bi bi-asterisk"></i></span>
  <span>Quality <i class="bi bi-asterisk"></i></span>
  <span>Reliability <i class="bi bi-asterisk"></i></span>
  <span>Scalability <i class="bi bi-asterisk"></i></span>
  <span>Security <i class="bi bi-asterisk"></i></span>
  <span>Support <i class="bi bi-asterisk"></i></span>
  <span>Innovation <i class="bi bi-asterisk"></i></span>
  <span>Quality <i class="bi bi-asterisk"></i></span>
  <span>Reliability <i class="bi bi-asterisk"></i></span>
  <span>Scalability <i class="bi bi-asterisk"></i></span>
  <span>Security <i class="bi bi-asterisk"></i></span>
  <span>Support <i class="bi bi-asterisk"></i></span>
</div>
    </div>
  </div>
</section>

<!-- ============ SERVICES SECTION ============ -->
<section class="services-section" id="services">
  <div class="big-bg-text">Our Popular Service</div>
  <div class="container position-relative">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Our Popular Services</span>
<h2 class="section-title">We Run All Kinds <span>Of IT Services</span><br>That Drive Your <span>Success</span></h2>    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div class="service-card">
          <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="3" width="20" height="14" rx="2"/><polyline points="8 21 12 17 16 21"/>
            </svg>
          </div>
          <h4>Custom Software Development</h4>
<p>From concept to launch, we craft tailor-made software that fits your exact workflows — scalable, secure, and built to grow with your business.</p>          <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?w=600&q=80" class="service-img" alt="Custom Software Development">
          <a href="/services/custom-software-development" class="service-plus">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </a>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="service-card">
          <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/>
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
            </svg>
          </div>
          <h4>Outsourcing Development</h4>
<p>Extend your team with our expert engineers. We deliver reliable, on-time solutions that cut costs and speed up your product roadmap.</p>          <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&q=80" class="service-img" alt="Outsourcing Development">
          <a href="/services/enterprise-software" class="service-plus">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </a>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="service-card">
          <div class="service-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
              <polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/>
            </svg>
          </div>
          <h4>Software Product Development</h4>
<p>We turn your idea into a market-ready product — from MVP to full-scale platform — with clean architecture and a real focus on user experience.</p>          <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?w=600&q=80" class="service-img" alt="Software Product Development">
          <a href="/services/saas-product-development" class="service-plus">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROMO STRIP ============ -->
<div class="promo-strip" id="promoStrip">
  <div class="container d-flex flex-wrap justify-content-between align-items-center">
    <div class="promo-left">
      <i class="bi bi-chat-dots-fill"></i>
      Let's <strong><em>Discuss &amp; Start</em></strong> IT Consultations
      <a href="#contact" class="ms-2">Let's Talk <i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="promo-right d-flex align-items-center gap-2">
      <div class="avatar-stack small-stack">
        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&q=80" alt="Client">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&q=80" alt="Client">
        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&q=80" alt="Client">
        <span class="avatar-plus">+</span>
      </div>
<strong>60+</strong> Trusted Clients
      <button class="btn-close-promo" id="closePromo"><i class="bi bi-x-lg"></i></button>
    </div>
  </div>
</div>

<!-- ============ TEAM SECTION ============ -->
<!-- <section class="team-section" id="team">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-7" data-aos="fade-right">
        <span class="eyebrow"><i class="bi bi-asterisk"></i> Our Professionals</span>
        <h2 class="section-title">Meet Our Experience <span>Members</span></h2>
      </div>
      <div class="col-lg-5 d-flex justify-content-lg-end gap-2 mt-3 mt-lg-0" data-aos="fade-left">
        <button class="slider-arrow" id="teamPrev">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><line x1="19" y1="12" x2="5" y2="12"/><polyline points="12 19 5 12 12 5"/></svg>
        </button>
        <button class="slider-arrow active" id="teamNext">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="18" height="18"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </button>
      </div>
    </div>
    <div class="row g-4" id="teamRow">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div class="team-card">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80" alt="Micheal R. Shannon">
          <span class="team-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
          <h5>Micheal R. Shannon</h5>
          <p>Software Developer</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="team-card">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&q=80" alt="William J. Alexander">
          <span class="team-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
          <h5>William J. Alexander</h5>
          <p>App Developer</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="team-card">
          <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=500&q=80" alt="Donnie O. Goldsmith">
          <span class="team-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></span>
          <h5>Donnie O. Goldsmith</h5>
          <p>Software Developer</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ============ FEATURES / WHAT WE DO SLIDER ============ -->
<section class="features-section">
  <div class="container">
  <div id="featuresCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center g-5">
            <div class="col-lg-4">
              <h3 class="feature-title">Mobile App <span>UI/UX</span></h3>
              <p>Beautiful, intuitive mobile interfaces designed for smooth experiences on iOS and Android.</p>
              <a href="/services/mobile-app-ui-ux" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
            <div class="col-lg-4">
              <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&q=80" class="rounded-4 w-100 feature-img" alt="Mobile App UI/UX">
            </div>
            <div class="col-lg-4">
              <h3 class="feature-title">UI/UX <span>Design</span></h3>
              <p>User-centered designs that turn complex ideas into clean, easy-to-use products.</p>
              <a href="/services/ui-ux-design" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row align-items-center g-5">
            <div class="col-lg-4">
              <h3 class="feature-title">Frontend <span>Development</span></h3>
              <p>Pixel-perfect, responsive interfaces built with React, Vue, and modern frameworks.</p>
              <a href="/services/frontend-development" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
            <div class="col-lg-4">
              <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=600&q=80" class="rounded-4 w-100 feature-img" alt="Frontend Development">
            </div>
            <div class="col-lg-4">
              <h3 class="feature-title">Backend <span>Development</span></h3>
              <p>Secure, scalable server-side systems, APIs, and databases that power your app.</p>
              <a href="/services/backend-development" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row align-items-center g-5">
            <div class="col-lg-4">
              <h3 class="feature-title">E-Commerce <span>Solutions</span></h3>
              <p>Complete online stores with secure payments, carts, and inventory management.</p>
              <a href="/services/e-commerce-solutions" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
            <div class="col-lg-4">
              <img src="https://images.unsplash.com/photo-1547658719-da2b51169166?w=600&q=80" class="rounded-4 w-100 feature-img" alt="E-Commerce Solutions">
            </div>
            <div class="col-lg-4">
              <h3 class="feature-title">API <span>Integration</span></h3>
              <p>Seamless integration with third-party services and custom API development.</p>
              <a href="/services/api-development-integration" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
          <div class="row align-items-center g-5">
            <div class="col-lg-4">
              <h3 class="feature-title">CRM <span>Development</span></h3>
              <p>Custom CRM systems to manage leads, customers, and sales in one place.</p>
              <a href="/services/crm-development" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
            <div class="col-lg-4">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&q=80" class="rounded-4 w-100 feature-img" alt="IT Consulting">
            </div>
            <div class="col-lg-4">
              <h3 class="feature-title">IT <span>Consulting</span></h3>
              <p>Expert guidance on technology strategy, architecture, and digital transformation.</p>
              <a href="/services/it-consulting" class="feature-plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="18" height="18"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg></a>
            </div>
          </div>
        </div>

      </div>

      <div class="carousel-dots">
        <button data-bs-target="#featuresCarousel" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#featuresCarousel" data-bs-slide-to="1"></button>
        <button data-bs-target="#featuresCarousel" data-bs-slide-to="2"></button>
        <button data-bs-target="#featuresCarousel" data-bs-slide-to="3"></button>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<!-- ============ TESTIMONIALS ============ -->
<section class="testimonial-section" id="testimonials">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="section-title">What Our <span>Clients Say</span></h2>
       <div id="testiCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <svg class="quote-icon" viewBox="0 0 24 24" fill="currentColor" width="48" height="48"><path d="M10 11H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4H4v-2h2a2 2 0 0 0 2-2v-1zm10 0h-4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4h-2v-2h2a2 2 0 0 0 2-2v-1z"/></svg>
              <p class="testi-text">NovaStackhub built a complete ERP system for Star Computer that streamlined our entire operations. The team understood our workflow perfectly and delivered exactly what we needed.</p>
              <h6 class="mb-0">Rehan</h6>
              <span class="testi-role">Star Computer — ERP System</span>
            </div>
            <div class="carousel-item">
              <svg class="quote-icon" viewBox="0 0 24 24" fill="currentColor" width="48" height="48"><path d="M10 11H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4H4v-2h2a2 2 0 0 0 2-2v-1zm10 0h-4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4h-2v-2h2a2 2 0 0 0 2-2v-1z"/></svg>
              <p class="testi-text">Our gold &amp; silver accounting system from NovaStackhub made daily record-keeping effortless and accurate. Reliable software and a team that truly delivers.</p>
              <h6 class="mb-0">Rehan</h6>
              <span class="testi-role">KW Gold &amp; Silver — Accounting System</span>
            </div>
            <div class="carousel-item">
              <svg class="quote-icon" viewBox="0 0 24 24" fill="currentColor" width="48" height="48"><path d="M10 11H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4H4v-2h2a2 2 0 0 0 2-2v-1zm10 0h-4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4h-2v-2h2a2 2 0 0 0 2-2v-1z"/></svg>
              <p class="testi-text">The Water ERP built by NovaStackhub transformed how we manage our distribution business. From orders to billing, everything is now smooth, fast, and fully organized.</p>
              <h6 class="mb-0">Ahmed Raza</h6>
              <span class="testi-role">Raza Water Distributor — Water ERP</span>
            </div>
            <div class="carousel-item">
              <svg class="quote-icon" viewBox="0 0 24 24" fill="currentColor" width="48" height="48"><path d="M10 11H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4H4v-2h2a2 2 0 0 0 2-2v-1zm10 0h-4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v8a4 4 0 0 1-4 4h-2v-2h2a2 2 0 0 0 2-2v-1z"/></svg>
              <p class="testi-text">NovaStackhub designed a clean, professional website for Taj Silver Trade that perfectly represents our brand. Great communication and on-time delivery throughout.</p>
              <h6 class="mb-0">Zain Allana</h6>
              <span class="testi-role">Taj Silver Trade — Website</span>
            </div>
          </div>
          <div class="carousel-dots dark-dots">
            <button data-bs-target="#testiCarousel" data-bs-slide-to="0" class="active"></button>
            <button data-bs-target="#testiCarousel" data-bs-slide-to="1"></button>
            <button data-bs-target="#testiCarousel" data-bs-slide-to="2"></button>
            <button data-bs-target="#testiCarousel" data-bs-slide-to="3"></button>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left">
        <div class="row g-3 testi-grid">
          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&q=80" class="testi-avatar big" alt="Client">
          </div>
          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400&q=80" class="testi-avatar big offset-img" alt="Client">
          </div>
          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&q=80" class="testi-avatar small" alt="Client">
          </div>
          <div class="col-6">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?w=400&q=80" class="testi-avatar small offset-img" alt="Client">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CONTACT / WORK INQUIRY ============ -->
@include('partials.contact')

<!-- ============ BLOG SECTION ============ -->
<section class="blog-section" id="blog">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Latest News &amp; Blog</span>
      <h2 class="section-title">Read Our Latest <span>News &amp; Blog</span></h2>
    </div>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1677442135703-1787eea5ce01?w=600&q=80" alt="AI Software Development">
          <div class="blog-body">
            <span class="blog-date"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" width="13" height="13"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> June 12, 2026</span>
            <h5>How AI is Reshaping Modern Software Development</h5>
            <a href="#" class="blog-readmore"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="14" height="14"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&q=80" alt="UI UX Design Trends">
          <div class="blog-body">
            <span class="blog-date"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" width="13" height="13"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> June 05, 2026</span>
            <h5>Top 5 UI/UX Trends Every Agency Should Know</h5>
            <a href="#" class="blog-readmore"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="14" height="14"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="blog-card">
          <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&q=80" alt="Cloud Computing Startups">
          <div class="blog-body">
            <span class="blog-date"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" width="13" height="13"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> May 28, 2026</span>
            <h5>Why Cloud Computing is the Backbone of Scaling Startups</h5>
            <a href="#" class="blog-readmore"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" width="14" height="14"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg> Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FOOTER ============ -->
<footer class="footer-section">
  <div class="big-bg-text light-text">Novastackhub</div>
  
  <div class="container position-relative">
    <div class="row gy-5 gx-lg-5">

      <!-- Col 1: Brand + Newsletter -->
      <div class="col-lg-4" data-aos="fade-up">
        <div class="footer-brand-wrap">
  <img src="/img/logo.png" alt="NovaStackhub" class="footer-logo">
  <div class="footer-brand-textwrap">
    <span class="footer-brand-name">NovaStack<span>hub</span></span>
    <span class="footer-brand-tagline">Empowering Digital Vision</span>
  </div>
</div>
        <p class="footer-tagline">Building the future with powerful software solutions. Your trusted technology partner across 40+ industries worldwide.</p>
        <div class="footer-socials">
          <a href="https://www.facebook.com/share/1CzWv5wcNX/" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
          </a>
          <a href="https://www.instagram.com/novastackhub?igsh=YWd5bXF4cW44MHNn" target="_blank" rel="noopener" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41-.56-.22-.96-.48-1.38-.9-.42-.42-.68-.82-.9-1.38-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16zm0 3.68A6.16 6.16 0 1 0 18.16 12 6.16 6.16 0 0 0 12 5.84zm0 10.16A4 4 0 1 1 16 12a4 4 0 0 1-4 4zm6.4-10.4a1.44 1.44 0 1 0 1.44 1.44 1.44 1.44 0 0 0-1.44-1.44z"/></svg>
          </a>
          <a href="https://www.linkedin.com/company/novastackhub/" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
        </div>
        <h6 class="footer-col-title mt-4">Subscribe Newsletter</h6>
    <form class="footer-subscribe-form" id="newsletterForm" method="POST" action="{{ route('leads.store') }}">
  @csrf
  <input type="hidden" name="type" value="newsletter">
  <input type="hidden" name="name" value="Newsletter Subscriber">
  <div class="d-none"><input type="text" name="website" tabindex="-1"></div>
  <div class="footer-input-wrap">
    <i class="bi bi-envelope"></i>
    <input type="email" name="email" placeholder="Enter your email" required>
    <button type="submit" aria-label="Subscribe"><i class="bi bi-arrow-right"></i></button>
  </div>
  <div id="newsletterMsg" class="mt-2" style="font-size:13px;"></div>
</form>
        <p class="footer-note">By subscribing you accept our <a href="#">Privacy Policy</a></p>
      </div>

      <!-- Col 2: Quick Links -->
      <div class="col-6 col-lg-2" data-aos="fade-up" data-aos-delay="100">
        <h6 class="footer-col-title">Quick Links</h6>
        <ul class="footer-links">
          <li><a href="/#hero"><i class="bi bi-chevron-right"></i>Home</a></li>
          <li><a href="/about"><i class="bi bi-chevron-right"></i>About Us</a></li>
          <li><a href="/#services"><i class="bi bi-chevron-right"></i>Services</a></li>
          <li><a href="/#contact"><i class="bi bi-chevron-right"></i>Contact</a></li>
        </ul>
      </div>

      <!-- Col 3: Services -->
      <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <h6 class="footer-col-title">Services</h6>
        <ul class="footer-links">
          <li><a href="/services/web-application-development"><i class="bi bi-chevron-right"></i>Web Development</a></li>
          <li><a href="/services/android-app-development"><i class="bi bi-chevron-right"></i>Mobile Apps</a></li>
          <li><a href="/services/ui-ux-design"><i class="bi bi-chevron-right"></i>UI/UX Design</a></li>
          <li><a href="/services/cloud-solutions"><i class="bi bi-chevron-right"></i>Cloud Solutions</a></li>
          
          <li><a href="/services/cybersecurity"><i class="bi bi-chevron-right"></i>Cybersecurity</a></li>
        </ul>
      </div>

      <!-- Col 4: Contact -->
     <div class="col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <h6 class="footer-col-title">Contact Us</h6>
        <ul class="footer-contact-list">
          <li>
            <i class="bi bi-geo-alt"></i>
            <a href="https://www.google.com/maps/search/?api=1&query=China+Shopping+Center+A.H.+Road+Saddar+Karachi" target="_blank" rel="noopener">Office # M-3-61, China Shopping Center,<br>A.H. Road, Saddar, Karachi.</a>
          </li>
          <li>
            <i class="bi bi-envelope"></i>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@novastackhub.com" target="_blank" rel="noopener">info@novastackhub.com</a>
          </li>
          <li>
            <i class="bi bi-whatsapp"></i>
            <a href="https://wa.me/923168738819" target="_blank" rel="noopener">+92 316 8738819</a>
          </li>
          <li>
            <i class="bi bi-clock"></i>
            <span>Mon–Thu &amp; Sat: 11:30 AM – 7:30 PM<br>Fri: 3:00 PM – 7:30 PM &nbsp;·&nbsp; Sun: Closed</span>
          </li>
        </ul>
      </div>

      

    </div>

    <hr class="footer-divider">

    <div class="footer-bottom-bar">
      <p>&copy; 2026 <strong>Novastackhub</strong> &mdash; All Rights Reserved.</p>
      <ul class="footer-bottom-links">
        <li><a href="/#hero">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="/#contact">Contact</a></li>
      </ul>
    </div>

  </div>
</footer>

<!-- Back to top -->
<button id="backToTop">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
</button>

<!-- ═══════════════════════════════════════════════════════════════
     INDUSTRY CHOICE MODAL
     Appears when the user clicks any industry in the dropdown.
═══════════════════════════════════════════════════════════════════ -->
<div class="modal fade" id="industryChoiceModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content" style="background:#0d1f2d;border:1px solid #1a3050;border-radius:16px;overflow:hidden;">

      <!-- Header -->
      <div class="modal-header" style="background:linear-gradient(135deg,#0a1628,#0f3460);border-bottom:1px solid #1a3050;padding:20px 24px;">
        <div class="d-flex align-items-center gap-3">
          <div id="modalIndIconWrap" style="width:44px;height:44px;border-radius:11px;background:rgba(255,255,255,.08);display:flex;align-items:center;justify-content:center;font-size:21px;color:#00c8ff;"></div>
          <div>
            <h5 class="modal-title mb-0" style="color:#fff;font-weight:800;font-size:17px;" id="modalIndTitle">Industry Name</h5>
            <small style="color:rgba(255,255,255,.45);font-size:12px;">Choose what you'd like to explore</small>
          </div>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Body -->
      <div class="modal-body" style="padding:28px 24px;">
        <p style="color:rgba(255,255,255,.6);font-size:14px;margin-bottom:22px;text-align:center;">
          What would you like to check for <strong style="color:#00c8ff;" id="modalIndNameInline">this industry</strong>?
        </p>

        <div class="row g-3">
          <!-- Demo Website card -->
          <div class="col-6">
            <a id="choiceWebsiteBtn" href="#" style="text-decoration:none;">
              <div class="ind-choice-card" id="websiteChoiceCard">
                <div class="ind-choice-icon" style="color:#00c8ff;">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                </div>
                <h6 style="color:#fff;font-weight:700;margin-bottom:6px;">Demo Website</h6>
                <p style="color:rgba(255,255,255,.45);font-size:12.5px;line-height:1.5;margin:0;">
                  Full sample website — homepage, about, services &amp; contact
                </p>
                <div style="margin-top:14px;display:inline-flex;align-items:center;gap:5px;font-size:12px;font-weight:700;color:#00c8ff;">
                  Explore <i class="ti ti-arrow-right" style="font-size:13px;"></i>
                </div>
              </div>
            </a>
          </div>

          <!-- ERP System card -->
          <div class="col-6">
            <a id="choiceErpBtn" href="#" style="text-decoration:none;">
              <div class="ind-choice-card ind-choice-card--accent" id="erpChoiceCard">
                <div class="ind-choice-icon" id="erpChoiceIcon" style="color:#00c8ff;">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                </div>
                <h6 style="color:#fff;font-weight:700;margin-bottom:6px;">ERP System Demo</h6>
                <p style="color:rgba(255,255,255,.45);font-size:12.5px;line-height:1.5;margin:0;">
                  Live ERP dashboard with modules, charts &amp; dummy data
                </p>
                <div style="margin-top:14px;display:inline-flex;align-items:center;gap:5px;font-size:12px;font-weight:700;color:#00c8ff;">
                  Launch ERP <i class="ti ti-arrow-right" style="font-size:13px;"></i>
                </div>
              </div>
            </a>
          </div>
        </div>

        <p style="text-align:center;margin-top:18px;font-size:12px;color:rgba(255,255,255,.3);">
          <i class="ti ti-info-circle me-1"></i>Powered by <strong style="color:rgba(255,255,255,.5);">NovaStackhub ERP Platform</strong>
        </p>
      </div>

    </div>
  </div>
</div>

<style>
  /* Industry choice card styles (scoped to modal) */
  .ind-choice-card {
    background: rgba(255,255,255,.04);
    border: 1px solid rgba(255,255,255,.1);
    border-radius: 14px;
    padding: 20px 16px;
    cursor: pointer;
    transition: all .25s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
  }
  .ind-choice-card:hover {
    background: rgba(0,200,255,.07);
    border-color: rgba(0,200,255,.35);
    transform: translateY(-3px);
    box-shadow: 0 8px 28px rgba(0,0,0,.3);
  }
  .ind-choice-card--accent {
    background: rgba(0,200,255,.06);
    border-color: rgba(0,200,255,.2);
  }
  .ind-choice-card--accent:hover {
    background: rgba(0,200,255,.12);
    border-color: #00c8ff;
  }
  .ind-choice-icon {
    width: 46px; height: 46px; border-radius: 12px;
    background: rgba(0,200,255,.1);
    display: flex; align-items: center; justify-content: center;
    font-size: 22px;
    margin-bottom: 14px;
  }
</style>

<!-- ═══════════ SIDE ICONS TOGGLE (desktop + clean mobile) ═══════════ -->
<style>
  .side-icons{ transition: transform .35s cubic-bezier(.34,1.56,.64,1), opacity .3s ease; z-index:998; }
  .side-icons.side-collapsed{ transform: translateX(-160%); opacity:0; pointer-events:none; }

  .side-toggle{
    position: fixed; left: 20px; top: 50%; transform: translateY(-50%);
    z-index: 999; width: 44px; height: 44px; border-radius: 12px;
    border: 1px solid #dbe4f3; background:#2563eb; color:#fff;
    display:flex; align-items:center; justify-content:center; cursor:pointer;
    box-shadow: 0 6px 18px rgba(37,99,235,.35);
    transition: top .35s cubic-bezier(.34,1.56,.64,1), bottom .35s, background .2s;
  }
  .side-toggle:hover{ background:#1e3a8a; }
  .side-toggle svg{ transition: transform .35s ease; }

  /* DESKTOP open: arrow column ke upar */
  .side-toggle.is-open{ top: calc(50% - 195px); transform: translateY(0); }
  .side-toggle.is-open svg{ transform: rotate(180deg); }

  /* ════════ MOBILE: bottom-left floating menu (no overlap with hero) ════════ */
  @media (max-width:768px){
    .side-toggle{
      display:flex !important;
      top:auto !important; bottom:22px; left:16px;
      transform:none !important; width:46px; height:46px;
    }
    .side-toggle.is-open{ top:auto !important; bottom:22px; transform:none !important; }
    .side-toggle.is-open svg{ transform: rotate(90deg); }   /* point up when open */

    .side-icons{
      display:flex !important; flex-direction:column;
      top:auto !important; bottom:80px; left:16px; gap:10px;
    }
    .side-icons.side-collapsed{ transform: translateY(18px); opacity:0; pointer-events:none; }
    .side-icon-btn{ width:46px !important; height:46px !important; }
  }
</style>

<script>
(function(){
  var icons = document.querySelector('.side-icons');
  if(!icons) return;

  icons.classList.add('side-collapsed');          /* default: hidden */

  var btn = document.createElement('button');
  btn.className = 'side-toggle';
  btn.setAttribute('aria-label','Toggle quick menu');
  btn.innerHTML = '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>';
  document.body.appendChild(btn);

  btn.addEventListener('click', function(){
    var opened = !icons.classList.toggle('side-collapsed');
    btn.classList.toggle('is-open', opened);
  });
})();
</script>
@endsection

@push('scripts')
@verbatim
<script src="/js/home.js"></script>
<script>
/* ─────────────────────────────────────────────────────────────
   Industry dropdown click handler
   Intercepts clicks on any .ind-link and shows the choice modal
───────────────────────────────────────────────────────────── */
(function () {
  var choiceModal = new bootstrap.Modal(document.getElementById('industryChoiceModal'), { backdrop: true, keyboard: true });

  document.querySelectorAll('.ind-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      var slug = link.getAttribute('data-ind-slug');
      var name = link.getAttribute('data-ind-name').replace(/&amp;/g, '&');
      var icon = link.getAttribute('data-ind-icon');

      document.getElementById('modalIndIconWrap').innerHTML    = '<i class="' + icon + '"></i>';
      document.getElementById('modalIndTitle').textContent     = name;
      document.getElementById('modalIndNameInline').textContent = name;

      document.getElementById('choiceWebsiteBtn').href = '../Industries/demo-website.html?industry=' + slug;
      document.getElementById('choiceErpBtn').href     = '../Industries/demo-erp.html?industry='    + slug;

      var openDdMenu = document.querySelector('.dropdown-menu.show');
      if (openDdMenu) {
        var ddToggle = openDdMenu.previousElementSibling;
        if (ddToggle) {
          var ddInstance = bootstrap.Dropdown.getOrCreateInstance(ddToggle);
          ddInstance.hide();
        }
      }

      choiceModal.show();
    });
  });
}());
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var form = document.getElementById('newsletterForm');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var msgBox = document.getElementById('newsletterMsg');
    var btn = form.querySelector('button[type="submit"]');
    var formData = new FormData(form);

    btn.disabled = true;
    msgBox.textContent = '';

    fetch(form.action, {
      method: 'POST',
      headers: { 'Accept': 'application/json' },
      body: formData
    })
    .then(function (res) { return res.json().then(function (data) { return { status: res.status, data: data }; }); })
    .then(function (result) {
      btn.disabled = false;
      if (result.status >= 200 && result.status < 300) {
        msgBox.style.color = '#22c55e';
        msgBox.textContent = 'Thanks for subscribing! You will now receive our updates.';
        form.reset();
      } else {
        msgBox.style.color = '#ef4444';
        msgBox.textContent = (result.data && result.data.message) ? result.data.message : 'Something went wrong. Please try again.';
      }
    })
    .catch(function () {
      btn.disabled = false;
      msgBox.style.color = '#ef4444';
      msgBox.textContent = 'Something went wrong. Please try again.';
    });
  });
});
</script>
@endverbatim
@endpush
