<?php
/**
 * GeerSoft IT Solutions — Contact Us & Project Inquiries
 * Phase 7: AI-Powered Website Redesign
 * File: contact.php
 */

// Start session for CSRF token and rate limiting
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate or maintain CSRF token
if (empty($_SESSION['contact_csrf_token'])) {
    $_SESSION['contact_csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['contact_csrf_token'];

// Check if request is AJAX
$isAjax = (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest')
          || (isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)
          || (isset($_POST['is_ajax']) && $_POST['is_ajax'] == '1');

// Form processing state variables
$formErrors = [];
$formSuccess = false;
$submissionRef = '';
$feedbackMessage = '';
$mailSent = false;
$smtpConfigured = false;
$formData = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'company' => '',
    'service' => '',
    'budget' => '',
    'timeline' => '',
    'message' => '',
    'privacy' => false
];

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Anti-Spam Honeypot check
    if (!empty($_POST['website_hp'])) {
        // Silently deflect bots with synthetic success
        $fakeRef = 'REF-GS-' . date('Ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));
        if ($isAjax) {
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true,
                'reference' => $fakeRef,
                'heading' => 'Your Inquiry Has Been Received',
                'message' => 'Thank you for contacting GeerSoft IT Solutions. Your inquiry has been submitted successfully.'
            ]);
            exit;
        }
        $formSuccess = true;
        $submissionRef = $fakeRef;
        $feedbackMessage = 'Thank you for contacting GeerSoft IT Solutions. Your inquiry has been submitted successfully.';
    } else {
        // 2. CSRF Token Validation
        $submittedToken = $_POST['csrf_token'] ?? '';
        if (!hash_equals($_SESSION['contact_csrf_token'] ?? '', $submittedToken)) {
            $formErrors['csrf'] = 'Invalid or expired session security token. Please refresh the page.';
        }

        // 3. Request Throttling (Rate Limiting: minimum 4 seconds between submissions)
        $lastSubmit = $_SESSION['last_contact_submit_time'] ?? 0;
        $currentTime = time();
        if (($currentTime - $lastSubmit) < 4) {
            $formErrors['throttle'] = 'Please wait a few seconds before submitting another project inquiry.';
        }

        // 4. Input Field Extraction & Sanitization
        // Full Name (Required)
        $name = trim(strip_tags($_POST['name'] ?? ''));
        $formData['name'] = $name;
        if (empty($name)) {
            $formErrors['name'] = 'Full Name is required.';
        } elseif (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
            $formErrors['name'] = 'Full Name must be between 2 and 100 characters.';
        }

        // Business Email (Required)
        $email = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
        $formData['email'] = $email;
        if (empty($email)) {
            $formErrors['email'] = 'Business Email is required.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 150) {
            $formErrors['email'] = 'Please enter a valid email address.';
        }

        // Phone Number (Optional)
        $phone = trim(strip_tags($_POST['phone'] ?? ''));
        $formData['phone'] = $phone;
        if (!empty($phone)) {
            if (!preg_match('/^[0-9+\s\-().]{7,25}$/', $phone)) {
                $formErrors['phone'] = 'Please enter a valid phone number (7–25 characters, digits and standard formatting).';
            }
        }

        // Company Name (Optional)
        $company = trim(strip_tags($_POST['company'] ?? ''));
        $formData['company'] = $company;
        if (mb_strlen($company) > 120) {
            $formErrors['company'] = 'Company name is too long (maximum 120 characters).';
        }

        // Service Required (Required, strict whitelist)
        $service = trim($_POST['service'] ?? '');
        $validServices = [
            'Website Development',
            'Custom Software Development',
            'Web Application Development',
            'Mobile Application Development',
            'ERP Development',
            'AI Integration and Automation',
            'Digital Marketing and SEO',
            'UI/UX Design',
            'Website Maintenance',
            'Other'
        ];
        $formData['service'] = $service;
        if (empty($service) || !in_array($service, $validServices, true)) {
            $formErrors['service'] = 'Please select a valid service from the list.';
        }

        // Project Budget (Optional free-text)
        $budget = trim(strip_tags($_POST['budget'] ?? ''));
        $formData['budget'] = $budget;
        if (mb_strlen($budget) > 100) {
            $formErrors['budget'] = 'Budget specification exceeds maximum allowed length.';
        }

        // Expected Timeline (Optional, strict whitelist)
        $timeline = trim($_POST['timeline'] ?? '');
        $validTimelines = [
            'As Soon as Practical',
            'Within 1–3 Months',
            'Within 3–6 Months',
            'Flexible / Not Decided'
        ];
        $formData['timeline'] = $timeline;
        if (!empty($timeline) && !in_array($timeline, $validTimelines, true)) {
            $formErrors['timeline'] = 'Please select an approved timeline preference.';
        }

        // Project Description (Required)
        $message = trim(strip_tags($_POST['message'] ?? ''));
        $formData['message'] = $message;
        if (empty($message)) {
            $formErrors['message'] = 'Project Description is required.';
        } elseif (mb_strlen($message) < 10) {
            $formErrors['message'] = 'Please provide at least 10 characters describing your project requirements.';
        } elseif (mb_strlen($message) > 3000) {
            $formErrors['message'] = 'Project description is too long (maximum 3000 characters).';
        }

        // Privacy Acknowledgment (Required)
        $privacy = !empty($_POST['privacy']);
        $formData['privacy'] = $privacy;
        if (!$privacy) {
            $formErrors['privacy'] = 'You must acknowledge the privacy policy to submit an inquiry.';
        }

        // 5. If Valid, Process Inquiry
        if (empty($formErrors)) {
            $_SESSION['last_contact_submit_time'] = time();
            // Rotate token
            $_SESSION['contact_csrf_token'] = bin2hex(random_bytes(32));
            $csrf_token = $_SESSION['contact_csrf_token'];

            $submissionRef = 'REF-GS-' . date('Ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(3)), 0, 6));

            // Structured inquiry object
            $inquiryRecord = [
                'reference' => $submissionRef,
                'submitted_at' => date('c'),
                'name' => $name,
                'email' => $email,
                'phone' => $phone ?: null,
                'company' => $company ?: null,
                'service' => $service,
                'budget' => $budget ?: null,
                'timeline' => $timeline ?: null,
                'message' => $message,
                'client_ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
            ];

            // Secure local storage in data/inquiries.json (protected by .htaccess)
            $dataDir = __DIR__ . '/data';
            if (!is_dir($dataDir)) {
                @mkdir($dataDir, 0755, true);
                @file_put_contents($dataDir . '/.htaccess', "Order Deny,Allow\nDeny from all\n");
            }
            $storageFile = $dataDir . '/inquiries.json';
            $existingInquiries = [];
            if (file_exists($storageFile)) {
                $raw = @file_get_contents($storageFile);
                $existingInquiries = json_decode($raw, true) ?: [];
            }
            $existingInquiries[] = $inquiryRecord;
            @file_put_contents($storageFile, json_encode($existingInquiries, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

            // Email Notification Dispatch
            $to = 'info@geersoft.in';
            $subject = "New Project Inquiry — GeerSoft Website [{$submissionRef}]";
            $headers = [
                'MIME-Version: 1.0',
                'Content-Type: text/html; charset=UTF-8',
                'From: GeerSoft Inquiries <no-reply@geersoft.in>',
                'Reply-To: ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . ' <' . filter_var($email, FILTER_SANITIZE_EMAIL) . '>',
                'X-Mailer: PHP/' . phpversion()
            ];

            $emailBody = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #1e293b;'>
                <div style='max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #e2e8f0; border-radius: 8px;'>
                    <h2 style='color: #2563eb; margin-top: 0;'>New Project Inquiry Received</h2>
                    <p style='font-size: 0.9em; color: #64748b;'>Reference ID: <strong>" . htmlspecialchars($submissionRef) . "</strong> | Submitted: " . date('Y-m-d H:i:s T') . "</p>
                    <hr style='border: none; border-top: 1px solid #e2e8f0; margin: 16px 0;'>
                    <table style='width: 100%; border-collapse: collapse;'>
                        <tr><td style='padding: 6px 0; width: 140px; color: #64748b;'><strong>Full Name:</strong></td><td style='padding: 6px 0;'>" . htmlspecialchars($name) . "</td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Email Address:</strong></td><td style='padding: 6px 0;'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Phone Number:</strong></td><td style='padding: 6px 0;'>" . (!empty($phone) ? htmlspecialchars($phone) : '<em>Not provided</em>') . "</td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Company Name:</strong></td><td style='padding: 6px 0;'>" . (!empty($company) ? htmlspecialchars($company) : '<em>Not provided</em>') . "</td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Service Required:</strong></td><td style='padding: 6px 0;'><strong>" . htmlspecialchars($service) . "</strong></td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Project Budget:</strong></td><td style='padding: 6px 0;'>" . (!empty($budget) ? htmlspecialchars($budget) : '<em>To be discussed</em>') . "</td></tr>
                        <tr><td style='padding: 6px 0; color: #64748b;'><strong>Expected Timeline:</strong></td><td style='padding: 6px 0;'>" . (!empty($timeline) ? htmlspecialchars($timeline) : '<em>Not specified</em>') . "</td></tr>
                    </table>
                    <hr style='border: none; border-top: 1px solid #e2e8f0; margin: 16px 0;'>
                    <h3 style='color: #0f172a; margin-bottom: 8px;'>Project Description:</h3>
                    <div style='background: #f8fafc; padding: 14px; border-radius: 6px; font-size: 0.95em; white-space: pre-wrap;'>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
            </body>
            </html>
            ";

            // Verify if local mail/SMTP environment is configured
            $sendmailPath = ini_get('sendmail_path');
            $smtpHost = ini_get('SMTP');
            $smtpConfigured = (!empty($sendmailPath) || ($smtpHost && $smtpHost !== 'localhost'));

            if ($smtpConfigured) {
                $mailSent = @mail($to, $subject, $emailBody, implode("\r\n", $headers));
            } else {
                $mailSent = false;
            }

            $formSuccess = true;
            $feedbackMessage = 'Thank you for contacting GeerSoft IT Solutions. Your inquiry has been submitted successfully.';

            if ($isAjax) {
                header('Content-Type: application/json');
                echo json_encode([
                    'success' => true,
                    'reference' => $submissionRef,
                    'mail_sent' => $mailSent,
                    'smtp_configured' => $smtpConfigured,
                    'heading' => 'Your Inquiry Has Been Received',
                    'message' => $feedbackMessage
                ]);
                exit;
            }

            // Clear inputs for display after successful submission
            $formData = array_fill_keys(array_keys($formData), '');
        } else {
            // Submission had validation errors
            if ($isAjax) {
                header('Content-Type: application/json');
                http_response_code(422);
                echo json_encode([
                    'success' => false,
                    'heading' => "We Couldn't Submit Your Inquiry",
                    'message' => 'Please correct the highlighted issues and try again, or contact us directly using the details provided on this page.',
                    'errors' => $formErrors
                ]);
                exit;
            }
        }
    }
}
?>
<?php
$pageTitle       = "Contact GeerSoft IT Solutions | Project Inquiries";
$pageDescription = "Contact GeerSoft IT Solutions for website development, software applications, ERP solutions, AI integration, and digital marketing inquiries.";
$pageKeywords    = "contact GeerSoft IT Solutions, hire software developers Dombivli Mumbai, website inquiry, custom ERP quote, AI integration consulting";
$pageCanonical   = "https://geersoft.in/contact";
$extraCss        = ["assets/stylesheets/ai-contact.css"];
$activeNav       = "contact";

include "include/header.php";
?>




  <!-- =========================================================================
       Section 1: Contact Hero with 3D Communication Globe & Nodes
       ========================================================================= -->
  <section class="hero-section" id="contact-hero">
    <canvas id="hero-network-canvas" aria-hidden="true"></canvas>

    <div class="container-xl hero-content">
      <div class="row align-items-center g-5">
        <!-- Left Column: Copy & CTAs -->
        <div class="col-lg-7">
          <!-- Breadcrumb Navigation -->
          

          <div class="hero-badge mb-3">
            <span class="badge-dot"></span>
            <span>CONNECT WITH GEERSOFT</span>
          </div>

          <h1 class="hero-title mb-4">
            Let's Build Something <br>
            <span class="gradient-text">Extraordinary Together</span>
          </h1>

          <p class="hero-description mb-4">
            Have a website, software application, ERP system, or AI integration project in mind? Connect with GeerSoft IT Solutions to discuss your ideas, requirements, and business goals.
          </p>

          <div class="d-flex flex-wrap gap-3 align-items-center pt-2">
            <a href="#inquiry-form" class="btn-ai-primary">
              <span>Start Your Project</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#inquiry-form" class="btn-ai-secondary">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span>Send Us a Message</span>
            </a>
          </div>

          <!-- Verified Channels Quick Badges -->
          <div class="d-flex flex-wrap align-items-center gap-3 mt-4 pt-3 border-top border-white-10">
            <div class="d-flex align-items-center gap-2 text-white-50" style="font-size:0.85rem;">
              <i class="bi bi-shield-check text-success"></i>
              <span>Direct Engineering Consultation</span>
            </div>
            <div class="d-flex align-items-center gap-2 text-white-50" style="font-size:0.85rem;">
              <i class="bi bi-clock-history text-info"></i>
              <span>Fast 1-Business-Day Reply</span>
            </div>
            <div class="d-flex align-items-center gap-2 text-white-50" style="font-size:0.85rem;">
              <i class="bi bi-lock-fill text-warning"></i>
              <span>Confidential &amp; NDA Ready</span>
            </div>
          </div>
        </div>

        <!-- Right Column: Premium 3D Communication Globe Illustration -->
        <div class="col-lg-5">
          <div class="contact-hero-composition" role="img" aria-label="Futuristic floating digital communication network connected to GeerSoft IT Solutions">
            <!-- Central Glowing Digital Globe -->
            <div class="contact-globe-core">
              <div class="globe-ring globe-ring-1"></div>
              <div class="globe-ring globe-ring-2"></div>
              <div class="globe-ring globe-ring-3"></div>
              <div class="globe-center-emblem">
                <i class="bi bi-globe2"></i>
              </div>
            </div>

            <!-- Satellite Node 1: Business Email -->
            <div class="satellite-node node-email">
              <div class="node-icon-circle">
                <i class="bi bi-envelope-at-fill"></i>
              </div>
              <div class="node-text-wrap">
                <span class="node-label">Email Channel</span>
                <span class="node-value">info@geersoft.in</span>
              </div>
            </div>

            <!-- Satellite Node 2: Direct Phone -->
            <div class="satellite-node node-phone">
              <div class="node-icon-circle">
                <i class="bi bi-telephone-inbound-fill"></i>
              </div>
              <div class="node-text-wrap">
                <span class="node-label">Direct Helpline</span>
                <span class="node-value">+91 7822020118</span>
              </div>
            </div>

            <!-- Satellite Node 3: Instant WhatsApp -->
            <div class="satellite-node node-whatsapp">
              <div class="node-icon-circle">
                <i class="bi bi-whatsapp"></i>
              </div>
              <div class="node-text-wrap">
                <span class="node-label">Instant Chat</span>
                <span class="node-value">WhatsApp Ready</span>
              </div>
            </div>

            <!-- Satellite Node 4: End-to-End Security -->
            <div class="satellite-node node-security">
              <div class="node-icon-circle">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <div class="node-text-wrap">
                <span class="node-label">Data Security</span>
                <span class="node-value">Encrypted &amp; Private</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 2: Contact Cards (Get in Touch with GeerSoft)
       ========================================================================= -->
  <section class="contact-cards-section" id="contact-channels">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>COMMUNICATION CHANNELS</span>
        </div>
        <h2 class="section-title">
          Get in Touch with <span class="gradient-text">GeerSoft</span>
        </h2>
        <p class="section-description">
          Choose the most convenient way to connect with our team:
        </p>
      </div>

      <div class="row g-4">
        <!-- CARD 01 — EMAIL US -->
        <div class="col-lg-3 col-md-6">
          <div class="contact-card-ai">
            <div class="contact-card-icon-wrap">
              <i class="bi bi-envelope-open-fill"></i>
            </div>
            <h3 class="contact-card-title">Email Us</h3>
            <div class="contact-card-display">info@geersoft.in</div>
            <p class="contact-card-desc">
              Send us your questions, project requirements, or business inquiries.
            </p>
            <a href="mailto:info@geersoft.in" class="contact-card-btn">
              <span>Send Email</span>
              <i class="bi bi-arrow-up-right"></i>
            </a>
          </div>
        </div>

        <!-- CARD 02 — CALL US -->
        <div class="col-lg-3 col-md-6">
          <div class="contact-card-ai">
            <div class="contact-card-icon-wrap">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <h3 class="contact-card-title">Call Us</h3>
            <div class="contact-card-display">+91 7822020118</div>
            <p class="contact-card-desc">
              Contact our team to discuss your requirements.
            </p>
            <a href="tel:+917822020118" class="contact-card-btn">
              <span>Call Now</span>
              <i class="bi bi-telephone-outbound"></i>
            </a>
          </div>
        </div>

        <!-- CARD 03 — WHATSAPP -->
        <div class="col-lg-3 col-md-6">
          <div class="contact-card-ai">
            <div class="contact-card-icon-wrap" style="color:#25d366;">
              <i class="bi bi-whatsapp"></i>
            </div>
            <h3 class="contact-card-title">Chat on WhatsApp</h3>
            <div class="contact-card-display">+91 7822020118</div>
            <p class="contact-card-desc">
              Start a conversation about your project.
            </p>
            <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%20IT%20Solutions%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20your%20team." 
               target="_blank" rel="noopener noreferrer" class="contact-card-btn">
              <span>Chat on WhatsApp</span>
              <i class="bi bi-chat-dots-fill"></i>
            </a>
          </div>
        </div>

        <!-- CARD 04 — OFFICE LOCATION (Verified from company codebase records) -->
        <div class="col-lg-3 col-md-6">
          <div class="contact-card-ai">
            <div class="contact-card-icon-wrap">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h3 class="contact-card-title">Office Location</h3>
            <div class="contact-card-display" style="font-size:0.95rem;">Dombivli, Maharashtra</div>
            <p class="contact-card-desc">
              Mahatma Phule Rd, Vishnu Nagar, Dombivli, Maharashtra 421202.
            </p>
            <a href="https://maps.google.com/?q=Mahatma+Phule+Rd,+Vishnu+Nagar,+Dombivli,+Maharashtra+421202" 
               target="_blank" rel="noopener noreferrer" class="contact-card-btn">
              <span>View on Maps</span>
              <i class="bi bi-map-fill"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 3: Project Inquiry Form & Process Sidebar
       ========================================================================= -->
  <section class="inquiry-section" id="inquiry-form">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>PROJECT INQUIRY FORM</span>
        </div>
        <h2 class="section-title">
          Tell Us About <span class="gradient-text">Your Project</span>
        </h2>
        <p class="section-description">
          Share a few details about your requirements so our team can understand your project.
        </p>
      </div>

      <div class="row g-5">
        <!-- Left Column: Premium Glassmorphism Form -->
        <div class="col-lg-7">
          <div class="inquiry-form-card" id="inquiryFormCard">

            <!-- Server-Side Success Alert Banner -->
            <div class="form-alert-banner alert-success-ai" id="formAlertSuccess" style="<?php echo $formSuccess ? 'display:block;' : ''; ?>">
              <div class="alert-title-row">
                <i class="bi bi-check-circle-fill alert-icon"></i>
                <h4 class="alert-heading" id="alertSuccessHeading">Your Inquiry Has Been Received</h4>
              </div>
              <p class="alert-body-text" id="alertSuccessBody">
                <?php echo !empty($feedbackMessage) ? htmlspecialchars($feedbackMessage) : 'Thank you for contacting GeerSoft IT Solutions. Your inquiry has been submitted successfully.'; ?>
              </p>
              <?php if (!empty($submissionRef)): ?>
                <div class="alert-ref-badge" id="alertRefBadge">
                  Reference: <strong><?php echo htmlspecialchars($submissionRef); ?></strong>
                </div>
              <?php endif; ?>
              <?php if ($formSuccess && !$smtpConfigured): ?>
                <div class="text-white-50 mt-2" style="font-size:0.78rem;">
                  <i class="bi bi-info-circle"></i> Logged to secure inquiry storage (Live SMTP server unconfigured on local environment).
                </div>
              <?php endif; ?>
            </div>

            <!-- Server-Side Error Alert Banner -->
            <div class="form-alert-banner alert-danger-ai" id="formAlertError" style="<?php echo (!empty($formErrors)) ? 'display:block;' : ''; ?>">
              <div class="alert-title-row">
                <i class="bi bi-exclamation-triangle-fill alert-icon"></i>
                <h4 class="alert-heading" id="alertErrorHeading">We Couldn't Submit Your Inquiry</h4>
              </div>
              <p class="alert-body-text" id="alertErrorBody">
                Please correct the highlighted fields below and try again, or contact us directly using the details provided on this page.
              </p>
            </div>

            <!-- The Inquiry Form -->
            <form id="projectInquiryForm" method="POST" action="contact.php#inquiry-form" novalidate>
              <!-- CSRF Security Token -->
              <input type="hidden" name="csrf_token" id="csrfTokenInput" value="<?php echo htmlspecialchars($csrf_token); ?>">
              
              <!-- Anti-Spam Honeypot (Hidden from human visitors) -->
              <div class="hp-field" aria-hidden="true">
                <label for="website_hp">Leave this empty</label>
                <input type="text" name="website_hp" id="website_hp" tabindex="-1" autocomplete="off">
              </div>

              <div class="row g-4">
                <!-- Field 1: Full Name (Required) -->
                <div class="col-md-6">
                  <label for="inputName" class="form-label-ai">
                    <span>Full Name <span class="req-mark">*</span></span>
                  </label>
                  <input type="text" 
                         class="form-control-ai <?php echo isset($formErrors['name']) ? 'is-invalid' : ''; ?>" 
                         id="inputName" 
                         name="name" 
                         value="<?php echo htmlspecialchars($formData['name']); ?>" 
                         placeholder="e.g. John Doe" 
                         required 
                         autocomplete="name"
                         aria-required="true">
                  <div class="invalid-feedback-ai" id="nameError">
                    <?php echo $formErrors['name'] ?? 'Please provide your full name.'; ?>
                  </div>
                </div>

                <!-- Field 2: Business Email (Required) -->
                <div class="col-md-6">
                  <label for="inputEmail" class="form-label-ai">
                    <span>Business Email <span class="req-mark">*</span></span>
                  </label>
                  <input type="email" 
                         class="form-control-ai <?php echo isset($formErrors['email']) ? 'is-invalid' : ''; ?>" 
                         id="inputEmail" 
                         name="email" 
                         value="<?php echo htmlspecialchars($formData['email']); ?>" 
                         placeholder="e.g. name@company.com" 
                         required 
                         autocomplete="email"
                         aria-required="true">
                  <div class="invalid-feedback-ai" id="emailError">
                    <?php echo $formErrors['email'] ?? 'Please enter a valid email address.'; ?>
                  </div>
                </div>

                <!-- Field 3: Phone Number (Optional) -->
                <div class="col-md-6">
                  <label for="inputPhone" class="form-label-ai">
                    <span>Phone Number</span>
                    <span class="opt-badge">Optional</span>
                  </label>
                  <input type="tel" 
                         class="form-control-ai <?php echo isset($formErrors['phone']) ? 'is-invalid' : ''; ?>" 
                         id="inputPhone" 
                         name="phone" 
                         value="<?php echo htmlspecialchars($formData['phone']); ?>" 
                         placeholder="e.g. +91 9876543210" 
                         autocomplete="tel">
                  <div class="invalid-feedback-ai" id="phoneError">
                    <?php echo $formErrors['phone'] ?? 'Please enter a valid phone number.'; ?>
                  </div>
                </div>

                <!-- Field 4: Company Name (Optional) -->
                <div class="col-md-6">
                  <label for="inputCompany" class="form-label-ai">
                    <span>Company Name</span>
                    <span class="opt-badge">Optional</span>
                  </label>
                  <input type="text" 
                         class="form-control-ai <?php echo isset($formErrors['company']) ? 'is-invalid' : ''; ?>" 
                         id="inputCompany" 
                         name="company" 
                         value="<?php echo htmlspecialchars($formData['company']); ?>" 
                         placeholder="e.g. Acme Corporation" 
                         autocomplete="organization">
                  <div class="invalid-feedback-ai" id="companyError">
                    <?php echo $formErrors['company'] ?? ''; ?>
                  </div>
                </div>

                <!-- Field 5: Service Required (Required Dropdown) -->
                <div class="col-md-6">
                  <label for="selectService" class="form-label-ai">
                    <span>Service Required <span class="req-mark">*</span></span>
                  </label>
                  <select class="form-select-ai <?php echo isset($formErrors['service']) ? 'is-invalid' : ''; ?>" 
                          id="selectService" 
                          name="service" 
                          required 
                          aria-required="true">
                    <option value="" disabled <?php echo empty($formData['service']) ? 'selected' : ''; ?>>Select a verified service...</option>
                    <option value="Website Development" <?php echo ($formData['service'] === 'Website Development') ? 'selected' : ''; ?>>Website Development</option>
                    <option value="Custom Software Development" <?php echo ($formData['service'] === 'Custom Software Development') ? 'selected' : ''; ?>>Custom Software Development</option>
                    <option value="Web Application Development" <?php echo ($formData['service'] === 'Web Application Development') ? 'selected' : ''; ?>>Web Application Development</option>
                    <option value="Mobile Application Development" <?php echo ($formData['service'] === 'Mobile Application Development') ? 'selected' : ''; ?>>Mobile Application Development</option>
                    <option value="ERP Development" <?php echo ($formData['service'] === 'ERP Development') ? 'selected' : ''; ?>>ERP Development</option>
                    <option value="AI Integration and Automation" <?php echo ($formData['service'] === 'AI Integration and Automation') ? 'selected' : ''; ?>>AI Integration and Automation</option>
                    <option value="Digital Marketing and SEO" <?php echo ($formData['service'] === 'Digital Marketing and SEO') ? 'selected' : ''; ?>>Digital Marketing and SEO</option>
                    <option value="UI/UX Design" <?php echo ($formData['service'] === 'UI/UX Design') ? 'selected' : ''; ?>>UI/UX Design</option>
                    <option value="Website Maintenance" <?php echo ($formData['service'] === 'Website Maintenance') ? 'selected' : ''; ?>>Website Maintenance</option>
                    <option value="Other" <?php echo ($formData['service'] === 'Other') ? 'selected' : ''; ?>>Other</option>
                  </select>
                  <div class="invalid-feedback-ai" id="serviceError">
                    <?php echo $formErrors['service'] ?? 'Please select a service.'; ?>
                  </div>
                </div>

                <!-- Field 6: Project Budget (Optional Free-Text) -->
                <div class="col-md-6">
                  <label for="inputBudget" class="form-label-ai">
                    <span>Project Budget</span>
                    <span class="opt-badge">Optional</span>
                  </label>
                  <input type="text" 
                         class="form-control-ai <?php echo isset($formErrors['budget']) ? 'is-invalid' : ''; ?>" 
                         id="inputBudget" 
                         name="budget" 
                         value="<?php echo htmlspecialchars($formData['budget']); ?>" 
                         placeholder="e.g. Open to discussion / Estimated budget">
                  <div class="invalid-feedback-ai" id="budgetError">
                    <?php echo $formErrors['budget'] ?? ''; ?>
                  </div>
                </div>

                <!-- Field 7: Expected Timeline (Optional Dropdown) -->
                <div class="col-12">
                  <label for="selectTimeline" class="form-label-ai">
                    <span>Expected Timeline</span>
                    <span class="opt-badge">Optional Preference</span>
                  </label>
                  <select class="form-select-ai <?php echo isset($formErrors['timeline']) ? 'is-invalid' : ''; ?>" 
                          id="selectTimeline" 
                          name="timeline">
                    <option value="" <?php echo empty($formData['timeline']) ? 'selected' : ''; ?>>Select timeline preference (optional)...</option>
                    <option value="As Soon as Practical" <?php echo ($formData['timeline'] === 'As Soon as Practical') ? 'selected' : ''; ?>>As Soon as Practical</option>
                    <option value="Within 1–3 Months" <?php echo ($formData['timeline'] === 'Within 1–3 Months') ? 'selected' : ''; ?>>Within 1–3 Months</option>
                    <option value="Within 3–6 Months" <?php echo ($formData['timeline'] === 'Within 3–6 Months') ? 'selected' : ''; ?>>Within 3–6 Months</option>
                    <option value="Flexible / Not Decided" <?php echo ($formData['timeline'] === 'Flexible / Not Decided') ? 'selected' : ''; ?>>Flexible / Not Decided</option>
                  </select>
                  <div class="invalid-feedback-ai" id="timelineError">
                    <?php echo $formErrors['timeline'] ?? ''; ?>
                  </div>
                </div>

                <!-- Field 8: Project Description (Required Textarea) -->
                <div class="col-12">
                  <label for="inputMessage" class="form-label-ai">
                    <span>Project Description <span class="req-mark">*</span></span>
                  </label>
                  <textarea class="form-control-ai <?php echo isset($formErrors['message']) ? 'is-invalid' : ''; ?>" 
                            id="inputMessage" 
                            name="message" 
                            rows="5" 
                            placeholder="Tell us about your project, required features, business goals, and any other important details." 
                            required 
                            aria-required="true"><?php echo htmlspecialchars($formData['message']); ?></textarea>
                  <div class="invalid-feedback-ai" id="messageError">
                    <?php echo $formErrors['message'] ?? 'Please provide details about your project.'; ?>
                  </div>
                </div>

                <!-- Field 9: Privacy Policy Acknowledgment (Required Checkbox) -->
                <div class="col-12">
                  <label class="form-check-ai" for="checkPrivacy">
                    <input type="checkbox" 
                           id="checkPrivacy" 
                           name="privacy" 
                           value="1" 
                           <?php echo !empty($formData['privacy']) ? 'checked' : ''; ?> 
                           required 
                           aria-required="true">
                    <span class="form-check-ai-text">
                      I agree that GeerSoft IT Solutions may securely process my contact details solely to evaluate this project inquiry and contact me regarding next steps. No spam, ever.
                    </span>
                  </label>
                  <div class="invalid-feedback-ai" id="privacyError" style="<?php echo isset($formErrors['privacy']) ? 'display:block;' : ''; ?>">
                    <?php echo $formErrors['privacy'] ?? 'You must agree to the privacy notice before submitting.'; ?>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="col-12 mt-4">
                  <button type="submit" class="btn-submit-inquiry" id="btnSubmitInquiry">
                    <span class="btn-spinner" id="btnSpinner" aria-hidden="true"></span>
                    <span class="btn-text-content" id="btnTextContent">
                      <span>Send Project Inquiry</span>
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                    </span>
                  </button>
                  <p class="text-center text-white-50 mt-3 mb-0" style="font-size:0.8rem;">
                    <i class="bi bi-shield-lock-fill text-success"></i>
                    SSL Encrypted &bull; Strictly Confidential &bull; Response within 1 business day
                  </p>
                </div>
              </div>
            </form>

          </div>
        </div>

        <!-- Right Column: Reassurance & Process Sidebar -->
        <div class="col-lg-5">
          <div class="contact-sidebar-wrap">
            
            <!-- Sidebar Box 1: What Happens Next? (Roadmap) -->
            <div class="sidebar-box-ai">
              <h4 class="sidebar-title">
                <i class="bi bi-diagram-3-fill"></i>
                <span>What Happens Next?</span>
              </h4>
              <ul class="process-roadmap-list">
                <li class="roadmap-step-item">
                  <div class="step-num-badge">1</div>
                  <h5 class="step-title">Requirement Review</h5>
                  <p class="step-desc">
                    Our technical and design leads carefully evaluate your submission, goals, and target architecture within 24 hours.
                  </p>
                </li>
                <li class="roadmap-step-item">
                  <div class="step-num-badge">2</div>
                  <h5 class="step-title">Technical Consultation</h5>
                  <p class="step-desc">
                    We schedule an initial discovery call or chat to align on scope, tech stack, milestones, and deliverable expectations.
                  </p>
                </li>
                <li class="roadmap-step-item">
                  <div class="step-num-badge">3</div>
                  <h5 class="step-title">Transparent Proposal</h5>
                  <p class="step-desc">
                    You receive an itemized proposal with clear milestone phases, technology recommendations, and transparent pricing.
                  </p>
                </li>
              </ul>
            </div>

            <!-- Sidebar Box 2: Client Privacy & Confidentiality Guarantee -->
            <div class="sidebar-box-ai">
              <h4 class="sidebar-title">
                <i class="bi bi-shield-check"></i>
                <span>Our Privacy Commitment</span>
              </h4>
              <div class="privacy-feature-row">
                <i class="bi bi-check-circle-fill privacy-feature-icon"></i>
                <div class="privacy-feature-text">
                  <strong>Non-Disclosure Ready:</strong> We respect intellectual property and are glad to execute a mutual NDA prior to detailed technical discussions.
                </div>
              </div>
              <div class="privacy-feature-row">
                <i class="bi bi-check-circle-fill privacy-feature-icon"></i>
                <div class="privacy-feature-text">
                  <strong>Zero-Spam Policy:</strong> Your contact information is never shared, rented, or repurposed for third-party commercial marketing.
                </div>
              </div>
              <div class="privacy-feature-row">
                <i class="bi bi-check-circle-fill privacy-feature-icon"></i>
                <div class="privacy-feature-text">
                  <strong>Direct Access:</strong> Speak directly with senior engineers and solutions consultants rather than aggressive sales intermediaries.
                </div>
              </div>
            </div>

            <!-- Sidebar Box 3: Direct Hotline Callout -->
            <div class="sidebar-hotline-card">
              <div class="hotline-info">
                <h6>Prefer an immediate chat?</h6>
                <p>Call or WhatsApp us right away.</p>
              </div>
              <a href="tel:+917822020118" class="btn-hotline-call">
                <i class="bi bi-telephone-fill"></i>
                <span>+91 7822020118</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 4: Direct Contact Actions (Need Another Way to Reach Us?)
       ========================================================================= -->
  <section class="direct-actions-section" id="direct-actions">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>QUICK CONNECTIONS</span>
        </div>
        <h2 class="section-title">
          Need Another Way to <span class="gradient-text">Reach Us?</span>
        </h2>
        <p class="section-description">
          Choose a direct action below for immediate communication with our team:
        </p>
      </div>

      <div class="row g-4">
        <!-- Action 1: Send an Email -->
        <div class="col-lg-3 col-sm-6">
          <div class="direct-action-card">
            <div class="direct-action-icon">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <h4 class="direct-action-title">Send an Email</h4>
            <p class="direct-action-desc">
              Write to our primary inbox for general queries or RFPs.
            </p>
            <a href="mailto:info@geersoft.in" class="direct-action-link">
              <span>info@geersoft.in</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Action 2: Call GeerSoft -->
        <div class="col-lg-3 col-sm-6">
          <div class="direct-action-card">
            <div class="direct-action-icon">
              <i class="bi bi-telephone-outbound-fill"></i>
            </div>
            <h4 class="direct-action-title">Call GeerSoft</h4>
            <p class="direct-action-desc">
              Speak directly with our team regarding service capabilities.
            </p>
            <a href="tel:+917822020118" class="direct-action-link">
              <span>+91 7822020118</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Action 3: Open WhatsApp -->
        <div class="col-lg-3 col-sm-6">
          <div class="direct-action-card">
            <div class="direct-action-icon" style="color:#25d366;">
              <i class="bi bi-whatsapp"></i>
            </div>
            <h4 class="direct-action-title">Open WhatsApp</h4>
            <p class="direct-action-desc">
              Convenient instant messaging for questions and scheduling.
            </p>
            <a href="https://wa.me/917822020118?text=Hello%20GeerSoft%20IT%20Solutions%2C%20I%20would%20like%20to%20discuss%20a%20project%20with%20your%20team." 
               target="_blank" rel="noopener noreferrer" class="direct-action-link">
              <span>Chat on WhatsApp</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

        <!-- Action 4: View Services -->
        <div class="col-lg-3 col-sm-6">
          <div class="direct-action-card">
            <div class="direct-action-icon">
              <i class="bi bi-grid-3x3-gap-fill"></i>
            </div>
            <h4 class="direct-action-title">View Services</h4>
            <p class="direct-action-desc">
              Explore our complete range of software and digital solutions.
            </p>
            <a href="<?php echo $siteUrl; ?>/services_all" class="direct-action-link">
              <span>Explore All Services</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 5: Conceptual AI Integration Section
       ========================================================================= -->
  <section class="ai-connect-section" id="ai-solutions-connect">
    <div class="container-xl">
      <div class="ai-connect-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-badge mb-3">
              <span class="badge-dot"></span>
              <span>INTELLIGENT BUSINESS SOLUTIONS</span>
            </div>
            <h2 class="section-title mb-3" style="font-size:2rem;">
              Explore Smarter Ways <span class="gradient-text">to Connect</span>
            </h2>
            <p class="text-white-50 mb-4" style="max-width:680px; font-size:0.95rem; line-height:1.7;">
              Discover how GeerSoft integrates intelligent workflows, custom automation models, and conversational AI into enterprise applications to elevate client engagement and operational speed.
            </p>

            <!-- Conceptual AI Capability Badges -->
            <div class="d-flex flex-wrap align-items-center">
              <span class="ai-pillar-pill"><i class="bi bi-cpu-fill"></i> Autonomous Workflows</span>
              <span class="ai-pillar-pill"><i class="bi bi-graph-up-arrow"></i> Predictive Analytics</span>
              <span class="ai-pillar-pill"><i class="bi bi-chat-square-text-fill"></i> Customer Support AI</span>
              <span class="ai-pillar-pill"><i class="bi bi-file-earmark-code-fill"></i> Custom LLM Integration</span>
            </div>
          </div>

          <div class="col-lg-4 text-lg-end">
            <a href="#inquiry-form" onclick="preselectService('AI Integration and Automation')" class="btn-ai-primary justify-content-center">
              <span>Discuss AI Integration</span>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 6: Frequently Asked Questions (FAQ Accordion)
       ========================================================================= -->
  <section class="faq-section" id="faq">
    <div class="container-xl">
      <div class="text-center mb-5">
        <div class="section-badge mb-3">
          <span class="badge-dot"></span>
          <span>CLEAR ANSWERS</span>
        </div>
        <h2 class="section-title">
          Frequently Asked <span class="gradient-text">Questions</span>
        </h2>
        <p class="section-description">
          Find fast answers to common questions about starting a project with GeerSoft IT Solutions:
        </p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="accordion accordion-contact" id="contactFaqAccordion">
            
            <!-- Question 1 -->
            <div class="accordion-item accordion-contact-item">
              <h3 class="accordion-header" id="headingFaqOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqOne" aria-expanded="true" aria-controls="collapseFaqOne">
                  <i class="bi bi-patch-question-fill text-info me-2"></i>
                  <span>How can I contact GeerSoft IT Solutions?</span>
                </button>
              </h3>
              <div id="collapseFaqOne" class="accordion-collapse collapse show" aria-labelledby="headingFaqOne" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  You can contact GeerSoft through the website inquiry form, the published business email address, or the verified phone number.
                </div>
              </div>
            </div>

            <!-- Question 2 -->
            <div class="accordion-item accordion-contact-item">
              <h3 class="accordion-header" id="headingFaqTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqTwo" aria-expanded="false" aria-controls="collapseFaqTwo">
                  <i class="bi bi-patch-question-fill text-info me-2"></i>
                  <span>What information should I include in my project inquiry?</span>
                </button>
              </h3>
              <div id="collapseFaqTwo" class="accordion-collapse collapse" aria-labelledby="headingFaqTwo" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  Describe your business goals, the service you need, important features, and any relevant budget or timeline preferences.
                </div>
              </div>
            </div>

            <!-- Question 3 -->
            <div class="accordion-item accordion-contact-item">
              <h3 class="accordion-header" id="headingFaqThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqThree" aria-expanded="false" aria-controls="collapseFaqThree">
                  <i class="bi bi-patch-question-fill text-info me-2"></i>
                  <span>Can I request a quotation?</span>
                </button>
              </h3>
              <div id="collapseFaqThree" class="accordion-collapse collapse" aria-labelledby="headingFaqThree" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  Yes. Submit your project requirements through the inquiry form so the team can discuss the scope and quotation process.
                </div>
              </div>
            </div>

            <!-- Question 4 -->
            <div class="accordion-item accordion-contact-item">
              <h3 class="accordion-header" id="headingFaqFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqFour" aria-expanded="false" aria-controls="collapseFaqFour">
                  <i class="bi bi-patch-question-fill text-info me-2"></i>
                  <span>Can I discuss a custom software project?</span>
                </button>
              </h3>
              <div id="collapseFaqFour" class="accordion-collapse collapse" aria-labelledby="headingFaqFour" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  Yes. Share your requirements, intended users, important workflows, and any integrations you need.
                </div>
              </div>
            </div>

            <!-- Question 5 -->
            <div class="accordion-item accordion-contact-item">
              <h3 class="accordion-header" id="headingFaqFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqFive" aria-expanded="false" aria-controls="collapseFaqFive">
                  <i class="bi bi-patch-question-fill text-info me-2"></i>
                  <span>Can I contact GeerSoft about AI integration?</span>
                </button>
              </h3>
              <div id="collapseFaqFive" class="accordion-collapse collapse" aria-labelledby="headingFaqFive" data-bs-parent="#contactFaqAccordion">
                <div class="accordion-body">
                  You can describe your AI or automation use case through the inquiry form to discuss potential solutions.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- =========================================================================
       Section 7: High-Impact Closing CTA
       ========================================================================= -->
  <section class="cta-banner-section" id="contact-cta">
    <div class="container-xl">
      <div class="cta-banner-box">
        <div class="row align-items-center g-4">
          <div class="col-lg-8">
            <div class="section-badge mb-3">
              <span class="badge-dot"></span>
              <span>START A CONVERSATION</span>
            </div>
            <h2 class="cta-title">
              Your Next Digital Project Starts with <br>
              <span class="gradient-text">a Conversation</span>
            </h2>
            <p class="cta-desc">
              Let's discuss your ideas and explore the technology solutions that fit your business.
            </p>
          </div>
          <div class="col-lg-4 text-lg-end">
            <div class="d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-lg-end">
              <a href="#inquiry-form" class="btn-ai-primary justify-content-center">
                <span>Send an Inquiry</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
              </a>
              <a href="<?php echo $siteUrl; ?>/services_all" class="btn-ai-secondary justify-content-center">
                <span>Explore Our Services</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<?php
$extraFooter = <<<'EOS'
  <!-- Contact Form Client-Side AJAX, Validation, & Interaction Script -->
  <script>
    // Pre-select service helper
    function preselectService(serviceName) {
      const select = document.getElementById('selectService');
      if (select) {
        for (let i = 0; i < select.options.length; i++) {
          if (select.options[i].value === serviceName) {
            select.selectedIndex = i;
            break;
          }
        }
      }
    }

    // Check URL parameters on load for ?service=...
    document.addEventListener('DOMContentLoaded', function () {
      const urlParams = new URLSearchParams(window.location.search);
      const serviceParam = urlParams.get('service');
      if (serviceParam) {
        preselectService(serviceParam);
      }

      const form = document.getElementById('projectInquiryForm');
      if (!form) return;

      const submitBtn = document.getElementById('btnSubmitInquiry');
      const alertSuccess = document.getElementById('formAlertSuccess');
      const alertError = document.getElementById('formAlertError');
      const alertErrorHeading = document.getElementById('alertErrorHeading');
      const alertErrorBody = document.getElementById('alertErrorBody');
      const alertSuccessHeading = document.getElementById('alertSuccessHeading');
      const alertSuccessBody = document.getElementById('alertSuccessBody');
      const alertRefBadge = document.getElementById('alertRefBadge');

      // Clear field errors as user edits
      const inputs = form.querySelectorAll('input, select, textarea');
      inputs.forEach(input => {
        input.addEventListener('input', function () {
          this.classList.remove('is-invalid');
          const errorContainer = document.getElementById(this.name + 'Error');
          if (errorContainer) {
            errorContainer.style.display = 'none';
          }
        });
      });

      // Handle AJAX submission
      form.addEventListener('submit', async function (e) {
        e.preventDefault();

        // Basic client-side pre-validation
        let hasClientError = false;
        const nameVal = form.name.value.trim();
        const emailVal = form.email.value.trim();
        const serviceVal = form.service.value;
        const messageVal = form.message.value.trim();
        const privacyVal = form.privacy.checked;

        if (nameVal.length < 2) {
          form.name.classList.add('is-invalid');
          hasClientError = true;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailVal)) {
          form.email.classList.add('is-invalid');
          hasClientError = true;
        }

        if (!serviceVal) {
          form.service.classList.add('is-invalid');
          hasClientError = true;
        }

        if (messageVal.length < 10) {
          form.message.classList.add('is-invalid');
          hasClientError = true;
        }

        if (!privacyVal) {
          const privErr = document.getElementById('privacyError');
          if (privErr) privErr.style.display = 'block';
          hasClientError = true;
        }

        if (hasClientError) {
          if (alertError) {
            alertErrorHeading.textContent = "We Couldn't Submit Your Inquiry";
            alertErrorBody.textContent = "Please fill in all required fields accurately before submitting.";
            alertError.style.display = 'block';
          }
          if (alertSuccess) alertSuccess.style.display = 'none';
          return;
        }

        // Set Loading State
        submitBtn.disabled = true;
        submitBtn.classList.add('is-loading');

        try {
          const formData = new FormData(form);
          formData.append('is_ajax', '1');

          const response = await fetch('contact.php', {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Accept': 'application/json'
            },
            body: formData
          });

          const result = await response.json();

          if (result.success) {
            // Show Success Alert
            if (alertSuccess) {
              alertSuccessHeading.textContent = result.heading || 'Your Inquiry Has Been Received';
              alertSuccessBody.textContent = result.message || 'Thank you for contacting GeerSoft IT Solutions. Your inquiry has been submitted successfully.';
              
              if (result.reference) {
                let refElem = document.getElementById('alertRefBadge');
                if (!refElem) {
                  refElem = document.createElement('div');
                  refElem.className = 'alert-ref-badge';
                  refElem.id = 'alertRefBadge';
                  alertSuccess.appendChild(refElem);
                }
                refElem.innerHTML = `Reference: <strong>${result.reference}</strong>`;
              }
              alertSuccess.style.display = 'block';
            }
            if (alertError) alertError.style.display = 'none';

            // Reset form fields
            form.reset();

            // Smooth scroll to top of form card so user sees confirmation
            const formCard = document.getElementById('inquiryFormCard');
            if (formCard) {
              const topPos = formCard.getBoundingClientRect().top + window.pageYOffset - 90;
              window.scrollTo({ top: topPos, behavior: 'smooth' });
            }
          } else {
            // Show Validation / Processing Errors
            if (alertError) {
              alertErrorHeading.textContent = result.heading || "We Couldn't Submit Your Inquiry";
              alertErrorBody.textContent = result.message || "Please correct the highlighted issues and try again, or contact us directly using the details provided on this page.";
              alertError.style.display = 'block';
            }
            if (alertSuccess) alertSuccess.style.display = 'none';

            if (result.errors) {
              for (const [field, errorMsg] of Object.entries(result.errors)) {
                const inputElem = form.querySelector(`[name="${field}"]`);
                if (inputElem) {
                  inputElem.classList.add('is-invalid');
                }
                const errBox = document.getElementById(`${field}Error`);
                if (errBox) {
                  errBox.textContent = errorMsg;
                  errBox.style.display = 'block';
                }
              }
            }
          }
        } catch (err) {
          // Network or unexpected error fallback
          if (alertError) {
            alertErrorHeading.textContent = "We Couldn't Submit Your Inquiry";
            alertErrorBody.textContent = "A network error occurred. Please try again or contact us directly via email or phone.";
            alertError.style.display = 'block';
          }
          if (alertSuccess) alertSuccess.style.display = 'none';
        } finally {
          submitBtn.disabled = false;
          submitBtn.classList.remove('is-loading');
        }
      });
    });
  </script>
EOS;
include "include/footer.php";
?>
