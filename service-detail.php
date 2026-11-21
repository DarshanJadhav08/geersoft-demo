<?php
/**
 * GeerSoft IT Solutions — Individual Service Detail Page
 * File: service-detail.php
 * Handles: /services/{slug} dynamic single service view
 */

$slug = isset($_GET['slug']) ? strtolower(trim($_GET['slug'])) : 'web-development';

// Comprehensive Service Catalog
$catalog = [
    'web-development' => [
        'title' => 'Website Development',
        'badge' => 'HIGH-PERFORMANCE WEB ENGINEERING',
        'subtitle' => 'Modern, responsive, user-friendly websites built around business objectives.',
        'overview' => 'We engineer bespoke, fast-loading, responsive websites that communicate your brand authority, convert visitors into qualified leads, and establish a rock-solid foundation for organic search growth.',
        'icon' => '<polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>',
        'quote_service' => 'Website Development',
        'capabilities' => [
            ['title' => 'Corporate & Business Websites', 'desc' => 'Custom-coded corporate platforms reflecting your unique brand identity with pixel-precise responsive layouts across every device.'],
            ['title' => 'Performance & Technical SEO', 'desc' => 'Sub-second page speeds, clean semantic HTML5 markup, structured data schema, and Core Web Vitals optimization.'],
            ['title' => 'Headless & Modern CMS Integration', 'desc' => 'Intuitive content management setups that empower your marketing team to edit pages and publish articles effortlessly.'],
            ['title' => 'Security & SSL Architecture', 'desc' => 'Multi-tier form sanitization, CSRF protection, secure header configurations, and automated SSL certificate integration.']
        ],
        'tech_stack' => ['Next.js', 'React.js', 'PHP 8+', 'HTML5 / CSS3', 'JavaScript (ES6+)', 'Tailwind CSS', 'WordPress', 'Bootstrap 5'],
        'deliverables' => ['Figma UI/UX Mockups', 'Responsive Front-End Code', 'CMS Admin Panel', 'SEO Audit & Meta Schema', 'Full Source Code Handover'],
        'faqs' => [
            ['q' => 'How long does a custom website development project take?', 'a' => 'Standard corporate websites typically take between 2 to 4 weeks depending on the number of pages, custom features, and review cycles.'],
            ['q' => 'Will my website work smoothly on all mobile devices?', 'a' => 'Yes, every website we build undergoes rigorous cross-device testing across smartphones, tablets, laptops, and ultra-wide displays.'],
            ['q' => 'Do I own 100% of the website code upon completion?', 'a' => 'Absolutely. Upon project sign-off and final handover, you receive full ownership of all source code, assets, and repository access.']
        ]
    ],
    'custom-software-development' => [
        'title' => 'Custom Software Development',
        'badge' => 'BESPOKE ENTERPRISE ARCHITECTURE',
        'subtitle' => 'Build software tailored to your business processes, operational requirements, and long-term goals.',
        'overview' => 'We engineer custom SaaS platforms, microservices, and specialized internal tools that eliminate manual spreadsheets, streamline departmental workflows, and scale seamlessly with company growth.',
        'icon' => '<rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line>',
        'quote_service' => 'Custom Software / SaaS',
        'capabilities' => [
            ['title' => 'Tailored SaaS Applications', 'desc' => 'Multi-tenant cloud architectures with granular role-based permissions, automated billing, and secure client portals.'],
            ['title' => 'High-Throughput REST & GraphQL APIs', 'desc' => 'Robust API microservices facilitating real-time synchronization between third-party systems and internal databases.'],
            ['title' => 'Automated Business Workflows', 'desc' => 'Custom logic rules that trigger notifications, auto-generate invoices, and reconcile data without human intervention.'],
            ['title' => 'Scalable Database Schemas', 'desc' => 'Relational and document database architectures optimized for zero data redundancy, high concurrency, and automated daily backups.']
        ],
        'tech_stack' => ['Laravel Framework', 'PHP 8+', 'Node.js', 'Express.js', 'MySQL', 'PostgreSQL', 'Redis', 'Docker'],
        'deliverables' => ['Architecture Blueprint', 'RESTful API Suite', 'Admin Portal', 'Automated Unit Tests', 'Deployment Scripts & Docs'],
        'faqs' => [
            ['q' => 'Can custom software integrate with our existing third-party tools?', 'a' => 'Yes, we specialize in building custom API integrations with CRM, payment gateways, accounting software, and communication tools.'],
            ['q' => 'How do you ensure data security in custom software?', 'a' => 'We implement encryption at rest and in transit, strict SQL injection prevention, rate limiting, and role-based access control.'],
            ['q' => 'What maintenance is needed after software launch?', 'a' => 'We offer scheduled maintenance packages covering server monitoring, dependency updates, database optimization, and technical troubleshooting.']
        ]
    ],
    'web-application-development' => [
        'title' => 'Web Application Development',
        'badge' => 'INTERACTIVE CLOUD PORTALS',
        'subtitle' => 'Develop interactive web applications that help teams manage information, collaborate, and complete business tasks efficiently.',
        'overview' => 'We build dynamic, web-based software applications that combine desktop-grade interactivity with cloud accessibility, enabling real-time collaboration across distributed teams.',
        'icon' => '<path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3z"></path><path d="M6 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3z"></path>',
        'quote_service' => 'Custom Software / SaaS',
        'capabilities' => [
            ['title' => 'Admin Dashboards & Portals', 'desc' => 'Interactive data dashboards with customizable metric widgets, real-time telemetry graphs, and exportable CSV/PDF reports.'],
            ['title' => 'Role-Based Access Control (RBAC)', 'desc' => 'Granular permission tiers ensuring employees, managers, and external clients only view data permitted for their role.'],
            ['title' => 'Real-Time WebSockets Sync', 'desc' => 'Instant bi-directional communication for live notifications, collaborative edits, and real-time status updates.'],
            ['title' => 'Cloud Infrastructure Deployment', 'desc' => 'Containerized deployments on AWS and DigitalOcean with load balancing, automated failover, and high uptime SLAs.']
        ],
        'tech_stack' => ['React.js', 'Next.js', 'Laravel', 'Node.js', 'MySQL', 'Redis', 'AWS Cloud', 'Docker'],
        'deliverables' => ['Interactive Web App UI', 'Backend Engine & Database', 'User Management System', 'Security Audit Report', 'Documentation'],
        'faqs' => [
            ['q' => 'What is the difference between a website and a web application?', 'a' => 'A website is primarily informational, whereas a web application features dynamic user interactivity, authentication, data processing, and state management.'],
            ['q' => 'Can web applications work offline?', 'a' => 'Yes, through Progressive Web App (PWA) service workers, essential features and data caching can remain accessible during intermittent connectivity.']
        ]
    ],
    'mobile-application-development' => [
        'title' => 'Mobile Application Development',
        'badge' => 'CROSS-PLATFORM IOS & ANDROID',
        'subtitle' => 'Deliver convenient mobile experiences that help customers and teams access important services on the go.',
        'overview' => 'We architect high-performance mobile applications using React Native and Flutter, delivering native 60fps responsiveness, offline data caching, and hardware integration across iOS and Android from a single codebase.',
        'icon' => '<rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line>',
        'quote_service' => 'Mobile App (iOS/Android)',
        'capabilities' => [
            ['title' => 'Cross-Platform React Native & Flutter', 'desc' => 'Unified codebases that minimize development expenditure while maintaining native look, feel, and performance.'],
            ['title' => 'Offline-First Architecture', 'desc' => 'Local database caching via SQLite and WatermelonDB allowing uninterrupted app usage during network drops.'],
            ['title' => 'Push Notifications & Deep Linking', 'desc' => 'Automated Firebase messaging pipelines driving user retention, milestone alerts, and seamless deep-link navigation.'],
            ['title' => 'App Store & Play Store Publishing', 'desc' => 'End-to-end management of iOS App Store guidelines, Google Play console compliance, and deployment pipelines.']
        ],
        'tech_stack' => ['React Native', 'Flutter', 'TypeScript', 'Firebase', 'SQLite', 'REST APIs', 'Android Studio', 'Xcode'],
        'deliverables' => ['iOS & Android App Builds', 'Firebase Push Integration', 'App Store Assets & Metadata', 'Backend API Connectors', 'Source Code'],
        'faqs' => [
            ['q' => 'Should we build cross-platform or separate native apps?', 'a' => 'For 95% of business applications, cross-platform frameworks like React Native deliver identical performance with up to 40% savings in build time and maintenance.'],
            ['q' => 'Do you assist with publishing on Google Play and Apple App Store?', 'a' => 'Yes, we handle the entire submission, review guideline compliance, certificate signing, and launch process.']
        ]
    ],
    'ai-integration-automation' => [
        'title' => 'AI Integration and Automation',
        'badge' => 'INTELLIGENT COMPUTING & WORKFLOWS',
        'subtitle' => 'Explore practical AI capabilities and automation workflows that can reduce repetitive work and improve how your business uses information.',
        'overview' => 'We engineer practical, verifiable artificial intelligence integrations and automated pipelines that free your staff from repetitive administrative tasks and extract actionable intelligence from business data.',
        'icon' => '<path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path><rect x="3" y="8" width="18" height="12" rx="2"></rect><circle cx="9" cy="13" r="1.5"></circle><circle cx="15" cy="13" r="1.5"></circle><path d="M9 17h6"></path>',
        'quote_service' => 'AI Integration & Automation',
        'capabilities' => [
            ['title' => 'Custom Knowledge-Base Chatbots', 'desc' => 'Conversational assistants securely trained on your documentation, product manuals, and FAQs for 24/7 client support.'],
            ['title' => 'Automated Data Extraction & OCR', 'desc' => 'Intelligent document parsers extracting tabular data from PDF invoices, receipts, and intake forms into your ERP.'],
            ['title' => 'Workflow Automation Pipelines', 'desc' => 'Connecting webhooks, CRM events, and database triggers to eliminate manual repetitive copy-paste tasks.'],
            ['title' => 'AI-Enabled App Features', 'desc' => 'Semantic vector search, smart recommendation engines, and automated summary generators embedded inside your apps.']
        ],
        'tech_stack' => ['OpenAI API', 'LangChain', 'Python', 'Vector DBs (Pinecone/Chroma)', 'Custom Webhooks', 'Node.js', 'REST APIs'],
        'deliverables' => ['Trained AI Model / Assistant', 'Integration API Middleware', 'Prompt Engineering Architecture', 'Security & Token Controls', 'Operational Manual'],
        'faqs' => [
            ['q' => 'Is our company data kept private and secure?', 'a' => 'Yes. We utilize enterprise API agreements where customer inputs are never used to train public foundational models.'],
            ['q' => 'How can we identify which workflows are suitable for AI?', 'a' => 'During discovery, we audit your repetitive manual tasks (e.g. data re-entry, triage, ticket answers) and evaluate feasibility and ROI.']
        ]
    ],
    'erp-business-solutions' => [
        'title' => 'ERP and Business Solutions',
        'badge' => 'ENTERPRISE OPERATIONAL HARMONY',
        'subtitle' => 'Connect essential business processes through tailored systems that support operational visibility, organized information, and better coordination.',
        'overview' => 'We architect tailored Enterprise Resource Planning systems that eliminate communication barriers across departments, combining inventory management, automated billing, sales funnels, and executive reporting into one interface.',
        'icon' => '<circle cx="12" cy="5" r="3"></circle><circle cx="5" cy="19" r="3"></circle><circle cx="19" cy="19" r="3"></circle><line x1="12" y1="8" x2="12" y2="12"></line><path d="M5 16l7-4 7 4"></path>',
        'quote_service' => 'ERP & Business Systems',
        'capabilities' => [
            ['title' => 'Inventory & Supply Chain Tracking', 'desc' => 'Real-time stock valuation, multi-warehouse transfers, low-stock threshold alerts, and purchase order generation.'],
            ['title' => 'Automated Financial Invoicing & GST', 'desc' => 'One-click tax invoices, automated recurring billing, GST compliance reports, and payment gateway reconciliation.'],
            ['title' => 'HR & Workforce Management', 'desc' => 'Employee attendance logging, payroll calculations, leave tracking, and departmental performance metrics.'],
            ['title' => 'Executive Telemetry & BI Dashboards', 'desc' => 'Visual KPI graphs showing gross margin, cash flow trends, operational bottlenecks, and projected revenue.']
        ],
        'tech_stack' => ['PHP 8+ / Laravel', 'MySQL Database', 'React Dashboard', 'Redis Caching', 'Automated Cron Pipelines', 'PDF Generators'],
        'deliverables' => ['Complete ERP Software Suite', 'Custom Database Architecture', 'Role-Based User Permissions', 'Audit Logging Subsystem', 'Staff Training & Docs'],
        'faqs' => [
            ['q' => 'Why choose a custom ERP over commercial off-the-shelf software?', 'a' => 'Off-the-shelf ERPs charge high recurring per-user fees and force your company to alter its processes. A custom ERP is built around your exact operations with zero monthly user license penalties.'],
            ['q' => 'Can we migrate data from our old software and spreadsheets?', 'a' => 'Yes, we provide structured data migration scripts to cleanly import customer records, historical transactions, and inventory items.']
        ]
    ],
    'digital-marketing' => [
        'title' => 'Digital Marketing',
        'badge' => 'DATA-DRIVEN BUSINESS ACQUISITION',
        'subtitle' => 'Strengthen your online presence with digital campaigns and marketing activities aligned with your audience and business objectives.',
        'overview' => 'We create targeted digital marketing campaigns that position your company in front of high-intent decision makers, driving measurable customer acquisition and maximizing return on ad spend.',
        'icon' => '<path d="M12 20v-6M6 20V10M18 20V4"></path>',
        'quote_service' => 'Digital Marketing & SEO',
        'capabilities' => [
            ['title' => 'Google & Search Engine PPC', 'desc' => 'High-conversion Google Search & Display ad campaigns targeting high-intent commercial keywords.'],
            ['title' => 'Social Media Advertising', 'desc' => 'Meta and LinkedIn advertising funnels designed to build brand credibility and capture B2B inquiries.'],
            ['title' => 'Conversion Rate Optimization (CRO)', 'desc' => 'Landing page UX enhancements and A/B split testing that maximize lead capture from incoming traffic.'],
            ['title' => 'Analytics & Attribution Reporting', 'desc' => 'Transparent monthly reports tracking cost per lead, click-through rates, and channel performance.']
        ],
        'tech_stack' => ['Google Ads', 'Google Analytics 4', 'Meta Business Suite', 'Google Tag Manager', 'Looker Studio', 'CRO A/B Testing'],
        'deliverables' => ['Campaign Strategy Roadmap', 'High-Converting Ad Copy', 'Landing Page Optimization', 'Bi-Weekly Performance Audits', 'Monthly ROI Reports'],
        'faqs' => [
            ['q' => 'How quickly can we expect leads from digital marketing?', 'a' => 'Paid search and social campaigns typically generate qualified inquiries within the first week of active budget deployment.'],
            ['q' => 'Do you provide detailed reports on ad spend?', 'a' => 'Yes, every rupee of ad spend is transparently tracked with full attribution to conversions and lead quality.']
        ]
    ],
    'professional-seo-services' => [
        'title' => 'Search Engine Optimization',
        'badge' => 'ORGANIC SEARCH VISIBILITY',
        'subtitle' => 'Improve your website\'s technical foundations, content structure, and search visibility through appropriate SEO practices.',
        'overview' => 'We implement technical on-page optimization, content architecture, and crawlability improvements that help search engines understand, index, and rank your website for key business searches.',
        'icon' => '<circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>',
        'quote_service' => 'Digital Marketing & SEO',
        'capabilities' => [
            ['title' => 'Technical SEO & Crawl Audits', 'desc' => 'Resolving crawl errors, canonical duplicates, broken redirects, and optimizing robots.txt and XML sitemaps.'],
            ['title' => 'On-Page Content & Schema Structuring', 'desc' => 'Optimizing header tags, meta descriptions, internal link equity, and Schema.org rich snippet markup.'],
            ['title' => 'Speed & Core Web Vitals Optimization', 'desc' => 'Improving Largest Contentful Paint (LCP), Cumulative Layout Shift (CLS), and Interaction to Next Paint (INP).'],
            ['title' => 'Local Search & Google Business Profile', 'desc' => 'Enhancing geographic search relevance and map citations for businesses serving specific regional territories.']
        ],
        'tech_stack' => ['Google Search Console', 'Ahrefs / SEMrush', 'Screaming Frog', 'Lighthouse Audits', 'Schema.org JSON-LD'],
        'deliverables' => ['Comprehensive Technical Audit', 'On-Page Optimization Matrix', 'Keyword Opportunity Map', 'Monthly Keyword Movement Reports'],
        'faqs' => [
            ['q' => 'Do you guarantee #1 ranking on Google?', 'a' => 'No reputable agency guarantees specific search rankings because search engine algorithms change constantly. We apply proven, white-hat technical SEO practices that sustainably build search visibility.'],
            ['q' => 'How long does SEO take to produce results?', 'a' => 'Technical improvements and index updates usually show positive momentum within 60 to 90 days as search engines re-crawl and re-evaluate your site.']
        ]
    ],
    'ui-ux-design' => [
        'title' => 'UI/UX Design',
        'badge' => 'HUMAN-CENTERED DIGITAL INTERFACES',
        'subtitle' => 'Create intuitive digital experiences that combine attractive visual design with clear navigation and practical usability.',
        'overview' => 'We craft ergonomic digital interfaces that eliminate cognitive friction, streamline user workflows, and elevate your brand aesthetic through cohesive design systems.',
        'icon' => '<path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle>',
        'quote_service' => 'Website Development',
        'capabilities' => [
            ['title' => 'User Journey & Wireframing', 'desc' => 'Low-fidelity architectural wireframes mapping optimal user flows, task completion paths, and conversion touchpoints.'],
            ['title' => 'High-Fidelity Interactive Prototypes', 'desc' => 'Clickable Figma prototypes simulating exact visual styles, micro-interactions, and responsive layout behaviors.'],
            ['title' => 'Comprehensive Design Systems', 'desc' => 'Documented component libraries, color tokens, typography scales, and iconography ensuring design consistency.'],
            ['title' => 'Usability & Accessibility Audits', 'desc' => 'Evaluating contrast ratios, keyboard accessibility, and intuitive navigation standards across diverse user segments.']
        ],
        'tech_stack' => ['Figma', 'Adobe Creative Suite', 'Design Tokens', 'WCAG Accessibility Standards', 'Interactive Prototyping'],
        'deliverables' => ['Figma Master Design Files', 'Clickable Prototype Link', 'Design Token Specs', 'Responsive Breakpoint Guides', 'SVG Icon Assets'],
        'faqs' => [
            ['q' => 'Do we review designs before coding starts?', 'a' => 'Yes! You review and approve interactive Figma prototypes before any development begins, preventing costly revisions later.'],
            ['q' => 'Can you redesign our existing application interface?', 'a' => 'Yes, we frequently perform UI/UX audits and modern visual overhauls for legacy business platforms.']
        ]
    ],
    'website-maintenance-support' => [
        'title' => 'Maintenance & Technical Support',
        'badge' => 'SYSTEM UPTIME & PEACE OF MIND',
        'subtitle' => 'Keep your digital products maintainable with agreed technical support, updates, troubleshooting, and performance reviews.',
        'overview' => 'We provide dedicated ongoing technical maintenance, security patch applications, routine database backups, and prompt issue resolution so your digital platforms remain dependable 24/7.',
        'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>',
        'quote_service' => 'Website Development',
        'capabilities' => [
            ['title' => 'Scheduled Security Patches & Updates', 'desc' => 'Timely core updates, framework patch applications, and vulnerability mitigation across your servers and libraries.'],
            ['title' => 'Automated Cloud Backups', 'desc' => 'Offsite daily database and asset backups with verified one-click disaster recovery procedures.'],
            ['title' => 'Uptime & Performance Monitoring', 'desc' => 'Continuous automated health checks alerting our engineering team to anomalies before users notice them.'],
            ['title' => 'Direct Developer Troubleshooting', 'desc' => 'Direct communication channels for rapid bug fixes, content additions, and technical consultation.']
        ],
        'tech_stack' => ['Linux / Nginx', 'Automated Health Monitors', 'SSL Certbots', 'Git Version Control', 'MySQL Backup Daemons'],
        'deliverables' => ['Monthly Maintenance Reports', 'Continuous Uptime Monitoring', 'Priority Incident Response', 'Scheduled Security Updates'],
        'faqs' => [
            ['q' => 'What happens if our website encounters a sudden issue?', 'a' => 'Our maintenance clients receive prioritized support with fast response times to diagnose and resolve production incidents.'],
            ['q' => 'Can we upgrade our maintenance package as our site grows?', 'a' => 'Yes, maintenance plans scale flexibly to match your traffic growth, storage needs, and feature velocity.']
        ]
    ]
];

// Slug Aliases Map
$aliases = [
    'php-laravel-development' => 'custom-software-development',
    'software-development' => 'custom-software-development',
    'web-apps' => 'web-application-development',
    'react-native-app-development' => 'mobile-application-development',
    'android-app-development' => 'mobile-application-development',
    'ios-app-development' => 'mobile-application-development',
    'mobile-app-development' => 'mobile-application-development',
    'ai-integration' => 'ai-integration-automation',
    'ai-automation' => 'ai-integration-automation',
    'erp-solutions' => 'erp-business-solutions',
    'erp-development' => 'erp-business-solutions',
    'search-engine-optimization' => 'professional-seo-services',
    'seo' => 'professional-seo-services',
    'social-media-marketing' => 'digital-marketing',
    'ppc-advertising' => 'digital-marketing',
    'stunning-graphic-design' => 'ui-ux-design',
    'technical-support' => 'website-maintenance-support',
    'shopify-e-commerce' => 'web-development',
    'wordpress-development' => 'web-development'
];

if (isset($aliases[$slug])) {
    $slug = $aliases[$slug];
}

if (!isset($catalog[$slug])) {
    $slug = 'web-development';
}

$svc = $catalog[$slug];
$pageTitle       = $svc['title'] . " | GeerSoft IT Solutions";
$pageDescription = $svc['overview'];
$pageCanonical   = "https://geersoft.in/services/" . $slug;
$extraCss        = ["assets/stylesheets/ai-services.css"];
$activeNav       = "services";

include "include/header.php";
?>



  <!-- =========================================================================
       Single Service Hero Section
       ========================================================================= -->
  <section class="hero-section" id="single-service-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <div class="col-lg-8">
          

          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span><?php echo htmlspecialchars($svc['badge']); ?></span>
          </div>

          <h1 class="hero-title">
            <?php echo htmlspecialchars($svc['title']); ?>
          </h1>

          <p class="hero-subtitle">
            <?php echo htmlspecialchars($svc['overview']); ?>
          </p>

          <div class="hero-cta-group">
            <button onclick="openQuoteModal('<?php echo htmlspecialchars($svc['quote_service']); ?>')" class="btn-ai-primary">
              <span>Request Quote for This Service</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
            <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20<?php echo urlencode($svc['title']); ?>" target="_blank" class="btn-ai-secondary">
              <i class="bi bi-whatsapp text-success me-1"></i>
              <span>Instant WhatsApp Consultation</span>
            </a>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="service-detail-3d-box p-5 rounded-4" style="background:var(--bg-card); border:1px solid var(--border-glow); box-shadow:var(--shadow-card);">
            <div class="service-card-3d-icon mx-auto mb-4" style="width:84px; height:84px; display:flex; align-items:center; justify-content:center;">
              <?php echo get_service_icon($svc['title'], 52); ?>
            </div>
            <h4 class="text-white mb-2" style="font-size:1.35rem;"><?php echo htmlspecialchars($svc['title']); ?></h4>
            <p class="text-muted" style="font-size:0.9rem; line-height:1.6;"><?php echo htmlspecialchars($svc['subtitle']); ?></p>
            <div class="badge bg-primary-subtle text-info border border-info-subtle px-3 py-2 mt-2" style="font-family:monospace; font-size:0.78rem;">
              PRODUCTION READY ARCHITECTURE
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       Core Capabilities & Architecture
       ========================================================================= -->
  <section class="py-5 my-4">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>CAPABILITY BREAKDOWN</span>
        </div>
        <h2 class="section-title">
          Engineered for <br>
          <span class="gradient-text">Performance & Measurable Growth</span>
        </h2>
        <p class="section-subtitle">
          Detailed technical specifications and architectural standards implemented for <?php echo htmlspecialchars($svc['title']); ?>.
        </p>
      </div>

      <div class="row g-4">
        <?php foreach ($svc['capabilities'] as $idx => $cap): ?>
          <div class="col-lg-6">
            <div class="why-card h-100">
              <div class="d-flex align-items-center gap-3 mb-3">
                <div class="service-card-badge" style="font-size:0.8rem;">CAPABILITY 0<?php echo $idx + 1; ?></div>
                <h4 class="text-white mb-0" style="font-size:1.25rem;"><?php echo htmlspecialchars($cap['title']); ?></h4>
              </div>
              <p class="why-desc mb-0" style="font-size:0.95rem; line-height:1.7;">
                <?php echo htmlspecialchars($cap['desc']); ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       Technologies Deployed & Deliverables
       ========================================================================= -->
  <section class="py-5 my-4" style="background:rgba(255,255,255,0.015);">
    <div class="container-xl">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6">
          <div class="hero-badge mb-3">
            <span class="badge-dot"></span>
            <span>TECH STACK SPECIFICATION</span>
          </div>
          <h3 class="display-6 fw-bold text-white mb-4">
            Technologies Deployed in <br>
            <span class="gradient-text"><?php echo htmlspecialchars($svc['title']); ?></span>
          </h3>
          <p class="text-muted mb-4" style="line-height:1.75; font-size:1.02rem;">
            We do not use deprecated or insecure libraries. Every module is built using active, supported LTS releases adhering to strict security and speed benchmarks.
          </p>

          <div class="d-flex flex-wrap gap-2 mb-4">
            <?php foreach ($svc['tech_stack'] as $t): ?>
              <span class="tech-pill-badge d-inline-flex align-items-center gap-2 px-3 py-2 rounded-3 text-white border" style="font-size:0.9rem; background:rgba(255,255,255,0.05); border-color:rgba(255,255,255,0.12)!important; transition:all 0.25s ease;">
                <?php echo get_tech_icon($t, 22); ?>
                <span class="fw-medium"><?php echo htmlspecialchars($t); ?></span>
              </span>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="p-4 p-md-5 rounded-4" style="background:var(--bg-card); border:1px solid var(--border-subtle); box-shadow:var(--shadow-card);">
            <h4 class="text-white mb-3" style="font-size:1.3rem;">Client Deliverables & Handover</h4>
            <p class="text-muted mb-4" style="font-size:0.92rem;">Everything you receive upon completion of your <?php echo htmlspecialchars($svc['title']); ?> project:</p>

            <ul class="list-unstyled mb-0" style="line-height:2.2;">
              <?php foreach ($svc['deliverables'] as $d): ?>
                <li class="d-flex align-items-center gap-3 text-white">
                  <i class="bi bi-check-circle-fill text-success" style="font-size:1.1rem;"></i>
                  <span><?php echo htmlspecialchars($d); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       Service Specific FAQs
       ========================================================================= -->
  <section class="py-5 my-4">
    <div class="container-xl">
      <div class="text-center max-w-700 mx-auto mb-5">
        <div class="hero-badge mb-3">
          <span class="badge-dot"></span>
          <span>SERVICE FAQS</span>
        </div>
        <h2 class="section-title">
          Questions About <br>
          <span class="gradient-text"><?php echo htmlspecialchars($svc['title']); ?></span>
        </h2>
      </div>

      <div class="faq-accordion-wrap">
        <?php foreach ($svc['faqs'] as $fIdx => $faq): ?>
          <div class="faq-card-item <?php echo $fIdx === 0 ? 'active' : ''; ?>">
            <button type="button" class="faq-question-btn" onclick="toggleFaq(this)" aria-expanded="<?php echo $fIdx === 0 ? 'true' : 'false'; ?>">
              <span><?php echo htmlspecialchars($faq['q']); ?></span>
              <div class="faq-toggle-icon">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </div>
            </button>
            <div class="faq-answer-collapse">
              <?php echo htmlspecialchars($faq['a']); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       Other Services Quick Navigation
       ========================================================================= -->
  <section class="py-5 my-4">
    <div class="container-xl">
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <div>
          <h3 class="text-white mb-1" style="font-size:1.4rem;">Explore Other Services</h3>
          <p class="text-muted mb-0" style="font-size:0.9rem;">Browse complementary technology services offered by GeerSoft IT Solutions.</p>
        </div>
        <a href="/services_all" class="btn-ai-secondary" style="padding:8px 18px; font-size:0.86rem;">
          <span>View All 10 Services</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
      </div>

      <div class="d-flex flex-wrap gap-2">
        <?php foreach ($catalog as $catSlug => $item): ?>
          <?php if ($catSlug !== $slug): ?>
            <a href="/services/<?php echo $catSlug; ?>" class="badge bg-secondary-subtle text-light border border-secondary p-2 px-3 text-decoration-none" style="font-size:0.85rem; transition:0.2s;">
              <?php echo htmlspecialchars($item['title']); ?> &rarr;
            </a>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- =========================================================================
       Final Call to Action
       ========================================================================= -->
  <section class="py-5 my-4" id="service-final-cta">
    <div class="container-xl">
      <div class="cta-banner-card text-center p-5 rounded-4 position-relative overflow-hidden">
        <h2 class="display-5 fw-bold text-white mb-3">
          Ready to Start Your <br>
          <span class="gradient-text"><?php echo htmlspecialchars($svc['title']); ?> Project?</span>
        </h2>
        <p class="text-muted max-w-700 mx-auto mb-4" style="font-size:1.1rem; line-height:1.75;">
          Tell us about your business goals, and let's explore the right digital solution for your next stage of growth.
        </p>
        <div class="d-flex flex-wrap gap-3 justify-content-center">
          <button onclick="openQuoteModal('<?php echo htmlspecialchars($svc['quote_service']); ?>')" class="btn-ai-primary">
            <span>Get a Free Project Quote</span>
          </button>
          <a href="/contact" class="btn-ai-secondary">
            <span>Contact GeerSoft Team</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
$quoteSelectedService = $svc['quote_service'] ?? $svc['title'];
$quoteModalTitle      = 'Get a Project Quote';
$quoteModalSubtitle   = 'Tell us about your requirements for ' . htmlspecialchars($svc['title']) . '.';
$whatsappCustomMsg    = 'Hello GeerSoft, I would like to discuss ' . $svc['title'];

include "include/footer.php";
?>
