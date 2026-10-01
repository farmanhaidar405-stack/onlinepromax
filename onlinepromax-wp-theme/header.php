<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php if ( is_front_page() ) : ?>
<meta name="description" content="Online Pro Max — international marketing and software solutions company. Digital marketing, custom software development, content creation and graphic design for brands worldwide." />
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="cursor"></div>
<div class="cursor-follower"></div>
<div id="scroll-progress"></div>

<!-- WhatsApp Floating Button -->
<a id="whatsapp-btn" href="https://wa.me/971552594585?text=Hello%20Online%20Pro%20Max!" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
  <span class="wa-tooltip">Chat with us</span>
</a>

<!-- Back to Top -->
<button id="back-top" aria-label="Back to top"><i class="fa-solid fa-arrow-up"></i></button>

<!-- ══ MOBILE NAV ══════════════════════════════════════════════ -->
<nav id="mobile-nav" class="mobile-nav">
  <div class="mobile-nav-header">
    <a href="/" class="mobile-nav-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/online-pro-max-logo.png' ); ?>" alt="Online Pro Max" />
    </a>
    <button class="mobile-nav-close" id="mobile-nav-close" aria-label="Close menu" onclick="window.closeMobileNav()">
      <i class="fa-solid fa-xmark"></i>
    </button>
  </div>
  <div class="mobile-nav-body">
    <div class="mobile-nav-item">
      <a href="/" class="mobile-nav-link no-dropdown">Home</a>
    </div>
    <div class="mobile-nav-item" data-dropdown>
      <div class="mobile-nav-link">Services <i class="fa-solid fa-chevron-down mobile-chevron"></i></div>
      <div class="mobile-dropdown">
        <a href="/services/"><i class="fa-solid fa-grid-2 fa-fw"></i> All Services</a>
        <a href="/services/#digital-marketing"><i class="fa-solid fa-chart-line fa-fw"></i> Digital Marketing</a>
        <a href="/services/#web-dev"><i class="fa-solid fa-laptop-code fa-fw"></i> Web Development</a>
        <a href="/services/#content"><i class="fa-solid fa-clapperboard fa-fw"></i> Content Creation</a>
        <a href="/services/#design"><i class="fa-solid fa-pen-ruler fa-fw"></i> Graphic Design</a>
        <a href="/media-pr/"><i class="fa-solid fa-newspaper fa-fw"></i> Media &amp; PR</a>
      </div>
    </div>
    <div class="mobile-nav-item">
      <a href="/portfolio/" class="mobile-nav-link no-dropdown">Portfolio</a>
    </div>
    <div class="mobile-nav-item" data-dropdown>
      <div class="mobile-nav-link">Company <i class="fa-solid fa-chevron-down mobile-chevron"></i></div>
      <div class="mobile-dropdown">
        <a href="/about/"><i class="fa-solid fa-building fa-fw"></i> About Us</a>
        <a href="/careers/"><i class="fa-solid fa-briefcase fa-fw"></i> Join Our Team</a>
        <a href="/partners/"><i class="fa-solid fa-handshake fa-fw"></i> Partners</a>
        <a href="/join-network/"><i class="fa-solid fa-network-wired fa-fw"></i> Join Our Network</a>
        <a href="/faq/"><i class="fa-solid fa-circle-question fa-fw"></i> FAQ</a>
      </div>
    </div>
    <div class="mobile-nav-item">
      <a href="/blog/" class="mobile-nav-link no-dropdown">Blog</a>
    </div>
  </div>
  <div class="mobile-nav-footer">
    <a href="/contact/" class="btn btn-blue"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
  </div>
</nav>

<!-- ══ TOP BAR ════════════════════════════════════════════════ -->
<div class="top-bar">
  <div class="container">
    <div class="top-bar-left">
      <a href="mailto:contact@onlinepromax.com"><i class="fa-solid fa-envelope"></i> contact@onlinepromax.com</a>
      <a href="tel:+971552594585"><i class="fa-solid fa-phone"></i> +971 55 259 4585</a>
      <span><i class="fa-solid fa-location-dot"></i> Business Bay, Churchill Tower, 806, Dubai, UAE</span>
    </div>
    <div class="top-bar-right">
      <a href="https://www.facebook.com/onlinepromax" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/onlinepromax" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://x.com/onlinepromax" target="_blank" aria-label="X/Twitter"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="https://www.linkedin.com/company/onlinepromax/" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="https://www.youtube.com/@onlinepromax" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
    </div>
  </div>
</div>

<!-- ══ NAVBAR ═════════════════════════════════════════════════ -->
<header id="navbar">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/online-pro-max-logo.png' ); ?>" alt="Online Pro Max" />
    </a>
    <nav class="nav-menu">
      <a href="/" class="nav-link active">Home</a>
      <div class="nav-item">
        <span class="nav-link">Services <i class="fa-solid fa-chevron-down chevron"></i></span>
        <div class="dropdown">
          <a href="/services/"><i class="fa-solid fa-grid-2 fa-fw" style="color:var(--blue);opacity:.7;"></i> All Services</a>
          <a href="/services/#digital-marketing"><i class="fa-solid fa-chart-line fa-fw" style="color:var(--blue);opacity:.7;"></i> Digital Marketing</a>
          <a href="/services/#web-dev"><i class="fa-solid fa-laptop-code fa-fw" style="color:var(--blue);opacity:.7;"></i> Web Development</a>
          <a href="/services/#content"><i class="fa-solid fa-clapperboard fa-fw" style="color:var(--blue);opacity:.7;"></i> Content Creation</a>
          <a href="/services/#design"><i class="fa-solid fa-pen-ruler fa-fw" style="color:var(--blue);opacity:.7;"></i> Graphic Design</a>
          <a href="/media-pr/" style="color:var(--blue);font-weight:600;"><i class="fa-solid fa-newspaper fa-fw" style="color:var(--blue);opacity:.7;"></i> Media &amp; PR</a>
        </div>
      </div>
      <a href="/portfolio/" class="nav-link">Portfolio</a>
      <div class="nav-item">
        <span class="nav-link">Company <i class="fa-solid fa-chevron-down chevron"></i></span>
        <div class="dropdown">
          <a href="/about/"><i class="fa-solid fa-building fa-fw" style="color:var(--blue);opacity:.7;"></i> About Us</a>
          <a href="/careers/"><i class="fa-solid fa-briefcase fa-fw" style="color:var(--blue);opacity:.7;"></i> Join Our Team</a>
          <a href="/partners/"><i class="fa-solid fa-handshake fa-fw" style="color:var(--blue);opacity:.7;"></i> Partners</a>
          <a href="/join-network/"><i class="fa-solid fa-network-wired fa-fw" style="color:var(--blue);opacity:.7;"></i> Join Our Network</a>
          <a href="/faq/"><i class="fa-solid fa-circle-question fa-fw" style="color:var(--blue);opacity:.7;"></i> FAQ</a>
        </div>
      </div>
      <a href="/blog/" class="nav-link">Blog</a>
    </nav>
    <div class="nav-cta">
      <a href="/contact/" class="btn btn-blue"><i class="fa-solid fa-paper-plane"></i> Get in Touch</a>
      <button id="hamburger" class="hamburger" aria-label="Toggle menu" onclick="window.openMobileNav()">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>