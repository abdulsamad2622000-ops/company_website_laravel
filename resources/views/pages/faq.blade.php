@extends('layouts.app')

@section('title', 'FAQs — NovaStackhub')

@section('content')
<section class="py-5" style="margin-top:120px;">
  <div class="container" style="max-width:800px;">
    <h1 class="mb-4 fw-bold">Frequently Asked Questions</h1>
    <p class="text-muted mb-5">Answers to common questions about working with NovaStackhub.</p>

    <div class="accordion" id="faqAccordion">

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            What services does NovaStackhub offer?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            We offer web development, mobile app development, cloud solutions, cybersecurity, AI &amp; machine learning, data engineering, UI/UX design, and custom software/ERP development.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            How long does a typical project take?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Timelines vary based on project scope. A simple website may take 1–2 weeks, while custom applications or ERPs can take 4–12 weeks. We'll provide a clear timeline after understanding your requirements.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            How can I get a quote for my project?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Simply fill out our <a href="/#contact">contact form</a>, message us on WhatsApp, or email <a href="mailto:info@novastackhub.com">info@novastackhub.com</a> with your project details, and our team will get back to you within 24 hours.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Do you offer post-launch support?
          </button>
        </h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            Yes, we provide ongoing maintenance and support packages after project delivery to ensure everything runs smoothly.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            What is your payment structure?
          </button>
        </h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted">
            We typically work with a milestone-based payment structure — an initial deposit to begin, followed by payments tied to project milestones or delivery.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
@endsection