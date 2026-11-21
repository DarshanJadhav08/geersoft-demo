<?php
$pageTitle       = "Portfolio | Website and Software Projects | GeerSoft IT Solutions";
$pageDescription = "Explore genuine GeerSoft IT Solutions projects, showcasing website development, custom software, ERP systems, web applications, and AI integrations.";
$pageKeywords    = "GeerSoft IT Solutions portfolio, web development projects, custom software portfolio, ERP solutions, UI UX design, cloud infrastructure, AI automation Mumbai";
$pageCanonical   = "https://geersoft.in/portfolio";
$extraCss        = ["assets/stylesheets/ai-portfolio.css"];
$activeNav       = "portfolio";

include "include/header.php";
?>

  <!-- =========================================================================
       Section 1: AI-Powered Portfolio Hero Section
       ========================================================================= -->
  <section class="hero-section" id="portfolio-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Hero Left Column -->
        <div class="col-lg-7">
          

          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span>VERIFIED CLIENT DELIVERABLES &amp; CASE STUDIES</span>
          </div>

          <h1 class="hero-title">
            Turning Ideas into <br>
            <span class="gradient-text">Digital Experiences</span>
          </h1>

          <p class="hero-subtitle">
            Explore our portfolio of websites, web applications, custom software, ERP solutions, and digital platforms built to solve real business challenges.
          </p>

          <div class="hero-cta-group">
            <a href="#portfolio-grid" class="btn-ai-primary">
              <span>Explore Our Projects</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <button onclick="openQuoteModal()" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
              <span>Discuss Your Project</span>
            </button>
          </div>

          <!-- Hero Metrics Bar -->
          <div class="hero-metrics-bar">
            <div class="metric-item">
              <div class="metric-val">100%</div>
              <div class="metric-lbl">Custom Code</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">99.99%</div>
              <div class="metric-lbl">Architecture SLA</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">End-to-End</div>
              <div class="metric-lbl">Lifecycle Support</div>
            </div>
          </div>
        </div>

        <!-- Hero Right Column: 3D Floating Mockup Composition -->
        <div class="col-lg-5">
          <div class="portfolio-hero-composition">
            
            <!-- Primary Floating Browser Mockup (FinTech Dashboard) -->
            <div class="port-hero-browser">
              <div class="port-browser-header">
                <div class="port-browser-dots">
                  <span class="port-dot red"></span>
                  <span class="port-dot yellow"></span>
                  <span class="port-dot green"></span>
                </div>
                <div class="port-browser-url">https://fintech-analytics.internal</div>
                <div style="width:24px;"></div>
              </div>
              <div class="port-browser-preview">
                <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-2.jpg" alt="FinTech Analytics Preview">
              </div>
            </div>

            <!-- Secondary Floating Mobile Device Mockup (E-Commerce) -->
            <div class="port-hero-mobile">
              <div class="port-phone-notch"></div>
              <div class="port-phone-preview">
                <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-1.jpg" alt="Mobile E-Commerce Preview">
              </div>
            </div>

            <!-- Floating Status Badges -->
            <div class="port-hero-badge-float top-left">
              <div class="badge-glow-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <div>
                <div style="font-size:0.75rem; color:var(--neon-cyan);">Enterprise Ready</div>
                <div>High-Availability</div>
              </div>
            </div>

            <div class="port-hero-badge-float bottom-left">
              <div class="badge-glow-icon">
                <i class="bi bi-cpu-fill"></i>
              </div>
              <div>
                <div style="font-size:0.75rem; color:#10b981;">Modern Stack</div>
                <div>React &amp; Cloud APIs</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: Functional Category Filter Bar
       ========================================================================= -->
  <section class="portfolio-filter-section" id="portfolio-filter">
    <div class="container-xl text-center">
      <div class="section-badge mb-3">
        <span class="badge-dot"></span>
        <span>FILTER BY SPECIALIZATION</span>
      </div>

      <nav class="port-filter-nav" role="tablist" aria-label="Portfolio Category Filters">
        <button type="button" class="port-filter-btn active" data-filter="all" onclick="filterPortfolio('all', this)" role="tab" aria-selected="true">
          <span>All Projects</span>
          <span class="filter-count">6</span>
        </button>
        <button type="button" class="port-filter-btn" data-filter="websites" onclick="filterPortfolio('websites', this)" role="tab" aria-selected="false">
          <span>Websites</span>
          <span class="filter-count">2</span>
        </button>
        <button type="button" class="port-filter-btn" data-filter="web-apps" onclick="filterPortfolio('web-apps', this)" role="tab" aria-selected="false">
          <span>Web Applications</span>
          <span class="filter-count">3</span>
        </button>
        <button type="button" class="port-filter-btn" data-filter="software-erp" onclick="filterPortfolio('software-erp', this)" role="tab" aria-selected="false">
          <span>Software and ERP</span>
          <span class="filter-count">3</span>
        </button>
        <button type="button" class="port-filter-btn" data-filter="mobile-apps" onclick="filterPortfolio('mobile-apps', this)" role="tab" aria-selected="false">
          <span>Mobile Applications</span>
          <span class="filter-count">1</span>
        </button>
        <button type="button" class="port-filter-btn" data-filter="ai-automation" onclick="filterPortfolio('ai-automation', this)" role="tab" aria-selected="false">
          <span>AI and Automation</span>
          <span class="filter-count">2</span>
        </button>
      </nav>
    </div>
  </section>


  <!-- =========================================================================
       Section 3: Selected Projects Grid
       ========================================================================= -->
  <section class="portfolio-grid-section" id="portfolio-grid">
    <div class="container-xl">
      <div class="row g-4" id="portfolioGridItems">

        <!-- Project 1: Luxury E-Commerce Platforms -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="websites web-apps">
          <div class="project-card-ai">
            <div class="project-browser-frame">
              <div class="project-browser-dots">
                <span class="port-dot red"></span>
                <span class="port-dot yellow"></span>
                <span class="port-dot green"></span>
              </div>
              <div class="project-browser-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>luxury-ecommerce.store</span>
              </div>
            </div>

            <div class="project-media-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-1.jpg" alt="Luxury E-Commerce Platforms Preview" loading="lazy">
              <span class="project-category-badge">Web Development</span>
              <span class="project-status-badge"><span class="dot"></span> Live</span>
            </div>

            <div class="project-card-body">
              <h3 class="project-card-title">Luxury E-Commerce Platforms</h3>
              <p class="project-card-desc">
                High-end online boutique with custom headless CMS, AR product visualization, and frictionless Stripe checkout.
              </p>

              <div class="project-tech-tags">
                <span class="project-tech-pill">React</span>
                <span class="project-tech-pill">Node.js</span>
                <span class="project-tech-pill">MongoDB</span>
                <span class="project-tech-pill">Stripe</span>
              </div>

              <div class="project-card-footer">
                <button type="button" class="btn-project-study" onclick="openPortfolioModal(1)">
                  <span>Case Study</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <button type="button" class="btn-project-quote" onclick="openProjectQuote('Luxury E-Commerce')">
                  Discuss Project
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 2: FinTech Analytics Dashboard -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="web-apps software-erp">
          <div class="project-card-ai">
            <div class="project-browser-frame">
              <div class="project-browser-dots">
                <span class="port-dot red"></span>
                <span class="port-dot yellow"></span>
                <span class="port-dot green"></span>
              </div>
              <div class="project-browser-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>fintech-analytics.internal</span>
              </div>
            </div>

            <div class="project-media-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-2.jpg" alt="FinTech Analytics Dashboard Preview" loading="lazy">
              <span class="project-category-badge">Software &amp; FinTech</span>
              <span class="project-status-badge"><span class="dot"></span> Verified</span>
            </div>

            <div class="project-card-body">
              <h3 class="project-card-title">FinTech Analytics Dashboard</h3>
              <p class="project-card-desc">
                Enterprise-grade analytics platform with real-time financial telemetry, role-based access, and encrypted data storage.
              </p>

              <div class="project-tech-tags">
                <span class="project-tech-pill">React</span>
                <span class="project-tech-pill">TypeScript</span>
                <span class="project-tech-pill">PostgreSQL</span>
                <span class="project-tech-pill">AWS</span>
              </div>

              <div class="project-card-footer">
                <button type="button" class="btn-project-study" onclick="openPortfolioModal(2)">
                  <span>Case Study</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <button type="button" class="btn-project-quote" onclick="openProjectQuote('FinTech Analytics Dashboard')">
                  Discuss Project
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 3: Complete Brand Identity Suite -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="websites">
          <div class="project-card-ai">
            <div class="project-browser-frame">
              <div class="project-browser-dots">
                <span class="port-dot red"></span>
                <span class="port-dot yellow"></span>
                <span class="port-dot green"></span>
              </div>
              <div class="project-browser-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>brand-identity.startup.com</span>
              </div>
            </div>

            <div class="project-media-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-3.jpg" alt="Complete Brand Identity Suite Preview" loading="lazy">
              <span class="project-category-badge">Branding &amp; UI</span>
              <span class="project-status-badge"><span class="dot"></span> Delivered</span>
            </div>

            <div class="project-card-body">
              <h3 class="project-card-title">Complete Brand Identity Suite</h3>
              <p class="project-card-desc">
                End-to-end visual branding including typography guidelines, vector assets, and digital marketing kits for a high-growth startup.
              </p>

              <div class="project-tech-tags">
                <span class="project-tech-pill">Illustrator</span>
                <span class="project-tech-pill">Photoshop</span>
                <span class="project-tech-pill">Figma</span>
                <span class="project-tech-pill">Design Tokens</span>
              </div>

              <div class="project-card-footer">
                <button type="button" class="btn-project-study" onclick="openPortfolioModal(3)">
                  <span>Case Study</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <button type="button" class="btn-project-quote" onclick="openProjectQuote('Brand Identity Suite')">
                  Discuss Project
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 4: UI/UX Design System -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="web-apps software-erp">
          <div class="project-card-ai">
            <div class="project-browser-frame">
              <div class="project-browser-dots">
                <span class="port-dot red"></span>
                <span class="port-dot yellow"></span>
                <span class="port-dot green"></span>
              </div>
              <div class="project-browser-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>design-system.saas.io</span>
              </div>
            </div>

            <div class="project-media-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-4.jpg" alt="UI/UX Design System Preview" loading="lazy">
              <span class="project-category-badge">UI/UX &amp; SaaS</span>
              <span class="project-status-badge"><span class="dot"></span> Design Token</span>
            </div>

            <div class="project-card-body">
              <h3 class="project-card-title">UI/UX Design System</h3>
              <p class="project-card-desc">
                Scalable design system with 200+ reusable components, WCAG AAA accessibility standards, and multi-theme tokens.
              </p>

              <div class="project-tech-tags">
                <span class="project-tech-pill">Figma</span>
                <span class="project-tech-pill">Storybook</span>
                <span class="project-tech-pill">Design Tokens</span>
                <span class="project-tech-pill">WCAG 2.1</span>
              </div>

              <div class="project-card-footer">
                <button type="button" class="btn-project-study" onclick="openPortfolioModal(4)">
                  <span>Case Study</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <button type="button" class="btn-project-quote" onclick="openProjectQuote('UI/UX Design System')">
                  Discuss Project
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 5: Cloud-Based IT Infrastructure -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="software-erp ai-automation">
          <div class="project-card-ai">
            <div class="project-browser-frame">
              <div class="project-browser-dots">
                <span class="port-dot red"></span>
                <span class="port-dot yellow"></span>
                <span class="port-dot green"></span>
              </div>
              <div class="project-browser-url">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>infra.cloud-enterprise.net</span>
              </div>
            </div>

            <div class="project-media-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-5.jpg" alt="Cloud-Based IT Infrastructure Preview" loading="lazy">
              <span class="project-category-badge">Cloud &amp; DevOps</span>
              <span class="project-status-badge"><span class="dot"></span> 99.99% SLA</span>
            </div>

            <div class="project-card-body">
              <h3 class="project-card-title">Cloud-Based IT Infrastructure</h3>
              <p class="project-card-desc">
                Enterprise cloud migration architecture featuring Docker containers, Kubernetes orchestration, and automated backup pipelines.
              </p>

              <div class="project-tech-tags">
                <span class="project-tech-pill">AWS</span>
                <span class="project-tech-pill">Docker</span>
                <span class="project-tech-pill">Kubernetes</span>
                <span class="project-tech-pill">Terraform</span>
              </div>

              <div class="project-card-footer">
                <button type="button" class="btn-project-study" onclick="openPortfolioModal(5)">
                  <span>Case Study</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </button>
                <button type="button" class="btn-project-quote" onclick="openProjectQuote('Cloud IT Infrastructure')">
                  Discuss Project
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Project 6: Confidential Mobile & Enterprise ERP Architecture (Client NDA) -->
        <div class="col-lg-4 col-md-6 port-item-wrapper" data-category="mobile-apps software-erp ai-automation">
          <div class="nda-confidential-card">
            <div class="nda-card-top">
              <div class="nda-icon-badge">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <h3 class="nda-card-title">Enterprise Mobile &amp; ERP Portals</h3>
              <p class="nda-card-desc">
                High-security cross-platform mobile apps (React Native / iOS / Android) and customized ERP portals developed under client confidentiality agreements.
              </p>

              <ul class="nda-feature-list">
                <li><i class="bi bi-check2-circle"></i> Biometric authentication &amp; encrypted offline cache</li>
                <li><i class="bi bi-check2-circle"></i> Real-time push notifications &amp; WebSocket sync</li>
                <li><i class="bi bi-check2-circle"></i> Role-based internal workflow automations</li>
              </ul>

              <div class="project-tech-tags">
                <span class="project-tech-pill">React Native</span>
                <span class="project-tech-pill">iOS / Android</span>
                <span class="project-tech-pill">Laravel API</span>
                <span class="project-tech-pill">PostgreSQL</span>
              </div>
            </div>

            <div class="project-card-footer">
              <span class="text-white-50" style="font-size:0.8rem;"><i class="bi bi-file-earmark-lock me-1"></i> NDA Protected</span>
              <button type="button" class="btn-project-quote" onclick="openProjectQuote('Confidential Mobile & ERP Solutions')">
                Request Private Walkthrough
              </button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 4: Optional Verified Featured Project Spotlight
       ========================================================================= -->
  <section class="spotlight-section" id="spotlight">
    <div class="container-xl">
      <div class="spotlight-card">
        <div class="row align-items-center g-5">
          
          <!-- Spotlight Left: Architectural Capabilities -->
          <div class="col-lg-7">
            <div class="spotlight-badge">
              <i class="bi bi-stars"></i>
              <span>DESIGNED AROUND REAL BUSINESS NEEDS</span>
            </div>

            <h2 class="spotlight-title">
              FinTech Analytics &amp; <br>
              <span class="gradient-text">Real-Time Intelligence Suite</span>
            </h2>

            <p class="spotlight-desc">
              How GeerSoft engineered a mission-critical financial analytics platform combining micro-millisecond data pipelines, strict role-based access control, and seamless multi-tenant dashboard rendering.
            </p>

            <div class="spotlight-specs-grid">
              <div class="spec-item">
                <div class="spec-icon">
                  <i class="bi bi-activity"></i>
                </div>
                <div class="spec-text">
                  <h6>Real-Time Telemetry</h6>
                  <p>Sub-second streaming of transaction volumes &amp; balance reconciliations.</p>
                </div>
              </div>

              <div class="spec-item">
                <div class="spec-icon">
                  <i class="bi bi-key-fill"></i>
                </div>
                <div class="spec-text">
                  <h6>Granular RBAC</h6>
                  <p>Role-based multi-tier permissions conforming to regulatory compliance.</p>
                </div>
              </div>

              <div class="spec-item">
                <div class="spec-icon">
                  <i class="bi bi-shield-shaded"></i>
                </div>
                <div class="spec-text">
                  <h6>Bank-Grade Security</h6>
                  <p>Encrypted database storage, TLS 1.3 transit, and automated audit logs.</p>
                </div>
              </div>

              <div class="spec-item">
                <div class="spec-icon">
                  <i class="bi bi-cloud-check-fill"></i>
                </div>
                <div class="spec-text">
                  <h6>99.99% Availability</h6>
                  <p>Multi-region container clustering with automated failover routing.</p>
                </div>
              </div>
            </div>

            <div class="d-flex flex-wrap gap-3">
              <button type="button" class="btn-ai-primary" onclick="openPortfolioModal(2)">
                <span>View Full Architecture Case Study</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </button>
              <button type="button" class="btn-ai-secondary" onclick="openProjectQuote('FinTech Analytics Architecture')">
                <span>Request Similar Architecture</span>
              </button>
            </div>
          </div>

          <!-- Spotlight Right: Layered 3D Mockup Frame -->
          <div class="col-lg-5">
            <div class="spotlight-mockup-frame">
              <div class="spotlight-mockup-header">
                <div class="port-browser-dots">
                  <span class="port-dot red"></span>
                  <span class="port-dot yellow"></span>
                  <span class="port-dot green"></span>
                </div>
                <div class="port-browser-url">analytics-engine.geersoft.internal</div>
                <div style="width:24px;"></div>
              </div>
              <img src="<?php echo $siteUrl; ?>/assets/images/portfolio/product-2.jpg" alt="FinTech Analytics Dashboard Full Mockup" class="spotlight-mockup-img">

              <div class="spotlight-floating-stat">
                <div class="stat-glow-badge">99.99%</div>
                <div class="stat-label-text">
                  <strong>Verified SLA</strong><br>
                  Zero Unplanned Outages
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 5: Capabilities Bridge
       ========================================================================= -->
  <section class="capabilities-section" id="capabilities">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>INTEGRATED CAPABILITIES</span>
        </div>
        <h2 class="section-title">
          From Digital Design to <span class="gradient-text">Business Solutions</span>
        </h2>
        <p class="section-description">
          We bring together product design, robust backend engineering, resilient cloud infrastructure, and practical AI automation to deliver unified business value.
        </p>
      </div>

      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="capability-card">
            <div class="capability-icon-wrap">
              <i class="bi bi-bezier2"></i>
            </div>
            <h4 class="capability-title">01 Strategy &amp; Architecture</h4>
            <p class="capability-desc">
              Aligning database schemas, technology stacks, and security protocols directly with long-term business scale and operational goals.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="capability-card">
            <div class="capability-icon-wrap">
              <i class="bi bi-code-slash"></i>
            </div>
            <h4 class="capability-title">02 Custom Engineering</h4>
            <p class="capability-desc">
              Building custom web platforms, scalable SaaS products, and enterprise applications using modern, clean, maintainable codebases.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="capability-card">
            <div class="capability-icon-wrap">
              <i class="bi bi-hdd-network-fill"></i>
            </div>
            <h4 class="capability-title">03 Cloud &amp; Security</h4>
            <p class="capability-desc">
              Containerized deployments, Kubernetes orchestration, automated backup pipelines, and proactive security hardening.
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="capability-card">
            <div class="capability-icon-wrap">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h4 class="capability-title">04 AI &amp; Automation</h4>
            <p class="capability-desc">
              Connecting machine learning models, intelligent workflow triggers, and automated notification bots to optimize business output.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: Technology Behind the Work
       ========================================================================= -->
  <section class="tech-stack-section" id="tech-stack">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>ENTERPRISE TECH STACK</span>
        </div>
        <h2 class="section-title">
          Technology Behind <span class="gradient-text">the Work</span>
        </h2>
        <p class="section-description">
          Battle-tested modern programming frameworks, cloud platforms, and tooling deployed across our client implementations.
        </p>
      </div>

      <div class="row g-4">
        <!-- Group 1: Frontend -->
        <div class="col-lg-3 col-md-6">
          <div class="tech-group-card">
            <div class="tech-group-header">
              <div class="tech-group-icon">
                <i class="bi bi-browser-chrome"></i>
              </div>
              <h4 class="tech-group-title">Frontend</h4>
            </div>
            <div class="tech-pill-container">
              <span class="tech-badge-chip">React.js</span>
              <span class="tech-badge-chip">Next.js</span>
              <span class="tech-badge-chip">TypeScript</span>
              <span class="tech-badge-chip">Tailwind CSS</span>
              <span class="tech-badge-chip">Vue.js</span>
              <span class="tech-badge-chip">HTML5 / CSS3</span>
            </div>
          </div>
        </div>

        <!-- Group 2: Backend -->
        <div class="col-lg-3 col-md-6">
          <div class="tech-group-card">
            <div class="tech-group-header">
              <div class="tech-group-icon">
                <i class="bi bi-hdd-stack-fill"></i>
              </div>
              <h4 class="tech-group-title">Backend</h4>
            </div>
            <div class="tech-pill-container">
              <span class="tech-badge-chip">Node.js</span>
              <span class="tech-badge-chip">PHP Laravel</span>
              <span class="tech-badge-chip">Python</span>
              <span class="tech-badge-chip">REST APIs</span>
              <span class="tech-badge-chip">GraphQL</span>
              <span class="tech-badge-chip">Microservices</span>
            </div>
          </div>
        </div>

        <!-- Group 3: Database & Cloud -->
        <div class="col-lg-3 col-md-6">
          <div class="tech-group-card">
            <div class="tech-group-header">
              <div class="tech-group-icon">
                <i class="bi bi-cloud-arrow-up-fill"></i>
              </div>
              <h4 class="tech-group-title">Cloud &amp; DevOps</h4>
            </div>
            <div class="tech-pill-container">
              <span class="tech-badge-chip">PostgreSQL</span>
              <span class="tech-badge-chip">MongoDB</span>
              <span class="tech-badge-chip">AWS Cloud</span>
              <span class="tech-badge-chip">Docker</span>
              <span class="tech-badge-chip">Kubernetes</span>
              <span class="tech-badge-chip">Terraform</span>
            </div>
          </div>
        </div>

        <!-- Group 4: Design & Delivery -->
        <div class="col-lg-3 col-md-6">
          <div class="tech-group-card">
            <div class="tech-group-header">
              <div class="tech-group-icon">
                <i class="bi bi-tools"></i>
              </div>
              <h4 class="tech-group-title">Design &amp; Quality</h4>
            </div>
            <div class="tech-pill-container">
              <span class="tech-badge-chip">Figma</span>
              <span class="tech-badge-chip">Storybook</span>
              <span class="tech-badge-chip">Git / GitHub</span>
              <span class="tech-badge-chip">CI/CD Pipelines</span>
              <span class="tech-badge-chip">Jest &amp; Cypress</span>
              <span class="tech-badge-chip">WCAG Standards</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 7: General Development Process
       ========================================================================= -->
  <section class="process-section" id="process">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>STRUCTURED EXECUTION</span>
        </div>
        <h2 class="section-title">
          Our Development <span class="gradient-text">Process</span>
        </h2>
        <p class="section-description">
          A disciplined, six-step engineering framework designed to deliver transparent milestones, reliable quality, and predictable launches.
        </p>
      </div>

      <div class="process-step-grid">
        <!-- Step 1 -->
        <div class="process-step-card">
          <div class="step-num-watermark">01</div>
          <h4 class="step-card-title">Understand</h4>
          <p class="step-card-desc">
            Requirements analysis, stakeholder goals, existing system audits, and preliminary technical feasibility planning.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="process-step-card">
          <div class="step-num-watermark">02</div>
          <h4 class="step-card-title">Plan</h4>
          <p class="step-card-desc">
            System architecture blueprinting, database schema modeling, tech stack finalization, and milestone scheduling.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="process-step-card">
          <div class="step-num-watermark">03</div>
          <h4 class="step-card-title">Design</h4>
          <p class="step-card-desc">
            Interactive Figma prototypes, design tokens, responsive typography hierarchy, and accessible component layouts.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="process-step-card">
          <div class="step-num-watermark">04</div>
          <h4 class="step-card-title">Build</h4>
          <p class="step-card-desc">
            Modular frontend and backend coding, secure REST/GraphQL API integrations, and continuous agile sprint delivery.
          </p>
        </div>

        <!-- Step 5 -->
        <div class="process-step-card">
          <div class="step-num-watermark">05</div>
          <h4 class="step-card-title">Validate</h4>
          <p class="step-card-desc">
            Cross-browser performance benchmarking, mobile responsive testing, and end-to-end security vulnerability audits.
          </p>
        </div>

        <!-- Step 6 -->
        <div class="process-step-card">
          <div class="step-num-watermark">06</div>
          <h4 class="step-card-title">Deliver</h4>
          <p class="step-card-desc">
            Zero-downtime production cutover, DNS routing, client training, telemetry logging, and continuous post-launch support.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 8: Questions About Our Projects? (FAQ Accordion)
       ========================================================================= -->
  <section class="portfolio-faq-section" id="faq">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>CLEAR ANSWERS</span>
        </div>
        <h2 class="section-title">
          Questions About <span class="gradient-text">Our Projects?</span>
        </h2>
        <p class="section-description">
          Find transparent answers regarding our project delivery standards, security policies, and technical execution.
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          
          <!-- FAQ 1 -->
          <div class="faq-card-item active">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="true">
              <span>Are all projects in this portfolio custom-built for clients?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Yes. Every project engineered by GeerSoft is custom-developed to fit our client's unique business workflows, branding guidelines, and operational requirements. We do not rely on restrictive off-the-shelf templates, ensuring full scalability and intellectual property ownership.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>How do you ensure project security and data privacy?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              We implement industry-standard security practices including encrypted data storage, role-based access controls (RBAC), secure HTTPS/TLS protocols, sanitized database queries, and strict adherence to confidentiality Non-Disclosure Agreements (NDAs).
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>Can you share references or live demonstration links for similar projects?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Yes. For projects that are publicly deployed or where client permissions allow, we can provide live links and guided walkthroughs. For confidential enterprise systems, we demonstrate architecture and features during a scheduled consultation.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>What engagement models and development timelines do you offer?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              We offer milestone-based fixed-scope projects as well as dedicated team engagement models. Typical timelines range from 2 to 4 weeks for focused web platforms, and 6 to 12 weeks for complex software, ERP, or custom SaaS architectures.
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>How does post-launch support and maintenance work after delivery?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              We provide comprehensive post-delivery warranty support covering bug fixes, performance monitoring, server maintenance, security patches, and phased feature updates to ensure continuous operational excellence.
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 9: High-Impact Portfolio CTA
       ========================================================================= -->
  <section class="cta-banner-section" id="portfolio-cta">
    <div class="container-xl">
      <div class="cta-banner-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-badge mb-3">
              <span class="badge-dot"></span>
              <span>START YOUR JOURNEY</span>
            </div>
            <h2 class="cta-title">
              Let's Create Your Next <br>
              <span class="gradient-text">Digital Success Story</span>
            </h2>
            <p class="cta-desc">
              Whether you need a custom web platform, enterprise ERP, mobile app, or AI-driven workflow, our team is ready to engineer your solution.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
              <button onclick="openQuoteModal()" class="btn-ai-primary justify-content-center">
                <span>Start Your Project</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </button>
              <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20a%20new%20project" 
                 target="_blank" rel="noopener noreferrer" class="btn-cta-wa justify-content-center">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.419-.101.824z"/>
                </svg>
                <span>Chat on WhatsApp</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
$extraFooter = '
  <script>
    function filterPortfolio(category, btn) {
      document.querySelectorAll(".port-filter-btn").forEach(b => {
        b.classList.remove("active");
        b.setAttribute("aria-selected", "false");
      });
      if (btn) {
        btn.classList.add("active");
        btn.setAttribute("aria-selected", "true");
      }

      const items = document.querySelectorAll(".port-item-wrapper");
      items.forEach(item => {
        const cats = item.getAttribute("data-category") || "";
        if (category === "all" || cats.includes(category)) {
          item.classList.remove("d-none-filter");
        } else {
          item.classList.add("d-none-filter");
        }
      });
    }

    function openProjectQuote(projectName) {
      if (window.openQuoteModal) {
        window.openQuoteModal();
        if (projectName) {
          setTimeout(() => {
            const notesField = document.querySelector(\'textarea[name="notes"]\');
            if (notesField && !notesField.value) {
              notesField.value = "Inquiring regarding a project similar to: " + projectName;
            }
          }, 100);
        }
      }
    }
  </script>
';
include "include/footer.php";
?>
