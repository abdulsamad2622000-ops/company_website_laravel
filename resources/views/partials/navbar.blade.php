{{-- Shared navbar partial - include with @include('partials.navbar') --}}
<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">

    <a class="navbar-brand" href="/">
      <img src="/img/logo.png" alt="NovaStackhub Logo"
        style="height:60px;width:auto;object-fit:contain;margin-right:10px;">
      <span class="brand-text">NovaStackhub</span>
    </a>

    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse" data-bs-target="#navMenu"
      aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="nav-link" href="/#hero"><i class="ti ti-home me-1"></i>Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/about"><i class="ti ti-info-circle me-1"></i>About Us</a>
        </li>

        <!-- SERVICES -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/#services" data-bs-toggle="dropdown">
            <i class="ti ti-briefcase me-1"></i>Services
          </a>
          <ul class="dropdown-menu mega-menu">
            <div class="mega-cols">
              <div class="mega-col">
                <li><h6 class="dropdown-header">💻 Software Development</h6></li>
                <li><a class="dropdown-item" href="/services/custom-software-development"><i class="ti ti-code"></i>Custom Software Development</a></li>
                <li><a class="dropdown-item" href="/services/erp-development"><i class="ti ti-building-factory"></i>ERP Development</a></li>
                <li><a class="dropdown-item" href="/services/crm-development"><i class="ti ti-users"></i>CRM Development</a></li>
                <li><a class="dropdown-item" href="/services/saas-product-development"><i class="ti ti-cloud"></i>SaaS Product Development</a></li>
                <li><a class="dropdown-item" href="/services/mvp-development"><i class="ti ti-rocket"></i>MVP Development</a></li>
                <li><a class="dropdown-item" href="/services/enterprise-software"><i class="ti ti-server"></i>Enterprise Software</a></li>
                <li><a class="dropdown-item" href="/services/business-process-automation"><i class="ti ti-robot"></i>Business Process Automation</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">🎨 Design</h6></li>
                <li><a class="dropdown-item" href="/services/ui-ux-design"><i class="ti ti-palette"></i>UI/UX Design</a></li>
                <li><a class="dropdown-item" href="/services/mobile-app-ui-ux"><i class="ti ti-device-mobile"></i>Mobile App UI/UX</a></li>
                <li><a class="dropdown-item" href="/services/accessibility-services"><i class="ti ti-accessible"></i>Accessibility Services</a></li>
              </div>
              <div class="mega-col">
                <li><h6 class="dropdown-header">🌐 Web &amp; E-Commerce</h6></li>
                <li><a class="dropdown-item" href="/services/web-application-development"><i class="ti ti-world"></i>Web Application Development</a></li>
                <li><a class="dropdown-item" href="/services/frontend-development"><i class="ti ti-layout"></i>Frontend Development</a></li>
                <li><a class="dropdown-item" href="/services/backend-development"><i class="ti ti-database"></i>Backend Development</a></li>
                <li><a class="dropdown-item" href="/services/e-commerce-solutions"><i class="ti ti-shopping-cart"></i>E-Commerce Solutions</a></li>
                <li><a class="dropdown-item" href="/services/api-development-integration"><i class="ti ti-api"></i>API Development &amp; Integration</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">☁️ Cloud &amp; IT Ops</h6></li>
                <li><a class="dropdown-item" href="/services/cloud-solutions"><i class="ti ti-cloud-upload"></i>Cloud Solutions</a></li>
                <li><a class="dropdown-item" href="/services/devops-services"><i class="ti ti-settings"></i>DevOps Services</a></li>
                <li><a class="dropdown-item" href="/services/cybersecurity"><i class="ti ti-shield-lock"></i>Cybersecurity</a></li>
                <li><a class="dropdown-item" href="/services/infrastructure-design"><i class="ti ti-topology-star"></i>Infrastructure Design</a></li>
                <li><a class="dropdown-item" href="/services/it-consulting"><i class="ti ti-headset"></i>IT Consulting</a></li>
              </div>
              <div class="mega-col">
                <li><h6 class="dropdown-header">📱 Mobile Apps</h6></li>
                <li><a class="dropdown-item" href="/services/android-app-development"><i class="ti ti-brand-android"></i>Android App Development</a></li>
                <li><a class="dropdown-item" href="/services/ios-app-development"><i class="ti ti-brand-apple"></i>iOS App Development</a></li>
                <li><a class="dropdown-item" href="/services/cross-platform-flutter-rn"><i class="ti ti-devices"></i>Cross-Platform (Flutter/RN)</a></li>
                <li><a class="dropdown-item" href="/services/enterprise-mobile-apps"><i class="ti ti-building"></i>Enterprise Mobile Apps</a></li>
                <li><a class="dropdown-item" href="/services/on-demand-service-apps"><i class="ti ti-truck-delivery"></i>On-Demand Service Apps</a></li>
                <li><a class="dropdown-item" href="/services/fintech-banking-apps"><i class="ti ti-coin"></i>FinTech &amp; Banking Apps</a></li>
                <li><a class="dropdown-item" href="/services/healthcare-mobile-apps"><i class="ti ti-heart-rate-monitor"></i>Healthcare Mobile Apps</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">🔧 Support &amp; Quality</h6></li>
                <li><a class="dropdown-item" href="/services/maintenance-support"><i class="ti ti-tool"></i>Maintenance &amp; Support</a></li>
                <li><a class="dropdown-item" href="/services/qa-testing"><i class="ti ti-checkup-list"></i>QA &amp; Testing</a></li>
                <li><a class="dropdown-item" href="/services/app-store-deployment"><i class="ti ti-brand-google-play"></i>App Store Deployment</a></li>
              </div>
            </div>
          </ul>
        </li>

        <!-- INDUSTRIES -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/#industries" data-bs-toggle="dropdown">
            <i class="ti ti-building-skyscraper me-1"></i>Industries
          </a>
          <ul class="dropdown-menu industries-mega">
            <div class="mega-top-label"><i class="ti ti-grid-dots"></i>40 Industries We Serve</div>
            <div class="ind-grid">
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="retail-and-e-commerce" data-ind-name="Retail &amp; E-Commerce" data-ind-icon="ti ti-shopping-bag"><i class="ti ti-shopping-bag"></i>Retail &amp; E-Commerce</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="healthcare-and-medical" data-ind-name="Healthcare &amp; Medical" data-ind-icon="ti ti-stethoscope"><i class="ti ti-stethoscope"></i>Healthcare &amp; Medical</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="real-estate-and-property" data-ind-name="Real Estate &amp; Property" data-ind-icon="ti ti-home"><i class="ti ti-home"></i>Real Estate &amp; Property</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="finance-and-banking" data-ind-name="Finance &amp; Banking" data-ind-icon="ti ti-building-bank"><i class="ti ti-building-bank"></i>Finance &amp; Banking</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="education-and-e-learning" data-ind-name="Education &amp; E-Learning" data-ind-icon="ti ti-school"><i class="ti ti-school"></i>Education &amp; E-Learning</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="manufacturing-and-production" data-ind-name="Manufacturing &amp; Production" data-ind-icon="ti ti-tools"><i class="ti ti-tools"></i>Manufacturing &amp; Production</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="logistics-and-supply-chain" data-ind-name="Logistics &amp; Supply Chain" data-ind-icon="ti ti-truck"><i class="ti ti-truck"></i>Logistics &amp; Supply Chain</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="restaurant-and-food" data-ind-name="Restaurant &amp; Food" data-ind-icon="ti ti-chef-hat"><i class="ti ti-chef-hat"></i>Restaurant &amp; Food</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="gold-and-jewelry-trading" data-ind-name="Gold &amp; Jewelry Trading" data-ind-icon="ti ti-diamond"><i class="ti ti-diamond"></i>Gold &amp; Jewelry Trading</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="hotel-and-hospitality" data-ind-name="Hotel &amp; Hospitality" data-ind-icon="ti ti-bed"><i class="ti ti-bed"></i>Hotel &amp; Hospitality</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="construction-and-engineering" data-ind-name="Construction &amp; Engineering" data-ind-icon="ti ti-crane"><i class="ti ti-crane"></i>Construction &amp; Engineering</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="hr-and-recruitment" data-ind-name="HR &amp; Recruitment" data-ind-icon="ti ti-users"><i class="ti ti-users"></i>HR &amp; Recruitment</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="legal-and-law-firms" data-ind-name="Legal &amp; Law Firms" data-ind-icon="ti ti-gavel"><i class="ti ti-gavel"></i>Legal &amp; Law Firms</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="non-profit-and-ngo" data-ind-name="Non-Profit &amp; NGO" data-ind-icon="ti ti-heart"><i class="ti ti-heart"></i>Non-Profit &amp; NGO</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="government-and-public-sector" data-ind-name="Government &amp; Public Sector" data-ind-icon="ti ti-building"><i class="ti ti-building"></i>Government &amp; Public Sector</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="insurance" data-ind-name="Insurance" data-ind-icon="ti ti-shield"><i class="ti ti-shield"></i>Insurance</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="automotive" data-ind-name="Automotive" data-ind-icon="ti ti-car"><i class="ti ti-car"></i>Automotive</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="agriculture-and-farming" data-ind-name="Agriculture &amp; Farming" data-ind-icon="ti ti-plant"><i class="ti ti-plant"></i>Agriculture &amp; Farming</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="fitness-and-wellness" data-ind-name="Fitness &amp; Wellness" data-ind-icon="ti ti-barbell"><i class="ti ti-barbell"></i>Fitness &amp; Wellness</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="media-and-entertainment" data-ind-name="Media &amp; Entertainment" data-ind-icon="ti ti-movie"><i class="ti ti-movie"></i>Media &amp; Entertainment</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="telecom-and-it" data-ind-name="Telecom &amp; IT" data-ind-icon="ti ti-wifi"><i class="ti ti-wifi"></i>Telecom &amp; IT</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="oil-and-gas" data-ind-name="Oil &amp; Gas" data-ind-icon="ti ti-flame"><i class="ti ti-flame"></i>Oil &amp; Gas</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="textile-and-apparel" data-ind-name="Textile &amp; Apparel" data-ind-icon="ti ti-shirt"><i class="ti ti-shirt"></i>Textile &amp; Apparel</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="pharmacy-and-drug-store" data-ind-name="Pharmacy &amp; Drug Store" data-ind-icon="ti ti-pill"><i class="ti ti-pill"></i>Pharmacy &amp; Drug Store</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="beauty-and-salon" data-ind-name="Beauty &amp; Salon" data-ind-icon="ti ti-sparkles"><i class="ti ti-sparkles"></i>Beauty &amp; Salon</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="travel-and-tourism" data-ind-name="Travel &amp; Tourism" data-ind-icon="ti ti-plane"><i class="ti ti-plane"></i>Travel &amp; Tourism</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="event-management" data-ind-name="Event Management" data-ind-icon="ti ti-confetti"><i class="ti ti-confetti"></i>Event Management</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="security-and-surveillance" data-ind-name="Security &amp; Surveillance" data-ind-icon="ti ti-camera"><i class="ti ti-camera"></i>Security &amp; Surveillance</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="printing-and-publishing" data-ind-name="Printing &amp; Publishing" data-ind-icon="ti ti-printer"><i class="ti ti-printer"></i>Printing &amp; Publishing</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="interior-design-and-architecture" data-ind-name="Interior Design &amp; Architecture" data-ind-icon="ti ti-ruler"><i class="ti ti-ruler"></i>Interior Design &amp; Architecture</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="accounting-and-tax-firms" data-ind-name="Accounting &amp; Tax Firms" data-ind-icon="ti ti-calculator"><i class="ti ti-calculator"></i>Accounting &amp; Tax Firms</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="wholesale-and-distribution" data-ind-name="Wholesale &amp; Distribution" data-ind-icon="ti ti-package"><i class="ti ti-package"></i>Wholesale &amp; Distribution</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="import-and-export" data-ind-name="Import &amp; Export" data-ind-icon="ti ti-ship"><i class="ti ti-ship"></i>Import &amp; Export</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="courier-and-delivery" data-ind-name="Courier &amp; Delivery" data-ind-icon="ti ti-bike"><i class="ti ti-bike"></i>Courier &amp; Delivery</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="supermarket-and-grocery" data-ind-name="Supermarket &amp; Grocery" data-ind-icon="ti ti-basket"><i class="ti ti-basket"></i>Supermarket &amp; Grocery</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="gym-and-sports" data-ind-name="Gym &amp; Sports" data-ind-icon="ti ti-run"><i class="ti ti-run"></i>Gym &amp; Sports</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="clinic-and-diagnostic-labs" data-ind-name="Clinic &amp; Diagnostic Labs" data-ind-icon="ti ti-microscope"><i class="ti ti-microscope"></i>Clinic &amp; Diagnostic Labs</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="school-and-university" data-ind-name="School &amp; University" data-ind-icon="ti ti-certificate"><i class="ti ti-certificate"></i>School &amp; University</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="car-rental-and-fleet" data-ind-name="Car Rental &amp; Fleet" data-ind-icon="ti ti-steering-wheel"><i class="ti ti-steering-wheel"></i>Car Rental &amp; Fleet</a></li>
              <li><a class="dropdown-item ind-link" href="javascript:void(0)" data-ind-slug="charity-and-social-welfare" data-ind-name="Charity &amp; Social Welfare" data-ind-icon="ti ti-hand-heart"><i class="ti ti-hand-heart"></i>Charity &amp; Social Welfare</a></li>
            </div>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/#case-studio"><i class="ti ti-report-analytics me-1"></i>Case Studio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="/pricing"><i class="bi bi-tag me-1"></i>Pricing</a>
        </li>

      </ul>
      <a href="/#cta" class="btn-quote nav-link px-4">CONTACT US &rarr;</a>
    </div>
  </div>
</nav>