@extends('layouts.app')

@section('title', 'Case Studies — NovaStackhub')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service-detail.css') }}">
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

@include('partials.topbar')
@include('partials.navbar')

<section class="py-5">

  <div class="container">
    <div class="text-center mb-5">
      <span class="eyebrow justify-content-center"><i class="bi bi-asterisk"></i> Our Work</span>
      <h1 class="section-title">Real Projects, <span>Real Results</span></h1>
      <p class="text-muted">Explore some of the ERP systems and platforms we've built for our clients.</p>
      <p class="text-muted" style="font-size:13.5px; margin-top:-8px;"><i class="bi bi-info-circle me-1"></i>Live demo environments — feel free to explore and add your own sample data to test the features.</p>
    </div>

    <div class="row g-4 g-lg-5">

      <!-- KW Gold & Silver ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/kw-gold-silver.png" class="case-card-img" alt="KW Gold & Silver ERP">
          <div class="case-card-body">
            <span class="case-industry">Gold &amp; Silver Accounting</span>
            <h5>KW Gold &amp; Silver ERP</h5>
            <p>A complete accounting ERP for gold and silver trading businesses — handling rate work, inventory, customer accounts, and daily reports.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://dev.kwsgoldsilver.cloud/login" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
              <a href="https://www.figma.com/design/UYQoUYOZUNXtjFkUdV4hgI/Accounting-ERP-UI-%E2%80%93-NovaStackHub?node-id=0-1&t=Evdy7ZdOZ8iQc0P1-1" target="_blank" rel="noopener" class="btn-case-figma">View Design</a>
            </div>
          </div>
        </div>
      </div>

      <!-- ISP ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/isp-erp.png" class="case-card-img" alt="ISP ERP">
          <div class="case-card-body">
            <span class="case-industry">Internet Service Provider</span>
            <h5>ISP ERP</h5>
            <p>End-to-end customer lifecycle management for ISPs — billing, connections, complaints, suspensions, and inventory tracking.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://isp.fixndrop.com/" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Hardware ERP Pro -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/hardware-erp.png" class="case-card-img" alt="Hardware ERP Pro">
          <div class="case-card-body">
            <span class="case-industry">Hardware &amp; Retail</span>
            <h5>Hardware ERP Pro</h5>
            <p>A POS and inventory-focused ERP for a hardware retail store, covering sales, suppliers, stock adjustments, and reporting.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://hardware.fixndrop.com/login" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

      <!-- NSH Construction ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/construction-erp.png" class="case-card-img" alt="NSH Construction ERP">
          <div class="case-card-body">
            <span class="case-industry">Construction &amp; Real Estate</span>
            <h5>NSH Construction ERP</h5>
            <p>A unified system combining construction site management with real estate sales/CRM — projects, bookings, contractors, and commissions.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://realestate.fixndrop.com/" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Water ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/water-erp.png" class="case-card-img" alt="Water ERP">
          <div class="case-card-body">
            <span class="case-industry">Water &amp; Juice Manufacturing</span>
            <h5>Water ERP</h5>
            <p>A manufacturing ERP covering raw materials, production batches, quality control, and sales — built for a water bottling plant.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://watererp.fixndrop.com/" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

      <!-- iOrder ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/iorder-erp.png" class="case-card-img" alt="iOrder ERP">
          <div class="case-card-body">
            <span class="case-industry">E-commerce &amp; Retail</span>
            <h5>iOrder ERP</h5>
            <p>An omnichannel retail ERP combining POS, WooCommerce-synced online orders, and courier/shipment management in one platform.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://iorder.fixndrop.com/" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

      <!-- NHS Distribution ERP -->
      <div class="col-md-6 col-lg-4">
        <div class="case-card">
          <img src="/img/case-studies/nsh-distribution.png" class="case-card-img" alt="NHS Distribution ERP">
          <div class="case-card-body">
            <span class="case-industry">Distribution &amp; Wholesale</span>
            <h5>NHS Distribution ERP</h5>
            <p>A credit-focused distribution ERP with customer ledgers, recovery tracking, and profit/loss reporting for wholesale businesses.</p>
            <div class="d-flex gap-2 flex-wrap">
              <a href="https://nsh.fixndrop.com/login" target="_blank" rel="noopener" class="btn-case-demo">View Live Demo</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .case-card{
    background:#fff; border-radius:16px; overflow:hidden;
    box-shadow:0 4px 20px rgba(0,0,0,.06); border:1px solid #eef1f6;
    height:100%; display:flex; flex-direction:column;
    transition: transform .25s ease, box-shadow .25s ease;
  }
  .case-card:hover{ transform: translateY(-4px); box-shadow:0 12px 30px rgba(0,0,0,.1); }
  .case-card-img{ width:100%; height:220px; object-fit:cover; object-position:top; border-bottom:1px solid #eef1f6; }
  .case-card-body{ padding:26px 24px; flex:1; display:flex; flex-direction:column; }
  .case-industry{ font-size:12px; font-weight:700; color:#2563eb; text-transform:uppercase; letter-spacing:1px; }
  .case-card-body h5{ font-weight:800; margin:10px 0 12px; font-size:19px; }
  .case-card-body p{ color:#6b7686; font-size:14.5px; line-height:1.7; flex:1; margin-bottom:16px; }
  .btn-case-demo, .btn-case-figma{
    display:inline-flex; align-items:center; gap:6px;
    padding:10px 18px; border-radius:8px; font-size:13.5px; font-weight:700;
    text-decoration:none;
  }
  .btn-case-demo{ background:#2563eb; color:#fff; }
  .btn-case-demo:hover{ background:#1e3a8a; color:#fff; }
  .btn-case-figma{ background:#f3f4f6; color:#111827; border:1px solid #e5e7eb; }
  .btn-case-figma:hover{ background:#e5e7eb; }
</style>

@include('partials.footer')

@endsection

@push('scripts')
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

document.addEventListener('DOMContentLoaded', function () {
  window.addEventListener('load', function () {
    var pre = document.getElementById('preloader');
    if (pre) {
      setTimeout(function () {
        pre.style.opacity = '0';
        setTimeout(function () { pre.style.display = 'none'; }, 500);
      }, 900);
    }
  });
});
</script>
@endpush