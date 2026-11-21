<?php
$pageTitle       = "IT Services | Web Development, AI, ERP and Digital Solutions | GeerSoft";
$pageDescription = "Explore GeerSoft IT Solutions services, including website development, custom software, mobile applications, ERP solutions, AI integration, and digital marketing.";
$pageKeywords    = "GeerSoft IT Solutions services, web development, custom software engineering, mobile apps, ERP solutions, AI automation, digital marketing, SEO Mumbai";
$pageCanonical   = "https://geersoft.in/services_all";
$extraCss        = ["assets/stylesheets/ai-services.css"];
$activeNav       = "services";

include "include/header.php";
?>




  <!-- =========================================================================
       Section 1: AI-Powered Services Hero Section
       ========================================================================= -->
  <section class="hero-section" id="services-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Hero Left Column -->
        <div class="col-lg-7">
          

          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span>CORE SERVICES & DIGITAL ENGINEERING</span>
          </div>

          <h1 class="hero-title">
            Digital Solutions Designed to <br>
            <span class="gradient-text">Move Your Business Forward</span>
          </h1>

          <p class="hero-subtitle">
            From modern websites and custom applications to intelligent automation and ERP systems, GeerSoft helps businesses build practical digital solutions for a connected, efficient, and scalable future.
          </p>

          <div class="hero-cta-group">
            <button onclick="openQuoteModal()" class="btn-ai-primary">
              <span>Discuss Your Project</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="#services-grid" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect></svg>
              <span>Explore Our Services</span>
            </a>
          </div>

          <!-- Hero Metrics Bar -->
          <div class="hero-metrics-bar">
            <div class="metric-item">
              <div class="metric-val">10</div>
              <div class="metric-lbl">Specialized Services</div>
            </div>
            <div class="metric-item">
              <div class="metric-val">100%</div>
              <div class="metric-lbl">Custom Engineered Logic</div>
            </div>
            <div class="metric-item">
              <div class="metric-val">SLA</div>
              <div class="metric-lbl">Agreed Milestone Delivery</div>
            </div>
          </div>
        </div>

        <!-- Hero Right Column: 3D Multi-Device & Tech Composition -->
        <div class="col-lg-5">
          <div class="services-hero-composition">
            <!-- Glowing AI Core Orb -->
            <div class="mockup-ai-orb"></div>

            <!-- Floating 3D Browser Mockup -->
            <div class="mockup-browser-window" style="overflow:hidden;">
              <div class="browser-header-bar">
                <div class="browser-dots">
                  <span class="browser-dot dot-red"></span>
                  <span class="browser-dot dot-yellow"></span>
                  <span class="browser-dot dot-green"></span>
                </div>
                <div class="browser-url-pill">https://geersoft.in/cloud-platform</div>
              </div>
              <div class="browser-body-content" style="padding:0; overflow:hidden;">
                <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/portfolio-cloud.jpg" alt="Enterprise Cloud Architecture Platform" style="width:100%; height:155px; object-fit:cover; display:block; filter:contrast(1.05);">
                <div class="d-flex gap-2 p-3" style="background:rgba(8,14,30,0.92); border-top:1px solid rgba(255,255,255,0.08);">
                  <div class="p-2 rounded-2 flex-grow-1" style="background:rgba(37,99,235,0.18); border:1px solid rgba(59,130,246,0.3); font-size:0.75rem; color:#38bdf8;">
                    <strong>Next.js / React</strong><br><span style="font-size:0.68rem; opacity:0.8;">Sub-second speed</span>
                  </div>
                  <div class="p-2 rounded-2 flex-grow-1" style="background:rgba(124,58,237,0.18); border:1px solid rgba(168,85,247,0.3); font-size:0.75rem; color:#c084fc;">
                    <strong>Kubernetes &amp; Cloud</strong><br><span style="font-size:0.68rem; opacity:0.8;">99.99% Uptime SLA</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating 3D Smartphone Frame -->
            <div class="mockup-phone-frame" style="overflow:hidden;">
              <div class="phone-screen" style="padding:0; overflow:hidden; display:flex; flex-direction:column;">
                <div class="phone-notch"></div>
                <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/portfolio-healthcare.jpg" alt="Mobile App Architecture" style="width:100%; height:130px; object-fit:cover; display:block;">
                <div class="p-2 flex-grow-1 d-flex flex-column justify-content-between" style="background:rgba(8,14,30,0.95);">
                  <div class="phone-card-item mb-1">
                    <div style="font-size:0.72rem; font-weight:700; color:#38bdf8;">GeerSoft Mobile Suite</div>
                    <div style="font-size:0.62rem; color:var(--text-muted);">60fps iOS &amp; Android</div>
                  </div>
                  <div class="phone-card-item mb-1" style="border-color:rgba(52,211,153,0.3); background:rgba(52,211,153,0.1);">
                    <div style="font-size:0.72rem; font-weight:700; color:#34d399;">Real-Time Sync</div>
                    <div style="font-size:0.62rem; color:var(--text-muted);">Biometric &amp; Offline Cache</div>
                  </div>
                  <div class="text-center mt-1" style="font-size:0.65rem; color:#a5b4fc;">
                    <i class="bi bi-shield-check text-info"></i> Enterprise Hardened
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: Service Overview & Category Filter Tabs + 10 Service Cards
       ========================================================================= -->
  <section class="py-5 my-4" id="services-grid">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-4">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>COMPREHENSIVE CAPABILITIES</span>
        </div>
        <h2 class="section-title">
          Everything You Need to <br>
          <span class="gradient-text">Build and Grow Digitally</span>
        </h2>
        <p class="section-subtitle">
          Explore our technology and digital services, designed to address real business requirements and support your next stage of growth.
        </p>
      </div>

      <!-- Functional Category Navigation Pills -->
      <nav class="service-category-nav" role="tablist" aria-label="Service Categories">
        <button type="button" class="service-filter-btn active" onclick="filterServices('all', this)" role="tab" aria-selected="true">All Services</button>
        <button type="button" class="service-filter-btn" onclick="filterServices('development', this)" role="tab" aria-selected="false">Development</button>
        <button type="button" class="service-filter-btn" onclick="filterServices('ai', this)" role="tab" aria-selected="false">AI and Automation</button>
        <button type="button" class="service-filter-btn" onclick="filterServices('business', this)" role="tab" aria-selected="false">Business Solutions</button>
        <button type="button" class="service-filter-btn" onclick="filterServices('growth', this)" role="tab" aria-selected="false">Digital Growth</button>
        <button type="button" class="service-filter-btn" onclick="filterServices('support', this)" role="tab" aria-selected="false">Support</button>
      </nav>

      <!-- 10 Service Cards Responsive Grid -->
      <div class="row g-4" id="serviceCardsContainer">
        
        <!-- CARD 01 — WEBSITE DEVELOPMENT -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="development">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('website', 42); ?>
              </div>
              <span class="service-card-badge">WEB PLATFORMS</span>
            </div>
            <h3 class="service-card-title">Website Development</h3>
            <p class="service-card-desc">Create a modern, responsive website that communicates your brand, engages visitors, and supports your business goals.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Business and corporate websites</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Responsive UI/UX implementation</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Performance and technical SEO foundations</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/web-development" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Website Development')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 02 — CUSTOM SOFTWARE DEVELOPMENT -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="development business">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('software', 42); ?>
              </div>
              <span class="service-card-badge">TAILORED SAAS</span>
            </div>
            <h3 class="service-card-title">Custom Software Development</h3>
            <p class="service-card-desc">Build software tailored to your business processes, operational requirements, and long-term goals.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Business workflow applications</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Custom modules and integrations</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Maintainable application architecture</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/php-laravel-development" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Custom Software')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 03 — WEB APPLICATION DEVELOPMENT -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="development business">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('web application', 42); ?>
              </div>
              <span class="service-card-badge">PORTALS & APIS</span>
            </div>
            <h3 class="service-card-title">Web Application Development</h3>
            <p class="service-card-desc">Develop interactive web applications that help teams manage information, collaborate, and complete business tasks efficiently.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Admin dashboards and portals</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>API integrations and cloud sync</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Role-based access and workflow management</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/web-application-development" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Custom Software')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 04 — MOBILE APPLICATION DEVELOPMENT -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="development">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('mobile', 42); ?>
              </div>
              <span class="service-card-badge">IOS & ANDROID</span>
            </div>
            <h3 class="service-card-title">Mobile Application Development</h3>
            <p class="service-card-desc">Deliver convenient mobile experiences that help customers and teams access important services on the go.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Mobile-first user experiences</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>API and backend integration</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>App testing and deployment support</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/react-native-app-development" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Mobile App')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 05 — AI INTEGRATION AND AUTOMATION -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="ai">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('ai', 42); ?>
              </div>
              <span class="service-card-badge">INTELLIGENCE</span>
            </div>
            <h3 class="service-card-title">AI Integration and Automation</h3>
            <p class="service-card-desc">Explore practical AI capabilities and automation workflows that can reduce repetitive work and improve how your business uses information.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>AI chatbot integration</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Workflow automation pipelines</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>AI-assisted information processing</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/ai-integration-automation" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('AI Integration & Automation')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 06 — ERP AND BUSINESS SOLUTIONS -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="business">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('erp', 42); ?>
              </div>
              <span class="service-card-badge">OPERATIONS</span>
            </div>
            <h3 class="service-card-title">ERP and Business Solutions</h3>
            <p class="service-card-desc">Connect essential business processes through tailored systems that support operational visibility, organized information, and better coordination.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Business process management</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Operational dashboards and reports</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Module and database integration</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/erp-business-solutions" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('ERP & Business Systems')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 07 — DIGITAL MARKETING -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="growth">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('marketing', 42); ?>
              </div>
              <span class="service-card-badge">ACQUISITION</span>
            </div>
            <h3 class="service-card-title">Digital Marketing</h3>
            <p class="service-card-desc">Strengthen your online presence with digital campaigns and marketing activities aligned with your audience and business objectives.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Digital campaign planning</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Audience-focused content creation</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Campaign performance reporting</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/digital-marketing" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Digital Marketing')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 08 — SEARCH ENGINE OPTIMIZATION -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="growth">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('seo', 42); ?>
              </div>
              <span class="service-card-badge">SEARCH VISIBILITY</span>
            </div>
            <h3 class="service-card-title">Search Engine Optimization</h3>
            <p class="service-card-desc">Improve your website's technical foundations, content structure, and search visibility through appropriate SEO practices.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Technical SEO audits</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>On-page optimization & schema</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Search performance monitoring</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/professional-seo-services" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Digital Marketing')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 09 — UI/UX DESIGN -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="support development">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('ui ux design', 42); ?>
              </div>
              <span class="service-card-badge">ERGONOMICS</span>
            </div>
            <h3 class="service-card-title">UI/UX Design</h3>
            <p class="service-card-desc">Create intuitive digital experiences that combine attractive visual design with clear navigation and practical usability.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Interface and visual design systems</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>User journeys and wireframe prototypes</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Responsive design tokens</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/ui-ux-design" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('UI/UX Design')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

        <!-- CARD 10 — WEBSITE MAINTENANCE AND TECHNICAL SUPPORT -->
        <div class="col-lg-4 col-md-6 service-item-wrapper" data-category="support">
          <div class="service-pro-card">
            <div class="service-card-top-row">
              <div class="service-card-3d-icon">
                <?php echo get_service_icon('support', 42); ?>
              </div>
              <span class="service-card-badge">RELIABILITY</span>
            </div>
            <h3 class="service-card-title">Maintenance & Technical Support</h3>
            <p class="service-card-desc">Keep your digital products maintainable with agreed technical support, updates, troubleshooting, and performance reviews.</p>
            <ul class="service-cap-list">
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Technical issue resolution & hotfixes</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Security patches & dependency updates</span></li>
              <li><svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Performance and uptime checks</span></li>
            </ul>
            <div class="service-card-actions">
              <a href="<?php echo $siteUrl; ?>/services/website-maintenance-support" class="service-learn-more">
                <span>Learn More</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <button type="button" class="service-discuss-btn" onclick="openServiceQuote('Technical Support')">
                Discuss This Service
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 3: Technology That Solves Real Business Challenges (3 Solution Panels)
       ========================================================================= -->
  <section class="py-5 my-4" id="solutions-panels">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>HIGH-IMPACT SOLUTIONS</span>
        </div>
        <h2 class="section-title">
          Technology That Solves <br>
          <span class="gradient-text">Real Business Challenges</span>
        </h2>
        <p class="section-subtitle">
          Explore structured solution architectures engineered around your high-value operational workflows and growth objectives.
        </p>
      </div>

      <div class="row g-4">
        <!-- PANEL A — AI AND BUSINESS AUTOMATION -->
        <div class="col-lg-4 col-md-6">
          <div class="solution-panel-card">
            <span class="solution-panel-badge">SOLUTION // 01</span>
            <h3 class="solution-panel-heading">AI & Business Automation</h3>
            <p class="solution-panel-desc">
              Explore targeted automation workflows and natural language models designed to streamline repetitive administrative duties.
            </p>
            <ul class="solution-use-case-list">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Customer inquiry automation & chat</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>AI-powered knowledge assistance</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Repetitive task automation pipelines</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Document and information processing</span>
              </li>
            </ul>
            <button type="button" onclick="openQuoteModal('AI Integration & Automation')" class="btn-ai-primary w-100 justify-content-center">
              <span>Explore AI Solutions</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- PANEL B — CUSTOM BUSINESS MANAGEMENT SYSTEMS -->
        <div class="col-lg-4 col-md-6">
          <div class="solution-panel-card">
            <span class="solution-panel-badge" style="background:rgba(124,58,237,0.15); border-color:rgba(168,85,247,0.3); color:#c084fc;">SOLUTION // 02</span>
            <h3 class="solution-panel-heading">Custom Business Systems</h3>
            <p class="solution-panel-desc">
              Connect operational silos through unified digital platforms engineered around your specific inventory, sales, and employee flows.
            </p>
            <ul class="solution-use-case-list">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>HR and employee management</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Inventory and stock management</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Sales and purchase automated workflows</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Business reports and telemetry dashboards</span>
              </li>
            </ul>
            <button type="button" onclick="openQuoteModal('ERP & Business Systems')" class="btn-ai-primary w-100 justify-content-center">
              <span>Discuss Your Business System</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- PANEL C — DIGITAL PRESENCE AND GROWTH -->
        <div class="col-lg-4 col-md-6">
          <div class="solution-panel-card">
            <span class="solution-panel-badge" style="background:rgba(52,211,153,0.15); border-color:rgba(52,211,153,0.3); color:#34d399;">SOLUTION // 03</span>
            <h3 class="solution-panel-heading">Digital Presence & Growth</h3>
            <p class="solution-panel-desc">
              Build an authoritative online identity with modern, accessible web experiences and data-driven visibility campaigns.
            </p>
            <ul class="solution-use-case-list">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#34d399;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Website creation and performance overhaul</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#34d399;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Technical SEO foundations & audit</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#34d399;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Conversion-focused user experience design</span>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#34d399;"><polyline points="20 6 9 17 4 12"></polyline></svg>
                <span>Digital marketing and acquisition support</span>
              </li>
            </ul>
            <button type="button" onclick="openQuoteModal('Website Development')" class="btn-ai-primary w-100 justify-content-center">
              <span>Grow Your Digital Presence</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 4: Our Process: From Idea to Launch
       ========================================================================= -->
  <section class="process-section py-5 my-4" id="process">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>STRUCTURED LIFECYCLE</span>
        </div>
        <h2 class="section-title">
          Our Process: <br>
          <span class="gradient-text">From Idea to Launch</span>
        </h2>
        <p class="section-subtitle">
          A disciplined 6-stage engineering process ensuring predictable delivery, clear milestones, and verified code quality.
        </p>
      </div>

      <div class="process-timeline-wrap">
        <div class="process-track d-none d-lg-block"></div>

        <div class="row g-4">
          <!-- Step 01 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              </div>
              <div class="process-step-num">STEP 01</div>
              <h4 class="process-step-title">Discovery</h4>
              <p class="process-step-desc">Understand business goals, audience, project scope, and functional requirements.</p>
            </div>
          </div>

          <!-- Step 02 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              </div>
              <div class="process-step-num">STEP 02</div>
              <h4 class="process-step-title">Planning</h4>
              <p class="process-step-desc">Identify priorities, technology options, deliverables, and sprint milestones.</p>
            </div>
          </div>

          <!-- Step 03 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
              </div>
              <div class="process-step-num">STEP 03</div>
              <h4 class="process-step-title">Design</h4>
              <p class="process-step-desc">Develop wireframes, visual concepts, intuitive interfaces, and user experiences.</p>
            </div>
          </div>

          <!-- Step 04 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
              </div>
              <div class="process-step-num">STEP 04</div>
              <h4 class="process-step-title">Development</h4>
              <p class="process-step-desc">Implement the approved design, modular architecture, and required functionality.</p>
            </div>
          </div>

          <!-- Step 05 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
              </div>
              <div class="process-step-num">STEP 05</div>
              <h4 class="process-step-title">Testing</h4>
              <p class="process-step-desc">Validate usability, responsive behavior, security, performance, and key workflows.</p>
            </div>
          </div>

          <!-- Step 06 -->
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="process-step-item">
              <div class="process-step-node">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>
              </div>
              <div class="process-step-num">STEP 06</div>
              <h4 class="process-step-title">Launch & Support</h4>
              <p class="process-step-desc">Deploy the approved solution to production and provide agreed technical support.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 5: Built with the Right Technology for the Job
       ========================================================================= -->
  <section class="tech-stack-section py-5 my-4" id="technologies">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>PROVEN FRAMEWORKS</span>
        </div>
        <h2 class="section-title">
          Built with the Right <br>
          <span class="gradient-text">Technology for the Job</span>
        </h2>
        <p class="section-subtitle">
          We build with industry-standard, battle-tested technologies and scalable frameworks to ensure reliability, security, and speed.
        </p>
      </div>

      <div class="row g-4">
        <!-- Frontend Development -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-window-sidebar text-info"></i> Frontend Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">React.js</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Next.js</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">HTML5 & CSS3</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">JavaScript (ES6+)</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Vue.js</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Tailwind CSS</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Bootstrap 5</span>
            </div>
          </div>
        </div>

        <!-- Backend Development -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-server text-info"></i> Backend Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">PHP 8+</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Laravel Framework</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Node.js</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Express.js</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">RESTful APIs</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Python</span>
            </div>
          </div>
        </div>

        <!-- Mobile Development -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-phone text-info"></i> Mobile Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">React Native</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Flutter</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Android SDK</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">iOS Swift</span>
            </div>
          </div>
        </div>

        <!-- Databases -->
        <div class="col-lg-3 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-database text-info"></i> Databases
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">MySQL</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">PostgreSQL</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">MongoDB</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Redis</span>
            </div>
          </div>
        </div>

        <!-- CMS and E-commerce -->
        <div class="col-lg-3 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-cart3 text-info"></i> CMS & E-commerce
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">WordPress</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">WooCommerce</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Custom CMS</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Shopify</span>
            </div>
          </div>
        </div>

        <!-- Cloud and Deployment -->
        <div class="col-lg-3 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-cloud text-info"></i> Cloud & Deployment
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">AWS Cloud</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">DigitalOcean</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Docker</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Linux / Nginx</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Git / GitHub</span>
            </div>
          </div>
        </div>

        <!-- AI and Automation -->
        <div class="col-lg-3 col-md-6">
          <div class="why-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-robot text-info"></i> AI & Automation
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">OpenAI API</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">LangChain</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Custom Webhooks</span>
              <span class="badge bg-secondary-subtle text-light border border-secondary p-2">Python Automation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: A Practical Approach to Digital Excellence (6 Benefit Cards)
       ========================================================================= -->
  <section class="why-us-section py-5 my-4" id="benefits">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>ENGINEERING DISCIPLINE</span>
        </div>
        <h2 class="section-title">
          A Practical Approach to <br>
          <span class="gradient-text">Digital Excellence</span>
        </h2>
        <p class="section-subtitle">
          Six foundational principles that deliver reliable results, clean architectures, and long-term business value.
        </p>
      </div>

      <div class="row g-4">
        <!-- 01 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
            </div>
            <h4 class="why-title">01 — Business-Focused Solutions</h4>
            <p class="why-desc">Solutions planned around real requirements and business goals, ensuring every technical implementation supports your operational targets.</p>
          </div>
        </div>

        <!-- 02 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
            </div>
            <h4 class="why-title">02 — Modern User Experiences</h4>
            <p class="why-desc">Interfaces designed to be clear, intuitive, and responsive, minimizing user confusion and maximizing engagement across all viewports.</p>
          </div>
        </div>

        <!-- 03 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
            </div>
            <h4 class="why-title">03 — Maintainable Development</h4>
            <p class="why-desc">Organized code and reusable components where appropriate, making future updates, maintenance, and expansions straightforward.</p>
          </div>
        </div>

        <!-- 04 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
            </div>
            <h4 class="why-title">04 — Performance Awareness</h4>
            <p class="why-desc">Attention to asset optimization, loading speed, and efficient implementation to guarantee high reliability and lightning response times.</p>
          </div>
        </div>

        <!-- 05 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <h4 class="why-title">05 — Transparent Communication</h4>
            <p class="why-desc">Clear discussion of scope, deliverables, and project progress, keeping you informed at every milestone without confusing technical jargon.</p>
          </div>
        </div>

        <!-- 06 -->
        <div class="col-lg-4 col-md-6">
          <div class="why-card h-100">
            <div class="why-icon-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <h4 class="why-title">06 — Ongoing Technical Support</h4>
            <p class="why-desc">Support and maintenance options based on the agreed service scope, providing security reviews, troubleshooting, and reliable peace of mind.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 7: Frequently Asked Questions (Accessible Accordion)
       ========================================================================= -->
  <section class="py-5 my-4" id="faq">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>CLEAR ANSWERS</span>
        </div>
        <h2 class="section-title">
          Frequently Asked <br>
          <span class="gradient-text">Questions</span>
        </h2>
        <p class="section-subtitle">
          Find transparent answers about our technology capabilities, project scoping, and ongoing service engagements.
        </p>
      </div>

      <div class="faq-accordion-wrap">
        <!-- Q1 -->
        <div class="faq-card-item active">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="true">
            <span>What services does GeerSoft IT Solutions provide?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            GeerSoft offers digital and technology services such as website development, software and application development, business solutions, and digital marketing, subject to the company's confirmed service portfolio.
          </div>
        </div>

        <!-- Q2 -->
        <div class="faq-card-item">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Can you build a website tailored to my business?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            Yes, project requirements can be discussed to determine the appropriate website structure, design, functionality, and implementation approach.
          </div>
        </div>

        <!-- Q3 -->
        <div class="faq-card-item">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Can you develop custom business management software?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            Custom software requirements can be evaluated based on your workflows, user roles, integrations, and reporting needs.
          </div>
        </div>

        <!-- Q4 -->
        <div class="faq-card-item">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Do you provide AI integration services?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            AI integration and automation opportunities can be assessed based on the business use case, data availability, technical requirements, and feasibility.
          </div>
        </div>

        <!-- Q5 -->
        <div class="faq-card-item">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
            <span>How can I request a project quotation?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            Contact GeerSoft with your project requirements, desired features, timeline, and budget expectations to discuss the appropriate scope.
          </div>
        </div>

        <!-- Q6 -->
        <div class="faq-card-item">
          <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
            <span>Do you provide website maintenance?</span>
            <div class="faq-toggle-icon">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
          </button>
          <div class="faq-answer-collapse">
            Maintenance and support requirements can be discussed according to the existing service offerings and the support scope agreed for the project.
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 8: High-Impact Call to Action
       ========================================================================= -->
  <section class="py-5 my-4" id="services-cta">
    <div class="container-xl">
      <div class="cta-banner-card text-center p-5 rounded-4 position-relative overflow-hidden">
        <div class="hero-badge mb-3 d-inline-flex">
          <span class="badge-dot"></span>
          <span>START YOUR PROJECT</span>
        </div>

        <h2 class="display-5 fw-bold text-white mb-3" style="letter-spacing:-0.02em;">
          Let's Build the Right <br>
          <span class="gradient-text">Digital Solution for Your Business</span>
        </h2>

        <p class="text-muted max-w-700 mx-auto mb-4" style="font-size:1.1rem; line-height:1.75;">
          Tell us what you want to achieve. We'll discuss your requirements and explore the most suitable technology approach for your project.
        </p>

        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <button onclick="openQuoteModal()" class="btn-ai-primary">
            <span>Get a Free Quote</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <a href="/contact" class="btn-ai-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>Contact Our Team</span>
          </a>
        </div>
      </div>
    </div>
  </section>


<?php
$extraFooter = '
  <script>
    function filterServices(category, btn) {
      document.querySelectorAll(".filter-pill-btn").forEach(b => {
        b.classList.remove("active");
        b.setAttribute("aria-selected", "false");
      });
      if (btn) {
        btn.classList.add("active");
        btn.setAttribute("aria-selected", "true");
      }

      const items = document.querySelectorAll(".service-item-wrapper");
      items.forEach(item => {
        const cats = item.getAttribute("data-category") || "";
        if (category === "all" || cats.includes(category)) {
          item.classList.remove("d-none-filter");
        } else {
          item.classList.add("d-none-filter");
        }
      });
    }

    function openServiceQuote(serviceName) {
      if (window.openQuoteModal) {
        window.openQuoteModal();
        if (serviceName) {
          setTimeout(() => {
            const radio = document.querySelector(\'input[name="service"][value*="\' + serviceName + \'"]\');
            if (radio) {
              radio.checked = true;
            }
          }, 50);
        }
      }
    }
  </script>
';
include "include/footer.php";
?>
