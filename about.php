<?php
$pageTitle       = "About GeerSoft IT Solutions | Our Mission, Vision and Expertise";
$pageDescription = "Discover GeerSoft IT Solutions, delivering website development, custom software, mobile applications, ERP solutions, and digital technology services.";
$pageKeywords    = "About GeerSoft IT Solutions, IT company Mumbai, software development company, ERP solutions, mobile app developers, web development agency";
$pageCanonical   = "https://geersoft.in/about";
$extraCss        = ["assets/stylesheets/ai-about.css"];
$activeNav       = "about";

include "include/header.php";
?>

  <!-- =========================================================================
       Section 1: The "Digital Monolith & Engineering Manifesto" Hero
       ========================================================================= -->
  <section class="hero-section" id="about-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Hero Left Column: Editorial Statement -->
        <div class="col-lg-7">
          <div class="about-hero-badge">
            <span class="badge-radar-ping"></span>
            <span>COMPANY PROFILE & ENGINEERING PHILOSOPHY</span>
          </div>

          <h1 class="hero-title">
            Building the Digital Future, <br>
            <span class="gradient-text">One Innovation at a Time</span>
          </h1>

          <p class="hero-subtitle">
            At GeerSoft IT Solutions, we help businesses transform ideas into powerful digital experiences through modern websites, custom software, mobile applications, ERP solutions, and intelligent technology integration.
          </p>

          <div class="hero-cta-group">
            <a href="<?php echo $siteUrl; ?>/services_all" class="btn-ai-primary">
              <span>Explore Our Services</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <button onclick="openQuoteModal()" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
              <span>Let's Discuss Your Project</span>
            </button>
          </div>

          <!-- Editorial Telemetry Bar -->
          <div class="hero-metrics-bar">
            <div class="metric-item">
              <div class="metric-val">6+</div>
              <div class="metric-lbl">Core Disciplines</div>
            </div>
            <div class="metric-item">
              <div class="metric-val">100%</div>
              <div class="metric-lbl">Production Code Standards</div>
            </div>
            <div class="metric-item">
              <div class="metric-val">Mumbai</div>
              <div class="metric-lbl">Headquarters & Global Reach</div>
            </div>
          </div>
        </div>

        <!-- Hero Right Column: The Holographic GeerSoft Monolith -->
        <div class="col-lg-5">
          <div class="about-monolith-card">
            <div class="monolith-header">
              <div class="monolith-status">
                <span class="monolith-dot"></span>
                <span>CORE_SYSTEM // v2.6.4</span>
              </div>
              <span class="badge bg-primary-subtle text-info border border-info-subtle px-2 py-1" style="font-size:0.72rem; font-family:monospace;">STABLE</span>
            </div>

            <!-- 3D Gyro Core Visual with Real Tech Lab Window -->
            <div class="position-relative rounded-4 overflow-hidden my-3" style="border: 1px solid rgba(59, 130, 246, 0.4); box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);">
              <img src="<?php echo $siteUrl; ?>/assets/images/about-tech-lab.jpg" alt="GeerSoft Engineering Operations Lab" class="img-fluid w-100" style="object-fit:cover; height:200px; filter: contrast(1.08);">
              <div class="position-absolute bottom-0 start-0 end-0 p-2 d-flex align-items-center justify-content-between" style="background: linear-gradient(to top, rgba(2,6,23,0.92), transparent);">
                <span class="badge bg-primary-subtle text-info border border-info border-opacity-25 font-monospace" style="font-size:0.72rem;">
                  <span class="status-dot"></span> DEV_LAB // MUMBAI
                </span>
                <span class="text-white font-monospace" style="font-size:0.72rem;">LATENCY: &lt; 20ms</span>
              </div>
            </div>

            <!-- Telemetry Items -->
            <div class="monolith-telemetry-grid">
              <div class="telemetry-row">
                <span class="telemetry-tag">[DISCIPLINE]</span>
                <span class="telemetry-val">Full-Stack & Custom SaaS</span>
              </div>
              <div class="telemetry-row">
                <span class="telemetry-tag">[ARCHITECTURE]</span>
                <span class="telemetry-val">Modular Microservices</span>
              </div>
              <div class="telemetry-row">
                <span class="telemetry-tag">[SPECIFICATIONS]</span>
                <span class="telemetry-val">100% Tailored Business Logic</span>
              </div>
            </div>

            <div class="monolith-footer-bar">
              <span>LATENCY: &lt; 20ms</span>
              <span class="text-success"><i class="bi bi-check2-circle me-1"></i>CONNECTED TO PRODUCTION</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: The GeerSoft DNA & Who We Are (3-Column Interactive Bento)
       ========================================================================= -->
  <section class="py-5 my-4" id="who-we-are">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>OUR ORGANIZATIONAL DNA</span>
        </div>
        <h2 class="section-title">
          Technology That Moves <br>
          <span class="gradient-text">Your Business Forward</span>
        </h2>
        <p class="section-subtitle">
          GeerSoft IT Solutions is focused on helping businesses establish, improve, and scale their digital presence. We combine design, development, and practical technology solutions to create digital products aligned with business goals.
        </p>
      </div>

      <!-- 3-Column DNA Bento -->
      <div class="dna-bento-grid">
        <!-- DNA Card 1 -->
        <div class="dna-card">
          <span class="dna-card-index">DNA_PILLAR // 01</span>
          <div class="dna-card-icon">
            <?php echo get_service_icon('erp', 38); ?>
          </div>
          <h3 class="dna-card-title">Business-Focused Solutions</h3>
          <p class="dna-card-desc">
            We avoid building software in a vacuum. Every digital asset is aligned with your operational bottlenecks, customer acquisition funnels, and measurable revenue targets.
          </p>
          <div class="dna-card-tag">
            <i class="bi bi-graph-up-arrow"></i> Purposeful ROI Design
          </div>
        </div>

        <!-- DNA Card 2 -->
        <div class="dna-card">
          <span class="dna-card-index">DNA_PILLAR // 02</span>
          <div class="dna-card-icon">
            <?php echo get_service_icon('software', 38); ?>
          </div>
          <h3 class="dna-card-title">Modern Technology</h3>
          <p class="dna-card-desc">
            We build using battle-tested, modern technology stacks including React, Next.js, Laravel, Node.js, and cloud ecosystems that ensure high speed, security, and scalability.
          </p>
          <div class="dna-card-tag">
            <i class="bi bi-cpu"></i> Zero Bloatware Stacks
          </div>
        </div>

        <!-- DNA Card 3 -->
        <div class="dna-card">
          <span class="dna-card-index">DNA_PILLAR // 03</span>
          <div class="dna-card-icon">
            <?php echo get_service_icon('support', 38); ?>
          </div>
          <h3 class="dna-card-title">Reliable Development Practices</h3>
          <p class="dna-card-desc">
            Strict version control hygiene, clean modular architecture, automated testing, and comprehensive handover documentation ensuring your systems remain maintainable for years.
          </p>
          <div class="dna-card-tag">
            <i class="bi bi-check2-all"></i> Clean Code Handover
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2B: Inside GeerSoft Engineering Hub & Command Center
       ========================================================================= -->
  <section class="py-5 my-4" id="engineering-hub">
    <div class="container-xl">
      <div class="p-4 p-lg-5 rounded-5 position-relative overflow-hidden" style="background: radial-gradient(circle at 80% 20%, rgba(37,99,235,0.15) 0%, rgba(15,23,42,0.95) 70%); border: 1px solid rgba(59,130,246,0.3); box-shadow: 0 25px 70px rgba(0,0,0,0.6);">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-hero-badge mb-3">
              <span class="badge-radar-ping"></span>
              <span>ENGINEERING HEADQUARTERS</span>
            </div>
            <h2 class="section-title text-start mb-3" style="font-size:2.2rem;">
              Where Complex Business Logic <br>
              <span class="gradient-text">Meets Elegant Software</span>
            </h2>
            <p class="text-muted mb-4" style="line-height:1.8; font-size:1rem;">
              Our dedicated software lab in Mumbai brings together senior cloud architects, full-stack engineers, and UI/UX designers under one roof. We build production systems engineered to withstand intense traffic spikes, zero downtime requirements, and strict OWASP security standards.
            </p>
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
                  <strong class="text-info d-block fs-4 font-monospace">99.98%</strong>
                  <span class="text-muted" style="font-size:0.84rem;">Production Uptime Record</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
                  <strong class="text-success d-block fs-4 font-monospace">0ms</strong>
                  <span class="text-muted" style="font-size:0.84rem;">Client Vendor Lock-in</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
                  <strong class="text-warning d-block fs-4 font-monospace">100%</strong>
                  <span class="text-muted" style="font-size:0.84rem;">Intellectual Property Transfer</span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 rounded-3" style="background:rgba(255,255,255,0.03); border:1px solid rgba(255,255,255,0.08);">
                  <strong class="text-primary d-block fs-4 font-monospace">30-Day</strong>
                  <span class="text-muted" style="font-size:0.84rem;">Post-Launch Free Warranty</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="position-relative rounded-4 overflow-hidden" style="border: 1px solid rgba(6,182,212,0.4); box-shadow: 0 20px 60px rgba(6,182,212,0.25);">
              <img src="<?php echo $siteUrl; ?>/assets/images/about-tech-lab.jpg" alt="Inside GeerSoft Engineering Hub" class="img-fluid w-100" style="object-fit:cover; min-height:360px; filter: contrast(1.05);">
              <div class="position-absolute bottom-0 start-0 end-0 p-3" style="background: linear-gradient(to top, rgba(2,6,23,0.95), transparent);">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <span class="badge bg-primary text-white font-monospace" style="font-size:0.75rem;">GEERSOFT DEV LAB // MUMBAI</span>
                    <p class="text-white mb-0" style="font-size:0.86rem; font-weight:600;">Modern Cloud Infrastructure &amp; High-Concurrency Systems</p>
                  </div>
                  <span class="badge bg-success-subtle text-success border border-success border-opacity-25 px-2 py-1 font-monospace" style="font-size:0.72rem;">ACTIVE REPO</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Sections 3 & 4: Asymmetric Cosmic Bento: Mission & Vision
       ========================================================================= -->
  <section class="py-5 my-4" id="mission-vision">
    <div class="container-xl">
      <div class="mv-cosmic-grid">
        <!-- Section 3: Our Mission Pod -->
        <div class="mv-cosmic-card card-mission">
          <span class="mv-pill-tag">
            <i class="bi bi-compass me-1"></i> GUIDING PRINCIPLE // 01
          </span>
          <h3 class="mv-cosmic-heading">Our Mission</h3>
          <p class="mv-cosmic-body">
            “To empower businesses with practical, scalable, and innovative digital solutions that simplify operations, strengthen their online presence, and support sustainable growth.”
          </p>
          <ul class="mv-cosmic-check-list">
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Practical, scalable engineering designed around tangible business value</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Simplifying operational complexity through automated digital workflows</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Building sustainable foundations capable of scaling alongside client growth</span>
            </li>
          </ul>
        </div>

        <!-- Section 4: Our Vision Pod -->
        <div class="mv-cosmic-card card-vision">
          <span class="mv-pill-tag" style="background:rgba(168,85,247,0.15); border-color:rgba(168,85,247,0.3); color:#c084fc;">
            <i class="bi bi-binoculars me-1"></i> FUTURE HORIZON // 02
          </span>
          <h3 class="mv-cosmic-heading">Our Vision</h3>
          <p class="mv-cosmic-body">
            “To become a trusted technology partner for businesses seeking smarter digital experiences, efficient operations, and future-ready technology solutions.”
          </p>
          <ul class="mv-cosmic-check-list">
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>A trusted, transparent long-term technology collaborator</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Pioneering smarter digital experiences and intuitive user interfaces</span>
            </li>
            <li>
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" style="stroke:#c084fc;"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span>Architecting future-ready systems that seamlessly adapt to emerging tech</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 5: Modern Asymmetrical Bento Grid: Core Expertise
       ========================================================================= -->
  <section class="py-5 my-4" id="expertise">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>CAPABILITIES & ARCHITECTURE</span>
        </div>
        <h2 class="section-title">
          Our Expertise, <br>
          <span class="gradient-text">Your Digital Advantage</span>
        </h2>
        <p class="section-subtitle">
          Six specialized digital engineering domains architected to elevate brands, streamline workflows, and scale operations.
        </p>
      </div>

      <!-- Asymmetrical Bento Grid -->
      <div class="expertise-bento-grid">
        <!-- Bento 1: Large Feature (Website Development) -->
        <div class="exp-bento-card exp-col-8">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-primary-subtle text-info border border-info-subtle px-3 py-1">CORE SPECIALTY</span>
            <span class="text-muted" style="font-family:monospace; font-size:0.8rem;">DISCIPLINE_01</span>
          </div>

          <h3 class="text-white mb-2 d-flex align-items-center" style="font-size:1.6rem;">
            <?php echo get_service_icon('website', 34, 'me-2'); ?>
            <span>Website Development</span>
          </h3>
          <p class="text-muted mb-3" style="font-size:0.95rem; line-height:1.7;">
            Modern, responsive, user-friendly websites built around business objectives. We deploy Next.js, React, and headless architectures with sub-second page loads and seamless SEO compliance.
          </p>

          <!-- Interactive Code Preview -->
          <div class="exp-code-window">
            <div class="exp-code-dots">
              <span class="exp-code-dot dot-red"></span>
              <span class="exp-code-dot dot-yellow"></span>
              <span class="exp-code-dot dot-green"></span>
            </div>
            <code>
              <span style="color:#f472b6;">const</span> <span style="color:#60a5fa;">geersoftSite</span> = <span style="color:#f472b6;">await</span> <span style="color:#34d399;">buildWebPlatform</span>({<br>
              &nbsp;&nbsp;performance: <span style="color:#facc15;">'sub-second-loading'</span>,<br>
              &nbsp;&nbsp;responsive: <span style="color:#facc15;">'mobile-first-adaptive'</span>,<br>
              &nbsp;&nbsp;seoEngine: <span style="color:#facc15;">'structured-semantic-html'</span><br>
              });
            </code>
          </div>

          <div class="mt-4 pt-2">
            <a href="<?php echo $siteUrl; ?>/services/web-development" class="btn-ai-primary" style="padding:10px 22px; font-size:0.88rem;">
              <span>Explore Website Development</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>

        <!-- Bento 2: Custom Software Development -->
        <div class="exp-bento-card exp-col-4">
          <span class="text-muted mb-2" style="font-family:monospace; font-size:0.8rem;">DISCIPLINE_02</span>
          <h3 class="text-white mb-2 d-flex align-items-center" style="font-size:1.4rem;">
            <?php echo get_service_icon('software', 30, 'me-2'); ?>
            <span>Custom Software</span>
          </h3>
          <p class="text-muted mb-4" style="font-size:0.92rem; line-height:1.65; flex-grow:1;">
            Tailored software designed to streamline workflows and support specific business needs using robust Laravel and Node.js microservices.
          </p>
          <ul class="list-unstyled text-muted mb-4" style="font-size:0.85rem; line-height:1.9;">
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> Custom SaaS Platforms</li>
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> High-Throughput APIs</li>
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> Automated Business Logic</li>
          </ul>
          <a href="<?php echo $siteUrl; ?>/services/php-laravel-development" class="service-learn-more">
            <span>Learn More</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>

        <!-- Bento 3: Mobile Application Development -->
        <div class="exp-bento-card exp-col-4">
          <span class="text-muted mb-2" style="font-family:monospace; font-size:0.8rem;">DISCIPLINE_03</span>
          <h3 class="text-white mb-2 d-flex align-items-center" style="font-size:1.4rem;">
            <?php echo get_service_icon('mobile', 30, 'me-2'); ?>
            <span>Mobile App Dev</span>
          </h3>
          <p class="text-muted mb-4" style="font-size:0.92rem; line-height:1.65; flex-grow:1;">
            Mobile experiences designed for usability, performance, and scalability across iOS and Android with 60fps native feel.
          </p>
          <ul class="list-unstyled text-muted mb-4" style="font-size:0.85rem; line-height:1.9;">
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> React Native &amp; Flutter</li>
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> Offline State Storage</li>
            <li><i class="bi bi-check-circle-fill text-info me-2"></i> Native Device Hardware APIs</li>
          </ul>
          <a href="<?php echo $siteUrl; ?>/services/react-native-app-development" class="service-learn-more">
            <span>Learn More</span>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </a>
        </div>

        <!-- Bento 4: AI Integration & Enterprise ERP Systems -->
        <div class="exp-bento-card exp-col-8">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <span class="badge bg-secondary-subtle text-light border border-secondary px-3 py-1">ENTERPRISE SCALE</span>
            <span class="text-muted" style="font-family:monospace; font-size:0.8rem;">DISCIPLINE_04 &amp; 05</span>
          </div>

          <div class="row g-4">
            <div class="col-md-6 border-end border-secondary border-opacity-25">
              <h4 class="text-white mb-2 d-flex align-items-center" style="font-size:1.25rem;">
                <?php echo get_service_icon('ai', 28, 'me-2'); ?>
                <span>AI &amp; Automation</span>
              </h4>
              <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
                Practical AI-powered capabilities, conversational assistants, and automated workflow triggers where appropriate.
              </p>
              <a href="#innovation-ai" class="service-learn-more">
                <span>View AI Capabilities</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
            </div>
            <div class="col-md-6">
              <h4 class="text-white mb-2 d-flex align-items-center" style="font-size:1.25rem;">
                <?php echo get_service_icon('erp', 28, 'me-2'); ?>
                <span>ERP &amp; Solutions</span>
              </h4>
              <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
                Integrated business management systems uniting inventory, automated invoicing, customer relationships, and reporting.
              </p>
              <a href="<?php echo $siteUrl; ?>/services_all" class="service-learn-more">
                <span>Explore ERP Solutions</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Bento 5: Full Width Digital Marketing & SEO Bar -->
        <div class="exp-bento-card exp-col-12 py-3 px-4">
          <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
            <div class="d-flex align-items-center gap-3">
              <div class="service-icon-wrap mb-0" style="width:44px; height:44px;">
                <?php echo get_service_icon('marketing', 38); ?>
              </div>
              <div>
                <strong class="text-white" style="font-size:1.05rem;">Digital Marketing and Search Engine Optimization</strong>
                <p class="text-muted mb-0" style="font-size:0.86rem;">Digital strategies to improve online visibility, organic search authority, and lead generation.</p>
              </div>
            </div>
            <a href="<?php echo $siteUrl; ?>/services/professional-seo-services" class="btn-ai-secondary" style="padding:8px 18px; font-size:0.84rem;">
              <span>Learn More</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: Architectural Code of Standards (Why Choose GeerSoft)
       ========================================================================= -->
  <section class="py-5 my-4" id="why-choose-geersoft">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>THE GEERSOFT ADVANTAGE</span>
        </div>
        <h2 class="section-title">
          Why Businesses <br>
          <span class="gradient-text">Choose GeerSoft</span>
        </h2>
        <p class="section-subtitle">
          Six foundational architectural standards that govern our software development, client partnerships, and engineering ethics.
        </p>
      </div>

      <div class="manifesto-grid">
        <!-- Standard 1 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 01]</span>
          <h4 class="manifesto-title">Customized Solutions</h4>
          <p class="manifesto-desc">
            We architect solutions tailored specifically to your exact operations, data structures, and goals, avoiding bloated off-the-shelf templates and unnecessary dependencies.
          </p>
        </div>

        <!-- Standard 2 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 02]</span>
          <h4 class="manifesto-title">User-Centered Design</h4>
          <p class="manifesto-desc">
            We build interfaces focused on human cognition. Every user journey, button placement, and form element is designed to minimize friction and simplify complex workflows.
          </p>
        </div>

        <!-- Standard 3 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 03]</span>
          <h4 class="manifesto-title">Responsive Development</h4>
          <p class="manifesto-desc">
            Pixel-precise layout adaptations engineered to feel fluid and intuitive across compact mobile viewports, touch tablets, laptops, and ultra-wide desktop monitors.
          </p>
        </div>

        <!-- Standard 4 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 04]</span>
          <h4 class="manifesto-title">Performance Optimization</h4>
          <p class="manifesto-desc">
            Sub-second page rendering, lightweight asset bundling, and clean server-side queries. We engineer for high efficiency without unnecessary server bloat.
          </p>
        </div>

        <!-- Standard 5 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 05]</span>
          <h4 class="manifesto-title">Maintainable Architecture</h4>
          <p class="manifesto-desc">
            Clean code conventions, structured repository hygiene, and comprehensive documentation ensuring your team can comfortably maintain, audit, and extend the system.
          </p>
        </div>

        <!-- Standard 6 -->
        <div class="manifesto-rule-card">
          <span class="manifesto-rule-id">[STANDARD // 06]</span>
          <h4 class="manifesto-title">Ongoing Technical Support</h4>
          <p class="manifesto-desc">
            Direct access to senior developers, proactive performance monitoring, security updates, and swift technical troubleshooting whenever your operations require it.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 7: The 6-Stage Engineering Engine (Development Approach)
       ========================================================================= -->
  <section class="py-5 my-4" id="approach">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>STRUCTURED LIFECYCLE</span>
        </div>
        <h2 class="section-title">
          From Idea to <br>
          <span class="gradient-text">Implementation</span>
        </h2>
        <p class="section-subtitle">
          A disciplined 6-stage engineering process ensuring predictable delivery, clear milestones, and verified code quality.
        </p>
      </div>

      <div class="stepper-pipeline-wrap">
        <!-- Nav Bar -->
        <div class="stepper-nav-bar">
          <div class="stepper-nav-item active">
            <div class="stepper-nav-num">STAGE 01</div>
            <div class="stepper-nav-label">Discover</div>
          </div>
          <div class="stepper-nav-item">
            <div class="stepper-nav-num">STAGE 02</div>
            <div class="stepper-nav-label">Plan</div>
          </div>
          <div class="stepper-nav-item">
            <div class="stepper-nav-num">STAGE 03</div>
            <div class="stepper-nav-label">Design</div>
          </div>
          <div class="stepper-nav-item">
            <div class="stepper-nav-num">STAGE 04</div>
            <div class="stepper-nav-label">Develop</div>
          </div>
          <div class="stepper-nav-item">
            <div class="stepper-nav-num">STAGE 05</div>
            <div class="stepper-nav-label">Test</div>
          </div>
          <div class="stepper-nav-item">
            <div class="stepper-nav-num">STAGE 06</div>
            <div class="stepper-nav-label">Launch</div>
          </div>
        </div>

        <!-- 6 Stage Cards Grid -->
        <div class="stepper-stages-grid">
          <!-- Stage 1 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_01 // REQUIREMENT ANALYSIS</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">01 — Discover</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Understand business objectives, user profiles, technical constraints, and project success metrics through in-depth collaborative sessions.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: SCOPE SPECIFICATION</div>
          </div>

          <!-- Stage 2 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_02 // ARCHITECTURE ROADMAP</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">02 — Plan</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Define technical architecture, sprint milestones, database schemas, technology stacks, and agreed delivery timelines.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: SYSTEM BLUEPRINT</div>
          </div>

          <!-- Stage 3 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_03 // UX & VISUAL DIRECTION</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">03 — Design</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Develop user experience journeys, wireframes, interactive UI prototypes, and cohesive design systems before coding begins.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: INTERACTIVE PROTOTYPES</div>
          </div>

          <!-- Stage 4 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_04 // FULL-STACK SPRINT</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">04 — Develop</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Build robust solutions using modular code, clean APIs, reusable components, and version-controlled Git repositories.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: WORKING CODEBASE</div>
          </div>

          <!-- Stage 5 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_05 // AUDIT & QUALITY GATE</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">05 — Test</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Rigorous testing for responsiveness, cross-browser compatibility, security sanitization, accessibility, and speed benchmarks.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: VERIFIED QA AUDIT</div>
          </div>

          <!-- Stage 6 -->
          <div class="stage-detail-card">
            <span class="stage-tag-badge">STAGE_06 // PRODUCTION ROLLOUT</span>
            <h4 class="text-white mb-2" style="font-size:1.18rem;">06 — Launch & Support</h4>
            <p class="text-muted mb-3" style="font-size:0.9rem; line-height:1.65;">
              Deploy to live production infrastructure, execute launch audits, and provide agreed ongoing technical maintenance and support.
            </p>
            <div class="text-info" style="font-size:0.8rem; font-family:monospace;">DELIVERABLE: LIVE DEPLOYMENT & HANDOVER</div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 8: The AI & Innovation Sandbox
       ========================================================================= -->
  <section class="py-5 my-4" id="innovation-ai">
    <div class="container-xl">
      <div class="ai-sandbox-terminal">
        <div class="ai-terminal-header">
          <div>
            <div class="about-hero-badge mb-2">
              <span class="badge-radar-ping"></span>
              <span>INTELLIGENT COMPUTING LAB</span>
            </div>
            <h2 class="display-6 fw-bold text-white mb-2" style="letter-spacing:-0.02em;">
              Smarter Technology. <br>
              <span class="gradient-text">Better Possibilities.</span>
            </h2>
            <p class="text-muted mb-0" style="font-size:1rem; max-width:650px; line-height:1.7;">
              We explore practical ways to integrate artificial intelligence and automation into digital products and business workflows, helping organizations reduce repetitive tasks and make better use of their information.
            </p>
          </div>
          <div>
            <button onclick="openQuoteModal('AI Integration & Automation')" class="btn-ai-primary">
              <span>Discuss an AI Project</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- 5 AI Capability Pills -->
        <div class="ai-sandbox-pills">
          <div class="ai-sandbox-pill">
            <div class="ai-pill-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </div>
            <strong class="text-white" style="font-size:0.92rem;">AI Chatbots & Assistance</strong>
          </div>

          <div class="ai-sandbox-pill">
            <div class="ai-pill-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </div>
            <strong class="text-white" style="font-size:0.92rem;">Workflow Automation Pipelines</strong>
          </div>

          <div class="ai-sandbox-pill">
            <div class="ai-pill-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
            </div>
            <strong class="text-white" style="font-size:0.92rem;">Intelligent Data Processing</strong>
          </div>

          <div class="ai-sandbox-pill">
            <div class="ai-pill-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
            </div>
            <strong class="text-white" style="font-size:0.92rem;">AI-Enabled Application Features</strong>
          </div>

          <div class="ai-sandbox-pill">
            <div class="ai-pill-icon">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
            </div>
            <strong class="text-white" style="font-size:0.92rem;">Business System Integration</strong>
          </div>
        </div>

        <!-- Verified Capability Notice -->
        <div class="ai-sandbox-notice">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="text-info flex-shrink-0 mt-1"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
          <div>
            <strong class="text-white">Notice of Clear Distinction:</strong> AI capabilities are offered as tailored engineering integrations based on your specific operational needs. We do not claim every existing product or website contains AI by default — every integration is purposeful, evaluated, and custom-scoped.
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 9: Technologies We Work With (Interactive Matrix)
       ========================================================================= -->
  <section class="py-5 my-4" id="tech-stack">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>PRODUCTION STACKS</span>
        </div>
        <h2 class="section-title">
          Built with <br>
          <span class="gradient-text">Modern Technologies</span>
        </h2>
        <p class="section-subtitle">
          We engineer with industry-standard, battle-tested technologies and scalable frameworks to ensure reliability, security, and speed.
        </p>
      </div>

      <div class="row g-4">
        <!-- Frontend -->
        <div class="col-lg-4 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-window-sidebar text-info"></i> Frontend Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('React.js', 18); ?> <span>React.js</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Next.js', 18); ?> <span>Next.js</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('HTML5 & CSS3', 18); ?> <span>HTML5 & CSS3</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('JavaScript', 18); ?> <span>JavaScript (ES6+)</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Vue.js', 18); ?> <span>Vue.js</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Tailwind CSS', 18); ?> <span>Tailwind CSS</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Bootstrap 5', 18); ?> <span>Bootstrap 5</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Backend -->
        <div class="col-lg-4 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-server text-info"></i> Backend Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('PHP', 18); ?> <span>PHP 8+</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Laravel', 18); ?> <span>Laravel Framework</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Node.js', 18); ?> <span>Node.js</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('REST APIs', 18); ?> <span>RESTful APIs</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Python', 18); ?> <span>Python</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Mobile -->
        <div class="col-lg-4 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.15rem;">
              <i class="bi bi-phone text-info"></i> Mobile Development
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('React Native', 18); ?> <span>React Native</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Flutter', 18); ?> <span>Flutter</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Android', 18); ?> <span>Android SDK</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Swift', 18); ?> <span>iOS Swift</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Databases -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-database text-info"></i> Databases
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('MySQL', 18); ?> <span>MySQL</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('PostgreSQL', 18); ?> <span>PostgreSQL</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('MongoDB', 18); ?> <span>MongoDB</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Redis', 18); ?> <span>Redis</span>
              </span>
            </div>
          </div>
        </div>

        <!-- CMS & E-Commerce -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-cart3 text-info"></i> CMS & Commerce
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('WordPress', 18); ?> <span>WordPress</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('WooCommerce', 18); ?> <span>WooCommerce</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Shopify', 18); ?> <span>Shopify</span>
              </span>
            </div>
          </div>
        </div>

        <!-- Cloud & DevOps -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-cloud text-info"></i> Cloud & DevOps
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('AWS Cloud', 18); ?> <span>AWS Cloud</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Docker', 18); ?> <span>Docker</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Nginx', 18); ?> <span>Linux / Nginx</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Git', 18); ?> <span>Git / GitHub</span>
              </span>
            </div>
          </div>
        </div>

        <!-- AI & Automation -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <h4 class="text-white mb-3 d-flex align-items-center gap-2" style="font-size:1.12rem;">
              <i class="bi bi-robot text-info"></i> AI & Automation
            </h4>
            <div class="d-flex flex-wrap gap-2">
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('OpenAI API', 18); ?> <span>OpenAI API</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Custom LLM RAG', 18); ?> <span>Custom LLM RAG</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('LangChain', 18); ?> <span>LangChain</span>
              </span>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.86rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important;">
                <?php echo get_tech_icon('Python', 18); ?> <span>Python AI</span>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 10: Quality and Client Commitment (Shield Centerpiece)
       ========================================================================= -->
  <section class="py-5 my-4" id="quality-commitment">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-4">
        <div class="about-hero-badge">
          <span class="badge-radar-ping"></span>
          <span>OUR COMMITMENT</span>
        </div>
        <h2 class="section-title">
          Committed to Quality <br>
          <span class="gradient-text">at Every Stage</span>
        </h2>
        <p class="section-subtitle">
          We hold our work to the highest standards of transparency, engineering discipline, and client accountability.
        </p>
      </div>

      <!-- Shield Centerpiece -->
      <div class="quality-shield-center">
        <i class="bi bi-shield-shaded"></i>
      </div>

      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <span class="text-info mb-2 d-block" style="font-family:monospace; font-size:0.78rem;">PILLAR // 01</span>
            <h4 class="text-white mb-2" style="font-size:1.2rem;">Clear Communication</h4>
            <p class="text-muted mb-0" style="font-size:0.92rem; line-height:1.65;">
              Transparent project updates, direct access to engineering leads, and clear discussions on scope, milestones, and deliverables without confusing technical jargon.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <span class="text-info mb-2 d-block" style="font-family:monospace; font-size:0.78rem;">PILLAR // 02</span>
            <h4 class="text-white mb-2" style="font-size:1.2rem;">Thoughtful Planning</h4>
            <p class="text-muted mb-0" style="font-size:0.92rem; line-height:1.65;">
              Comprehensive architectural blueprints, database schema planning, and sprint milestone definitions that mitigate risks before coding starts.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <span class="text-info mb-2 d-block" style="font-family:monospace; font-size:0.78rem;">PILLAR // 03</span>
            <h4 class="text-white mb-2" style="font-size:1.2rem;">Thorough Testing</h4>
            <p class="text-muted mb-0" style="font-size:0.92rem; line-height:1.65;">
              Rigorous cross-browser validation, mobile viewport adaptability checks, responsive regression, and speed audits before production deployment.
            </p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-3 col-md-6">
          <div class="manifesto-rule-card h-100">
            <span class="text-info mb-2 d-block" style="font-family:monospace; font-size:0.78rem;">PILLAR // 04</span>
            <h4 class="text-white mb-2" style="font-size:1.2rem;">Long-Term Maintainability</h4>
            <p class="text-muted mb-0" style="font-size:0.92rem; line-height:1.65;">
              Clean modular code standards, version control hygiene, and complete handover documentation ensuring your software remains extensible for years.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 11: The Future Collaboration Cockpit (Final CTA)
       ========================================================================= -->
  <section class="py-5 my-4" id="final-cta">
    <div class="container-xl">
      <div class="cockpit-cta-card">
        <div class="about-hero-badge mb-3">
          <span class="badge-radar-ping"></span>
          <span>GET IN TOUCH WITH GEERSOFT</span>
        </div>

        <h2 class="display-5 fw-bold text-white mb-3" style="letter-spacing:-0.02em;">
          Have an Idea? <br>
          <span class="gradient-text">Let's Build It Together.</span>
        </h2>

        <p class="text-muted max-w-700 mx-auto mb-4" style="font-size:1.1rem; line-height:1.75;">
          Tell us about your business goals, and let's explore the right digital solution for your next stage of growth.
        </p>

        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <button onclick="openQuoteModal()" class="btn-ai-primary">
            <span>Start Your Project</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
          </button>
          <a href="<?php echo $siteUrl; ?>/contact" class="btn-ai-secondary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            <span>Contact GeerSoft</span>
          </a>
        </div>
      </div>
    </div>
  </section>


<?php include "include/footer.php"; ?>
