<?php
$pageTitle       = "Pricing | Website, Software and Digital Services | GeerSoft";
$pageDescription = "Explore GeerSoft IT Solutions pricing options for website development, custom software, ERP, AI integration, and digital marketing. Request a project quotation.";
$pageKeywords    = "GeerSoft IT Solutions pricing, web development cost, custom software pricing, ERP solutions cost, SEO packages Mumbai, IT services quotation";
$pageCanonical   = "https://geersoft.in/price";
$extraCss        = ["assets/stylesheets/ai-pricing.css"];
$activeNav       = "price";

include "include/header.php";
?>




  <!-- =========================================================================
       Section 1: AI-Powered Pricing Hero Section
       ========================================================================= -->
  <section class="hero-section" id="pricing-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Hero Left Column -->
        <div class="col-lg-7">
          

          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span>TRANSPARENT &amp; TAILORED COMMERCIAL TERMS</span>
          </div>

          <h1 class="hero-title">
            Transparent Pricing for <br>
            <span class="gradient-text">Your Digital Goals</span>
          </h1>

          <p class="hero-subtitle">
            Every business has different requirements. Explore our available service pricing or contact GeerSoft to discuss a solution tailored to your needs.
          </p>

          <div class="hero-cta-group">
            <button onclick="openQuoteModal()" class="btn-ai-primary">
              <span>Request a Quote</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="<?php echo $siteUrl; ?>/services_all" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect></svg>
              <span>Explore Services</span>
            </a>
          </div>

          <!-- Hero Metrics Bar -->
          <div class="hero-metrics-bar">
            <div class="metric-item">
              <div class="metric-val">Clear Scope</div>
              <div class="metric-lbl">Itemized Proposals</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">Milestones</div>
              <div class="metric-lbl">Phase-Based Delivery</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">Direct SLA</div>
              <div class="metric-lbl">Warranty Included</div>
            </div>
          </div>
        </div>

        <!-- Hero Right Column: 3D Floating Pricing Composition -->
        <div class="col-lg-5">
          <div class="pricing-hero-composition">
            
            <!-- Main Floating Specimen Card -->
            <div class="pricing-hero-panel-main">
              <div class="panel-header-row">
                <span class="panel-badge-pill">Web &amp; SaaS Delivery</span>
                <span class="text-white-50" style="font-size:0.75rem;"><i class="bi bi-shield-check text-success"></i> Fixed Scope Available</span>
              </div>
              <div class="panel-price-box">
                <div class="panel-price-amount">₹17,999<span style="font-size:1rem; font-weight:500; color:var(--text-muted);"> / starting</span></div>
                <div class="panel-price-sub">Verified Starter Web Architecture</div>
              </div>
              <ul class="panel-features-preview">
                <li><i class="bi bi-check2-circle"></i> Custom UI/UX Layout (Responsive)</li>
                <li><i class="bi bi-check2-circle"></i> CMS Integration &amp; Contact Forms</li>
                <li><i class="bi bi-check2-circle"></i> Technical SEO Setup &amp; Free SSL</li>
                <li><i class="bi bi-check2-circle"></i> 1–3 Months Post-Launch Support</li>
              </ul>
            </div>

            <!-- Secondary Sub Panel (Custom Solutions) -->
            <div class="pricing-hero-panel-sub">
              <div class="sub-panel-title">Custom Software &amp; ERP</div>
              <div class="sub-panel-desc">Bespoke workflows, role permissions, and cloud APIs.</div>
              <span class="sub-panel-pill">Custom Quotation</span>
            </div>

            <!-- Floating Badges -->
            <div class="pricing-hero-badge-float top-left">
              <i class="bi bi-check-circle-fill text-success"></i>
              <span>No Hidden Fees</span>
            </div>

            <div class="pricing-hero-badge-float bottom-left">
              <i class="bi bi-cash-stack text-info"></i>
              <span>Transparent GST Invoicing</span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: Solution & Scope-Based Pricing Cards
       ========================================================================= -->
  <section class="pricing-grid-section" id="pricing-cards">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>SERVICE OFFERINGS &amp; SCOPE</span>
        </div>
        <h2 class="section-title">
          Find the Right Solution for <span class="gradient-text">Your Business</span>
        </h2>
        <p class="section-description">
          Choose from verified service offerings or request a quotation based on your specific requirements.
        </p>

        <!-- Category Filter Tabs -->
        <div class="pricing-filter-section">
          <nav class="pricing-filter-nav" role="tablist" aria-label="Pricing Category Filters">
            <button type="button" class="pricing-filter-btn active" data-filter="all" onclick="filterPricing('all', this)" role="tab" aria-selected="true">
              All Services
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="web-dev" onclick="filterPricing('web-dev', this)" role="tab" aria-selected="false">
              Website Development
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="custom-software" onclick="filterPricing('custom-software', this)" role="tab" aria-selected="false">
              Custom Software
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="erp-solutions" onclick="filterPricing('erp-solutions', this)" role="tab" aria-selected="false">
              ERP Solutions
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="ai-automation" onclick="filterPricing('ai-automation', this)" role="tab" aria-selected="false">
              AI &amp; Automation
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="digital-marketing" onclick="filterPricing('digital-marketing', this)" role="tab" aria-selected="false">
              Digital Marketing
            </button>
            <button type="button" class="pricing-filter-btn" data-filter="maintenance" onclick="filterPricing('maintenance', this)" role="tab" aria-selected="false">
              Maintenance
            </button>
          </nav>
        </div>
      </div>

      <div class="row g-4" id="pricingCardGrid">

        <!-- Card 1: Website Development -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="web-dev">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('Website Development', 38); ?>
              </div>
              <h3 class="pricing-card-title">Website Development</h3>
              <p class="pricing-card-desc">
                Build a professional online presence with a website suited to your business objectives, content, and functional requirements.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-amount-prefix">Starting from</span>
                <span class="pricing-main-amount">₹17,999</span>
                <span class="pricing-billing-term">/ one-time</span>
              </div>
              <div class="pricing-commercial-note">
                Starter packages from ₹17,999; Business &amp; E-commerce ₹34,999 – ₹54,999+. Custom quote available for enterprise scopes.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Confirmed Scope Inclusions</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> Custom UI/UX design (responsive across devices)</li>
                <li><i class="bi bi-check2-circle"></i> Clean CMS integration (WordPress / Shopify / React)</li>
                <li><i class="bi bi-check2-circle"></i> Lead capture &amp; inquiry contact forms</li>
                <li><i class="bi bi-check2-circle"></i> Foundational technical SEO setup</li>
                <li><i class="bi bi-check2-circle"></i> SSL deployment assistance &amp; security setup</li>
                <li><i class="bi bi-check2-circle"></i> 1 to 3 months included post-launch warranty support</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">5–30 Pages</span>
                <span class="pricing-scope-pill">CMS Setup</span>
                <span class="pricing-scope-pill">Speed Optimized</span>
                <span class="pricing-scope-pill">Warranty Support</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('Website Development')">
              <span>Discuss Website Pricing</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Card 2: Custom Software and Applications -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="custom-software">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('Custom Software & SaaS Architecture', 38); ?>
              </div>
              <h3 class="pricing-card-title">Custom Software &amp; Apps</h3>
              <p class="pricing-card-desc">
                Plan a software solution around your workflows, user roles, integrations, and technical requirements.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-amount-prefix">Starting from</span>
                <span class="pricing-main-amount">₹54,999</span>
                <span class="pricing-billing-term">/ project</span>
              </div>
              <div class="pricing-commercial-note">
                Foundational web app MVPs from ₹54,999; full SaaS applications from ₹98,999 to custom enterprise proposals.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Technical Capabilities</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> Bespoke web applications (React / Next.js / Node.js)</li>
                <li><i class="bi bi-check2-circle"></i> Custom admin dashboards &amp; portal architecture</li>
                <li><i class="bi bi-check2-circle"></i> Secure user authentication &amp; role-based access (RBAC)</li>
                <li><i class="bi bi-check2-circle"></i> Relational database modeling (PostgreSQL / MySQL)</li>
                <li><i class="bi bi-check2-circle"></i> Third-party REST / GraphQL API integrations</li>
                <li><i class="bi bi-check2-circle"></i> 3 to 6 months included bug-fix warranty support</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">Custom SaaS</span>
                <span class="pricing-scope-pill">REST APIs</span>
                <span class="pricing-scope-pill">RBAC Auth</span>
                <span class="pricing-scope-pill">Scalable DB</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('Custom Software & Applications')">
              <span>Discuss Your Requirements</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Card 3: ERP and Business Management Solutions -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="erp-solutions">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('ERP & Business Solutions', 38); ?>
              </div>
              <h3 class="pricing-card-title">ERP &amp; Business Solutions</h3>
              <p class="pricing-card-desc">
                Explore business software tailored to your operational workflows, reporting needs, and organizational requirements.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-main-amount">Request a Quote</span>
              </div>
              <div class="pricing-commercial-note">
                Pricing is tailored based on module requirements, user seats, deployment infrastructure, and data migration needs.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Available Module Areas</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> HR &amp; employee management portals</li>
                <li><i class="bi bi-check2-circle"></i> Inventory, stock, and warehouse tracking</li>
                <li><i class="bi bi-check2-circle"></i> Invoicing, billing, and order processing flows</li>
                <li><i class="bi bi-check2-circle"></i> Real-time managerial reporting &amp; business telemetry</li>
                <li><i class="bi bi-check2-circle"></i> Multi-tier departmental permissions</li>
                <li><i class="bi bi-check2-circle"></i> On-premise or cloud-hosted database setup</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">Inventory ERP</span>
                <span class="pricing-scope-pill">HR Portals</span>
                <span class="pricing-scope-pill">Order Workflows</span>
                <span class="pricing-scope-pill">Custom Reporting</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('ERP & Business Management')">
              <span>Request an ERP Consultation</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Card 4: AI Integration and Automation -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="ai-automation">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('AI Integration & Automation', 38); ?>
              </div>
              <h3 class="pricing-card-title">AI Integration &amp; Automation</h3>
              <p class="pricing-card-desc">
                Discuss practical AI and automation opportunities for customer support, information processing, and business workflows.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-main-amount">Request a Quote</span>
              </div>
              <div class="pricing-commercial-note">
                Quotation reflects integration engineering and workflow scope. Third-party AI model token/API usage charges are billed separately.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Implementation Areas</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> AI-powered customer support chatbot integrations</li>
                <li><i class="bi bi-check2-circle"></i> Document &amp; information processing automations</li>
                <li><i class="bi bi-check2-circle"></i> Multi-step trigger workflows (Zapier / Webhooks / APIs)</li>
                <li><i class="bi bi-check2-circle"></i> Integration of leading LLMs and AI cloud endpoints</li>
                <li><i class="bi bi-check2-circle"></i> Structured data extraction &amp; CRM pipeline sync</li>
                <li><i class="bi bi-check2-circle"></i> Security-focused prompt engineering &amp; data sandboxing</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">AI Chatbots</span>
                <span class="pricing-scope-pill">Workflow Triggers</span>
                <span class="pricing-scope-pill">LLM APIs</span>
                <span class="pricing-scope-pill">Automation</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('AI Integration & Automation')">
              <span>Discuss an AI Project</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Card 5: Digital Marketing and SEO -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="digital-marketing">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('Digital Marketing & SEO', 38); ?>
              </div>
              <h3 class="pricing-card-title">Digital Marketing &amp; SEO</h3>
              <p class="pricing-card-desc">
                Discuss digital marketing activities aligned with your website, target audience, and business goals.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-amount-prefix">Starting from</span>
                <span class="pricing-main-amount">₹9,999</span>
                <span class="pricing-billing-term">/ monthly</span>
              </div>
              <div class="pricing-commercial-note">
                Local SEO plans from ₹9,999/mo; National SEO from ₹24,999/mo; Enterprise SEO from ₹49,999/mo. Transparent deliverables with no fake ranking promises.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Monthly Marketing Activities</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> In-depth on-page &amp; technical SEO site audits</li>
                <li><i class="bi bi-check2-circle"></i> Targeted keyword research &amp; competitor benchmarking</li>
                <li><i class="bi bi-check2-circle"></i> Google Search Console &amp; Analytics setup</li>
                <li><i class="bi bi-check2-circle"></i> Google My Business local citation optimization</li>
                <li><i class="bi bi-check2-circle"></i> Technical fixes (meta tags, schema markup, sitemaps)</li>
                <li><i class="bi bi-check2-circle"></i> Transparent monthly ranking &amp; organic traffic reports</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">15–60 Keywords</span>
                <span class="pricing-scope-pill">Technical Audit</span>
                <span class="pricing-scope-pill">GMB Local</span>
                <span class="pricing-scope-pill">Monthly Reports</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('Digital Marketing & SEO')">
              <span>Request Marketing Pricing</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

        <!-- Card 6: Website Maintenance and Support -->
        <div class="col-lg-4 col-md-6 pricing-card-col" data-category="maintenance">
          <div class="pricing-card-ai">
            <div class="pricing-card-header">
              <div class="pricing-card-icon-wrap" style="display:flex; align-items:center; justify-content:center;">
                <?php echo get_service_icon('Maintenance & SLA Technical Support', 38); ?>
              </div>
              <h3 class="pricing-card-title">Maintenance &amp; Support</h3>
              <p class="pricing-card-desc">
                Keep your digital platforms secure, fast, and up-to-date with dedicated ongoing technical maintenance.
              </p>
            </div>

            <div class="pricing-price-box">
              <div class="pricing-amount-row">
                <span class="pricing-amount-prefix">Starting from</span>
                <span class="pricing-main-amount">₹5,000</span>
                <span class="pricing-billing-term">/ monthly</span>
              </div>
              <div class="pricing-commercial-note">
                Starter maintenance from ₹5,000/mo; Business support from ₹8,000/mo; Enterprise 24/7 coverage from ₹15,000/mo.
              </div>
            </div>

            <div class="pricing-features-wrap">
              <div class="pricing-features-title">Included SLA Services</div>
              <ul class="pricing-features-list">
                <li><i class="bi bi-check2-circle"></i> Regular core CMS, framework, and security patches</li>
                <li><i class="bi bi-check2-circle"></i> Automated weekly or daily off-site cloud backups</li>
                <li><i class="bi bi-check2-circle"></i> Proactive uptime and server performance monitoring</li>
                <li><i class="bi bi-check2-circle"></i> 2 to 10 hours dedicated developer maintenance / month</li>
                <li><i class="bi bi-check2-circle"></i> Priority email and technical ticketing response</li>
                <li><i class="bi bi-check2-circle"></i> Malware scanning and emergency rollback assistance</li>
              </ul>

              <div class="pricing-scope-tags">
                <span class="pricing-scope-pill">Security Updates</span>
                <span class="pricing-scope-pill">Cloud Backups</span>
                <span class="pricing-scope-pill">Developer Hours</span>
                <span class="pricing-scope-pill">Fast SLA</span>
              </div>
            </div>

            <button type="button" class="btn-pricing-quote" onclick="openPricingQuote('Website Maintenance & Support')">
              <span>Discuss Maintenance Plans</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 3: What Determines Your Project Cost?
       ========================================================================= -->
  <section class="cost-factors-section" id="cost-factors">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>TRANSPARENT ESTIMATION</span>
        </div>
        <h2 class="section-title">
          What Determines <span class="gradient-text">Your Project Cost?</span>
        </h2>
        <p class="section-description">
          We provide clear, honest pricing based on real technical factors. Here is what shapes your proposal:
        </p>
      </div>

      <div class="cost-factors-grid">
        <!-- Factor 01 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">01</div>
          <h4 class="factor-card-title">Scope and Requirements</h4>
          <p class="factor-card-desc">
            The total number and complexity of requested features, custom business logic, and operational modules.
          </p>
        </div>

        <!-- Factor 02 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">02</div>
          <h4 class="factor-card-title">Design and User Experience</h4>
          <p class="factor-card-desc">
            The level of interface customization, interactive prototyping, responsive layout standards, and design system tokens.
          </p>
        </div>

        <!-- Factor 03 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">03</div>
          <h4 class="factor-card-title">Integrations</h4>
          <p class="factor-card-desc">
            Connecting external web services, payment gateways, third-party REST/GraphQL APIs, and existing internal business databases.
          </p>
        </div>

        <!-- Factor 04 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">04</div>
          <h4 class="factor-card-title">Data and Migration</h4>
          <p class="factor-card-desc">
            Data preparation, cleansing, database schema architecture, and legacy platform data transfer requirements where applicable.
          </p>
        </div>

        <!-- Factor 05 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">05</div>
          <h4 class="factor-card-title">Testing and Deployment</h4>
          <p class="factor-card-desc">
            Quality assurance depth, cross-browser compatibility tests, staging servers, and production cloud infrastructure setup.
          </p>
        </div>

        <!-- Factor 06 -->
        <div class="cost-factor-card">
          <div class="factor-num-watermark">06</div>
          <h4 class="factor-card-title">Support and Maintenance</h4>
          <p class="factor-card-desc">
            The ongoing technical services, server monitoring, security updates, and response commitments agreed for the project.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 4: A Clear Path from Inquiry to Proposal
       ========================================================================= -->
  <section class="proposal-path-section" id="proposal-path">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>STRUCTURED ROADMAP</span>
        </div>
        <h2 class="section-title">
          A Clear Path from <span class="gradient-text">Inquiry to Proposal</span>
        </h2>
        <p class="section-description">
          Our structured evaluation process ensures you receive an accurate, realistic, and transparent proposal:
        </p>
      </div>

      <div class="proposal-path-grid">
        <!-- Step 1 -->
        <div class="proposal-step-card">
          <span class="proposal-step-badge">STEP 01</span>
          <h4 class="proposal-step-title">Share Your Requirements</h4>
          <p class="proposal-step-desc">
            Tell us about your business, objectives, target audience, and desired digital functionality through our simple quote form.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="proposal-step-card">
          <span class="proposal-step-badge">STEP 02</span>
          <h4 class="proposal-step-title">Discuss the Scope</h4>
          <p class="proposal-step-desc">
            We collaborate to clarify key deliverables, technical dependencies, project priorities, and architectural boundaries.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="proposal-step-card">
          <span class="proposal-step-badge">STEP 03</span>
          <h4 class="proposal-step-title">Review the Proposal</h4>
          <p class="proposal-step-desc">
            Evaluate a documented breakdown of deliverables, transparent commercial terms, milestone checkpoints, and realistic timelines.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="proposal-step-card">
          <span class="proposal-step-badge">STEP 04</span>
          <h4 class="proposal-step-title">Confirm the Project</h4>
          <p class="proposal-step-desc">
            Formal kickoff takes place once the scope, milestones, responsibilities, and commercial terms are mutually agreed upon.
          </p>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 5: Frequently Asked Questions About Pricing
       ========================================================================= -->
  <section class="pricing-faq-section" id="faq">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>CLEAR ANSWERS</span>
        </div>
        <h2 class="section-title">
          Frequently Asked Questions <span class="gradient-text">About Pricing</span>
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
              <span>How much does a GeerSoft project cost?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Project costs depend on the service, scope, functionality, and agreed deliverables. Contact GeerSoft for current pricing or a project-specific quotation.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>Do you offer fixed-price projects?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Fixed-price arrangements may be possible when the project scope and commercial terms have been agreed. Confirm the appropriate arrangement with GeerSoft.
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>Can I request a customized quotation?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Yes. Share your requirements, desired features, expected timeline, and budget expectations so the team can discuss an appropriate proposal.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>Are hosting and domain charges included?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Inclusions depend on the particular proposal. Confirm hosting, domain registration, third-party services, and other charges in the written quotation.
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>Is ongoing maintenance included?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Maintenance and support depend on the agreed service scope. Confirm the applicable coverage, duration, and terms before proceeding.
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="faq-card-item">
            <button class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="false">
              <span>How do I get started?</span>
              <div class="faq-toggle-icon">
                <i class="bi bi-chevron-down"></i>
              </div>
            </button>
            <div class="faq-answer-collapse">
              Contact GeerSoft through the website or the published contact channels to discuss your requirements and pricing.
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: High-Impact Closing CTA
       ========================================================================= -->
  <section class="cta-banner-section" id="pricing-cta">
    <div class="container-xl">
      <div class="cta-banner-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-badge mb-3">
              <span class="badge-dot"></span>
              <span>LET'S BUILD TOGETHER</span>
            </div>
            <h2 class="cta-title">
              Let's Plan a Solution That <br>
              <span class="gradient-text">Fits Your Business</span>
            </h2>
            <p class="cta-desc">
              Tell us what you want to build, and let's discuss the scope, available options, and pricing for your project.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
              <button onclick="openQuoteModal()" class="btn-ai-primary justify-content-center">
                <span>Request a Quote</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </button>
              <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20a%20pricing%20proposal" 
                 target="_blank" rel="noopener noreferrer" class="btn-cta-wa justify-content-center">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
                  <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.419-.101.824z"/>
                </svg>
                <span>Contact GeerSoft</span>
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
    function filterPricing(category, btn) {
      document.querySelectorAll(".pricing-filter-btn").forEach(b => {
        b.classList.remove("active");
        b.setAttribute("aria-selected", "false");
      });
      if (btn) {
        btn.classList.add("active");
        btn.setAttribute("aria-selected", "true");
      }

      const items = document.querySelectorAll(".pricing-card-col");
      items.forEach(item => {
        const cats = item.getAttribute("data-category") || "";
        if (category === "all" || cats.includes(category)) {
          item.classList.remove("d-none-filter");
        } else {
          item.classList.add("d-none-filter");
        }
      });
    }

    function openPricingQuote(serviceName) {
      if (window.openQuoteModal) {
        window.openQuoteModal();
        if (serviceName) {
          setTimeout(() => {
            const radio = document.querySelector(\'input[name="service"][value*="\' + serviceName + \'"]\');
            if (radio) {
              radio.checked = true;
            }
            const notesField = document.querySelector(\'textarea[name="notes"]\');
            if (notesField && !notesField.value) {
              notesField.value = "Inquiring regarding pricing proposal for: " + serviceName;
            }
          }, 100);
        }
      }
    }
  </script>
';
include "include/footer.php";
?>
