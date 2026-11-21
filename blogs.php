<?php
$pageTitle       = "Blog | Technology Insights and Development Guides | GeerSoft";
$pageDescription = "Explore GeerSoft's technology articles on web development, PHP, Laravel, AI integration, ERP systems, SEO, and digital solutions.";
$pageKeywords    = "GeerSoft IT Solutions blog, web development articles, PHP Laravel tutorials, AI automation insights, SEO guides Mumbai";
$pageCanonical   = "https://geersoft.in/blogs";
$extraCss        = ["assets/stylesheets/ai-blog.css"];
$activeNav       = "blog";

include "include/header.php";
?>

  <!-- =========================================================================
       Section 1: AI-Powered Editorial Hero Section
       ========================================================================= -->
  <section class="hero-section" id="blog-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Hero Left Column -->
        <div class="col-lg-7">

          <div class="hero-badge">
            <span class="badge-dot"></span>
            <span>ENGINEERING &amp; TECHNOLOGY JOURNAL</span>
          </div>

          <h1 class="hero-title">
            Insights for a <br>
            <span class="gradient-text">Smarter Digital Future</span>
          </h1>

          <p class="hero-subtitle">
            Explore practical ideas, development insights, technology guides, and digital strategies to help businesses make informed technology decisions.
          </p>

          <div class="hero-cta-group">
            <a href="#articles-list" class="btn-ai-primary">
              <span>Explore Latest Articles</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#topics-grid" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
              <span>Explore Topics</span>
            </a>
          </div>

          <!-- Hero Metrics Bar -->
          <div class="hero-metrics-bar">
            <div class="metric-item">
              <div class="metric-val">100%</div>
              <div class="metric-lbl">Practical Content</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">Engineering</div>
              <div class="metric-lbl">Architecture Focus</div>
            </div>
            <div class="metric-divider"></div>
            <div class="metric-item">
              <div class="metric-val">Industry</div>
              <div class="metric-lbl">Best Practices</div>
            </div>
          </div>
        </div>

        <!-- Hero Right Column: 3D Editorial Composition -->
        <div class="col-lg-5">
          <div class="blog-hero-composition">
            
            <!-- Main Floating Article Card -->
            <div class="blog-hero-card-main">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-3.jpg" alt="Featured Article Preview" class="blog-hero-card-img">
              <div class="blog-hero-card-body">
                <span class="blog-hero-card-tag">Digital Marketing &amp; Strategy</span>
                <h4 class="blog-hero-card-title">Digital Marketing and its Importance?</h4>
                <div class="blog-hero-card-meta">
                  <span><i class="bi bi-person"></i> GeerSoft Editorial Team</span>
                  <span><i class="bi bi-clock"></i> 5 min read</span>
                </div>
              </div>
            </div>

            <!-- Secondary Sub Card -->
            <div class="blog-hero-card-sub">
              <div class="sub-blog-badge">
                <span class="dot"></span> Technical Guide
              </div>
              <div class="sub-blog-title">How to Host a Website</div>
              <div class="sub-blog-date">Feb 01, 2025 &bull; Infrastructure</div>
            </div>

            <!-- Floating Badges -->
            <div class="blog-hero-badge-float top-left">
              <i class="bi bi-journal-code text-info"></i>
              <span>Curated Engineering</span>
            </div>

            <div class="blog-hero-badge-float bottom-left">
              <i class="bi bi-shield-check text-success"></i>
              <span>Verified Insights</span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: Functional Article Discovery Interface
       ========================================================================= -->
  <section class="blog-discovery-section" id="articles-list">
    <div class="container-xl">
      <div class="text-center mb-4">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>CURATED ARTICLES &amp; GUIDES</span>
        </div>
        <h2 class="section-title">
          Explore Our <span class="gradient-text">Articles</span>
        </h2>
        <p class="section-description">
          Search and filter published technology guides, tutorials, and strategy articles.
        </p>

        <!-- Real-Time Search Bar -->
        <div class="blog-search-wrap">
          <i class="bi bi-search blog-search-icon"></i>
          <input type="text" id="blogSearchInput" class="blog-search-input" placeholder="Search articles by title or keyword..." oninput="handleBlogSearch(this.value)" aria-label="Search articles">
          <button type="button" id="blogSearchClear" class="blog-search-clear" onclick="clearBlogSearch()" aria-label="Clear search">
            <i class="bi bi-x-circle-fill"></i>
          </button>
        </div>

        <!-- Category Filter Nav -->
        <nav class="blog-category-nav" role="tablist" aria-label="Blog Category Filters">
          <button type="button" class="blog-category-btn active" data-category="all" onclick="filterBlogCategory('all', this)" role="tab" aria-selected="true">
            All Articles (4)
          </button>
          <button type="button" class="blog-category-btn" data-category="Marketing" onclick="filterBlogCategory('Marketing', this)" role="tab" aria-selected="false">
            Marketing (2)
          </button>
          <button type="button" class="blog-category-btn" data-category="Advertisement" onclick="filterBlogCategory('Advertisement', this)" role="tab" aria-selected="false">
            Advertisement &amp; PPC (1)
          </button>
          <button type="button" class="blog-category-btn" data-category="Domain & Hosting" onclick="filterBlogCategory('Domain & Hosting', this)" role="tab" aria-selected="false">
            Domain &amp; Hosting (1)
          </button>
        </nav>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 3: Featured Insight
       ========================================================================= -->
  <section class="featured-insight-section" id="featured-insight">
    <div class="container-xl">
      <div class="featured-insight-card">
        <div class="row align-items-center g-4">
          <div class="col-lg-6">
            <div class="featured-img-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-3.jpg" alt="Digital Marketing and its Importance? Cover" loading="lazy">
              <span class="featured-tag-pill">Digital Marketing</span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="featured-body">
              <div class="featured-meta-row">
                <span><i class="bi bi-person-circle"></i> GeerSoft Editorial Team</span>
                <span><i class="bi bi-calendar3"></i> Dec 22, 2025</span>
                <span><i class="bi bi-clock"></i> 5 min read</span>
              </div>

              <h3 class="featured-title">Digital Marketing and its Importance?</h3>

              <p class="featured-excerpt">
                Discover how modern digital marketing channels, technical SEO foundations, targeted advertising, and content architectures drive measurable business growth in competitive digital markets.
              </p>

              <div>
                <a href="<?php echo $siteUrl; ?>/blog/digital-marketing-importance" class="btn-read-featured">
                  <span>Read Full Article</span>
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 4: Latest Articles Grid
       ========================================================================= -->
  <section class="articles-grid-section" id="articles-grid">
    <div class="container-xl">
      <div class="row g-4" id="blogCardGrid">

        <!-- Article 1: Digital Marketing and its Importance? -->
        <div class="col-lg-4 col-md-6 article-col-item" data-category="Marketing" data-title="Digital Marketing and its Importance?" data-desc="Discover how modern digital marketing channels, technical SEO foundations, targeted advertising, and content architectures drive measurable business growth.">
          <article class="article-card-ai">
            <div class="article-thumb-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-3.jpg" alt="Digital Marketing and its Importance?" loading="lazy">
              <span class="article-category-badge">Marketing</span>
              <span class="article-read-badge"><i class="bi bi-clock me-1"></i> 5 min</span>
            </div>

            <div class="article-card-body">
              <div class="article-meta-row">
                <span><i class="bi bi-person me-1"></i> GeerSoft Editorial Team</span>
                <span>&bull;</span>
                <span><i class="bi bi-calendar3 me-1"></i> Dec 22, 2025</span>
              </div>

              <h3 class="article-title">
                <a href="<?php echo $siteUrl; ?>/blog/digital-marketing-importance" style="color:inherit; text-decoration:none;">
                  Digital Marketing and its Importance?
                </a>
              </h3>

              <p class="article-summary">
                A strategic breakdown of how modern online presence, SEO discovery, and data-driven lead generation help businesses scale reliably.
              </p>

              <div class="article-card-footer">
                <a href="<?php echo $siteUrl; ?>/blog/digital-marketing-importance" class="btn-read-link">
                  <span>Read Article</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </article>
        </div>

        <!-- Article 2: How to Create Ads on Google AdWords? -->
        <div class="col-lg-4 col-md-6 article-col-item" data-category="Advertisement" data-title="How to Create Ads on Google AdWords?" data-desc="A practical step-by-step walkthrough to setting up, targeting, budgeting, and launching high-ROI search and display ad campaigns on Google Ads.">
          <article class="article-card-ai">
            <div class="article-thumb-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-2.jpg" alt="How to Create Ads on Google AdWords?" loading="lazy">
              <span class="article-category-badge">Advertisement</span>
              <span class="article-read-badge"><i class="bi bi-clock me-1"></i> 6 min</span>
            </div>

            <div class="article-card-body">
              <div class="article-meta-row">
                <span><i class="bi bi-person me-1"></i> GeerSoft Growth Team</span>
                <span>&bull;</span>
                <span><i class="bi bi-calendar3 me-1"></i> Oct 05, 2025</span>
              </div>

              <h3 class="article-title">
                <a href="<?php echo $siteUrl; ?>/blog/google-adwords-ads" style="color:inherit; text-decoration:none;">
                  How to Create Ads on Google AdWords?
                </a>
              </h3>

              <p class="article-summary">
                A practical step-by-step walkthrough to setting up, targeting, budgeting, and launching high-ROI search and display campaigns.
              </p>

              <div class="article-card-footer">
                <a href="<?php echo $siteUrl; ?>/blog/google-adwords-ads" class="btn-read-link">
                  <span>Read Article</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </article>
        </div>

        <!-- Article 3: How to Host a Website on Any Hosting Provider? -->
        <div class="col-lg-4 col-md-6 article-col-item" data-category="Domain & Hosting" data-title="How to Host a Website on Any Hosting Provider?" data-desc="A practical technical guide explaining domain names, DNS records, nameservers, server environments, and database configuration for seamless website deployment.">
          <article class="article-card-ai">
            <div class="article-thumb-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-1.jpg" alt="How to Host a Website on Any Hosting Provider?" loading="lazy">
              <span class="article-category-badge">Domain &amp; Hosting</span>
              <span class="article-read-badge"><i class="bi bi-clock me-1"></i> 7 min</span>
            </div>

            <div class="article-card-body">
              <div class="article-meta-row">
                <span><i class="bi bi-person me-1"></i> GeerSoft Cloud Team</span>
                <span>&bull;</span>
                <span><i class="bi bi-calendar3 me-1"></i> Feb 01, 2025</span>
              </div>

              <h3 class="article-title">
                <a href="<?php echo $siteUrl; ?>/blog/how-to-host-a-website" style="color:inherit; text-decoration:none;">
                  How to Host a Website on Any Hosting Provider?
                </a>
              </h3>

              <p class="article-summary">
                A technical guide explaining domain names, DNS records, nameservers, server environments, and database configuration.
              </p>

              <div class="article-card-footer">
                <a href="<?php echo $siteUrl; ?>/blog/how-to-host-a-website" class="btn-read-link">
                  <span>Read Article</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </article>
        </div>

        <!-- Article 4: How to create ad on Google AdWords? (Optimization) -->
        <div class="col-lg-4 col-md-6 article-col-item" data-category="Marketing" data-title="How to create ad on Google AdWords?" data-desc="Deep dive into bidding strategies, keyword match types, negative keywords, ad copy testing, and conversion tracking for optimal return on ad spend.">
          <article class="article-card-ai">
            <div class="article-thumb-wrap">
              <img src="<?php echo $siteUrl; ?>/assets/images/blog/blog-2.jpg" alt="How to create ad on Google AdWords?" loading="lazy">
              <span class="article-category-badge">Marketing</span>
              <span class="article-read-badge"><i class="bi bi-clock me-1"></i> 6 min</span>
            </div>

            <div class="article-card-body">
              <div class="article-meta-row">
                <span><i class="bi bi-person me-1"></i> GeerSoft Growth Team</span>
                <span>&bull;</span>
                <span><i class="bi bi-calendar3 me-1"></i> Oct 05, 2023</span>
              </div>

              <h3 class="article-title">
                <a href="<?php echo $siteUrl; ?>/blog/how-to-create-ad-on-google-adwords" style="color:inherit; text-decoration:none;">
                  How to create ad on Google AdWords?
                </a>
              </h3>

              <p class="article-summary">
                Deep dive into bidding strategies, keyword match types, negative keywords, and conversion tracking for optimal return on spend.
              </p>

              <div class="article-card-footer">
                <a href="<?php echo $siteUrl; ?>/blog/how-to-create-ad-on-google-adwords" class="btn-read-link">
                  <span>Read Article</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </article>
        </div>

      </div>

      <!-- Empty State Container -->
      <div id="blogEmptyState" class="blog-empty-state">
        <div class="empty-icon">
          <i class="bi bi-search"></i>
        </div>
        <h4 class="text-white mb-2" style="font-size:1.2rem; font-weight:700;">No articles found</h4>
        <p class="text-muted mb-4" style="max-width:480px; margin:0 auto 20px auto; font-size:0.92rem;">
          No articles matched your search keywords or filter selection. Try adjusting your query or resetting all filters.
        </p>
        <button type="button" class="btn-ai-primary" onclick="resetBlogFilters()">
          <span>Reset All Filters</span>
        </button>
      </div>

      <!-- Pagination Component (Up to 9 cards per page) -->
      <div id="blogPaginationWrap" class="blog-pagination-wrap">
        <nav class="blog-pagination-nav" id="blogPaginationNav" aria-label="Blog Articles Pagination">
          <button type="button" class="pagination-btn" id="prevPageBtn" onclick="changeBlogPage(currentBlogPage - 1)" aria-label="Previous Page">
            <i class="bi bi-chevron-left"></i>
            <span class="d-none d-sm-inline">Previous</span>
          </button>
          
          <div id="paginationNumbers" class="d-flex align-items-center gap-1">
            <!-- Dynamic page numbers injected via JS -->
          </div>
          
          <button type="button" class="pagination-btn" id="nextPageBtn" onclick="changeBlogPage(currentBlogPage + 1)" aria-label="Next Page">
            <span class="d-none d-sm-inline">Next</span>
            <i class="bi bi-chevron-right"></i>
          </button>
        </nav>
        <div class="pagination-info-text" id="paginationInfoText">
          Showing 1–4 of 4 articles &bull; Max 9 per page
        </div>
      </div>

    </div>
  </section>


  <!-- =========================================================================
       Section 5: Explore Technology by Topic
       ========================================================================= -->
  <section class="topics-section" id="topics-grid">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>EDITORIAL TOPICS</span>
        </div>
        <h2 class="section-title">
          Explore Technology <span class="gradient-text">by Topic</span>
        </h2>
        <p class="section-description">
          Browse curated technology themes that align with GeerSoft's engineering and consulting expertise:
        </p>
      </div>

      <div class="row g-4">
        <!-- Topic 1: Artificial Intelligence -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h4 class="topic-title">Artificial Intelligence</h4>
            <p class="topic-desc">
              Practical AI integration, automation concepts, and responsible use of AI in business workflows.
            </p>
            <span class="topic-action-link">
              <span>View AI Capabilities</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>

        <!-- Topic 2: Web Development -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-browser-chrome"></i>
            </div>
            <h4 class="topic-title">Web Development</h4>
            <p class="topic-desc">
              Modern website architecture, responsive design, performance benchmarking, and maintainable code.
            </p>
            <span class="topic-action-link">
              <span>Explore Web Engineering</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>

        <!-- Topic 3: PHP and Laravel -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-code-slash"></i>
            </div>
            <h4 class="topic-title">PHP and Laravel</h4>
            <p class="topic-desc">
              Backend development, secure APIs, relational database integration, and microservices architecture.
            </p>
            <span class="topic-action-link">
              <span>Explore Backend Stack</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>

        <!-- Topic 4: ERP and Business Systems -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-hdd-network-fill"></i>
            </div>
            <h4 class="topic-title">ERP &amp; Business Systems</h4>
            <p class="topic-desc">
              Enterprise workflows, inventory reporting, accounting modules, and system integration strategies.
            </p>
            <span class="topic-action-link">
              <span>Explore ERP Architecture</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>

        <!-- Topic 5: SEO and Digital Growth -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-graph-up-arrow"></i>
            </div>
            <h4 class="topic-title">SEO &amp; Digital Growth</h4>
            <p class="topic-desc">
              Technical SEO audits, semantic content structure, site performance, and organic search visibility.
            </p>
            <span class="topic-action-link">
              <span>Explore SEO Practices</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>

        <!-- Topic 6: UI/UX and Product Design -->
        <div class="col-lg-4 col-md-6">
          <div class="topic-card-ai">
            <div class="topic-icon-wrap">
              <i class="bi bi-bezier2"></i>
            </div>
            <h4 class="topic-title">UI/UX &amp; Product Design</h4>
            <p class="topic-desc">
              Design systems, accessibility compliance (WCAG), user journeys, and interactive software prototyping.
            </p>
            <span class="topic-action-link">
              <span>Explore Design Systems</span>
              <i class="bi bi-arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: High-Impact Closing CTA
       ========================================================================= -->
  <section class="cta-banner-section" id="blog-cta">
    <div class="container-xl">
      <div class="cta-banner-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-badge mb-3">
              <span class="badge-dot"></span>
              <span>PARTNER WITH US</span>
            </div>
            <h2 class="cta-title">
              Have a Digital Project <br>
              <span class="gradient-text">in Mind?</span>
            </h2>
            <p class="cta-desc">
              Whether you're planning a new website, a business application, or an AI integration, GeerSoft can discuss your requirements and potential next steps.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
              <a href="<?php echo $siteUrl; ?>/services_all" class="btn-ai-primary justify-content-center">
                <span>Explore Our Services</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20read%20your%20blog%20and%20would%20like%20to%20discuss%20a%20project" 
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
$extraFooter = <<<'EOS'
  <!-- Blog Specialized Client-Side Filtering, Search & Pagination Script -->
  <script>
    const BLOG_PAGE_SIZE = 9;
    let currentBlogPage = 1;
    let activeBlogCategory = 'all';
    let activeBlogSearch = '';

    function getMatchingBlogItems() {
      const items = Array.from(document.querySelectorAll('.article-col-item'));
      const searchTerms = activeBlogSearch.toLowerCase().trim();

      return items.filter(item => {
        const itemCat = item.getAttribute('data-category') || '';
        const itemTitle = (item.getAttribute('data-title') || '').toLowerCase();
        const itemDesc = (item.getAttribute('data-desc') || '').toLowerCase();

        const matchesCat = (activeBlogCategory === 'all' || itemCat.toLowerCase().includes(activeBlogCategory.toLowerCase()));
        const matchesSearch = !searchTerms || itemTitle.includes(searchTerms) || itemDesc.includes(searchTerms);

        return matchesCat && matchesSearch;
      });
    }

    function renderPaginationControls(totalPages, totalItems, startIdx, endIdx) {
      const paginationWrap = document.getElementById('blogPaginationWrap');
      const prevBtn = document.getElementById('prevPageBtn');
      const nextBtn = document.getElementById('nextPageBtn');
      const numbersWrap = document.getElementById('paginationNumbers');
      const infoText = document.getElementById('paginationInfoText');

      if (!paginationWrap) return;

      if (totalItems === 0) {
        paginationWrap.style.display = 'none';
        return;
      }

      paginationWrap.style.display = 'flex';

      // Update Prev / Next buttons
      if (prevBtn) {
        prevBtn.disabled = (currentBlogPage <= 1);
      }
      if (nextBtn) {
        nextBtn.disabled = (currentBlogPage >= totalPages);
      }

      // Render page numbers
      if (numbersWrap) {
        numbersWrap.innerHTML = '';
        for (let p = 1; p <= totalPages; p++) {
          const btn = document.createElement('button');
          btn.type = 'button';
          btn.className = 'pagination-btn' + (p === currentBlogPage ? ' active' : '');
          btn.setAttribute('aria-label', `Page ${p}`);
          btn.setAttribute('aria-current', p === currentBlogPage ? 'page' : 'false');
          btn.textContent = p;
          btn.onclick = () => changeBlogPage(p);
          numbersWrap.appendChild(btn);
        }
      }

      // Update info summary text
      if (infoText) {
        const plural = totalItems === 1 ? '' : 's';
        infoText.innerHTML = `Showing <strong>${startIdx}–${endIdx}</strong> of <strong>${totalItems}</strong> article${plural} &bull; Page <strong>${currentBlogPage}</strong> of <strong>${totalPages}</strong> (Max ${BLOG_PAGE_SIZE} per page)`;
      }
    }

    function applyBlogFilters(resetToPageOne = true) {
      if (resetToPageOne) {
        currentBlogPage = 1;
      }

      const allItems = Array.from(document.querySelectorAll('.article-col-item'));
      const matchingItems = getMatchingBlogItems();
      const totalMatching = matchingItems.length;
      const totalPages = Math.max(1, Math.ceil(totalMatching / BLOG_PAGE_SIZE));

      if (currentBlogPage > totalPages) {
        currentBlogPage = totalPages;
      }
      if (currentBlogPage < 1) {
        currentBlogPage = 1;
      }

      const startIndex = (currentBlogPage - 1) * BLOG_PAGE_SIZE;
      const endIndex = Math.min(startIndex + BLOG_PAGE_SIZE, totalMatching);
      const visibleSet = new Set(matchingItems.slice(startIndex, endIndex));

      allItems.forEach(item => {
        if (visibleSet.has(item)) {
          item.classList.remove('d-none-filter');
        } else {
          item.classList.add('d-none-filter');
        }
      });

      const emptyBox = document.getElementById('blogEmptyState');
      if (emptyBox) {
        emptyBox.style.display = totalMatching === 0 ? 'block' : 'none';
      }

      const displayStart = totalMatching === 0 ? 0 : startIndex + 1;
      const displayEnd = totalMatching === 0 ? 0 : endIndex;
      renderPaginationControls(totalPages, totalMatching, displayStart, displayEnd);
    }

    function changeBlogPage(newPage) {
      const matchingItems = getMatchingBlogItems();
      const totalPages = Math.max(1, Math.ceil(matchingItems.length / BLOG_PAGE_SIZE));

      if (newPage < 1 || newPage > totalPages || newPage === currentBlogPage) {
        return;
      }

      currentBlogPage = newPage;
      applyBlogFilters(false);

      const target = document.getElementById('articles-list');
      if (target) {
        const navHeight = 90;
        const targetTop = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
        window.scrollTo({ top: targetTop, behavior: 'smooth' });
      }
    }

    function filterBlogCategory(cat, btn) {
      activeBlogCategory = cat;
      document.querySelectorAll('.blog-category-btn').forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
      });
      if (btn) {
        btn.classList.add('active');
        btn.setAttribute('aria-selected', 'true');
      }
      applyBlogFilters(true);
    }

    function handleBlogSearch(query) {
      activeBlogSearch = query;
      const clearBtn = document.getElementById('blogSearchClear');
      if (clearBtn) {
        clearBtn.style.display = query.trim() ? 'block' : 'none';
      }
      applyBlogFilters(true);
    }

    function clearBlogSearch() {
      const input = document.getElementById('blogSearchInput');
      if (input) input.value = '';
      activeBlogSearch = '';
      const clearBtn = document.getElementById('blogSearchClear');
      if (clearBtn) clearBtn.style.display = 'none';
      applyBlogFilters(true);
    }

    function resetBlogFilters() {
      clearBlogSearch();
      const allBtn = document.querySelector('.blog-category-btn[data-category="all"]');
      if (allBtn) filterBlogCategory('all', allBtn);
    }

    document.addEventListener('DOMContentLoaded', () => {
      applyBlogFilters(true);
    });
  </script>
EOS;
include "include/footer.php";
?>
