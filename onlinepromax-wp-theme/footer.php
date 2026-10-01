<!-- ══ FOOTER ═════════════════════════════════════════════════ -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">
          <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/online-pro-max-logo.png' ); ?>" alt="Online Pro Max" /></a>
        </div>
        <p class="footer-brand-desc">Online Pro Max is an international marketing and software solutions company — delivering digital marketing, custom software, content creation, and graphic design that drives real growth for brands worldwide.</p>
        <div class="footer-socials">
          <a href="https://www.facebook.com/onlinepromax" class="footer-social" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/onlinepromax" class="footer-social" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://x.com/onlinepromax" class="footer-social" target="_blank" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="https://www.linkedin.com/company/onlinepromax/" class="footer-social" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="https://www.youtube.com/@onlinepromax" class="footer-social" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>
      <div>
        <h4 class="footer-col-title">Explore</h4>
        <ul class="footer-links">
          <li><a href="/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Home</a></li>
          <li><a href="/services/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Services</a></li>
          <li><a href="/portfolio/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Portfolio</a></li>
          <li><a href="/about/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> About Us</a></li>
          <li><a href="/blog/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Blog</a></li>
          <li><a href="/faq/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> FAQ</a></li>
        </ul>
      </div>
      <div>
        <h4 class="footer-col-title">Our Services</h4>
        <ul class="footer-links">
          <li><a href="/services/#digital-marketing"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Digital Marketing</a></li>
          <li><a href="/services/#web-dev"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Web &amp; App Development</a></li>
          <li><a href="/services/#content"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Content Creation</a></li>
          <li><a href="/services/#design"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Graphic Design</a></li>
          <li><a href="/request-quote/"><i class="fa-solid fa-chevron-right" style="font-size:.55rem;color:var(--blue-light);"></i> Get a Free Quote</a></li>
        </ul>
      </div>
      <div>
        <h4 class="footer-col-title">Get in Touch</h4>
        <div class="footer-address">
          <p style="margin-bottom:.7rem;"><i class="fa-solid fa-location-dot" style="color:var(--blue-light);margin-right:.5rem;"></i>Business Bay, Churchill Tower,<br/>Office 806,<br/>Dubai, UAE</p>
          <p style="margin-bottom:.5rem;"><i class="fa-solid fa-phone" style="color:var(--blue-light);margin-right:.5rem;"></i><a href="tel:+971552594585">+971 55 259 4585</a></p>
          <p><i class="fa-solid fa-envelope" style="color:var(--blue-light);margin-right:.5rem;"></i><a href="mailto:contact@onlinepromax.com">contact@onlinepromax.com</a></p>
        </div>
        <h4 class="footer-col-title" style="margin-top:1.5rem;">Newsletter</h4>
        <p style="font-size:.79rem;color:rgba(210,226,255,.55);margin-bottom:.5rem;">Stay updated with Online Pro Max news.</p>
        <form id="newsletter-form" class="newsletter-form">
          <input type="email" class="newsletter-input" placeholder="Your email" required />
          <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Online Pro Max LLC. All Rights Reserved.</span>
      <div class="footer-bottom-links">
        <a href="/privacy-policy/">Privacy Policy</a>
        <a href="/faq/">FAQ</a>
        <a href="/contact/">Contact</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>