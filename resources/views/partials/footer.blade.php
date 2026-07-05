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