<?php
/**
 * Global Header Component — GeerSoft IT Solutions
 * File: include/header.php
 * 
 * 100% Fully Mobile Responsive Across All Screen Sizes:
 * - Ultra-compact mobile (280px - 320px)
 * - Small mobile (321px - 380px)
 * - Standard mobile (381px - 575px)
 * - Large mobile / Phablet (576px - 767px)
 * - Tablet Portrait (768px - 991px)
 * - Laptop & Small Desktop (992px - 1199px)
 * - Desktop & 4K Displays (1200px+)
 * 
 * Provides:
 * - Dynamic HTML5 boilerplate & <head> with configurable meta tags & stylesheets
 * - Embedded self-contained responsive CSS for header, mega menu & mobile drawer
 * - Adaptive layout with zero collision or horizontal overflow
 * - Mobile Navigation Drawer with Submenu Accordion & Touch-Friendly CTAs
 * - Built-in autonomous JavaScript for drawer open/close and header scroll state
 */

// 1. Path & URL Detection (supports subfolder XAMPP /geersoft, PHP built-in server, and production root)
if (!isset($siteUrl)) {
    $scriptDir = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    $siteUrl = (!empty($scriptDir) && $scriptDir !== '.') ? '/' . $scriptDir : '';
}

// Global Technology Icons Helper
require_once __DIR__ . '/tech_icons.php';

// 2. Default Metadata & Settings
$pageTitle       = $pageTitle       ?? 'GeerSoft IT Solutions — Enterprise AI, Custom Software & Digital Engineering';
$pageDescription = $pageDescription ?? 'GeerSoft IT Solutions is a premier technology company engineering high-performance websites, enterprise software, mobile apps, ERP systems, and AI automation.';
$pageKeywords    = $pageKeywords    ?? 'GeerSoft IT Solutions, AI web development, custom software engineering, mobile apps, ERP solutions, AI automation, enterprise digital marketing, Mumbai IT company';
$pageCanonical   = $pageCanonical   ?? 'https://geersoft.in/';
$ogImage         = $ogImage         ?? 'https://geersoft.in/assets/images/logo-2.png';
$bodyMode        = $bodyMode        ?? 'dark';
$bodyClass       = $bodyClass       ?? '';

// 3. Auto-detect active navigation link if not explicitly supplied
if (!isset($activeNav)) {
    $currentScript = basename($_SERVER['PHP_SELF'] ?? '', '.php');
    $requestUriPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '';
    
    if ($currentScript === 'index' || $requestUriPath === '/' || $requestUriPath === $siteUrl . '/' || $requestUriPath === $siteUrl) {
        $activeNav = 'home';
    } elseif ($currentScript === 'about' || strpos($requestUriPath, '/about') !== false) {
        $activeNav = 'about';
    } elseif (in_array($currentScript, ['services_all', 'service-detail']) || strpos($requestUriPath, '/services') !== false) {
        $activeNav = 'services';
    } elseif ($currentScript === 'portfolio' || strpos($requestUriPath, '/portfolio') !== false) {
        $activeNav = 'portfolio';
    } elseif ($currentScript === 'price' || strpos($requestUriPath, '/price') !== false) {
        $activeNav = 'price';
    } elseif (in_array($currentScript, ['blogs', 'blog']) || strpos($requestUriPath, '/blogs') !== false || strpos($requestUriPath, '/blog') !== false) {
        $activeNav = 'blog';
    } elseif ($currentScript === 'contact' || strpos($requestUriPath, '/contact') !== false) {
        $activeNav = 'contact';
    } else {
        $activeNav = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="theme-color" content="#030914">
  <meta name="msapplication-TileColor" content="#030914">

  <title><?php echo htmlspecialchars($pageTitle); ?></title>

  <!-- High-Impact Search Engine Meta Tags (Rank #1 Google & Bing) -->
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>">
  <meta name="author" content="GeerSoft IT Solutions">
  <meta name="publisher" content="GeerSoft IT Solutions">
  <meta name="copyright" content="GeerSoft IT Solutions">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

  <!-- Geo & Regional Ranking Meta Tags -->
  <meta name="geo.region" content="IN-MH">
  <meta name="geo.placename" content="Mumbai">
  <meta name="geo.position" content="19.0760;72.8777">
  <meta name="ICBM" content="19.0760, 72.8777">

  <!-- Open Graph / Facebook / LinkedIn / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="GeerSoft IT Solutions">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($pageCanonical); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="GeerSoft IT Solutions — Enterprise AI & Software Engineering">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@geersoft">
  <meta name="twitter:creator" content="@geersoft">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta name="twitter:image:alt" content="GeerSoft IT Solutions">

  <!-- Canonical & Favicon -->
  <link rel="canonical" href="<?php echo htmlspecialchars($pageCanonical); ?>">
  <link rel="apple-touch-icon" href="<?php echo $siteUrl; ?>/assets/images/favicon.png">
  <link rel="icon" href="<?php echo $siteUrl; ?>/assets/images/favicon.png" type="image/png">

  <!-- Preconnect & DNS Prefetch for Google Core Web Vitals -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

  <!-- Comprehensive Schema.org JSON-LD Structured Data Graph (Rank #1 Rich Snippets) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://geersoft.in/#organization",
        "name": "GeerSoft IT Solutions",
        "legalName": "GeerSoft IT Solutions",
        "url": "https://geersoft.in/",
        "logo": {
          "@type": "ImageObject",
          "url": "https://geersoft.in/assets/images/logo-2.png",
          "width": 300,
          "height": 80
        },
        "description": "GeerSoft IT Solutions is a premier technology engineering firm specializing in high-performance web applications, enterprise software, mobile apps, ERP systems, and autonomous agentic AI automation.",
        "foundingLocation": {
          "@type": "Place",
          "name": "Mumbai, Maharashtra, India"
        },
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Mumbai",
          "addressRegion": "Maharashtra",
          "postalCode": "400001",
          "addressCountry": "IN"
        },
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "telephone": "+91 78220 20118",
            "contactType": "sales",
            "areaServed": ["IN", "US", "GB", "AE", "SG", "AU"],
            "availableLanguage": ["English", "Hindi", "Marathi"]
          }
        ],
        "sameAs": [
          "https://www.linkedin.com/company/geersoft-it-solutions",
          "https://github.com/geersoft"
        ]
      },
      {
        "@type": "WebSite",
        "@id": "https://geersoft.in/#website",
        "url": "https://geersoft.in/",
        "name": "GeerSoft IT Solutions",
        "publisher": {
          "@id": "https://geersoft.in/#organization"
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https://geersoft.in/services_all.php?q={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@type": "ProfessionalService",
        "@id": "https://geersoft.in/#service",
        "name": "GeerSoft IT Solutions",
        "url": "https://geersoft.in/",
        "image": "https://geersoft.in/assets/images/logo-2.png",
        "telephone": "+91 78220 20118",
        "priceRange": "$$$",
        "currenciesAccepted": "INR, USD, EUR, GBP, AED",
        "paymentAccepted": "Cash, Credit Card, Bank Transfer, UPI",
        "areaServed": [
          {"@type": "Country", "name": "India"},
          {"@type": "Country", "name": "United States"},
          {"@type": "Country", "name": "United Kingdom"},
          {"@type": "Country", "name": "United Arab Emirates"},
          {"@type": "Country", "name": "Singapore"}
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Enterprise Digital & AI Engineering Services",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Autonomous Agentic AI & Intelligent Automation Systems"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Custom Enterprise Web & Cloud Application Engineering"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "High-Throughput ERP & CRM System Development"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Cross-Platform Mobile Application Development (iOS & Android)"
              }
            }
          ]
        }
      }
    ]
  }
  </script>

  <!-- Google Fonts: Plus Jakarta Sans (Headings), Inter (Body & UI), Fira Code (Monospace Metrics) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $siteUrl; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons: Local with CDN Fallback -->
  <link rel="stylesheet" href="<?php echo $siteUrl; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Devicon for Technology & Language Logos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- AI Homepage Stylesheet with Cache Buster -->
  <link href="<?php echo $siteUrl; ?>/assets/stylesheets/ai-home.css?v=<?php echo time(); ?>" rel="stylesheet">

  <!-- Page-Specific Stylesheets with Cache Buster -->
  <?php if (!empty($extraCss)): ?>
    <?php foreach ((array)$extraCss as $cssPath): 
      $cssHref = (strpos($cssPath, 'http://') === 0 || strpos($cssPath, 'https://') === 0) 
        ? $cssPath 
        : $siteUrl . '/' . ltrim($cssPath, '/') . '?v=' . time();
    ?>
      <link href="<?php echo htmlspecialchars($cssHref); ?>" rel="stylesheet">
    <?php endforeach; ?>
  <?php endif; ?>

  <!-- =========================================================================
       Complete Mobile-Responsive Stylesheet for Navigation Header & Mobile Drawer
       ========================================================================= -->
  <style id="geersoft-header-responsive-styles">
    /* Universal Overflow-X Guard across All Devices */
    html,
    body {
      overflow-x: hidden !important;
      max-width: 100vw !important;
      width: 100% !important;
      position: relative !important;
    }

    /* Header Base Layout */
    .ai-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      width: 100%;
      max-width: 100vw;
      box-sizing: border-box;
      z-index: 1050;
      padding: 16px 0;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      background: rgba(3, 7, 18, 0.75);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    }
    .ai-header.scrolled {
      padding: 10px 0;
      background: rgba(3, 7, 18, 0.94);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.12);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.65);
    }

    /* Light Mode Header Adaptations */
    body[data-mode="light"] .ai-header {
      background: rgba(255, 255, 255, 0.85);
      border-bottom: 1px solid rgba(15, 23, 42, 0.08);
    }
    body[data-mode="light"] .ai-header.scrolled {
      background: rgba(255, 255, 255, 0.96);
      border-bottom: 1px solid rgba(15, 23, 42, 0.12);
      box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
    }

    .nav-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      width: 100%;
      max-width: 100%;
      box-sizing: border-box;
    }

    /* Logo Styling */
    .brand-logo-wrap {
      display: inline-flex;
      align-items: center;
      flex-shrink: 0;
      text-decoration: none;
      padding-left: 14px;
      margin-right: 18px;
    }
    .brand-logo-img {
      height: 52px;
      width: auto;
      max-width: 100%;
      object-fit: contain;
      image-rendering: -webkit-optimize-contrast;
      image-rendering: crisp-edges;
      filter: drop-shadow(0 2px 10px rgba(0, 0, 0, 0.25));
      transition: transform 0.25s ease, filter 0.25s ease;
    }
    .brand-logo-wrap:hover .brand-logo-img {
      transform: scale(1.04);
      filter: drop-shadow(0 4px 18px rgba(56, 189, 248, 0.4));
    }
    .ai-header.scrolled .brand-logo-img {
      height: 44px;
    }

    /* Desktop Navigation Menu */
    .ai-nav-menu {
      display: flex;
      align-items: center;
      gap: 24px;
      margin: 0;
      padding: 0;
      list-style: none;
    }
    .ai-nav-item {
      position: relative;
    }
    .ai-nav-link {
      font-size: 0.92rem;
      font-weight: 600;
      color: #94a3b8;
      padding: 8px 6px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      text-decoration: none;
      position: relative;
      transition: color 0.2s ease;
    }
    .ai-nav-link:hover,
    .ai-nav-link.active {
      color: #ffffff;
    }
    body[data-mode="light"] .ai-nav-link {
      color: #475569;
    }
    body[data-mode="light"] .ai-nav-link:hover,
    body[data-mode="light"] .ai-nav-link.active {
      color: #2563eb;
    }
    .ai-nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      border-radius: 99px;
      transition: width 0.25s ease;
    }
    .ai-nav-link:hover::after,
    .ai-nav-link.active::after {
      width: 100%;
    }

    /* Services Mega Dropdown (Desktop) */
    .mega-dropdown-menu {
      position: absolute;
      top: calc(100% + 14px);
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      width: 720px;
      background: rgba(8, 14, 30, 0.97);
      backdrop-filter: blur(25px);
      -webkit-backdrop-filter: blur(25px);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 18px;
      padding: 22px;
      box-shadow: 0 35px 70px rgba(0, 0, 0, 0.8), 0 0 45px rgba(59, 130, 246, 0.2);
      opacity: 0;
      visibility: hidden;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
      z-index: 1060;
      pointer-events: none;
    }
    .ai-nav-item:hover .mega-dropdown-menu {
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
      pointer-events: auto;
    }
    .mega-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 14px;
    }
    .mega-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      padding: 10px 12px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.02);
      border: 1px solid transparent;
      text-decoration: none;
      transition: all 0.2s ease;
    }
    .mega-item:hover {
      background: rgba(37, 99, 235, 0.14);
      border-color: rgba(6, 182, 212, 0.35);
      transform: translateX(4px);
    }
    .mega-icon {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: linear-gradient(135deg, rgba(37, 99, 235, 0.25), rgba(6, 182, 212, 0.25));
      border: 1px solid rgba(6, 182, 212, 0.35);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--neon-cyan, #06b6d4);
      flex-shrink: 0;
    }
    .mega-icon svg {
      width: 18px;
      height: 18px;
    }
    .mega-title {
      font-size: 0.9rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 2px;
    }
    .mega-desc {
      font-size: 0.76rem;
      color: #94a3b8;
      line-height: 1.4;
      margin: 0;
    }
    .mega-footer {
      margin-top: 14px;
      padding-top: 12px;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .mega-footer-link {
      font-size: 0.82rem;
      color: var(--neon-cyan, #06b6d4);
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }
    body[data-mode="light"] .mega-dropdown-menu {
      background: #ffffff;
      border-color: rgba(15, 23, 42, 0.12);
      box-shadow: 0 25px 60px rgba(15, 23, 42, 0.12), 0 0 30px rgba(37, 99, 235, 0.08);
    }
    body[data-mode="light"] .mega-item {
      background: rgba(15, 23, 42, 0.02);
      border-color: rgba(15, 23, 42, 0.06);
    }
    body[data-mode="light"] .mega-item:hover {
      background: rgba(37, 99, 235, 0.08);
      border-color: rgba(37, 99, 235, 0.3);
    }
    body[data-mode="light"] .mega-title {
      color: #0f172a;
    }
    body[data-mode="light"] .mega-desc {
      color: #64748b;
    }
    body[data-mode="light"] .mega-footer {
      border-top-color: rgba(15, 23, 42, 0.08);
    }
    body[data-mode="light"] .mega-icon {
      background: linear-gradient(135deg, rgba(37, 99, 235, 0.12), rgba(6, 182, 212, 0.12));
      border-color: rgba(37, 99, 235, 0.25);
      color: #2563eb;
    }

    /* Header Actions Group */
    .header-actions {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }

    /* Theme Mode Toggle Button */
    .btn-theme-mode-toggle {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.12);
      color: #ffffff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
      padding: 0;
    }
    .btn-theme-mode-toggle:hover {
      background: rgba(255, 255, 255, 0.14);
      border-color: var(--neon-cyan, #06b6d4);
      color: var(--neon-cyan, #06b6d4);
    }
    .btn-theme-mode-toggle svg {
      width: 18px;
      height: 18px;
      fill: none;
      stroke: currentColor;
      stroke-width: 2;
    }
    .btn-theme-mode-toggle .mode-icon-sun { display: none; }
    .btn-theme-mode-toggle .mode-icon-moon { display: block; }
    body[data-mode="light"] .btn-theme-mode-toggle {
      background: rgba(15, 23, 42, 0.05);
      border-color: rgba(15, 23, 42, 0.12);
      color: #0f172a;
    }
    body[data-mode="light"] .btn-theme-mode-toggle .mode-icon-sun { display: block; stroke: #f59e0b; }
    body[data-mode="light"] .btn-theme-mode-toggle .mode-icon-moon { display: none; }

    /* Signature GeerSoft Top Header Action Buttons (Dynamic Theme-Adapting Pills) */
    .btn-header-wa-pill {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 8px 18px;
      border-radius: 999px;
      background: var(--grad-ai, linear-gradient(135deg, #029b9b 0%, #00d2b4 100%)) !important;
      color: #ffffff !important;
      font-size: 0.80rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      text-decoration: none !important;
      box-shadow: 0 4px 18px var(--btn-glow, rgba(2, 155, 155, 0.55)) !important;
      transition: all 0.25s ease;
      white-space: nowrap;
      flex-shrink: 0;
      border: none !important;
    }
    .btn-header-wa-pill:hover {
      transform: translateY(-2px);
      background: var(--grad-ai-hover, var(--grad-ai)) !important;
      box-shadow: 0 6px 24px var(--btn-glow, rgba(2, 155, 155, 0.80)) !important;
      color: #ffffff !important;
    }
    .btn-header-wa-pill i {
      font-size: 0.95rem;
    }

    .btn-header-email-pill {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 8px 18px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.07) !important;
      border: 1.5px solid var(--theme-accent-color, #00d2b4) !important;
      color: #ffffff !important;
      font-size: 0.80rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      text-decoration: none !important;
      cursor: pointer;
      box-shadow: 0 4px 18px var(--btn-glow, rgba(2, 155, 155, 0.25)) !important;
      backdrop-filter: blur(8px);
      transition: all 0.25s ease;
      white-space: nowrap;
      flex-shrink: 0;
    }
    .btn-header-email-pill:hover {
      transform: translateY(-2px);
      background: var(--grad-ai, linear-gradient(135deg, #029b9b 0%, #00d2b4 100%)) !important;
      border-color: transparent !important;
      color: #ffffff !important;
      box-shadow: 0 6px 22px var(--btn-glow, rgba(6, 182, 212, 0.55)) !important;
    }
    .btn-header-email-pill i {
      font-size: 0.95rem;
    }

    /* Explicit Theme Color Overrides for Top Header Pills */
    [data-theme="cyber-blue"] .btn-header-wa-pill {
      background: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%) !important;
      box-shadow: 0 4px 18px rgba(6, 182, 212, 0.50) !important;
    }
    [data-theme="cyber-blue"] .btn-header-email-pill {
      border-color: #38bdf8 !important;
      box-shadow: 0 4px 16px rgba(6, 182, 212, 0.25) !important;
    }

    [data-theme="quantum-violet"] .btn-header-wa-pill {
      background: linear-gradient(135deg, #7c3aed 0%, #a855f7 100%) !important;
      box-shadow: 0 4px 18px rgba(168, 85, 247, 0.50) !important;
    }
    [data-theme="quantum-violet"] .btn-header-email-pill {
      border-color: #c084fc !important;
      box-shadow: 0 4px 16px rgba(168, 85, 247, 0.25) !important;
    }

    [data-theme="matrix-emerald"] .btn-header-wa-pill {
      background: linear-gradient(135deg, #059669 0%, #10b981 100%) !important;
      box-shadow: 0 4px 18px rgba(16, 185, 129, 0.50) !important;
    }
    [data-theme="matrix-emerald"] .btn-header-email-pill {
      border-color: #34d399 !important;
      box-shadow: 0 4px 16px rgba(16, 185, 129, 0.25) !important;
    }

    [data-theme="solar-amber"] .btn-header-wa-pill {
      background: linear-gradient(135deg, #d97706 0%, #f97316 100%) !important;
      box-shadow: 0 4px 18px rgba(249, 115, 22, 0.50) !important;
    }
    [data-theme="solar-amber"] .btn-header-email-pill {
      border-color: #fb923c !important;
      box-shadow: 0 4px 16px rgba(249, 115, 22, 0.25) !important;
    }

    body[data-mode="light"] .btn-header-email-pill {
      color: var(--theme-accent-color, #029b9b) !important;
      border-color: var(--theme-accent-color, #029b9b) !important;
      background: rgba(0, 0, 0, 0.04) !important;
      box-shadow: 0 4px 16px var(--btn-glow, rgba(2, 155, 155, 0.15)) !important;
    }
    body[data-mode="light"] .btn-header-email-pill:hover {
      background: var(--grad-ai) !important;
      color: #ffffff !important;
      border-color: transparent !important;
    }

    /* Header WhatsApp Button (Legacy Fallback) */
    .btn-wa-header {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(37, 211, 102, 0.12);
      color: #25d366;
      border: 1px solid rgba(37, 211, 102, 0.35);
      text-decoration: none;
      transition: all 0.25s ease;
      flex-shrink: 0;
    }
    .btn-wa-header:hover {
      background: #25d366;
      color: #ffffff;
      transform: scale(1.08);
      border-color: #25d366;
      box-shadow: 0 4px 14px rgba(37, 211, 102, 0.4);
    }
    .btn-wa-header svg {
      width: 20px;
      height: 20px;
    }

    /* Header Quote CTA Button */
    .btn-header-quote {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      padding: 9px 18px;
      font-size: 0.86rem;
      font-weight: 700;
      color: #ffffff;
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      border-radius: 999px;
      border: none;
      cursor: pointer;
      box-shadow: 0 4px 16px rgba(37, 99, 235, 0.35);
      transition: all 0.25s ease;
      white-space: nowrap;
      flex-shrink: 0;
    }
    .btn-header-quote:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 22px rgba(6, 182, 212, 0.55);
      color: #ffffff;
    }
    .quote-text-short {
      display: none;
    }
    .quote-text-full {
      display: inline;
    }

    /* Mobile Hamburger Toggle */
    .mobile-nav-toggle {
      display: none;
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.16);
      color: #ffffff;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      padding: 0;
      transition: all 0.2s ease;
      flex-shrink: 0;
      line-height: 1;
    }
    .mobile-nav-toggle:hover {
      background: rgba(37, 99, 235, 0.2);
      border-color: var(--neon-cyan, #06b6d4);
      color: var(--neon-cyan, #06b6d4);
    }
    .mobile-nav-toggle svg {
      width: 24px;
      height: 24px;
      stroke: currentColor;
      display: block;
    }
    body[data-mode="light"] .mobile-nav-toggle {
      background: rgba(15, 23, 42, 0.06);
      border-color: rgba(15, 23, 42, 0.14);
      color: #0f172a;
    }

    /* =========================================================================
       Mobile Drawer Menu & Backdrop
       ========================================================================= */
    .drawer-backdrop {
      position: fixed;
      inset: 0;
      background: rgba(2, 4, 10, 0.75);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      z-index: 2000;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .drawer-backdrop.show {
      opacity: 1;
      visibility: visible;
    }

    .mobile-menu-drawer {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      width: min(340px, 86vw);
      height: 100vh;
      background: #080e1e;
      border-left: 1px solid rgba(255, 255, 255, 0.1);
      box-shadow: -15px 0 45px rgba(0, 0, 0, 0.8);
      z-index: 2010;
      padding: 22px 20px 30px 20px;
      overflow-y: auto;
      -webkit-overflow-scrolling: touch;
      transform: translateX(105%);
      transition: transform 0.32s cubic-bezier(0.16, 1, 0.3, 1);
      display: flex;
      flex-direction: column;
    }
    .mobile-menu-drawer.open {
      transform: translateX(0);
    }
    body[data-mode="light"] .mobile-menu-drawer {
      background: #ffffff;
      border-left: 1px solid rgba(15, 23, 42, 0.1);
      box-shadow: -15px 0 45px rgba(15, 23, 42, 0.15);
    }

    /* Drawer Header */
    .drawer-header-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 18px;
      padding-bottom: 12px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    body[data-mode="light"] .drawer-header-row {
      border-bottom-color: rgba(15, 23, 42, 0.08);
    }
    .drawer-brand-logo img {
      height: 34px;
      width: auto;
      object-fit: contain;
    }
    .drawer-close {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #94a3b8;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.2s ease;
      padding: 0;
    }
    .drawer-close:hover {
      background: rgba(239, 68, 68, 0.2);
      color: #ef4444;
      border-color: rgba(239, 68, 68, 0.4);
    }
    body[data-mode="light"] .drawer-close {
      background: rgba(15, 23, 42, 0.06);
      border-color: rgba(15, 23, 42, 0.12);
      color: #334155;
    }

    /* Drawer Theme Switcher Row */
    .drawer-theme-pill-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 14px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      margin-bottom: 18px;
    }
    body[data-mode="light"] .drawer-theme-pill-card {
      background: rgba(15, 23, 42, 0.03);
      border-color: rgba(15, 23, 42, 0.08);
    }
    .drawer-theme-label {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.85rem;
      font-weight: 600;
      color: #94a3b8;
    }
    body[data-mode="light"] .drawer-theme-label {
      color: #475569;
    }

    /* Drawer Navigation List */
    .mobile-nav-list {
      list-style: none;
      padding: 0;
      margin: 0 0 20px 0;
      display: flex;
      flex-direction: column;
      gap: 4px;
      flex-grow: 1;
    }
    .mobile-nav-list > li > a {
      font-size: 0.98rem;
      font-weight: 600;
      color: #cbd5e1;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 11px 12px;
      border-radius: 10px;
      text-decoration: none;
      transition: all 0.2s ease;
      min-height: 44px;
    }
    .mobile-nav-list > li > a:hover,
    .mobile-nav-list > li > a.active {
      background: rgba(37, 99, 235, 0.16);
      color: #ffffff;
      padding-left: 16px;
    }
    body[data-mode="light"] .mobile-nav-list > li > a {
      color: #334155;
    }
    body[data-mode="light"] .mobile-nav-list > li > a:hover,
    body[data-mode="light"] .mobile-nav-list > li > a.active {
      background: rgba(37, 99, 235, 0.08);
      color: #2563eb;
    }

    /* Services Accordion in Drawer */
    .mobile-drawer-has-sub {
      border-radius: 10px;
      overflow: hidden;
    }
    .mobile-drawer-sub-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-radius: 10px;
      transition: background 0.2s ease;
    }
    .mobile-drawer-sub-header a {
      flex: 1;
      font-size: 0.98rem;
      font-weight: 600;
      color: #cbd5e1;
      padding: 11px 12px;
      text-decoration: none;
      min-height: 44px;
      display: flex;
      align-items: center;
    }
    .mobile-drawer-sub-header a.active {
      color: var(--neon-cyan, #06b6d4);
    }
    body[data-mode="light"] .mobile-drawer-sub-header a {
      color: #334155;
    }
    .drawer-sub-toggle {
      width: 44px;
      height: 44px;
      background: transparent;
      border: none;
      color: #94a3b8;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: transform 0.25s ease, color 0.2s ease;
      padding: 0;
    }
    .drawer-sub-toggle.expanded svg {
      transform: rotate(180deg);
    }
    .drawer-submenu-list {
      list-style: none;
      padding: 6px 0 8px 18px;
      margin: 0;
      display: none;
      flex-direction: column;
      gap: 6px;
      border-left: 2px solid rgba(37, 99, 235, 0.4);
      margin-left: 12px;
    }
    .drawer-submenu-list.show {
      display: flex;
    }
    .drawer-submenu-list li a {
      font-size: 0.88rem;
      color: #94a3b8;
      text-decoration: none;
      padding: 6px 8px;
      border-radius: 6px;
      display: block;
      transition: all 0.2s ease;
    }
    .drawer-submenu-list li a:hover {
      color: #ffffff;
      background: rgba(255, 255, 255, 0.04);
      padding-left: 12px;
    }
    body[data-mode="light"] .drawer-submenu-list li a {
      color: #64748b;
    }
    body[data-mode="light"] .drawer-submenu-list li a:hover {
      color: #2563eb;
      background: rgba(15, 23, 42, 0.04);
    }

    /* Drawer Action Buttons */
    .drawer-cta-block {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 15px;
      padding-top: 15px;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
    }
    body[data-mode="light"] .drawer-cta-block {
      border-top-color: rgba(15, 23, 42, 0.08);
    }
    .btn-drawer-quote {
      width: 100%;
      min-height: 44px;
      padding: 12px 18px;
      border-radius: 12px;
      font-size: 0.92rem;
      font-weight: 700;
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      color: #ffffff;
      border: none;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      box-shadow: 0 4px 18px rgba(37, 99, 235, 0.4);
      transition: all 0.25s ease;
    }
    .btn-drawer-quote:hover {
      box-shadow: 0 6px 24px rgba(6, 182, 212, 0.6);
      transform: translateY(-2px);
    }
    .btn-drawer-wa {
      width: 100%;
      min-height: 44px;
      padding: 12px 18px;
      border-radius: 12px;
      font-size: 0.92rem;
      font-weight: 700;
      background: rgba(37, 211, 102, 0.12);
      border: 1px solid rgba(37, 211, 102, 0.35);
      color: #25d366;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all 0.25s ease;
    }
    .btn-drawer-wa:hover {
      background: #25d366;
      color: #ffffff;
    }

    /* Drawer Contact Footer */
    .drawer-contact-footer {
      margin-top: 16px;
      padding-top: 14px;
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      display: flex;
      flex-direction: column;
      gap: 8px;
      font-size: 0.82rem;
      color: #64748b;
    }
    .drawer-contact-item {
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .drawer-contact-item svg {
      width: 15px;
      height: 15px;
      color: var(--neon-cyan, #06b6d4);
      flex-shrink: 0;
    }
    .drawer-contact-item a {
      color: #94a3b8;
      text-decoration: none;
    }
    body[data-mode="light"] .drawer-contact-item a {
      color: #475569;
    }

    /* =========================================================================
       RESPONSIVE BREAKPOINTS (ALL SCREEN SIZES)
       ========================================================================= */

    /* Medium Desktop & Tablet Landscape (992px - 1199px) */
    @media (min-width: 992px) and (max-width: 1199px) {
      .ai-nav-menu {
        gap: 16px;
      }
      .ai-nav-link {
        font-size: 0.86rem;
        padding: 6px 2px;
      }
      .quote-text-full {
        display: none;
      }
      .quote-text-short {
        display: inline;
      }
      .btn-header-quote {
        padding: 8px 14px;
        font-size: 0.82rem;
      }
      .mega-dropdown-menu {
        width: 640px;
      }
    }

    /* Tablets & Phablets (max-width: 991px) */
    @media (max-width: 991px) {
      .ai-header {
        padding: 14px 0;
      }
      .ai-header.scrolled {
        padding: 10px 0;
      }
      .ai-nav-menu {
        display: none !important;
      }
      .mobile-nav-toggle {
        display: inline-flex !important;
      }
      .brand-logo-wrap {
        padding-left: 8px;
        margin-right: 10px;
      }
      .brand-logo-img {
        height: 44px;
      }
      .quote-text-full {
        display: none;
      }
      .quote-text-short {
        display: inline;
      }
      .btn-header-quote {
        padding: 8px 14px;
        font-size: 0.82rem;
      }
    }

    /* Standard Mobile Phones (max-width: 640px) */
    @media (max-width: 640px) {
      .ai-header {
        padding: 12px 0;
      }
      .ai-header.scrolled {
        padding: 8px 0;
      }
      .brand-logo-wrap {
        padding-left: 4px;
        margin-right: 6px;
      }
      .brand-logo-img {
        height: 38px;
      }
      /* Hide top header quote button on phones to eliminate any crowding */
      .btn-header-quote {
        display: none !important;
      }
      .header-actions {
        gap: 8px;
      }
      .btn-wa-header {
        width: 36px;
        height: 36px;
      }
      .btn-wa-header svg {
        width: 18px;
        height: 18px;
      }
      .btn-theme-mode-toggle {
        width: 36px;
        height: 36px;
      }
      .mobile-nav-toggle {
        width: 38px;
        height: 38px;
      }
    }

    /* Small Mobile Phones (iPhone SE, max-width: 380px) */
    @media (max-width: 380px) {
      .ai-header {
        padding: 10px 0;
      }
      .brand-logo-img {
        height: 30px;
      }
      .header-actions {
        gap: 6px;
      }
      .btn-wa-header {
        width: 34px;
        height: 34px;
      }
      .btn-wa-header svg {
        width: 16px;
        height: 16px;
      }
      .btn-theme-mode-toggle {
        width: 34px;
        height: 34px;
      }
      .mobile-nav-toggle {
        width: 36px;
        height: 36px;
      }
      .mobile-nav-toggle svg {
        width: 22px;
        height: 22px;
      }
      .mobile-menu-drawer {
        padding: 18px 14px 24px 14px;
      }
    }

    /* Ultra-Narrow Screens (Galaxy Fold cover screen 280px - 320px) */
    @media (max-width: 320px) {
      .ai-header {
        padding: 8px 0;
      }
      .brand-logo-img {
        height: 26px;
      }
      .header-actions {
        gap: 5px;
      }
      .btn-wa-header {
        width: 30px;
        height: 30px;
      }
      .btn-wa-header svg {
        width: 15px;
        height: 15px;
      }
      .btn-theme-mode-toggle {
        width: 30px;
        height: 30px;
      }
      .mobile-nav-toggle {
        width: 34px;
        height: 34px;
      }
      .mobile-nav-toggle svg {
        width: 20px;
        height: 20px;
      }
      .mobile-menu-drawer {
        width: 90vw;
        padding: 14px 10px 20px 10px;
      }
    }
  </style>

  <!-- Page-Specific Extra Head Tags -->
  <?php if (!empty($extraHead)) echo $extraHead; ?>

  <!-- Instant Mode & Theme Hydration (Enforces Dark Mode Default for All Visitors & Eliminates Flash) -->
  <script>
    (function() {
      try {
        var isManual = sessionStorage.getItem('geersoft_mode_manual');
        var m = isManual ? (localStorage.getItem('geersoft_mode') || 'dark') : 'dark';
        localStorage.setItem('geersoft_mode', m);
        var t = localStorage.getItem('geersoft_theme') || 'cyber-blue';
        document.documentElement.setAttribute('data-mode', m);
        document.documentElement.setAttribute('data-theme', t);
        if (document.body) {
          document.body.setAttribute('data-mode', m);
          document.body.setAttribute('data-theme', t);
        } else {
          document.addEventListener('DOMContentLoaded', function() {
            if (document.body) {
              document.body.setAttribute('data-mode', m);
              document.body.setAttribute('data-theme', t);
            }
          });
        }
      } catch (e) {}
    })();
  </script>
</head>

<body data-mode="<?php echo htmlspecialchars($bodyMode); ?>" data-theme="cyber-blue"<?php echo !empty($bodyClass) ? ' class="' . htmlspecialchars($bodyClass) . '"' : ''; ?>>

  <!-- Living Interactive Ambient Network Canvas (Global across all pages) -->
  <canvas id="global-network-canvas" aria-hidden="true"></canvas>

  <!-- =========================================================================
       Section 1: Navigation Header
       ========================================================================= -->
  <header class="ai-header" id="header">
    <div class="container-xl nav-container">
      <!-- Logo -->
      <a href="<?php echo $siteUrl ? $siteUrl . '/' : '/'; ?>" class="brand-logo-wrap" aria-label="GeerSoft IT Solutions Home">
        <img class="brand-logo-img" src="<?php echo $siteUrl; ?>/assets/images/logo-2.png" alt="GeerSoft IT Solutions Logo">
      </a>

      <!-- Desktop Nav Menu -->
      <nav aria-label="Main Navigation">
        <ul class="ai-nav-menu">
          <li class="ai-nav-item"><a href="<?php echo $siteUrl ? $siteUrl . '/' : '/'; ?>" class="ai-nav-link <?php echo $activeNav === 'home' ? 'active' : ''; ?>">Home</a></li>
          <li class="ai-nav-item"><a href="<?php echo $siteUrl; ?>/about" class="ai-nav-link <?php echo $activeNav === 'about' ? 'active' : ''; ?>">About Us</a></li>
          
          <!-- Services Mega Dropdown -->
          <li class="ai-nav-item">
            <a href="<?php echo $siteUrl; ?>/services_all" class="ai-nav-link <?php echo $activeNav === 'services' ? 'active' : ''; ?>">
              <span>Services</span>
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M6 9l6 6 6-6"/></svg>
            </a>
            <div class="mega-dropdown-menu">
              <div class="mega-grid">
                <a href="<?php echo $siteUrl; ?>/services/web-development" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                  </div>
                  <div>
                    <div class="mega-title">Website Development</div>
                    <div class="mega-desc">High-performance Next.js, React, and headless CMS web platforms.</div>
                  </div>
                </a>
                <a href="<?php echo $siteUrl; ?>/services/php-laravel-development" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                  </div>
                  <div>
                    <div class="mega-title">Software & Web Apps</div>
                    <div class="mega-desc">Custom SaaS platforms, microservices, and enterprise backends.</div>
                  </div>
                </a>
                <a href="<?php echo $siteUrl; ?>/services/react-native-app-development" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
                  </div>
                  <div>
                    <div class="mega-title">Mobile App Development</div>
                    <div class="mega-desc">Cross-platform iOS and Android apps with 60fps native speed.</div>
                  </div>
                </a>
                <a href="<?php echo $siteUrl ? $siteUrl . '/' : '/'; ?>#ai-automation" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path><rect x="3" y="8" width="18" height="12" rx="2"></rect><circle cx="9" cy="13" r="1.5"></circle><circle cx="15" cy="13" r="1.5"></circle><path d="M9 17h6"></path></svg>
                  </div>
                  <div>
                    <div class="mega-title">AI Integration & Automation</div>
                    <div class="mega-desc">Intelligent chatbots, predictive models, and autonomous workflows.</div>
                  </div>
                </a>
                <a href="<?php echo $siteUrl; ?>/services_all" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="5" r="3"></circle><circle cx="5" cy="19" r="3"></circle><circle cx="19" cy="19" r="3"></circle><line x1="12" y1="8" x2="12" y2="12"></line><path d="M5 16l7-4 7 4"></path></svg>
                  </div>
                  <div>
                    <div class="mega-title">ERP & Management Solutions</div>
                    <div class="mega-desc">Integrated ERP, inventory, automated invoicing, and CRM pipelines.</div>
                  </div>
                </a>
                <a href="<?php echo $siteUrl; ?>/services/professional-seo-services" class="mega-item">
                  <div class="mega-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                  </div>
                  <div>
                    <div class="mega-title">Digital Marketing & SEO</div>
                    <div class="mega-desc">Data-driven search visibility, high-ROI Google PPC, and CRO.</div>
                  </div>
                </a>
              </div>
              <div class="mega-footer">
                <span class="text-muted" style="font-size:0.8rem;">Looking for custom enterprise architecture?</span>
                <a href="<?php echo $siteUrl; ?>/services_all" class="mega-footer-link">
                  <span>Explore all services</span>
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
              </div>
            </div>
          </li>

          <li class="ai-nav-item"><a href="<?php echo $siteUrl; ?>/portfolio" class="ai-nav-link <?php echo $activeNav === 'portfolio' ? 'active' : ''; ?>">Portfolio</a></li>
          <li class="ai-nav-item"><a href="<?php echo $siteUrl; ?>/price" class="ai-nav-link <?php echo $activeNav === 'price' ? 'active' : ''; ?>">Pricing</a></li>
          <li class="ai-nav-item"><a href="<?php echo $siteUrl; ?>/blogs" class="ai-nav-link <?php echo $activeNav === 'blog' ? 'active' : ''; ?>">Blog</a></li>
          <li class="ai-nav-item"><a href="<?php echo $siteUrl; ?>/contact" class="ai-nav-link <?php echo $activeNav === 'contact' ? 'active' : ''; ?>">Contact Us</a></li>
        </ul>
      </nav>

      <!-- Header Actions (Signature GeerSoft Glowing Teal Pills) -->
      <div class="header-actions">
        <!-- WhatsApp Quick Chat Pill Button -->
        <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20a%20project" 
           target="_blank" rel="noopener noreferrer" class="btn-header-wa-pill d-none d-sm-inline-flex" aria-label="Chat directly on WhatsApp" title="Chat on WhatsApp">
          <i class="bi bi-whatsapp"></i>
          <span>WHATSAPP</span>
        </a>

        <!-- Send Email / Quote Pill Button -->
        <button onclick="openQuoteModal()" class="btn-header-email-pill d-none d-md-inline-flex" aria-label="Send Email / Project Inquiry" title="Send Email / Request Quote">
          <i class="bi bi-envelope"></i>
          <span>SEND EMAIL</span>
        </button>

        <!-- Light / Dark View Toggle -->
        <button type="button" class="btn-theme-mode-toggle" id="headerModeToggle" aria-label="Toggle Light and Dark View" title="Toggle Light / Dark View">
          <svg class="mode-icon-sun" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
          <svg class="mode-icon-moon" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
        </button>

        <!-- Cyber Audio FX Toggle -->
        <button type="button" class="btn-audio-toggle" id="headerAudioToggle" onclick="toggleAudioFx()" aria-label="Toggle UI Audio Effects" title="Cyber Audio FX (Click to Enable)">
          <svg class="audio-icon-on" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" style="display:none;"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path></svg>
          <svg class="audio-icon-off" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><line x1="23" y1="9" x2="17" y2="15"></line><line x1="17" y1="9" x2="23" y2="15"></line></svg>
        </button>

        <!-- Mobile Quick WhatsApp Icon (phones only) -->
        <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20a%20project" 
           target="_blank" rel="noopener noreferrer" class="btn-wa-header d-inline-flex d-sm-none" aria-label="Chat on WhatsApp">
          <i class="bi bi-whatsapp"></i>
        </a>

        <!-- Mobile Hamburger Toggle -->
        <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Open mobile navigation menu" aria-expanded="false" aria-controls="mobileMenuDrawer" onclick="openDrawer()">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </div>
    </div>
  </header>

  <!-- =========================================================================
       Mobile Drawer Menu & Backdrop
       ========================================================================= -->
  <div class="drawer-backdrop" id="drawerBackdrop" onclick="closeDrawer()" aria-hidden="true"></div>
  <aside class="mobile-menu-drawer" id="mobileMenuDrawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation Drawer">
    <div class="drawer-header-row">
      <a href="<?php echo $siteUrl ? $siteUrl . '/' : '/'; ?>" class="drawer-brand-logo" onclick="closeDrawer()">
        <img src="<?php echo $siteUrl; ?>/assets/images/logo-2.png" alt="GeerSoft Logo">
      </a>
      <button type="button" class="drawer-close" id="drawerClose" onclick="closeDrawer()" aria-label="Close navigation menu">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>
    </div>

    <!-- Theme Mode Switch in Drawer -->
    <div class="drawer-theme-pill-card">
      <div class="drawer-theme-label">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a10 10 0 0 0 0 20z"></path></svg>
        <span>Theme Mode</span>
      </div>
      <button type="button" class="btn-theme-mode-toggle" id="drawerModeToggle" aria-label="Toggle Light and Dark Mode" title="Toggle Light / Dark View">
        <svg class="mode-icon-sun" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        <svg class="mode-icon-moon" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
      </button>
    </div>

    <!-- Navigation Links -->
    <ul class="mobile-nav-list">
      <li>
        <a href="<?php echo $siteUrl ? $siteUrl . '/' : '/'; ?>" class="<?php echo $activeNav === 'home' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>Home</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      <li>
        <a href="<?php echo $siteUrl; ?>/about" class="<?php echo $activeNav === 'about' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>About Us</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      
      <!-- Services Accordion in Drawer -->
      <li class="mobile-drawer-has-sub">
        <div class="mobile-drawer-sub-header">
          <a href="<?php echo $siteUrl; ?>/services_all" class="<?php echo $activeNav === 'services' ? 'active' : ''; ?>" onclick="closeDrawer()">
            <span>Services</span>
          </a>
          <button type="button" class="drawer-sub-toggle" id="drawerServicesToggle" aria-label="Toggle services list" aria-expanded="false" onclick="toggleDrawerSubmenu(this)">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </button>
        </div>
        <ul class="drawer-submenu-list" id="drawerServicesSubmenu">
          <li><a href="<?php echo $siteUrl; ?>/services/web-development" onclick="closeDrawer()">• Website Development</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services/custom-software-development" onclick="closeDrawer()">• Custom Software & SaaS</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services/mobile-application-development" onclick="closeDrawer()">• Mobile App Development</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services/ai-integration-automation" onclick="closeDrawer()">• AI & Automation</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services/erp-business-solutions" onclick="closeDrawer()">• ERP Systems</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services/professional-seo-services" onclick="closeDrawer()">• SEO & Digital Marketing</a></li>
          <li><a href="<?php echo $siteUrl; ?>/services_all" onclick="closeDrawer()" style="color:var(--neon-cyan,#06b6d4); font-weight:700;">• View All Services →</a></li>
        </ul>
      </li>

      <li>
        <a href="<?php echo $siteUrl; ?>/portfolio" class="<?php echo $activeNav === 'portfolio' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>Portfolio</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      <li>
        <a href="<?php echo $siteUrl; ?>/price" class="<?php echo $activeNav === 'price' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>Pricing</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      <li>
        <a href="<?php echo $siteUrl; ?>/blogs" class="<?php echo $activeNav === 'blog' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>Blog</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
      <li>
        <a href="<?php echo $siteUrl; ?>/contact" class="<?php echo $activeNav === 'contact' ? 'active' : ''; ?>" onclick="closeDrawer()">
          <span>Contact Us</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </li>
    </ul>

    <!-- Drawer Call-to-Actions -->
    <div class="drawer-cta-block">
      <button type="button" onclick="closeDrawer(); if(window.openQuoteModal) window.openQuoteModal();" class="btn-drawer-quote">
        <span>Get a Free Quote</span>
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
      </button>
      <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%2C%20I%20would%20like%20to%20discuss%20a%20project" target="_blank" rel="noopener noreferrer" class="btn-drawer-wa">
        <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
          <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564c.173.087.289.129.332.202.043.073.043.419-.101.824z"/>
        </svg>
        <span>Chat on WhatsApp</span>
      </a>
    </div>

    <!-- Quick Contact Footer inside Drawer -->
    <div class="drawer-contact-footer">
      <div class="drawer-contact-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <a href="tel:+917822020118">+91-7822020118</a>
      </div>
      <div class="drawer-contact-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <a href="mailto:info@geersoft.in">info@geersoft.in</a>
      </div>
    </div>
  </aside>

  <!-- Autonomous Navigation Script -->
  <script>
    // Global Drawer Controls
    window.openDrawer = function() {
      const drawer = document.getElementById('mobileMenuDrawer');
      const backdrop = document.getElementById('drawerBackdrop');
      const toggle = document.getElementById('mobileNavToggle');
      if (drawer) drawer.classList.add('open');
      if (backdrop) backdrop.classList.add('show');
      if (toggle) toggle.setAttribute('aria-expanded', 'true');
      document.body.style.overflow = 'hidden';
    };

    window.closeDrawer = function() {
      const drawer = document.getElementById('mobileMenuDrawer');
      const backdrop = document.getElementById('drawerBackdrop');
      const toggle = document.getElementById('mobileNavToggle');
      if (drawer) drawer.classList.remove('open');
      if (backdrop) backdrop.classList.remove('show');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    };

    window.toggleDrawerSubmenu = function(btn) {
      const submenu = document.getElementById('drawerServicesSubmenu');
      if (!submenu) return;
      const isExpanded = btn.classList.contains('expanded');
      if (isExpanded) {
        btn.classList.remove('expanded');
        btn.setAttribute('aria-expanded', 'false');
        submenu.classList.remove('show');
      } else {
        btn.classList.add('expanded');
        btn.setAttribute('aria-expanded', 'true');
        submenu.classList.add('show');
      }
    };

    // Header Scroll Shadow Controller
    (function() {
      const header = document.getElementById('header');
      if (!header) return;
      function checkScroll() {
        if (window.scrollY > 25) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      }
      window.addEventListener('scroll', checkScroll, { passive: true });
      checkScroll();
    })();
  </script>
