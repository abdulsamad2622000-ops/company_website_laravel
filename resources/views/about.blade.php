@extends('layouts.app')

@section('title', 'About Us — NovaStackHub')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
<!-- ═══ PRELOADER ═══ -->
  <div id="preloader">
    <div class="loader-box">
      <span class="loader-logo"><svg viewBox="0 0 24 24" fill="none" stroke="#00c8ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" style="vertical-align:middle;margin-right:4px"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> NovaStack<span style="color:#00c8ff">hub</span></span>
      <div class="loader-bar"><span></span></div>
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
 @include('partials.navbar')

  <!-- ═══ ABOUT HERO ═══ -->
  <section class="about-hero" id="about-hero">
    <div class="about-hero-particles">
      <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
    </div>
    <div class="about-hero-grid"></div>
    <div class="container position-relative">
      <div class="row align-items-center min-vh-hero g-5">
        <div class="col-lg-6">
          <div class="ah-eyebrow" data-aos="fade-right" data-aos-delay="0">
            <span class="ah-dot"></span> About NovaStackhub
          </div>
          <h1 class="ah-title" data-aos="fade-right" data-aos-delay="100">
            We Are <span class="ah-hl">Passionate</span><br>Digital Innovators
          </h1>
          <p class="ah-desc" data-aos="fade-right" data-aos-delay="200">
            Founded with a vision to revolutionize the digital landscape, NovaStackhub has grown into a premier software agency trusted by <strong>36k+ global clients</strong> across 40+ industries.
          </p>
          <div class="ah-btns" data-aos="fade-right" data-aos-delay="300">
            <a href="#about-story" class="btn-primary-c">Discover Our Story &rarr;</a>
            <a href="#about-team" class="btn-outline-c"><i class="bi bi-people me-2"></i>Meet The Team</a>
          </div>
          <!-- Breadcrumb -->
          <nav class="ah-breadcrumb" data-aos="fade-right" data-aos-delay="400">
            <a href="/">Home</a>
            <i class="bi bi-chevron-right"></i>
            <span>About Us</span>
          </nav>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
          <div class="ah-img-wrap">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=900&q=80" alt="Our Team" class="ah-main-img">
            <div class="ah-img-shimmer"></div>
            <!-- floating badge -->
            <div class="ah-badge ah-badge-top">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28" style="color:var(--cyan);flex-shrink:0"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
              <div>
                <div class="ah-badge-num">10+</div>
                <div class="ah-badge-label">Years Experience</div>
              </div>
            </div>
            <div class="ah-badge ah-badge-bottom">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="28" height="28" style="color:var(--cyan);flex-shrink:0"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>
              <div>
                <div class="ah-badge-num">850+</div>
                <div class="ah-badge-label">Projects Delivered</div>
              </div>
            </div>
            <div class="ah-glow-ring"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ STATS STRIP ═══ -->
  <section class="stats-strip">
    <div class="container">
      <div class="row g-0">
        <div class="col-6 col-md-3 stat-item" data-aos="fade-up" data-aos-delay="0">
          <div class="stat-num" data-target="36" data-suffix="k+">0</div>
          <div class="stat-lbl">Global Clients</div>
        </div>
        <div class="col-6 col-md-3 stat-item" data-aos="fade-up" data-aos-delay="100">
          <div class="stat-num" data-target="850" data-suffix="+">0</div>
          <div class="stat-lbl">Projects Delivered</div>
        </div>
        <div class="col-6 col-md-3 stat-item" data-aos="fade-up" data-aos-delay="200">
          <div class="stat-num" data-target="40" data-suffix="+">0</div>
          <div class="stat-lbl">Industries Served</div>
        </div>
        <div class="col-6 col-md-3 stat-item" data-aos="fade-up" data-aos-delay="300">
          <div class="stat-num" data-target="99" data-suffix="%">0</div>
          <div class="stat-lbl">Client Satisfaction</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ STORY SECTION ═══ -->
  <section class="story-section" id="about-story">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <div class="story-img-wrap">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&q=80" alt="Our Story" class="story-main-img rounded-4">
            <div class="story-img-overlay"></div>
            <div class="story-img-card">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26" style="color:var(--cyan)"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>
              <div>
                <div class="story-card-year">Est. 2014</div>
                <div class="story-card-text">Decade of Innovation</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <span class="eyebrow"><i class="bi bi-asterisk"></i> Our Story</span>
          <h2 class="section-title">From a <span>Small Startup</span><br>to a Global Agency</h2>
          <p class="section-text">It all started in 2014 with a small team of passionate developers and a big dream — to build software that genuinely changes how businesses operate. Over the years, we have grown into a 150+ member team spanning design, engineering, strategy, and support.</p>
          <p class="section-text">Today, NovaStackhub is a trusted digital partner for businesses across 40+ industries worldwide. We combine deep technical expertise with a client-first philosophy to deliver solutions that create real, measurable impact.</p>

          <div class="story-timeline">
            <div class="tl-item" data-aos="fade-up" data-aos-delay="0">
              <div class="tl-dot"></div>
              <div class="tl-content">
                <div class="tl-year">2014</div>
                <div class="tl-text">Founded in Karachi with 5 developers and 1 big dream.</div>
              </div>
            </div>
            <div class="tl-item" data-aos="fade-up" data-aos-delay="100">
              <div class="tl-dot"></div>
              <div class="tl-content">
                <div class="tl-year">2017</div>
                <div class="tl-text">Expanded to 50+ team members. Crossed 200 projects delivered.</div>
              </div>
            </div>
            <div class="tl-item" data-aos="fade-up" data-aos-delay="200">
              <div class="tl-dot"></div>
              <div class="tl-content">
                <div class="tl-year">2020</div>
                <div class="tl-text">Went global — serving clients across USA, UK, UAE, and Canada.</div>
              </div>
            </div>
            <div class="tl-item" data-aos="fade-up" data-aos-delay="300">
              <div class="tl-dot"></div>
              <div class="tl-content">
                <div class="tl-year">2024</div>
                <div class="tl-text">36k+ clients, 850+ projects. Industry-leading software agency.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ MARQUEE STRIP ═══ -->
  <div class="marquee-wrap">
    <div class="marquee-track">
      <span>Innovation <i class="bi bi-asterisk"></i></span>
      <span>Design <i class="bi bi-asterisk"></i></span>
      <span>Development <i class="bi bi-asterisk"></i></span>
      <span>Strategy <i class="bi bi-asterisk"></i></span>
      <span>Excellence <i class="bi bi-asterisk"></i></span>
      <span>Technology <i class="bi bi-asterisk"></i></span>
      <span>Innovation <i class="bi bi-asterisk"></i></span>
      <span>Design <i class="bi bi-asterisk"></i></span>
      <span>Development <i class="bi bi-asterisk"></i></span>
      <span>Strategy <i class="bi bi-asterisk"></i></span>
      <span>Excellence <i class="bi bi-asterisk"></i></span>
      <span>Technology <i class="bi bi-asterisk"></i></span>
    </div>
  </div>

  <!-- ═══ MISSION / VISION / VALUES ═══ -->
  <section class="values-section" id="about-values">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> What Drives Us</span>
        <h2 class="section-title">Our Mission, Vision <span>&amp; Values</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
          <div class="value-card">
            <div class="value-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
            </div>
            <div class="value-glow"></div>
            <h4>Our Mission</h4>
            <p>To revolutionize the digital landscape by delivering innovative software solutions that empower businesses to achieve their full potential and lead in the modern economy.</p>
            <ul class="value-list">
              <li><i class="bi bi-check-lg"></i> Client-first approach</li>
              <li><i class="bi bi-check-lg"></i> Measurable business outcomes</li>
              <li><i class="bi bi-check-lg"></i> Continuous innovation</li>
            </ul>
            <div class="value-bottom-line"></div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="value-card value-card-accent">
            <div class="value-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
            </div>
            <div class="value-glow"></div>
            <h4>Our Vision</h4>
            <p>To become the leading global software partner recognized for building technology that genuinely transforms how businesses operate, scale, and grow across every industry worldwide.</p>
            <ul class="value-list">
              <li><i class="bi bi-check-lg"></i> Global leadership</li>
              <li><i class="bi bi-check-lg"></i> Technology transformation</li>
              <li><i class="bi bi-check-lg"></i> Industry-wide impact</li>
            </ul>
            <div class="value-bottom-line"></div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="value-card">
            <div class="value-icon">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </div>
            <div class="value-glow"></div>
            <h4>Our Values</h4>
            <p>We believe great software is built on collaboration, transparency, and relentless attention to detail. These core values guide every decision we make at every stage of development.</p>
            <ul class="value-list">
              <li><i class="bi bi-check-lg"></i> Transparency &amp; integrity</li>
              <li><i class="bi bi-check-lg"></i> Quality over speed</li>
              <li><i class="bi bi-check-lg"></i> Long-term partnerships</li>
            </ul>
            <div class="value-bottom-line"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ WHY CHOOSE US ═══ -->
  <section class="why-section">
    <div class="big-bg-text">Why Choose Us</div>
    <div class="container position-relative">
      <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right">
          <span class="eyebrow"><i class="bi bi-asterisk"></i> Why Choose Us</span>
          <h2 class="section-title">The NovaStack <span>Difference</span></h2>
          <p class="section-text">We don't just write code — we build solutions. Here's what sets us apart from every other agency.</p>
          <div class="why-grid">
            <div class="why-item" data-aos="zoom-in" data-aos-delay="0">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>
              </div>
              <div>
                <h6>Expert Engineering</h6>
                <p>150+ senior engineers with deep expertise in modern frameworks and architectures.</p>
              </div>
            </div>
            <div class="why-item" data-aos="zoom-in" data-aos-delay="100">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              </div>
              <div>
                <h6>On-Time Delivery</h6>
                <p>We follow agile methods to deliver fast without compromising quality or reliability.</p>
              </div>
            </div>
            <div class="why-item" data-aos="zoom-in" data-aos-delay="200">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              </div>
              <div>
                <h6>Security First</h6>
                <p>Every line of code is written with security best practices and compliance in mind.</p>
              </div>
            </div>
            <div class="why-item" data-aos="zoom-in" data-aos-delay="300">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </div>
              <div>
                <h6>24/7 Support</h6>
                <p>Dedicated support team available round-the-clock to keep your systems running.</p>
              </div>
            </div>
            <div class="why-item" data-aos="zoom-in" data-aos-delay="400">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="20" x2="18" y2="10"/><line x1="12" y1="20" x2="12" y2="4"/><line x1="6" y1="20" x2="6" y2="14"/></svg>
              </div>
              <div>
                <h6>Data-Driven Results</h6>
                <p>We measure success by your metrics — conversions, performance, and ROI.</p>
              </div>
            </div>
            <div class="why-item" data-aos="zoom-in" data-aos-delay="500">
              <div class="why-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              </div>
              <div>
                <h6>Global Reach</h6>
                <p>Serving 40+ industries across USA, UK, UAE, Canada, Australia and more.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
          <div class="why-visual">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Why Us" class="why-img rounded-4">
            <div class="why-floating-card wfc-1">
              <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" width="26" height="26" style="color:var(--cyan)"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
              <div>
                <div class="wfc-num">4.9/5</div>
                <div class="wfc-label">Average Rating</div>
              </div>
            </div>
            <div class="why-floating-card wfc-2">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="26" height="26" style="color:var(--cyan)"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              <div>
                <div class="wfc-num">150+</div>
                <div class="wfc-label">Team Members</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ TECH STACK ═══ -->
  <section class="tech-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Technologies</span>
        <h2 class="section-title">Our Technology <span>Stack</span></h2>
        <p class="section-text mx-auto" style="max-width:560px;">We work with cutting-edge technologies to build scalable, secure, and high-performing solutions.</p>
      </div>
      <div class="tech-grid" data-aos="fade-up" data-aos-delay="100">
        <div class="tech-pill"><i class="bi bi-diagram-3"></i> React</div>
        <div class="tech-pill"><i class="bi bi-hdd-stack"></i> Node.js</div>
        <div class="tech-pill"><i class="bi bi-code-slash"></i> Python</div>
        <div class="tech-pill"><i class="bi bi-layers"></i> Angular</div>
        <div class="tech-pill"><i class="bi bi-triangle"></i> Vue.js</div>
        <div class="tech-pill"><i class="bi bi-database"></i> MongoDB</div>
        <div class="tech-pill"><i class="bi bi-cloud"></i> AWS</div>
        <div class="tech-pill"><i class="bi bi-cloud-fill"></i> Azure</div>
        <div class="tech-pill"><i class="bi bi-box-seam"></i> Docker</div>
        <div class="tech-pill"><i class="bi bi-code-square"></i> Kotlin</div>
        <div class="tech-pill"><i class="bi bi-lightning"></i> Swift</div>
        <div class="tech-pill"><i class="bi bi-phone"></i> Flutter</div>
        <div class="tech-pill"><i class="bi bi-braces"></i> TypeScript</div>
        <div class="tech-pill"><i class="bi bi-database-fill"></i> PostgreSQL</div>
        <div class="tech-pill"><i class="bi bi-cpu"></i> TensorFlow</div>
        <div class="tech-pill"><i class="bi bi-share"></i> GraphQL</div>
      </div>
    </div>
  </section>

  <!-- ═══ TEAM SECTION ═══ -->
  <section class="team-section" id="about-team">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Our Professionals</span>
        <h2 class="section-title">Meet The <span>Dream Team</span></h2>
        <p class="section-text mx-auto" style="max-width:500px;">Talented individuals united by a shared passion for building exceptional software.</p>
      </div>
      <div class="row g-4">
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="0">
          <div class="team-card">
            <div class="team-img-wrap">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&q=80" alt="Ahmad Raza">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
            <div class="team-body">
              <h5>Ahmad Raza</h5>
              <p>CEO &amp; Founder</p>
              <div class="team-tags">
                <span>Leadership</span>
                <span>Strategy</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <div class="team-card">
            <div class="team-img-wrap">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=500&q=80" alt="William J. Alexander">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
            <div class="team-body">
              <h5>William J. Alexander</h5>
              <p>Lead Developer</p>
              <div class="team-tags">
                <span>React</span>
                <span>Node.js</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <div class="team-card">
            <div class="team-img-wrap">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=500&q=80" alt="Sarah Mitchell">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
            <div class="team-body">
              <h5>Sarah Mitchell</h5>
              <p>UI/UX Lead Designer</p>
              <div class="team-tags">
                <span>Figma</span>
                <span>Design</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="team-card">
            <div class="team-img-wrap">
              <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=500&q=80" alt="Donnie O. Goldsmith">
              <div class="team-overlay">
                <div class="team-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-envelope"></i></a>
                </div>
              </div>
            </div>
            <div class="team-body">
              <h5>Donnie O. Goldsmith</h5>
              <p>Cloud Architect</p>
              <div class="team-tags">
                <span>AWS</span>
                <span>DevOps</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ ACCORDION — DEEPER INFO ═══ -->
  <section class="accordion-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-5" data-aos="fade-right">
          <span class="eyebrow"><i class="bi bi-asterisk"></i> Grow &amp; Development</span>
          <h2 class="section-title">Modern Technology <span>Advancement</span></h2>
          <p class="section-text">We combine cutting-edge technology with proven methodology to deliver software that stands the test of time.</p>
          <a href="#about-contact" class="btn-primary-c mt-3 d-inline-block">Start A Project &rarr;</a>
        </div>
        <div class="col-lg-7" data-aos="fade-left">
          <div class="accordion acc-dark" id="aboutAccordion">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#acc1">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" style="margin-right:8px;flex-shrink:0"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg> Learn Our Company Mission
                </button>
              </h2>
              <div id="acc1" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
                <div class="accordion-body">
                  <div class="d-flex gap-3 align-items-start mb-3">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=200&q=80" class="acc-thumb" alt="Mission">
                    <p class="mb-0">Our mission is to revolutionize the digital landscape by delivering innovative software solutions that empower businesses to achieve their full potential and lead in the modern, tech-driven economy.</p>
                  </div>
                  <ul class="acc-list">
                    <li><i class="bi bi-check-lg"></i> Premier Tech Innovations</li>
                    <li><i class="bi bi-check-lg"></i> Nexus Tech Systems</li>
                    <li><i class="bi bi-check-lg"></i> Data-driven decisions</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc2">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" style="margin-right:8px;flex-shrink:0"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg> Our Company Vision
                </button>
              </h2>
              <div id="acc2" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                <div class="accordion-body">
                  <p class="mb-0">We envision becoming the leading global software partner, recognized for building technology that genuinely transforms how businesses operate and grow. Our goal is to be in every industry, powering the next generation of digital businesses.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc3">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" style="margin-right:8px;flex-shrink:0"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg> Our Philosophy
                </button>
              </h2>
              <div id="acc3" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                <div class="accordion-body">
                  <p class="mb-0">We believe great software is built on collaboration, transparency, and relentless attention to detail at every stage of development. We treat every client like a long-term partner, not just a project.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acc4">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="18" height="18" style="margin-right:8px;flex-shrink:0"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg> Our Strategy
                </button>
              </h2>
              <div id="acc4" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                <div class="accordion-body">
                  <p class="mb-0">A data-driven, client-first approach that combines modern engineering practices with measurable business outcomes. We use agile methodology, sprint-based delivery, and continuous feedback loops to ensure project success.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ TESTIMONIALS ═══ -->
  <section class="testi-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Client Reviews</span>
        <h2 class="section-title">What Our <span>Clients Say</span></h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
          <div class="testi-card">
            <div class="testi-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>"NovaStack Hub transformed our entire workflow. Their team delivered beyond expectations with clean code, fast turnarounds, and constant communication."</p>
            <div class="testi-author">
              <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=80&q=80" alt="Angela Ford">
              <div>
                <h6>Angela M. Ford</h6>
                <span>Product Manager, TechCorp</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="150">
          <div class="testi-card testi-card-accent">
            <div class="testi-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>"Professional, reliable, and incredibly talented. Working with NovaStack Hub felt like having an in-house dev team that genuinely cared about our success."</p>
            <div class="testi-author">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&q=80" alt="David Owen">
              <div>
                <h6>David K. Owen</h6>
                <span>Startup Founder, LaunchPad</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
          <div class="testi-card">
            <div class="testi-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>"From planning to deployment, every step was smooth. NovaStack Hub's attention to detail and design sense really set them apart from every other agency we tried."</p>
            <div class="testi-author">
              <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&q=80" alt="Sara Whitman">
              <div>
                <h6>Sara L. Whitman</h6>
                <span>Marketing Head, BrandUp</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ CTA / CONTACT ═══ -->
  @include('partials.contact')

  <!-- ═══ FOOTER ═══ -->
  <footer class="footer-section">
  <div class="big-bg-text light-text">NovaStackhub</div>
  <div class="container position-relative">
    <div class="row gy-5 gx-lg-5">

      <!-- Col 1: Brand + Newsletter -->
      <div class="col-lg-4" data-aos="fade-up">
        <div class="footer-brand-wrap">
          <img src="/img/logo.png" alt="NovaStackhub" class="footer-logo">
          <span class="footer-brand-name">NovaStack<span>hub</span></span>
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
  <!-- Back To Top -->
  <button id="backToTop">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" width="20" height="20"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>
  </button>

  <!-- INDUSTRY CHOICE MODAL -->
  <div class="modal fade" id="industryChoiceModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:480px;">
      <div class="modal-content" style="background:#0d1f2d;border:1px solid #1a3050;border-radius:18px;overflow:hidden;">
        <div class="modal-header" style="background:#080f17;border-bottom:1px solid #1a3050;padding:20px 24px;">
          <div style="display:flex;align-items:center;gap:14px;">
            <div id="modalIndIconWrap" style="width:46px;height:46px;border-radius:12px;background:rgba(0,200,255,.1);display:flex;align-items:center;justify-content:center;font-size:22px;color:#00c8ff;"></div>
            <div>
              <h5 class="modal-title mb-0" style="color:#fff;font-weight:800;font-size:17px;" id="modalIndTitle">Industry Name</h5>
              <small style="color:rgba(255,255,255,.45);font-size:12px;">Choose what you'd like to explore</small>
            </div>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="padding:28px 24px;">
          <p style="color:rgba(255,255,255,.6);font-size:14px;margin-bottom:22px;text-align:center;">
            What would you like to check for <strong style="color:#00c8ff;" id="modalIndNameInline">this industry</strong>?
          </p>
          <div class="row g-3">
            <div class="col-6">
              <a id="choiceWebsiteBtn" href="#" style="text-decoration:none;">
                <div class="ind-choice-card">
                  <div class="ind-choice-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg></div>
                  <h6 style="color:#fff;font-weight:700;margin-bottom:6px;">Demo Website</h6>
                  <p style="color:rgba(255,255,255,.45);font-size:12.5px;line-height:1.5;margin:0;">Full sample website — homepage, about, services &amp; contact</p>
                  <div style="margin-top:14px;display:inline-flex;align-items:center;gap:5px;font-size:12px;font-weight:700;color:#00c8ff;">Explore <i class="ti ti-arrow-right" style="font-size:13px;"></i></div>
                </div>
              </a>
            </div>
            <div class="col-6">
              <a id="choiceErpBtn" href="#" style="text-decoration:none;">
                <div class="ind-choice-card ind-choice-card--accent">
                  <div class="ind-choice-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="22" height="22"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></div>
                  <h6 style="color:#fff;font-weight:700;margin-bottom:6px;">ERP System Demo</h6>
                  <p style="color:rgba(255,255,255,.45);font-size:12.5px;line-height:1.5;margin:0;">Live ERP dashboard with modules, charts &amp; dummy data</p>
                  <div style="margin-top:14px;display:inline-flex;align-items:center;gap:5px;font-size:12px;font-weight:700;color:#00c8ff;">Launch ERP <i class="ti ti-arrow-right" style="font-size:13px;"></i></div>
                </div>
              </a>
            </div>
          </div>
          <p style="text-align:center;margin-top:18px;font-size:12px;color:rgba(255,255,255,.3);"><i class="ti ti-info-circle me-1"></i>Powered by <strong style="color:rgba(255,255,255,.5);">NovaStackhub ERP Platform</strong></p>
        </div>
      </div>
    </div>
  </div>

  <style>
    .ind-choice-card { background:rgba(255,255,255,.04); border:1px solid rgba(255,255,255,.1); border-radius:14px; padding:20px 16px; cursor:pointer; transition:all .25s ease; height:100%; display:flex; flex-direction:column; }
    .ind-choice-card:hover { background:rgba(0,200,255,.07); border-color:rgba(0,200,255,.35); transform:translateY(-3px); box-shadow:0 8px 28px rgba(0,0,0,.3); }
    .ind-choice-card--accent { background:rgba(0,200,255,.06); border-color:rgba(0,200,255,.2); }
    .ind-choice-card--accent:hover { background:rgba(0,200,255,.12); border-color:#00c8ff; }
    .ind-choice-icon { width:46px; height:46px; border-radius:12px; background:rgba(0,200,255,.1); display:flex; align-items:center; justify-content:center; font-size:22px; color:#00c8ff; margin-bottom:14px; }
  </style>
@endsection

@push('scripts')
@verbatim
<script src="/js/about.js"></script>
<script>
  (function () {
    var choiceModal = new bootstrap.Modal(document.getElementById('industryChoiceModal'), { backdrop: true, keyboard: true });
    document.querySelectorAll('.ind-link').forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        var slug = link.getAttribute('data-ind-slug');
        var name = link.getAttribute('data-ind-name').replace(/&amp;/g, '&');
        var icon = link.getAttribute('data-ind-icon');
        document.getElementById('modalIndIconWrap').innerHTML = '<i class="' + icon + '"></i>';
        document.getElementById('modalIndTitle').textContent = name;
        document.getElementById('modalIndNameInline').textContent = name;
        document.getElementById('choiceWebsiteBtn').href = '../Industries/demo-website.html?industry=' + slug;
        document.getElementById('choiceErpBtn').href     = '../Industries/demo-erp.html?industry=' + slug;
        var openDdMenu = document.querySelector('.dropdown-menu.show');
        if (openDdMenu) {
          var ddToggle = openDdMenu.previousElementSibling;
          if (ddToggle) { bootstrap.Dropdown.getOrCreateInstance(ddToggle).hide(); }
        }
        choiceModal.show();
      });
    });
  }());

  
  </script>
@endverbatim
@endpush