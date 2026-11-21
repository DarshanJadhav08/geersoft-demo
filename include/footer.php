<?php
/**
 * Global Footer Component — GeerSoft IT Solutions
 * File: include/footer.php
 * 
 * 100% Fully Mobile Responsive Across All Screen Sizes:
 * - Ultra-compact mobile (320px - 374px)
 * - Standard mobile (375px - 575px)
 * - Phablet & Tablet (576px - 991px)
 * - Laptop & Desktop (992px - 1440px+)
 * 
 * Provides:
 * - Shared semantic footer (<footer class="ai-footer" id="footer">)
 * - Anti-collision mobile-optimized floating WhatsApp & Back-to-Top buttons
 * - Mobile-first Interactive Multi-Step Quote Modal (<dialog> / #quoteModalOverlay)
 * - Dynamic Theme Switcher Widget (Cyber Blue, Quantum Violet, Matrix Emerald, Solar Amber)
 * - Core vendor & custom JavaScript bundles + Accordion FAQ toggle
 * - Optional page-level scripts via $extraJs and $extraFooter
 * - Closing </body> and </html>
 */

// 1. Path & URL Detection
if (!isset($siteUrl)) {
    $scriptDir = trim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
    $siteUrl = (!empty($scriptDir) && $scriptDir !== '.') ? '/' . $scriptDir : '';
}

// 2. WhatsApp Message
$waMessage = isset($whatsappCustomMsg) && !empty($whatsappCustomMsg)
    ? urlencode($whatsappCustomMsg)
    : urlencode("Hello GeerSoft, I would like to discuss a technology project.");

// 3. Modal Variables
$selectedService = $quoteSelectedService ?? '';
$modalTitle      = $quoteModalTitle ?? 'Get a Project Quote';
$modalSubtitle   = $quoteModalSubtitle ?? 'Tell us about your requirements and receive a customized technology proposal within 24 hours.';
?>

  <!-- =========================================================================
       Complete Mobile-Responsive Stylesheet for Footer, Modals & Floating Widgets
       ========================================================================= -->
  <style id="geersoft-footer-responsive-styles">
    /* Base Footer Layout */
    .ai-footer {
      background: #02040a;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      padding: 70px 0 28px 0;
      position: relative;
      color: #94a3b8;
      font-family: inherit;
    }
    .footer-brand-wrap {
      display: inline-block;
      margin-bottom: 18px;
    }
    .footer-brand-wrap img {
      height: 42px;
      width: auto;
      max-width: 100%;
      object-fit: contain;
    }
    .footer-brand-desc {
      font-size: 0.92rem;
      color: #94a3b8;
      line-height: 1.7;
      margin-bottom: 22px;
      max-width: 340px;
    }
    .footer-social-links {
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }
    .footer-social-btn {
      width: 42px;
      height: 42px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.08);
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      text-decoration: none;
      transition: all 0.25s ease;
    }
    .footer-social-btn:hover {
      background: #2563eb;
      border-color: #3b82f6;
      color: #ffffff;
      transform: translateY(-3px);
    }
    .footer-col-title {
      font-size: 1.05rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 20px;
      position: relative;
      padding-bottom: 8px;
    }
    .footer-col-title::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 26px;
      height: 2px;
      background: var(--electric-blue, #3b82f6);
      border-radius: 4px;
    }
    .footer-links-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 11px;
    }
    .footer-links-list li a {
      font-size: 0.9rem;
      color: #94a3b8;
      text-decoration: none;
      transition: all 0.2s ease;
      display: inline-flex;
      align-items: center;
      min-height: 24px;
      overflow-wrap: break-word;
      word-break: break-word;
    }
    .footer-links-list li a:hover {
      color: #ffffff;
      transform: translateX(4px);
    }
    .footer-contact-info {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 16px;
    }
    .footer-contact-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      font-size: 0.92rem;
      color: #94a3b8;
      line-height: 1.5;
      overflow-wrap: break-word;
      word-break: break-word;
    }
    .footer-contact-icon-badge {
      width: 40px;
      height: 40px;
      border-radius: 12px;
      background: rgba(37, 99, 235, 0.12);
      border: 1px solid rgba(37, 99, 235, 0.28);
      color: var(--neon-cyan, #38bdf8);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.15rem;
      flex-shrink: 0;
      margin-top: 2px;
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .footer-contact-item:hover .footer-contact-icon-badge {
      transform: scale(1.1) translateY(-2px);
      background: var(--primary-blue, #2563eb);
      color: #ffffff;
      box-shadow: 0 6px 18px rgba(37, 99, 235, 0.35);
    }
    .footer-contact-label {
      display: block;
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.6px;
      text-transform: uppercase;
      color: #64748b;
      margin-bottom: 2px;
    }
    .footer-contact-link {
      font-size: 0.96rem;
      font-weight: 700;
      color: #f8fafc;
      text-decoration: none;
      transition: color 0.2s ease;
      overflow-wrap: break-word;
      word-break: break-all;
    }
    .footer-contact-link:hover {
      color: var(--neon-cyan, #38bdf8);
    }
    .footer-contact-address {
      font-size: 0.92rem;
      font-weight: 600;
      color: #e2e8f0;
      line-height: 1.5;
    }

    /* Light Mode Overrides for Global Footer */
    body[data-mode="light"] .ai-footer {
      background: #f8fafc !important;
      border-top: 1px solid rgba(15, 23, 42, 0.08) !important;
      color: #475569 !important;
    }
    body[data-mode="light"] .footer-brand-desc {
      color: #475569 !important;
    }
    body[data-mode="light"] .footer-col-title {
      color: #0f172a !important;
    }
    body[data-mode="light"] .footer-links-list li a {
      color: #475569 !important;
    }
    body[data-mode="light"] .footer-links-list li a:hover {
      color: var(--primary-blue, #2563eb) !important;
    }
    body[data-mode="light"] .footer-contact-icon-badge {
      background: rgba(37, 99, 235, 0.08) !important;
      border-color: rgba(37, 99, 235, 0.22) !important;
      color: var(--primary-blue, #2563eb) !important;
    }
    body[data-mode="light"] .footer-contact-label {
      color: #64748b !important;
    }
    body[data-mode="light"] .footer-contact-link {
      color: #0f172a !important;
      font-weight: 700 !important;
    }
    body[data-mode="light"] .footer-contact-link:hover {
      color: var(--primary-blue, #2563eb) !important;
    }
    body[data-mode="light"] .footer-contact-address {
      color: #1e293b !important;
      font-weight: 600 !important;
    }
    body[data-mode="light"] .footer-social-btn {
      background: #ffffff !important;
      border: 1px solid rgba(15, 23, 42, 0.12) !important;
      color: #334155 !important;
      box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04) !important;
    }
    body[data-mode="light"] .footer-social-btn:hover {
      background: var(--primary-blue, #2563eb) !important;
      border-color: var(--primary-blue, #2563eb) !important;
      color: #ffffff !important;
    }
    body[data-mode="light"] .footer-bottom-bar {
      border-top: 1px solid rgba(15, 23, 42, 0.08) !important;
      color: #64748b !important;
    }
    body[data-mode="light"] .footer-bottom-links a {
      color: #64748b !important;
    }
    body[data-mode="light"] .footer-bottom-links a:hover {
      color: var(--primary-blue, #2563eb) !important;
    }
    .footer-bottom-bar {
      margin-top: 50px;
      padding-top: 24px;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
      font-size: 0.85rem;
      color: #64748b;
    }
    .footer-bottom-links {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .footer-bottom-links a {
      color: #64748b;
      text-decoration: none;
      transition: color 0.2s ease;
    }
    .footer-bottom-links a:hover {
      color: #ffffff;
    }

    /* =========================================================================
       Floating WhatsApp Widget (Exact Match with Uploaded Image & DEMOFIT)
       ========================================================================= */
    .floating-whatsapp-widget {
      position: fixed;
      bottom: 28px;
      right: 28px;
      width: 58px;
      height: 58px;
      border-radius: 50%;
      z-index: 1050;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      pointer-events: auto;
    }
    
    /* Translucent Emerald Radar Wave Discs (Filled radial glow + expanding rings) */
    .wa-wave-disc {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 58px;
      height: 58px;
      border-radius: 50%;
      transform: translate(-50%, -50%) scale(0.95);
      pointer-events: none;
      background: radial-gradient(circle, rgba(37, 211, 102, 0.55) 0%, rgba(37, 211, 102, 0.36) 45%, rgba(37, 211, 102, 0.16) 72%, rgba(37, 211, 102, 0) 100%);
      border: 1.5px solid rgba(37, 211, 102, 0.5);
      box-shadow: 0 0 16px rgba(37, 211, 102, 0.45);
      animation: waWaveSonar 2.6s cubic-bezier(0.22, 0.61, 0.36, 1) infinite;
    }
    .wa-wave-disc-1 {
      animation-delay: 0s;
    }
    .wa-wave-disc-2 {
      animation-delay: 0.85s;
    }
    .wa-wave-disc-3 {
      animation-delay: 1.7s;
    }

    @keyframes waWaveSonar {
      0% {
        transform: translate(-50%, -50%) scale(0.92);
        opacity: 0.95;
      }
      50% {
        opacity: 0.6;
      }
      100% {
        transform: translate(-50%, -50%) scale(2.05);
        opacity: 0;
      }
    }

    /* Core Vibrant Green Button with White Inner Ring */
    .wa-core-btn {
      position: relative;
      z-index: 2;
      width: 58px;
      height: 58px;
      border-radius: 50%;
      background: #25d366;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 4px rgba(37, 211, 102, 0.4), 0 0 20px rgba(37, 211, 102, 0.75), 0 8px 24px rgba(0, 0, 0, 0.35);
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease;
      animation: waBtnPulseGlow 2.6s ease-in-out infinite;
    }
    @keyframes waBtnPulseGlow {
      0%, 100% {
        transform: scale(1);
        box-shadow: 0 0 0 4px rgba(37, 211, 102, 0.4), 0 0 20px rgba(37, 211, 102, 0.75), 0 8px 24px rgba(0, 0, 0, 0.35);
      }
      50% {
        transform: scale(1.04);
        box-shadow: 0 0 0 7px rgba(37, 211, 102, 0.55), 0 0 28px rgba(37, 211, 102, 0.9), 0 10px 28px rgba(0, 0, 0, 0.4);
      }
    }
    .floating-whatsapp-widget:hover .wa-core-btn {
      transform: scale(1.14);
      box-shadow: 0 0 0 8px rgba(37, 211, 102, 0.65), 0 0 32px rgba(37, 211, 102, 0.95), 0 14px 34px rgba(0, 0, 0, 0.45);
    }
    .wa-exact-svg {
      width: 58px;
      height: 58px;
      display: block;
    }
    
    /* Hover Tooltip Pill */
    .wa-hover-tooltip {
      position: absolute;
      right: calc(100% + 14px);
      top: 50%;
      transform: translateY(-50%) translateX(8px);
      background: rgba(10, 16, 32, 0.92);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(37, 211, 102, 0.4);
      color: #ffffff;
      font-size: 0.8rem;
      font-weight: 600;
      letter-spacing: 0.02em;
      padding: 6px 14px;
      border-radius: 20px;
      white-space: nowrap;
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
    .floating-whatsapp-widget:hover .wa-hover-tooltip {
      opacity: 1;
      visibility: visible;
      transform: translateY(-50%) translateX(0);
    }

    /* =========================================================================
       Professional Unique Animated Back-to-Top Button
       ========================================================================= */
    .back-to-top-btn {
      position: fixed;
      bottom: 30px;
      right: 104px;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: rgba(10, 16, 32, 0.88);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border: 1.5px solid rgba(255, 255, 255, 0.16);
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 1045;
      opacity: 0;
      visibility: hidden;
      transform: translateY(16px) scale(0.9);
      transition: opacity 0.35s ease, visibility 0.35s ease, transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1), background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
      padding: 0;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.45);
    }
    .back-to-top-btn.visible {
      opacity: 1;
      visibility: visible;
      transform: translateY(0) scale(1);
    }
    .back-to-top-btn:hover {
      background: rgba(14, 24, 52, 0.95);
      border-color: var(--neon-cyan, #06b6d4);
      box-shadow: 0 10px 28px rgba(6, 182, 212, 0.4), 0 0 16px rgba(6, 182, 212, 0.3);
      transform: translateY(-4px) scale(1.06);
    }
    
    /* Real-time Circular Scroll Progress Ring */
    .btt-progress-svg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      transform: rotate(-90deg);
      pointer-events: none;
    }
    .btt-progress-track {
      fill: none;
      stroke: rgba(255, 255, 255, 0.1);
      stroke-width: 2.5;
    }
    .btt-progress-bar {
      fill: none;
      stroke: var(--neon-cyan, #06b6d4);
      stroke-width: 2.5;
      stroke-linecap: round;
      stroke-dasharray: 132;
      stroke-dashoffset: 132;
      transition: stroke-dashoffset 0.15s ease-out, stroke 0.3s ease;
    }
    
    /* Aerodynamic Top Arrow with Levitation Animation */
    .btt-arrow-wrap {
      position: relative;
      z-index: 2;
      width: 22px;
      height: 22px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      animation: bttArrowLevitate 2.2s ease-in-out infinite;
    }
    @keyframes bttArrowLevitate {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-3px); }
    }
    .btt-arrow-svg {
      width: 20px;
      height: 20px;
      color: #ffffff;
      transition: color 0.25s ease;
    }
    .back-to-top-btn:hover .btt-arrow-svg {
      color: var(--neon-cyan, #06b6d4);
    }
    
    /* Unique Sky-Launch & Re-Entry Warp Animation on Hover */
    .back-to-top-btn:hover .btt-arrow-wrap {
      animation: bttArrowWarp 0.65s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    @keyframes bttArrowWarp {
      0% {
        transform: translateY(0);
        opacity: 1;
      }
      45% {
        transform: translateY(-24px);
        opacity: 0;
      }
      46% {
        transform: translateY(24px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
    
    /* Back-to-Top Hover Tooltip */
    .btt-hover-tooltip {
      position: absolute;
      right: calc(100% + 12px);
      top: 50%;
      transform: translateY(-50%) translateX(8px);
      background: rgba(10, 16, 32, 0.92);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.18);
      color: #ffffff;
      font-size: 0.78rem;
      font-weight: 600;
      padding: 5px 12px;
      border-radius: 16px;
      white-space: nowrap;
      pointer-events: none;
      opacity: 0;
      visibility: hidden;
      transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
    }
    .back-to-top-btn:hover .btt-hover-tooltip {
      opacity: 1;
      visibility: visible;
      transform: translateY(-50%) translateX(0);
    }

    /* Multi-Step Quote Modal */
    .ai-modal-overlay {
      position: fixed;
      inset: 0;
      background: rgba(2, 4, 10, 0.82);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      z-index: 2100;
      display: none;
      align-items: center;
      justify-content: center;
      padding: 16px;
      opacity: 0;
      transition: opacity 0.25s ease;
      overflow-y: auto;
    }
    .ai-modal-overlay.active {
      display: flex;
      opacity: 1;
    }
    .ai-modal-box {
      background: #0a1122;
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 20px;
      width: 100%;
      max-width: 660px;
      max-height: 90vh;
      box-sizing: border-box;
      overflow-y: auto;
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.8), 0 0 40px rgba(37, 99, 235, 0.3);
      position: relative;
      padding: 32px 28px;
      margin: auto;
      transform: scale(0.96);
      transition: transform 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .ai-modal-overlay.active .ai-modal-box {
      transform: scale(1);
    }
    .modal-close-btn {
      position: absolute;
      top: 18px;
      right: 18px;
      width: 36px;
      height: 36px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #94a3b8;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.4rem;
      cursor: pointer;
      transition: all 0.2s ease;
      line-height: 1;
      padding: 0;
    }
    .modal-close-btn:hover {
      background: rgba(239, 68, 68, 0.2);
      color: #ef4444;
      border-color: rgba(239, 68, 68, 0.4);
    }
    .modal-header-block {
      margin-bottom: 22px;
      padding-right: 36px;
    }
    .modal-header-block h3 {
      font-size: clamp(1.25rem, 3.5vw, 1.55rem);
      font-weight: 700;
      color: #ffffff;
      margin: 0 0 6px 0;
    }
    .modal-header-block p {
      font-size: 0.88rem;
      color: #94a3b8;
      margin: 0;
      line-height: 1.5;
    }
    .quote-step-indicators {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
      position: relative;
    }
    .quote-step-indicators::before {
      content: '';
      position: absolute;
      top: 15px;
      left: 30px;
      right: 30px;
      height: 2px;
      background: rgba(255, 255, 255, 0.1);
      z-index: 1;
    }
    .quote-step-indicator {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 6px;
      position: relative;
      z-index: 2;
    }
    .quote-step-indicator .step-circle {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #0d1830;
      border: 2px solid rgba(255, 255, 255, 0.18);
      color: #94a3b8;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.85rem;
      font-weight: 700;
      transition: all 0.3s ease;
    }
    .quote-step-indicator.active .step-circle {
      background: var(--primary-blue, #2563eb);
      border-color: var(--neon-cyan, #06b6d4);
      color: #ffffff;
      box-shadow: 0 0 14px rgba(6, 182, 212, 0.5);
    }
    .quote-step-indicator span {
      font-size: 0.78rem;
      color: #94a3b8;
      font-weight: 600;
    }
    .quote-step-indicator.active span {
      color: #ffffff;
    }
    .form-group-ai label {
      display: block;
      font-size: 0.85rem;
      font-weight: 600;
      color: #e2e8f0;
      margin-bottom: 8px;
    }
    .form-input-ai, .form-select-ai, .form-textarea-ai {
      width: 100%;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 10px;
      padding: 11px 14px;
      color: #ffffff;
      font-size: 16px; /* Crucial for iOS to prevent unwanted zooming */
      outline: none;
      transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }
    .form-input-ai:focus, .form-select-ai:focus, .form-textarea-ai:focus {
      border-color: var(--neon-cyan, #06b6d4);
      box-shadow: 0 0 0 3px rgba(6, 182, 212, 0.2);
    }
    .form-select-ai option {
      background: #0a1122;
      color: #ffffff;
    }
    .option-pill-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
      gap: 10px;
    }
    .option-pill-label {
      position: relative;
      cursor: pointer;
      margin: 0;
    }
    .option-pill-label input {
      position: absolute;
      opacity: 0;
      pointer-events: none;
    }
    .option-pill-label span {
      display: block;
      padding: 10px 12px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.1);
      color: #94a3b8;
      font-size: 0.85rem;
      font-weight: 600;
      text-align: center;
      transition: all 0.2s ease;
    }
    .option-pill-label input:checked + span {
      background: rgba(37, 99, 235, 0.22);
      border-color: var(--neon-cyan, #06b6d4);
      color: #ffffff;
      box-shadow: 0 0 14px rgba(6, 182, 212, 0.35);
    }
    .modal-actions-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 26px;
      padding-top: 18px;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      gap: 12px;
    }
    .btn-modal-back {
      background: transparent;
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: #94a3b8;
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 0.9rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .btn-modal-back:hover {
      color: #ffffff;
      border-color: #ffffff;
    }
    .btn-modal-next {
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      border: none;
      color: #ffffff;
      border-radius: 10px;
      padding: 11px 26px;
      font-size: 0.92rem;
      font-weight: 700;
      cursor: pointer;
      box-shadow: 0 4px 18px rgba(37, 99, 235, 0.4);
      transition: all 0.25s ease;
    }
    .btn-modal-next:hover {
      box-shadow: 0 6px 24px rgba(6, 182, 212, 0.55);
      transform: translateY(-2px);
    }

    /* Executive Collapsible Theme Switcher Dock */
    .theme-controller-dock {
      position: fixed;
      bottom: 26px;
      left: 24px;
      z-index: 1045;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* Left Professional Toggle Button */
    .theme-dock-trigger {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      border-radius: 999px;
      background: rgba(10, 18, 36, 0.92);
      border: 1px solid rgba(59, 130, 246, 0.40);
      color: #ffffff;
      font-size: 0.82rem;
      font-weight: 700;
      letter-spacing: 0.04em;
      cursor: pointer;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.65), 0 0 16px rgba(37, 99, 235, 0.25);
      transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
      user-select: none;
    }
    .theme-dock-trigger:hover {
      transform: translateY(-2px);
      border-color: var(--neon-cyan, #06b6d4);
      box-shadow: 0 10px 28px rgba(0, 0, 0, 0.75), 0 0 24px rgba(6, 182, 212, 0.45);
      color: #ffffff;
    }
    .trigger-palette-icon {
      color: var(--neon-cyan, #06b6d4);
      display: flex;
      align-items: center;
      font-size: 0.95rem;
    }
    .trigger-chevron {
      color: #94a3b8;
      display: flex;
      align-items: center;
      font-size: 0.75rem;
      transition: transform 0.3s ease;
    }
    .theme-controller-dock.is-open .trigger-chevron {
      transform: rotate(180deg);
    }

    /* Horizontally Sliding Panel */
    .theme-dock-panel {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 6px 14px;
      border-radius: 999px;
      background: rgba(10, 18, 36, 0.95);
      border: 1px solid rgba(255, 255, 255, 0.16);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.7), 0 0 30px rgba(59, 130, 246, 0.22);
      opacity: 0;
      visibility: hidden;
      max-width: 0;
      overflow: hidden;
      white-space: nowrap;
      pointer-events: none;
      transform: translateX(-16px) scale(0.96);
      transition: max-width 0.4s cubic-bezier(0.16, 1, 0.3, 1), 
                  opacity 0.3s ease, 
                  transform 0.35s ease, 
                  visibility 0.4s ease, 
                  padding 0.3s ease;
    }
    .theme-controller-dock.is-open .theme-dock-panel {
      opacity: 1;
      visibility: visible;
      max-width: 520px;
      pointer-events: auto;
      transform: translateX(0) scale(1);
    }

    .theme-dock-close {
      background: none;
      border: none;
      color: #94a3b8;
      width: 22px;
      height: 22px;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.82rem;
      transition: color 0.2s ease, transform 0.2s ease;
      margin-left: 2px;
      padding: 0;
    }
    .theme-dock-close:hover {
      color: #ffffff;
      transform: scale(1.15);
    }

    body[data-mode="light"] .theme-dock-trigger {
      background: rgba(255, 255, 255, 0.95);
      border-color: rgba(15, 23, 42, 0.14);
      color: #0f172a;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.12);
    }
    body[data-mode="light"] .theme-dock-panel {
      background: rgba(255, 255, 255, 0.96);
      border-color: rgba(15, 23, 42, 0.12);
      box-shadow: 0 12px 35px rgba(15, 23, 42, 0.14);
    }
    body[data-mode="light"] .theme-dock-close {
      color: #64748b;
    }
    body[data-mode="light"] .theme-dock-close:hover {
      color: #0f172a;
    }

    .widget-mode-pill {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.12);
      border-radius: 999px;
      padding: 4px 10px;
      display: flex;
      align-items: center;
      gap: 6px;
      color: #ffffff;
      font-size: 0.78rem;
      font-weight: 700;
      cursor: pointer;
    }
    .widget-mode-pill svg {
      width: 14px;
      height: 14px;
      fill: none;
      stroke: currentColor;
      stroke-width: 2;
    }
    .widget-mode-pill .mode-icon-sun { display: none; }
    .widget-mode-pill .mode-icon-moon { display: block; }
    body[data-mode="light"] .widget-mode-pill .mode-icon-sun { display: block; stroke: #f59e0b; }
    body[data-mode="light"] .widget-mode-pill .mode-icon-moon { display: none; }
    .theme-widget-info {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.78rem;
      font-weight: 600;
      color: var(--neon-cyan, #06b6d4);
      white-space: nowrap;
    }
    .theme-dots-wrap {
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .theme-dot-btn {
      width: 16px;
      height: 16px;
      border-radius: 50%;
      border: 2px solid transparent;
      padding: 0;
      cursor: pointer;
      transition: transform 0.2s ease, border-color 0.2s ease;
    }
    .theme-dot-btn.active {
      border-color: #ffffff;
      transform: scale(1.25);
    }
    .dot-blue { background: #3b82f6; }
    .dot-violet { background: #a855f7; }
    .dot-emerald { background: #10b981; }
    .dot-amber { background: #f97316; }
    .theme-timer-bar-wrap {
      width: 44px;
      height: 5px;
      background: rgba(255, 255, 255, 0.16);
      border-radius: 99px;
      overflow: hidden;
    }
    .theme-timer-bar {
      height: 100%;
      width: 0%;
      background: var(--neon-cyan, #06b6d4);
      border-radius: 99px;
      transition: width 0.1s linear;
    }
    .theme-cycle-toggle {
      background: none;
      border: none;
      color: #94a3b8;
      cursor: pointer;
      padding: 0;
      display: flex;
      align-items: center;
    }
    .theme-cycle-toggle svg {
      width: 12px;
      height: 12px;
      fill: currentColor;
    }

    /* =========================================================================
       RESPONSIVE BREAKPOINTS (ALL DEVICE SIZES)
       ========================================================================= */

    /* Medium Devices (Tablets, max 991px) */
    @media (max-width: 991px) {
      .ai-footer {
        padding: 60px 0 25px 0;
      }
      .footer-bottom-bar {
        flex-direction: column;
        text-align: center;
        gap: 12px;
      }
      .footer-bottom-links {
        justify-content: center;
      }
      .back-to-top-btn {
        right: 84px;
      }
    }

    /* Small Devices (Landscape Phones / Phablets, max 767px) */
    @media (max-width: 767px) {
      .ai-footer {
        padding: 50px 0 24px 0;
      }
      .footer-brand-desc {
        max-width: 100%;
      }
      .footer-col-title {
        margin-top: 10px;
        margin-bottom: 14px;
      }
      
      /* Mobile Floating Widgets Layout: Prevents ANY overlapping */
      .floating-whatsapp-widget {
        bottom: 20px;
        right: 18px;
        width: 52px;
        height: 52px;
      }
      .wa-wave-disc {
        width: 52px;
        height: 52px;
      }
      .wa-core-btn {
        width: 52px;
        height: 52px;
      }
      .wa-exact-svg {
        width: 52px;
        height: 52px;
      }
      .back-to-top-btn {
        bottom: 82px;
        right: 21px;
        width: 46px;
        height: 46px;
      }
      .theme-controller-dock {
        bottom: 20px;
        left: 16px;
      }
      .theme-widget-info {
        display: none; /* Hide label on mobile to keep widget compact */
      }
      .theme-timer-bar-wrap {
        width: 32px;
      }

      /* Modal Mobile Optimization */
      .ai-modal-box {
        padding: 24px 18px;
        border-radius: 16px;
      }
      .modal-close-btn {
        top: 14px;
        right: 14px;
      }
      .quote-step-indicators::before {
        left: 20px;
        right: 20px;
      }
      .quote-step-indicator span {
        font-size: 0.72rem;
      }
      .option-pill-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    /* Extra Small Devices (Smartphones, max 575px) */
    @media (max-width: 575px) {
      .footer-links-list li a {
        font-size: 0.88rem;
        padding: 2px 0;
      }
      .footer-bottom-bar {
        font-size: 0.8rem;
      }
      .footer-bottom-links {
        gap: 12px;
        font-size: 0.8rem;
      }
      
      /* Full Width Actions on small mobile */
      .modal-actions-row {
        flex-direction: row;
        gap: 8px;
      }
      .modal-actions-row .ms-auto {
        width: 100%;
        display: flex;
        gap: 8px;
      }
      .btn-modal-next {
        flex: 1;
        text-align: center;
        padding: 12px 14px;
      }
      .btn-modal-back {
        padding: 12px 16px;
      }
    }

    /* Tiny Devices (iPhone SE, Galaxy Fold 320px - 380px) */
    @media (max-width: 380px) {
      .ai-footer {
        padding: 40px 0 20px 0;
      }
      .footer-social-btn {
        width: 38px;
        height: 38px;
      }
      .floating-whatsapp-widget {
        bottom: 16px;
        right: 14px;
        width: 46px;
        height: 46px;
      }
      .wa-wave-disc {
        width: 46px;
        height: 46px;
      }
      .wa-core-btn {
        width: 46px;
        height: 46px;
      }
      .wa-exact-svg {
        width: 46px;
        height: 46px;
      }
      .back-to-top-btn {
        bottom: 72px;
        right: 15px;
        width: 40px;
        height: 40px;
      }
      .theme-controller-dock {
        bottom: 16px;
        left: 10px;
      }
      .theme-dot-btn {
        width: 14px;
        height: 14px;
      }
      .widget-mode-pill {
        padding: 3px 6px;
      }
      .widget-mode-pill span {
        display: none; /* Icon-only sun/moon on <=380px screens */
      }
      .theme-timer-bar-wrap {
        display: none;
      }
      .quote-step-indicator span {
        display: none; /* Icon-only step circles on <=380px screens */
      }
      .option-pill-grid {
        grid-template-columns: 1fr;
      }
      .footer-col-title {
        font-size: 0.98rem;
      }
      .modal-header-block h3 {
        font-size: 1.15rem;
      }
      .modal-close-btn {
        top: 10px;
        right: 10px;
        width: 32px;
        height: 32px;
        font-size: 1.2rem;
      }
    }

    /* Ultra-Narrow Screens (Galaxy Fold cover 280px - 320px) */
    @media (max-width: 320px) {
      .theme-controller-dock {
        bottom: 12px;
        left: 8px;
      }
      .theme-dot-btn {
        width: 12px;
        height: 12px;
      }
      .floating-whatsapp-widget {
        bottom: 12px;
        right: 10px;
        width: 42px;
        height: 42px;
      }
      .floating-whatsapp-widget svg {
        width: 20px;
        height: 20px;
      }
      .back-to-top-btn {
        bottom: 60px;
        right: 11px;
        width: 34px;
        height: 34px;
      }
      .ai-modal-box {
        padding: 16px 12px;
      }
      .btn-modal-next {
        padding: 10px 12px;
        font-size: 0.85rem;
      }
      .btn-modal-back {
        padding: 10px 10px;
        font-size: 0.85rem;
      }
    }
  </style>

  <!-- =========================================================================
       Shared Semantic Global Footer
       ========================================================================= -->
  <footer class="ai-footer" id="footer">
    <div class="container-xl">
      <div class="row g-4">
        
        <!-- Brand Info -->
        <div class="col-lg-4 col-md-6 col-12">
          <a href="<?php echo $siteUrl; ?>/" class="footer-brand-wrap">
            <img src="<?php echo $siteUrl; ?>/assets/images/logo-2.png" alt="GeerSoft IT Solutions">
          </a>
          <p class="footer-brand-desc">
            GeerSoft IT Solutions is a premier technology partner delivering intelligent websites, custom enterprise software, mobile apps, ERP systems, and AI automation.
          </p>
          <div class="footer-social-links">
            <a href="https://wa.me/917822020118?text=<?php echo $waMessage; ?>" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="WhatsApp" title="WhatsApp">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="mailto:info@geersoft.in" class="footer-social-btn" aria-label="Official Email" title="Email Us">
              <i class="bi bi-envelope-at-fill"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="LinkedIn" title="LinkedIn Profile">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="GitHub" title="GitHub Repositories">
              <i class="bi bi-github"></i>
            </a>
            <a href="<?php echo $siteUrl; ?>/contact" class="footer-social-btn" aria-label="Contact Desk" title="Contact Us">
              <i class="bi bi-chat-dots-fill"></i>
            </a>
          </div>
        </div>

        <!-- Core Services Links -->
        <div class="col-lg-3 col-md-6 col-6">
          <h4 class="footer-col-title">Our Services</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo $siteUrl; ?>/services/web-development">Website Development</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services/custom-software-development">Custom Software &amp; SaaS</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services/mobile-application-development">Mobile App Development</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services/ai-integration-automation">AI &amp; Automation</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services/erp-business-solutions">ERP Systems</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services/professional-seo-services">SEO &amp; Marketing</a></li>
          </ul>
        </div>

        <!-- Quick Navigation -->
        <div class="col-lg-2 col-md-6 col-6">
          <h4 class="footer-col-title">Company</h4>
          <ul class="footer-links-list">
            <li><a href="<?php echo $siteUrl; ?>/">Home</a></li>
            <li><a href="<?php echo $siteUrl; ?>/about">About Us</a></li>
            <li><a href="<?php echo $siteUrl; ?>/services_all">All Services</a></li>
            <li><a href="<?php echo $siteUrl; ?>/portfolio">Portfolio</a></li>
            <li><a href="<?php echo $siteUrl; ?>/price">Pricing</a></li>
            <li><a href="<?php echo $siteUrl; ?>/blogs">Articles &amp; Blog</a></li>
            <li><a href="<?php echo $siteUrl; ?>/contact">Contact Us</a></li>
          </ul>
        </div>

        <!-- Direct Contact Details -->
        <div class="col-lg-3 col-md-6 col-12">
          <h4 class="footer-col-title">Get in Touch</h4>
          <ul class="footer-contact-info">
            <li class="footer-contact-item">
              <div class="footer-contact-icon-badge">
                <i class="bi bi-telephone-inbound-fill"></i>
              </div>
              <div>
                <span class="footer-contact-label">Direct Phone</span>
                <a href="tel:+917822020118" class="footer-contact-link">+91-7822020118</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon-badge">
                <i class="bi bi-envelope-at-fill"></i>
              </div>
              <div>
                <span class="footer-contact-label">Email Support</span>
                <a href="mailto:info@geersoft.in" class="footer-contact-link">info@geersoft.in</a>
              </div>
            </li>
            <li class="footer-contact-item">
              <div class="footer-contact-icon-badge">
                <i class="bi bi-geo-alt-fill"></i>
              </div>
              <div>
                <span class="footer-contact-label">Headquarters</span>
                <span class="footer-contact-address">Dombivli, Mumbai, Maharashtra 421202</span>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom-bar">
        <div>&copy; <?php echo date('Y'); ?> GeerSoft IT Solutions. All rights reserved.</div>
        <div class="footer-bottom-links">
          <a href="<?php echo $siteUrl; ?>/about">Privacy Policy</a>
          <a href="<?php echo $siteUrl; ?>/about">Terms of Service</a>
          <a href="<?php echo $siteUrl; ?>/contact">Support</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- =========================================================================
       Floating Widgets: WhatsApp & Back-To-Top (Responsive & Anti-Collision)
       ========================================================================= -->
  <a href="https://wa.me/917822020118?text=<?php echo $waMessage; ?>" 
     class="floating-whatsapp-widget" target="_blank" rel="noopener noreferrer" 
     aria-label="Chat directly on WhatsApp" title="Chat on WhatsApp">
    <!-- Translucent Emerald Radar Wave Discs (Exact match with user image) -->
    <span class="wa-wave-disc wa-wave-disc-1"></span>
    <span class="wa-wave-disc wa-wave-disc-2"></span>
    <span class="wa-wave-disc wa-wave-disc-3"></span>
    <!-- WhatsApp Core Glowing Circle with White Inner Ring & Icon -->
    <span class="wa-core-btn">
      <svg class="wa-exact-svg" viewBox="0 0 58 58" width="58" height="58">
        <!-- Crisp White Inner Circular Ring -->
        <circle cx="29" cy="29" r="21" fill="none" stroke="#ffffff" stroke-width="2.2" />
        <!-- WhatsApp Speech Bubble & Phone Handset Outline -->
        <path fill="#ffffff" d="M29 16c-6.63 0-12 5.37-12 12 0 2.26.63 4.38 1.72 6.2L17 40l6.02-1.58A11.9 11.9 0 0 0 29 40c6.63 0 12-5.37 12-12s-5.37-12-12-12zm0 21.8c-1.88 0-3.64-.53-5.15-1.45l-.37-.22-3.82 1 1.02-3.72-.24-.39A9.9 9.9 0 0 1 19.1 28c0-5.46 4.44-9.9 9.9-9.9 5.46 0 9.9 4.44 9.9 9.9 0 5.46-4.44 9.9-9.9 9.9zm5.45-7.44c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.68.15-.2.3-.78.97-.95 1.17-.17.2-.35.23-.65.08-.3-.15-1.25-.46-2.39-1.47-.88-.79-1.48-1.76-1.65-2.05-.17-.3-.02-.46.13-.6.14-.14.3-.36.45-.53.15-.17.2-.3.3-.5.1-.2.05-.37-.03-.52-.07-.15-.68-1.63-.93-2.24-.24-.59-.49-.51-.68-.52h-.58c-.2 0-.53.07-.8.37-.28.3-1.05 1.03-1.05 2.51 0 1.48 1.08 2.91 1.23 3.12.15.2 2.12 3.23 5.13 4.53 2.49 1.07 3 0.86 3.54.81.6-.06 1.76-.72 2.01-1.42.25-.69.25-1.29.17-1.42-.07-.12-.27-.2-.57-.35z"/>
      </svg>
    </span>
    <!-- Tooltip Pill -->
    <span class="wa-hover-tooltip">Chat on WhatsApp</span>
  </a>

  <button class="back-to-top-btn" id="backToTopBtn" aria-label="Scroll back to top" title="Scroll to top">
    <!-- Real-time Circular SVG Scroll Progress Ring -->
    <svg class="btt-progress-svg" viewBox="0 0 48 48">
      <circle class="btt-progress-track" cx="24" cy="24" r="21" />
      <circle class="btt-progress-bar" id="bttProgressBar" cx="24" cy="24" r="21" />
    </svg>
    <!-- Professional Aerodynamic Animated Top Arrow -->
    <div class="btt-arrow-wrap">
      <svg class="btt-arrow-svg" viewBox="0 0 24 24" fill="none">
        <path class="btt-stem" d="M12 19V5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
        <path class="btt-chevrons" d="M5 12l7-7 7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </div>
    <!-- Tooltip Pill -->
    <span class="btt-hover-tooltip">Back to top</span>
  </button>

  <!-- =========================================================================
       Interactive Multi-Step Quote Modal
       ========================================================================= -->
  <div class="ai-modal-overlay" id="quoteModalOverlay" role="dialog" aria-modal="true" aria-labelledby="quoteModalTitle">
    <div class="ai-modal-box">
      <button class="modal-close-btn" onclick="closeQuoteModal()" aria-label="Close modal">&times;</button>
      
      <div class="modal-header-block">
        <h3 id="quoteModalTitle"><?php echo htmlspecialchars($modalTitle); ?></h3>
        <p><?php echo htmlspecialchars($modalSubtitle); ?></p>
      </div>

      <!-- Step Indicators -->
      <div class="quote-step-indicators">
        <div class="quote-step-indicator active" id="stepInd1"><div class="step-circle">1</div><span>Contact</span></div>
        <div class="quote-step-indicator" id="stepInd2"><div class="step-circle">2</div><span>Project</span></div>
        <div class="quote-step-indicator" id="stepInd3"><div class="step-circle">3</div><span>Budget</span></div>
      </div>

      <form id="quoteMultiStepForm">
        <!-- STEP 1: Contact Details -->
        <div class="quote-step-content" id="quoteStep1">
          <div class="row g-3">
            <div class="col-md-6 col-12 form-group-ai">
              <label>Full Name *</label>
              <input type="text" name="name" class="form-input-ai" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 col-12 form-group-ai">
              <label>Email Address *</label>
              <input type="email" name="email" class="form-input-ai" placeholder="name@company.com" required>
            </div>
            <div class="col-md-6 col-12 form-group-ai">
              <label>Phone Number *</label>
              <input type="tel" name="phone" class="form-input-ai" placeholder="+91 98765 43210" required>
            </div>
            <div class="col-md-6 col-12 form-group-ai">
              <label>Company / Organization</label>
              <input type="text" name="company" class="form-input-ai" placeholder="Company Name">
            </div>
          </div>
          <div class="form-group-ai mt-3">
            <label>Selected Service *</label>
            <?php if (!empty($selectedService)): ?>
              <input type="text" name="service" class="form-input-ai" value="<?php echo htmlspecialchars($selectedService); ?>" readonly style="background:rgba(255,255,255,0.06); color:var(--neon-cyan, #06b6d4); font-weight:700;">
            <?php else: ?>
              <select name="service" class="form-select-ai" required>
                <option value="">Select a Service</option>
                <option value="Website Development">Website Development</option>
                <option value="Custom Software / SaaS">Custom Software &amp; SaaS</option>
                <option value="Mobile App Development">Mobile App Development</option>
                <option value="AI Integration & Automation">AI Integration &amp; Automation</option>
                <option value="ERP & Business Systems">ERP &amp; Business Systems</option>
                <option value="Digital Marketing & SEO">Digital Marketing &amp; SEO</option>
                <option value="Other Custom Requirement">Other Custom Requirement</option>
              </select>
            <?php endif; ?>
          </div>
        </div>

        <!-- STEP 2: Project Specifications -->
        <div class="quote-step-content" id="quoteStep2" style="display:none;">
          <div class="form-group-ai">
            <label>Project Scale / Requirements</label>
            <div class="option-pill-grid">
              <label class="option-pill-label"><input type="radio" name="scale" value="Standard" checked><span>Standard</span></label>
              <label class="option-pill-label"><input type="radio" name="scale" value="Medium"><span>Medium Scale</span></label>
              <label class="option-pill-label"><input type="radio" name="scale" value="Enterprise"><span>Enterprise Custom</span></label>
            </div>
          </div>
          <div class="form-group-ai mt-3">
            <label>Specific Objectives or Integrations</label>
            <textarea name="notes" class="form-textarea-ai" rows="3" placeholder="Tell us about your requirements, existing stack, or target timeline..."></textarea>
          </div>
        </div>

        <!-- STEP 3: Budget Range -->
        <div class="quote-step-content" id="quoteStep3" style="display:none;">
          <div class="form-group-ai">
            <label>Estimated Project Budget (INR) *</label>
            <div class="option-pill-grid">
              <label class="option-pill-label"><input type="radio" name="budget" value="₹15k – ₹30k" required><span>₹15k – ₹30k</span></label>
              <label class="option-pill-label"><input type="radio" name="budget" value="₹30k – ₹60k"><span>₹30k – ₹60k</span></label>
              <label class="option-pill-label"><input type="radio" name="budget" value="₹60k – ₹1.5L"><span>₹60k – ₹1.5L</span></label>
              <label class="option-pill-label"><input type="radio" name="budget" value="₹1.5L – ₹3L"><span>₹1.5L – ₹3L</span></label>
              <label class="option-pill-label"><input type="radio" name="budget" value="₹3L+ Enterprise"><span>₹3L+ Enterprise</span></label>
            </div>
          </div>
        </div>

        <div class="modal-actions-row">
          <button type="button" class="btn-modal-back" id="quoteBackBtn" onclick="quotePrevStep()" style="display:none;">Back</button>
          <div class="ms-auto">
            <button type="button" class="btn-modal-next" id="quoteContinueBtn" onclick="quoteNextStep()"><span>Continue</span></button>
            <button type="submit" class="btn-modal-next" id="quoteSubmitBtn" style="display:none;"><span>Submit Quote Request</span></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- =========================================================================
       Executive Theme & View Controller (Horizontal Collapsible Dock)
       ========================================================================= -->
  <aside class="theme-controller-dock" id="themeControllerDock" role="region" aria-label="Executive Theme Controller">
    <!-- Left Professional Toggle Button -->
    <button type="button" class="theme-dock-trigger" id="themeDockTrigger" aria-expanded="false" aria-controls="themeDockPanel" title="Customize Theme & View">
      <div class="trigger-palette-icon"><i class="bi bi-palette2"></i></div>
      <span class="trigger-label">Theme</span>
      <span class="trigger-chevron"><i class="bi bi-chevron-right"></i></span>
    </button>

    <!-- Horizontal Sliding Panel (Expands & Hides Horizontally) -->
    <div class="theme-dock-panel" id="themeDockPanel" aria-hidden="true">
      <!-- Light / Dark View Toggle Pill -->
      <button type="button" class="widget-mode-pill" id="widgetModeToggle" title="Toggle Light / Dark View" aria-label="Toggle Light / Dark View">
        <svg class="mode-icon-sun" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        <svg class="mode-icon-moon" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
        <span id="widgetModeText">Dark</span>
      </button>

      <div class="theme-widget-info" title="Current Active Theme">
        <span class="theme-pulse-dot" style="width:7px; height:7px; border-radius:50%; background:currentColor;"></span>
        <span id="themeActiveName">Obsidian Cobalt</span>
      </div>

      <div class="theme-dots-wrap" role="group" aria-label="Choose Theme Palette">
        <button type="button" class="theme-dot-btn dot-blue active" data-theme-id="cyber-blue" title="Obsidian Cobalt (Default)" aria-label="Switch to Obsidian Cobalt"></button>
        <button type="button" class="theme-dot-btn dot-violet" data-theme-id="quantum-violet" title="Slate Titanium" aria-label="Switch to Slate Titanium"></button>
        <button type="button" class="theme-dot-btn dot-emerald" data-theme-id="matrix-emerald" title="Emerald FinTech" aria-label="Switch to Emerald FinTech"></button>
        <button type="button" class="theme-dot-btn dot-amber" data-theme-id="solar-amber" title="Executive Bronze" aria-label="Switch to Executive Bronze"></button>
      </div>

      <button type="button" class="theme-dock-close" id="themeDockClose" title="Hide Theme Switcher" aria-label="Close Theme Panel">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>
  </aside>

  <!-- =========================================================================
       Core Scripts
       ========================================================================= -->
  <script src="<?php echo $siteUrl; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $siteUrl; ?>/assets/javascripts/ai-home.js?v=<?php echo time(); ?>"></script>

  <!-- Shared FAQ Accordion Toggle Script -->
  <script>
    function toggleFaq(btn) {
      const card = btn.closest('.faq-card-item');
      if (!card) return;
      const wasActive = card.classList.contains('active');
      document.querySelectorAll('.faq-card-item').forEach(c => c.classList.remove('active'));
      if (!wasActive) {
        card.classList.add('active');
        btn.setAttribute('aria-expanded', 'true');
      } else {
        btn.setAttribute('aria-expanded', 'false');
      }
    }
  </script>

  <?php
  // Optional page-specific external scripts
  if (isset($extraJs) && is_array($extraJs)) {
      foreach ($extraJs as $jsFile) {
          $jsSrc = (strpos($jsFile, 'http') === 0 || strpos($jsFile, '//') === 0) ? $jsFile : $siteUrl . '/' . ltrim($jsFile, '/');
          echo '  <script src="' . htmlspecialchars($jsSrc) . '"></script>' . PHP_EOL;
      }
  }
  
  // Optional inline scripts or HTML before </body>
  if (isset($extraFooter) && !empty($extraFooter)) {
      echo $extraFooter . PHP_EOL;
  }
  ?>
</body>
</html>