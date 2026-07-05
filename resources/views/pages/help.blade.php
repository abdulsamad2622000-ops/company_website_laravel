@extends('layouts.app')

@section('title', 'Help Center — NovaStackhub')

@section('content')
<section class="py-5" style="margin-top:120px;">
  <div class="container" style="max-width:800px;">
    <h1 class="mb-4 fw-bold">Help Center</h1>
    <p class="text-muted mb-5">Need assistance? Here's how NovaStackhub can help you.</p>

    <div class="mb-4">
      <h5><i class="bi bi-chat-dots me-2"></i>Getting Started</h5>
      <p class="text-muted">New to NovaStackhub? Reach out via our contact form or WhatsApp, and our team will guide you through our services, process, and how we can help bring your project to life.</p>
    </div>

    <div class="mb-4">
      <h5><i class="bi bi-gear me-2"></i>Project Support</h5>
      <p class="text-muted">Already working with us? Contact your assigned project manager directly, or reach our support team for updates, revisions, or technical assistance.</p>
    </div>

    <div class="mb-4">
      <h5><i class="bi bi-envelope me-2"></i>Contact Options</h5>
      <ul class="text-muted">
        <li>Email: <a href="mailto:info@novastackhub.com">info@novastackhub.com</a></li>
        <li>WhatsApp: <a href="https://wa.me/923168738819" target="_blank">+92 316 8738819</a></li>
        <li><a href="/#contact">Send us a message</a></li>
      </ul>
    </div>
  </div>
</section>
@endsection