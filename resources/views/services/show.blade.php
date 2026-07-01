@extends('layouts.app')

@section('title', $service['name'].' — NovaStackHub')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service-detail.css') }}">
@endpush

@section('content')

<!-- ═══ NAVBAR ═══ -->
<nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('img/logo.png') }}" alt="NovaStackhub" style="height:54px;width:auto;object-fit:contain;margin-right:10px;">
      <span class="brand-text">NovaStackhub</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#svcNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="svcNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="/#hero"><i class="bi bi-house me-1"></i>Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about"><i class="bi bi-info-circle me-1"></i>About Us</a></li>
        <li class="nav-item"><a class="nav-link active" href="/#services"><i class="bi bi-briefcase me-1"></i>Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/#portfolio"><i class="bi bi-grid me-1"></i>Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="/#blog"><i class="bi bi-newspaper me-1"></i>Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="/pricing"><i class="bi bi-tag me-1"></i>Pricing</a></li>
      </ul>
      <a href="/#cta" class="btn-quote nav-link px-4">CONTACT US &rarr;</a>
    </div>
  </div>
</nav>

<!-- ═══ HERO ═══ -->
<section class="sd-hero">
  <div class="sd-hero-glow"></div>
  <div class="container">
    <div class="sd-breadcrumb">
      <a href="/">Home</a>
      <i class="bi bi-chevron-right"></i>
      <a href="/#services">Services</a>
      <i class="bi bi-chevron-right"></i>
      <span id="breadcrumbService">{{ $service['name'] }}</span>
    </div>
    <div class="sd-hero-content">
      <div class="sd-hero-badge">
        <span class="sd-hero-icon-wrap"><i id="heroIcon" class="{{ $service['icon'] }}"></i></span>
        <span id="heroCategory" class="sd-hero-cat">{{ $service['category'] }}</span>
      </div>
      <h1 class="sd-hero-title" id="heroTitle">{{ $service['name'] }}</h1>
      <p class="sd-hero-desc" id="heroDesc">{{ $service['tagline'] }}</p>
      <div class="sd-hero-cta">
        <a href="#enquiry-form" class="sd-btn-primary">
          <i class="bi bi-send me-2"></i>Request This Service
        </a>
        <a href="#service-info" class="sd-btn-outline">
          <i class="bi bi-info-circle me-2"></i>Learn More
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MAIN CONTENT ═══ -->
<main class="sd-main" id="service-info">
  <div class="container">
    <div class="row g-5 align-items-start">

      <!-- LEFT: Service Info -->
      <div class="col-lg-7">

        <!-- Description -->
        <div class="sd-card sd-info-card">
          <h2 class="sd-section-title"><i class="bi bi-file-text me-2"></i>What We Offer</h2>
          <p class="sd-full-desc" id="fullDesc">{{ $service['description'] }}</p>
        </div>

        <!-- Features -->
        <div class="sd-card sd-features-card">
          <h2 class="sd-section-title"><i class="bi bi-list-check me-2"></i>Key Features &amp; Deliverables</h2>
          <ul class="sd-features-list" id="featuresList">
            @foreach ($service['features'] as $feature)
              <li>
                <span class="sd-feat-dot"><i class="bi bi-check-lg"></i></span>
                {{ $feature }}
              </li>
            @endforeach
          </ul>
        </div>

        <!-- Who Benefits -->
        <div class="sd-card sd-benefits-card">
          <h2 class="sd-section-title"><i class="bi bi-people me-2"></i>Who Benefits</h2>
          <div class="sd-benefits-grid" id="benefitsGrid">
            @foreach ($service['benefits'] as $benefit)
              <div class="sd-benefit-item">
                <div class="sd-benefit-icon"><i class="{{ $benefit['icon'] }}"></i></div>
                <div class="sd-benefit-title">{{ $benefit['title'] }}</div>
                <div class="sd-benefit-desc">{{ $benefit['desc'] }}</div>
              </div>
            @endforeach
          </div>
        </div>

        <!-- Why Choose Us -->
        <div class="sd-card sd-why-card">
          <h2 class="sd-section-title"><i class="bi bi-award me-2"></i>Why Choose NovaStackhub</h2>
          <ul class="sd-why-list" id="whyList">
            @foreach ($service['whyUs'] as $why)
              <li>
                <span class="sd-why-icon"><i class="bi bi-check-lg"></i></span>
                {{ $why }}
              </li>
            @endforeach
          </ul>
        </div>

      </div>

      <!-- RIGHT: Inquiry Form -->
      <div class="col-lg-5" id="enquiry-form">
        <div class="sd-form-card sticky-top" style="top: 90px;">
          <div class="sd-form-header">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sd-form-header-icon" width="26" height="26"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><line x1="9" y1="12" x2="15" y2="12"/><line x1="9" y1="16" x2="12" y2="16"/></svg>
            <div>
              <h3 class="sd-form-title">Request This Service</h3>
              <p class="sd-form-subtitle">Fill out the form — we'll respond within 24 hours.</p>
            </div>
          </div>

          @if (session('lead_success'))
            <!-- Success Message -->
            <div class="sd-success-box" id="successBox">
              <div class="sd-success-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="36" height="36"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
              <h4>Request Submitted!</h4>
              <p>{{ session('lead_success') }}</p>
              <a class="sd-success-close" href="{{ route('services.show', $service['slug']) }}">Submit Another Request</a>
            </div>
          @else
            @if ($errors->any())
              <div class="alert alert-danger rounded-3" role="alert">
                <ul class="mb-0 ps-3">
                  @foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach
                </ul>
              </div>
            @endif
            <form id="enquiryForm" method="POST" action="{{ route('leads.store') }}">
              @csrf
              <input type="hidden" name="type" value="enquiry">
              <input type="hidden" name="service_slug" value="{{ $service['slug'] }}">
              <div class="d-none" aria-hidden="true">
                <input type="text" name="website" tabindex="-1" autocomplete="off">
              </div>

              <div class="sd-field">
                <label class="sd-label">Full Name <span class="req">*</span></label>
                <div class="sd-input-wrap">
                  <i class="bi bi-person sd-input-icon"></i>
                  <input type="text" class="sd-input" id="f-name" name="name" placeholder="John Doe" value="{{ old('name') }}" required>
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Email Address <span class="req">*</span></label>
                <div class="sd-input-wrap">
                  <i class="bi bi-envelope sd-input-icon"></i>
                  <input type="email" class="sd-input" id="f-email" name="email" placeholder="john@company.com" value="{{ old('email') }}" required>
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Phone / WhatsApp <span class="req">*</span></label>
                <div class="sd-input-wrap">
                  <i class="bi bi-telephone sd-input-icon"></i>
                  <input type="tel" class="sd-input" id="f-phone" name="phone" placeholder="+92 300 0000000" value="{{ old('phone') }}" required>
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Company / Business Name</label>
                <div class="sd-input-wrap">
                  <i class="bi bi-building sd-input-icon"></i>
                  <input type="text" class="sd-input" name="company" placeholder="Your Company (Optional)" value="{{ old('company') }}">
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Service <span class="req">*</span></label>
                <div class="sd-input-wrap">
                  <i class="bi bi-briefcase sd-input-icon"></i>
                  <input type="text" class="sd-input sd-input-readonly" id="f-service" name="service" value="{{ $service['name'] }}" readonly>
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Budget Range</label>
                <div class="sd-input-wrap">
                  <i class="bi bi-currency-dollar sd-input-icon"></i>
                  <select class="sd-input sd-select" name="budget">
                    <option value="">Select budget (Optional)</option>
                    <option>Under $1,000</option>
                    <option>$1,000 – $5,000</option>
                    <option>$5,000 – $20,000</option>
                    <option>$20,000 – $50,000</option>
                    <option>$50,000 – $100,000</option>
                    <option>$100,000+</option>
                  </select>
                </div>
              </div>

              <div class="sd-field">
                <label class="sd-label">Project Details <span class="req">*</span></label>
                <textarea class="sd-input sd-textarea" id="f-message" name="message" rows="5"
                  placeholder="Describe your project, goals, timeline, and any specific requirements…" required>{{ old('message') }}</textarea>
              </div>

              <button type="submit" class="sd-submit-btn" id="submitBtn">
                <span class="btn-default-text"><i class="bi bi-send me-2"></i>Submit Request</span>
              </button>

              <p class="sd-form-note"><i class="bi bi-lock-fill me-1"></i>Your information is confidential and never shared.</p>
            </form>
          @endif
        </div>
      </div>

    </div>
  </div>
</main>

<!-- ═══ FOOTER ═══ -->
<footer class="sd-footer">
  <div class="container text-center">
    <p class="sd-footer-brand"><strong>Nova<span>Stack</span>hub</strong></p>
    <p class="sd-footer-copy">&copy; {{ date('Y') }} NovaStackhub. All rights reserved.</p>
  </div>
</footer>

@endsection
