{{-- Shared contact section — @include('partials.contact') --}}
<section class="pcontact-section" id="contact">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="pcontact-eyebrow"><i class="bi bi-asterisk"></i> Work With Us</span>
        <h2 class="pcontact-title">Ready to Build Something <span>Amazing?</span></h2>
        <p class="pcontact-text">Let's talk about your project. We are ready to bring your vision to life with world-class engineering and design.</p>
        <div class="pcontact-info">
          <a class="pcontact-info-item" href="https://mail.google.com/mail/?view=cm&fs=1&to=info@novastackhub.com" target="_blank" rel="noopener">
            <div class="pcontact-info-icon"><i class="bi bi-envelope"></i></div>
            <div><div class="pcontact-info-label">Email</div><div class="pcontact-info-val">info@novastackhub.com</div></div>
          </a>
          <a class="pcontact-info-item" href="https://wa.me/923168738819" target="_blank" rel="noopener">
            <div class="pcontact-info-icon"><i class="bi bi-whatsapp"></i></div>
            <div><div class="pcontact-info-label">Phone / WhatsApp</div><div class="pcontact-info-val">+92 316 8738819</div></div>
          </a>
          <a class="pcontact-info-item" href="https://www.google.com/maps/search/?api=1&query=China+Shopping+Center+A.H.+Road+Saddar+Karachi" target="_blank" rel="noopener">
            <div class="pcontact-info-icon"><i class="bi bi-geo-alt"></i></div>
            <div><div class="pcontact-info-label">Location</div><div class="pcontact-info-val">Office # M-3-61, China Shopping Center, A.H. Road, Saddar, Karachi.</div></div>
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="pcontact-card">
          <h4>Send Us A Message</h4>
          @if (session('lead_success'))
            <div class="alert alert-success rounded-3">{{ session('lead_success') }}</div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger rounded-3"><ul class="mb-0 ps-3">@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
          @endif
          <form method="POST" action="{{ route('leads.store') }}">
            @csrf
            <input type="hidden" name="type" value="contact">
            <div class="d-none" aria-hidden="true"><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
            <div class="row g-3">
              <div class="col-md-6"><div class="pcontact-input"><i class="bi bi-person"></i><input type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required></div></div>
              <div class="col-md-6"><div class="pcontact-input"><i class="bi bi-envelope"></i><input type="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required></div></div>

              <div class="col-12">
                <div class="pcontact-select" id="svcSelect">
                  <input type="hidden" name="service" id="svcValue" value="{{ old('service') }}">
                  <button type="button" class="pcontact-select-trigger" id="svcTrigger">
                    <i class="bi bi-briefcase"></i>
                    <span id="svcLabel">{{ old('service') ?: 'Choose Service' }}</span>
                    <i class="bi bi-chevron-down svc-caret"></i>
                  </button>
                  <div class="pcontact-select-panel" id="svcPanel">
                    <div class="svc-group">Software Development</div>
                    <div class="svc-opt">Custom Software Development</div>
                    <div class="svc-opt">ERP Development</div>
                    <div class="svc-opt">CRM Development</div>
                    <div class="svc-opt">SaaS Product Development</div>
                    <div class="svc-opt">MVP Development</div>
                    <div class="svc-opt">Enterprise Software</div>
                    <div class="svc-opt">Business Process Automation</div>
                    <div class="svc-group">Design</div>
                    <div class="svc-opt">UI/UX Design</div>
                    <div class="svc-opt">Mobile App UI/UX</div>
                    <div class="svc-opt">Accessibility Services</div>
                    <div class="svc-group">Web Development</div>
                    <div class="svc-opt">Web Application Development</div>
                    <div class="svc-opt">Frontend Development</div>
                    <div class="svc-opt">Backend Development</div>
                    <div class="svc-opt">E-Commerce Solutions</div>
                    <div class="svc-opt">API Development &amp; Integration</div>
                    <div class="svc-group">Cloud &amp; DevOps</div>
                    <div class="svc-opt">Cloud Solutions</div>
                    <div class="svc-opt">DevOps Services</div>
                    <div class="svc-opt">Cybersecurity</div>
                    <div class="svc-opt">Infrastructure Design</div>
                    <div class="svc-opt">IT Consulting</div>
                    <div class="svc-group">Mobile Apps</div>
                    <div class="svc-opt">Android App Development</div>
                    <div class="svc-opt">iOS App Development</div>
                    <div class="svc-opt">Cross-Platform (Flutter/RN)</div>
                    <div class="svc-opt">Enterprise Mobile Apps</div>
                    <div class="svc-opt">On-Demand Service Apps</div>
                    <div class="svc-opt">FinTech &amp; Banking Apps</div>
                    <div class="svc-opt">Healthcare Mobile Apps</div>
                    <div class="svc-group">Support &amp; QA</div>
                    <div class="svc-opt">Maintenance &amp; Support</div>
                    <div class="svc-opt">QA &amp; Testing</div>
                    <div class="svc-opt">App Store Deployment</div>
                  </div>
                </div>
              </div>

              <div class="col-12"><div class="pcontact-input"><i class="bi bi-chat-text"></i><textarea name="message" rows="4" placeholder="Your Message">{{ old('message') }}</textarea></div></div>
              <div class="col-12"><button type="submit" class="pcontact-btn">Send Message &rarr;</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .pcontact-section{ background:#f4f7fb; padding:90px 0; }
  .pcontact-eyebrow{ color:#2563eb; font-weight:700; text-transform:uppercase; font-size:.85rem; letter-spacing:1px; display:inline-flex; gap:6px; align-items:center; }
  .pcontact-title{ font-size:clamp(28px,4vw,44px); font-weight:800; color:#0f172a; line-height:1.2; margin:14px 0 16px; }
  .pcontact-title span{ color:#2563eb; }
  .pcontact-text{ color:#5a6b7e; font-size:16px; line-height:1.7; max-width:480px; margin-bottom:28px; }
  .pcontact-info{ display:flex; flex-direction:column; gap:16px; }
  .pcontact-info-item{ display:flex; gap:14px; align-items:center; background:#fff; border:1px solid #e6ecf3; border-radius:14px; padding:16px 18px; text-decoration:none; cursor:pointer; transition:border-color .2s, transform .2s, box-shadow .2s; }
  .pcontact-info-item:hover{ border-color:#2563eb; transform:translateY(-2px); box-shadow:0 10px 24px rgba(37,99,235,.10); }
  .pcontact-info-icon{ width:46px; height:46px; flex-shrink:0; border-radius:12px; background:rgba(37,99,235,.10); color:#2563eb; display:flex; align-items:center; justify-content:center; font-size:20px; }
  .pcontact-info-label{ color:#2563eb; font-weight:700; font-size:.75rem; text-transform:uppercase; letter-spacing:.5px; }
  .pcontact-info-val{ color:#16263a; font-weight:600; font-size:15px; }

  .pcontact-card{ background:#fff; border:1px solid #e6ecf3; border-radius:18px; padding:32px; box-shadow:0 20px 50px rgba(15,23,42,.06); }
  .pcontact-card h4{ color:#0f172a; font-weight:800; margin-bottom:20px; font-size:22px; }
  .pcontact-input{ display:flex; align-items:flex-start; background:#f8fafc; border:1px solid #e6ecf3; border-radius:11px; padding:0 14px; transition:border-color .2s, background .2s; }
  .pcontact-input:focus-within{ border-color:#2563eb; background:#fff; }
  .pcontact-input i{ color:#94a3b8; font-size:16px; padding-top:15px; }
  .pcontact-input input, .pcontact-input textarea{ border:none; outline:none; background:transparent; width:100%; padding:13px 10px; color:#16263a; font-size:15px; resize:vertical; }
  .pcontact-btn{ width:100%; background:#2563eb; color:#fff; border:none; border-radius:11px; padding:15px; font-weight:700; font-size:15px; transition:background .2s, transform .2s; }
  .pcontact-btn:hover{ background:#1e3a8a; transform:translateY(-2px); }

  /* custom scrollable dropdown */
  .pcontact-select{ position:relative; }
  .pcontact-select-trigger{ width:100%; display:flex; align-items:center; gap:10px; background:#f8fafc; border:1px solid #e6ecf3; border-radius:11px; padding:14px; color:#16263a; font-size:15px; cursor:pointer; text-align:left; }
  .pcontact-select-trigger > i:first-child{ color:#94a3b8; font-size:16px; }
  .pcontact-select-trigger .svc-caret{ margin-left:auto; color:#94a3b8; transition:transform .2s; }
  .pcontact-select.open .pcontact-select-trigger{ border-color:#2563eb; background:#fff; }
  .pcontact-select.open .svc-caret{ transform:rotate(180deg); }
  .pcontact-select-panel{ position:absolute; top:calc(100% + 6px); left:0; right:0; background:#fff; border:1px solid #e6ecf3; border-radius:12px; box-shadow:0 16px 40px rgba(15,23,42,.14); max-height:270px; overflow-y:auto; z-index:60; padding:6px; display:none; }
  .pcontact-select.open .pcontact-select-panel{ display:block; }
  .svc-group{ font-size:11px; font-weight:700; text-transform:uppercase; letter-spacing:.5px; color:#2563eb; padding:10px 12px 4px; }
  .svc-opt{ padding:10px 12px; border-radius:8px; cursor:pointer; color:#3a4a5c; font-size:14px; }
  .svc-opt:hover{ background:#eaf2ff; color:#1e3a8a; }
  .svc-opt.selected{ background:#2563eb; color:#fff; }
  .pcontact-select-panel::-webkit-scrollbar{ width:8px; }
  .pcontact-select-panel::-webkit-scrollbar-track{ background:transparent; }
  .pcontact-select-panel::-webkit-scrollbar-thumb{ background:#cbd5e1; border-radius:8px; }
  @media (max-width:576px){ .pcontact-card{ padding:22px; } .pcontact-section{ padding:60px 0; } }
</style>

<script>
(function(){
  var sel = document.getElementById('svcSelect');
  if(!sel) return;
  var trigger = document.getElementById('svcTrigger');
  var panel = document.getElementById('svcPanel');
  var label = document.getElementById('svcLabel');
  var value = document.getElementById('svcValue');
  trigger.addEventListener('click', function(e){ e.stopPropagation(); sel.classList.toggle('open'); });
  panel.querySelectorAll('.svc-opt').forEach(function(opt){
    opt.addEventListener('click', function(){
      var txt = opt.textContent.trim();
      value.value = txt; label.textContent = txt;
      panel.querySelectorAll('.svc-opt').forEach(function(o){ o.classList.remove('selected'); });
      opt.classList.add('selected');
      sel.classList.remove('open');
    });
  });
  document.addEventListener('click', function(e){ if(!sel.contains(e.target)) sel.classList.remove('open'); });
})();
</script>