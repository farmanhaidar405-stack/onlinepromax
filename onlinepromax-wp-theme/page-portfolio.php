<?php
/**
 * Template Name: Portfolio
 * Description: Personal intro, own projects, and client portfolio (media production + websites).
 */
opm_enqueue_page_assets( 'portfolio' );
get_header();
?>

<!-- ══ HERO — personal intro ══════════════════════════════════ -->
<section class="pf-hero pf-hero--intro">
  <div class="pf-hero-mesh"></div>
  <div class="pf-hero-grid"></div>
  <div class="pf-hero-slant"></div>

  <div class="pf-intro">
    <!-- Left: intro -->
    <div class="pf-intro-text">
      <div class="pf-hero-eyebrow">
        <div class="pf-hero-eyebrow-line"></div>
        <span>Portfolio · Dubai, UAE</span>
      </div>
      <h1 class="pf-hero-title pf-intro-title">
        <span class="line"><span class="word">Hi, I'm</span></span>
        <span class="line"><span class="word w2 accent">Farman Haidar</span></span>
      </h1>
      <p class="pf-intro-role">Digital Marketing Strategist &amp; ERP Consultant</p>
      <p class="pf-hero-desc">
        For the past <strong>6 years</strong> I've helped brands across the UAE grow — from property developers and restaurants to retailers, clinics, schools and government entities. Below is the work I'm proud of.
      </p>
      <div class="pf-skills">
        <span class="pf-skill"><i class="fa-solid fa-chart-line"></i> Digital Marketing</span>
        <span class="pf-skill"><i class="fa-solid fa-diagram-project"></i> ERP Consultation</span>
        <span class="pf-skill"><i class="fa-solid fa-clapperboard"></i> Content Creation</span>
        <span class="pf-skill"><i class="fa-solid fa-pen-ruler"></i> Graphic Design</span>
      </div>
      <div class="pf-hero-btns">
        <a href="#pf-grid" class="btn btn-blue"><i class="fa-solid fa-eye"></i> Browse Projects</a>
        <a href="#pf-contact" class="btn-ghost-light"><i class="fa-solid fa-paper-plane"></i> Work With Me</a>
      </div>
    </div>

    <!-- Right: portrait -->
    <div class="pf-portrait">
      <div class="pf-portrait-ring"></div>
      <div class="pf-portrait-frame">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/profile.jpg" alt="Farman Haidar" class="pf-portrait-img" />
      </div>
      <div class="pf-portrait-badge pf-portrait-badge--xp">
        <span class="pf-portrait-badge-num"><span data-counter="6">0</span>+</span>
        <span class="pf-portrait-badge-label">Years of<br/>Experience</span>
      </div>
      <div class="pf-portrait-badge pf-portrait-badge--brands">
        <i class="fa-solid fa-briefcase"></i>
        <span><strong><span data-counter="60">0</span>+</strong> brands served</span>
      </div>
    </div>
  </div>

  <!-- Personal projects -->
  <div class="pf-own">
    <div class="pf-own-head">
      <span class="pf-own-tag"><i class="fa-solid fa-star"></i> My Own Projects</span>
      <span class="pf-own-sub">Brands I founded and run</span>
    </div>
    <div class="pf-own-grid">
      <a href="https://nexttrends.online/" target="_blank" rel="noopener" class="pf-own-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/portfolio/nexttrends.jpg" alt="Next Trends online store" class="pf-own-img" loading="lazy" />
        <span class="pf-own-name">Next Trends</span>
        <span class="pf-own-url">nexttrends.online <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
      <a href="https://nexttrendstrading.com/" target="_blank" rel="noopener" class="pf-own-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/portfolio/nexttrendstrading.jpg" alt="Next Trends Trading markets dashboard" class="pf-own-img" loading="lazy" />
        <span class="pf-own-name">Next Trends Trading</span>
        <span class="pf-own-url">nexttrendstrading.com <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
      <a href="https://itsinvestora.com/" target="_blank" rel="noopener" class="pf-own-card">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/portfolio/itsinvestora.jpg" alt="Investora UAE property advisory" class="pf-own-img" loading="lazy" />
        <span class="pf-own-name">Investora</span>
        <span class="pf-own-url">itsinvestora.com <i class="fa-solid fa-arrow-up-right-from-square"></i></span>
      </a>
    </div>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <div class="container">
    <a href="/">Home</a>
    <i class="fa-solid fa-chevron-right"></i>
    <span>Portfolio</span>
  </div>
</div>

<!-- ══ FILTER BAR ══════════════════════════════════════════════ -->
<div class="pf-filters-section">
  <div class="container">
    <div class="pf-filters-inner">
      <div class="pf-filters">
        <button class="pf-filter-btn active" data-filter="all">
          <i class="fa-solid fa-border-all"></i> All Work
        </button>
        <button class="pf-filter-btn" data-filter="media">
          <i class="fa-solid fa-clapperboard"></i> Media Production
        </button>
        <button class="pf-filter-btn" data-filter="web">
          <i class="fa-solid fa-laptop-code"></i> Website Development
        </button>
      </div>
      <div class="pf-result-count" id="pf-count">69 projects</div>
    </div>
  </div>
</div>

<!-- ══ PORTFOLIO ══════════════════════════════════════════════ -->
<section class="pf-grid-section" id="pf-grid">
  <div class="container">

    <!-- Media Production -->
    <div class="pf-group" id="media-production">
      <div class="pf-group-head">
        <div>
          <div class="pf-group-eyebrow">Photo · Video · Reels</div>
          <h2 class="pf-group-title">Media Production</h2>
        </div>
        <p class="pf-group-desc">Property shoots, brand films, food &amp; product photography and social video for 51 brands. Click any brand to see the work.</p>
      </div>
      <div class="pf-logo-grid">
        <a href="https://drive.google.com/drive/folders/1awddCWRP6oC_Qm0dV0ia3DyYIFqLZczg" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-08.jpg" alt="Elyan Properties logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Elyan Properties</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1Xzfpk3xMW6X0Q2uxTm-nU_VcfXmR18qE" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Al_samha_logo_HD-01.avif" alt="Adhwa Alsamha logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Adhwa Alsamha</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1s4zg6k1Nl2EczzVRVBQNjqyQUjNNeLoI" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-03.jpg" alt="Amer Al Marwa logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Amer Al Marwa</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1fMHAeIWcfX7POPRS8SuRIKAqIi4U9Dy4" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-18.jpg" alt="Geo Wash logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Geo Wash</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqWQK1rdnrQV5W3w6ZoPkFA5" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Untitled-design-11.png" alt="Gravity Homes logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Gravity Homes</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqVsWqpWr4hUigcNK26sqizd" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/b.png" alt="Bradley Real Estate logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Bradley Real Estate</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqVs1SAAjtMkWwsB7BFUNpiR" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Kayplus.png" alt="Kayplus Real Estate logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Kayplus Real Estate</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqVqlklxOj8G_4-QlMNm0yPF" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Untitled-1.png" alt="MK Properties logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">MK Properties</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqUf-0MyeuRF3Sn1aY0D-vyf" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Horizon-Logo-2-1.png" alt="Horizon Hills logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Horizon Hills</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqWCQcsNa5iG0-dO9J99_mCv" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Dar-Alfanar-1.png" alt="Dar Alfanar logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Dar Alfanar</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <div class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Untitled-design-12.png" alt="Massaed Elevators logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Massaed Elevators</span>
          <span class="pf-logo-link pf-logo-link--muted"><i class="fa-solid fa-clapperboard"></i> Media Production</span>
        </div>
        <a href="https://www.youtube.com/playlist?list=PLVIZEC6x_BqVqlklxOj8G_4-QlMNm0yPF" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/07/Untitled-design-13.png" alt="Soft Water UAE logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Soft Water UAE</span>
          <span class="pf-logo-link"><i class="fa-brands fa-youtube"></i> Watch Videos</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1TuuDZ1IEfMVTzjOvBd9Wsb8ekZNfJ4j_" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/486067221_645047624834513_5265125477985631112_n.jpg" alt="Passion Box logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Passion Box</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1hEKc3hpvNl5xbnMB79o1BfiZuQo1CpNe" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-17.jpg" alt="Sama Al Tamaya logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Sama Al Tamaya</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1YJqrw6_kUe8BFMVzt_XrmGswqXt2X9ay" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Jaxtox-Real-Estate-logo-1.svg" alt="Jaxtox Group logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Jaxtox Group</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1mx4wT_Zr4bbzhRE2UG92vnqk7g6YVhM4" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-07.jpg" alt="Gillan Real Estate logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Gillan Real Estate</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1S-nEUazFmcop9vrTNIDldExDRWniPXVX" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-13.jpg" alt="Stone House Real Estate logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Stone House Real Estate</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1bPEs7DclyhtqQTIahSI59iywbIFsadVV" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-16.jpg" alt="Maj Properties logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Maj Properties</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1ahfNVM4ZwDp0OqH0_bRd931Cnv33sAcn" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-15.jpg" alt="Deva Luxury Properties logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Deva Luxury Properties</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1R5VTqBgIq71uqOTreYm3m6KdopKV0rz0" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-14.jpg" alt="New Era Homes logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">New Era Homes</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1Z190sCtmxUx5CNWu-q1DnD0xDuHys96L" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-09.jpg" alt="Tia Real Estate logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Tia Real Estate</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1IAHwpjI_Y-JgobxaPusC8XCnoTf2cbsx" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-10.jpg" alt="Zero Commission logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Zero Commission</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1rXeWAQQRp2skNkscCXUmnJBd0-iBq7dw" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-06.jpg" alt="Azizi Developments logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Azizi Developments</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1IAHwpjI_Y-JgobxaPusC8XCnoTf2cbsx" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-05.jpg" alt="Reportage Properties logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Reportage Properties</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1E_630-0C748UwsL9R7ja5uxAitG0R8HB" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-19.jpg" alt="Crunchyee Restaurant logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Crunchyee Restaurant</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1MPHJsFc5oLuUk_Nf_QeXHCWdLgcVmngI" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-20.jpg" alt="Elgato Restaurant logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Elgato Restaurant</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1cm9pWcESly90eKst3lAJLjoakcXwqi94" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-21.jpg" alt="Riceplus Restaurant logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Riceplus Restaurant</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1HewLuYZ7GOnuDdxIpe2aFkXaP7QVKV9p" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-22.jpg" alt="Beirut Fashion logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Beirut Fashion</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1SBhZScVWqmROAFnC_0pkA474J_kRbyL-" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-23.jpg" alt="Zamzam Water logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Zamzam Water</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1QhDy8-pn-XHQIJHdUOL0JLeYR6wb_GwH" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-25.jpg" alt="Aura Hom logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Aura Hom</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1nAoRlLN4bZ93Wn9h2ZVcfz1_nS4yTnXu" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-26.jpg" alt="La Framboise logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">La Framboise</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1mlDQWS-rSRFHn54Y0nvi1HQ5jyBpOrYc" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-27.jpg" alt="Fountain Blue logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Fountain Blue</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1Qi02CphYoSzKNTqAareP0AFM6lLo0KWa" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-28.jpg" alt="Quality Care Dental Center logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Quality Care Dental Center</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1hqVjJCNM-CFOe3epY7Y95W3gAKfpP2Wp" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-29.jpg" alt="Urban Rose logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Urban Rose</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/12g3Exfy14qU4iPLpBSPz9Mp30iRCZBC2" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-30.jpg" alt="Omis Cosmetics logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Omis Cosmetics</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1A42HSYS2TMQo387c5CC6prI6wpDL8lIY" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-31.jpg" alt="Alsafeer Car Rental logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Alsafeer Car Rental</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1gxii9IPoDRlTc7C0iqQyPfYQTlTOvew7" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-33.jpg" alt="Kit 51 logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Kit 51</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1JmvRu3KDuvUkIBXkdWsixbV5x7miN2sk" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-34.jpg" alt="Auto Level Portal logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Auto Level Portal</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/18RusyUq9fp9hGQlsA9vyklvaKKT5d4wC" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-37.jpg" alt="Uptown Fitness logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Uptown Fitness</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1bZ4uAODZVWAEQbyiJQa9KqK0LMdfixT9" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-38.jpg" alt="Layaqa Mobile App logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Layaqa Mobile App</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1eeRx1Xs2D_N1NDGWAbcAVPPU6a2YiYbw" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-39.jpg" alt="Oud Store logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Oud Store</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1lFA8K04L_VjJCXUKVE2KCQo4O0sLNphp" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/447812387_977218437051402_8383119214313156164_n.jpg" alt="Marrsile Perfumes logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Marrsile Perfumes</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1hjrX0eO-Xj-tE0eJz323eNuKuhqd1fjv" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-41.jpg" alt="Laden Store logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Laden Store</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1UDc13cnUkLnseve1SVR7VSwCA2Cy_HLb" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-02.jpg" alt="Dubai Municipality logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Dubai Municipality</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1ahWvuPZV7E1gw0qiBITGEBGkjW5nPri1" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-43.jpg" alt="Lapa Eatery logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Lapa Eatery</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/16QN7K8quoB5XvX57KH6oOBcEVClaBmGk" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-46.jpg" alt="Think Techie logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Think Techie</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1fBTSn1VfKWuY18NN-9IPcFvOZY3Qfo9v" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Mystery-Shopper-Profile-OPTION-1-IT_high-47.jpg" alt="Gulf Model School Dubai logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Gulf Model School Dubai</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1ehC-cvU4VoRyE6zpTf1FKmnejnI5gz-q" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Untitled-4-02.png" alt="Lavender Super Mart logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Lavender Super Mart</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1xWUIAzVaNaYZKR2qIxTcbwFVHAqM0DuV" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Untitled-4-03.png" alt="Grasse5 Perfumes logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Grasse5 Perfumes</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1XNumLO6KSkcFOW7vkFcWIhe_612dcUeW" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Untitled-4-04.png" alt="Halawanji Nablus logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Halawanji Nablus</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
        <a href="https://drive.google.com/drive/folders/1K4bMfOxjcDTbOuqGBPyxuNVy89E-XNmU" target="_blank" rel="noopener" class="pf-card pf-logo-card" data-cat="media">
          <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Untitled-4-08.png" alt="Mamma Mia Pizza &amp; Pasta logo" class="pf-logo-img" loading="lazy" />
          <span class="pf-logo-name">Mamma Mia Pizza &amp; Pasta</span>
          <span class="pf-logo-link"><i class="fa-brands fa-google-drive"></i> View Work</span>
        </a>
      </div>
    </div>

    <!-- Website Development -->
    <div class="pf-group" id="website-development">
      <div class="pf-group-head">
        <div>
          <div class="pf-group-eyebrow">Design · Build · Launch</div>
          <h2 class="pf-group-title">Website Development</h2>
        </div>
        <p class="pf-group-desc">Live websites we designed and built. Click any project to visit the site.</p>
      </div>
      <div class="pf-web-grid">
        <a href="https://adhwaalsamha.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/adh.jpg" alt="Adhwa Alsamha website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Adhwa Alsamha</h3>
              <div class="pf-card-sub">adhwaalsamha.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://elyanproperties.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Elyan.jpg" alt="Elyan Properties website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Elyan Properties</h3>
              <div class="pf-card-sub">elyanproperties.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://cleantouch.ae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/clean.jpg" alt="Clean Touch website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Clean Touch</h3>
              <div class="pf-card-sub">cleantouch.ae</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://luxelinecreation.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/luxe.jpg" alt="Luxeline Creation website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Luxeline Creation</h3>
              <div class="pf-card-sub">luxelinecreation.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://devaluxuryproperties.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-10-at-12.03.26-PM-min-1.jpg" alt="Deva Luxury Properties website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Deva Luxury Properties</h3>
              <div class="pf-card-sub">devaluxuryproperties.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://www.elgato-world.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/elgato.jpg" alt="Elgato Restaurant website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Elgato Restaurant</h3>
              <div class="pf-card-sub">elgato-world.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://majdxb.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/maj.jpg" alt="Maj Properties website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Maj Properties</h3>
              <div class="pf-card-sub">majdxb.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://alsafeercarrental.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Al-safeer.jpg" alt="Alsafeer Car Rental website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Alsafeer Car Rental</h3>
              <div class="pf-card-sub">alsafeercarrental.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://www.kit51.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/kit.jpg" alt="Kit 51 website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Kit 51</h3>
              <div class="pf-card-sub">kit51.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://eastafricapetroleum.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/east.jpg" alt="East Africa Petroleum website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">East Africa Petroleum</h3>
              <div class="pf-card-sub">eastafricapetroleum.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://ibaraconsultancy.com/business-setup-in-dubai-uae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/Ibara.jpg" alt="Ibara Consultancy website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Ibara Consultancy</h3>
              <div class="pf-card-sub">ibaraconsultancy.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://lamarca.ae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/lamarca.jpg" alt="Lamarca Online Store website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Lamarca Online Store</h3>
              <div class="pf-card-sub">lamarca.ae</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://q2wash.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/q2wash.jpg" alt="Geo Wash website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Geo Wash</h3>
              <div class="pf-card-sub">q2wash.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://www.riceplus-world.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/ricwe.jpg" alt="Riceplus Restaurant website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Riceplus Restaurant</h3>
              <div class="pf-card-sub">riceplus-world.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://zimam.ae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/zimam.jpg" alt="Zimam Online Store website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Zimam Online Store</h3>
              <div class="pf-card-sub">zimam.ae</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://ardalbatra.ae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="https://workportfolio.q2fm.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-10-at-11.36.24-AM-min-1.jpg" alt="Ard Al Batra Online Store website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Ard Al Batra Online Store</h3>
              <div class="pf-card-sub">ardalbatra.ae</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://homekeys.ae/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/portfolio/homekeys.jpg" alt="Home Keys Real Estate website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">Home Keys Real Estate</h3>
              <div class="pf-card-sub">homekeys.ae</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
        <a href="https://www.ilts.com/" target="_blank" rel="noopener" class="pf-card pf-web-card" data-cat="web">
          <div class="pf-card-img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/portfolio/ilts.jpg" alt="ILTS — Lottery &amp; Gaming Solutions website" class="pf-card-img" loading="lazy" />
            <span class="pf-card-cat pf-card-cat--web">Website</span>
            <div class="pf-card-overlay">
              <h3 class="pf-card-title">ILTS — Lottery &amp; Gaming Solutions</h3>
              <div class="pf-card-sub">ilts.com</div>
              <div class="pf-card-arrow"><i class="fa-solid fa-arrow-right"></i></div>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Empty state -->
    <div class="pf-empty" id="pf-empty">
      <i class="fa-solid fa-layer-group"></i>
      <p>No projects found in this category yet.<br/>
      <a href="/contact/" style="color:var(--blue-light);text-decoration:underline;">Talk to us about your project →</a></p>
    </div>

  </div>
</section>

<!-- ══ CONTACT ════════════════════════════════════════════════ -->
<section id="pf-contact">
  <div class="container">
    <div class="pf-group-head">
      <div>
        <div class="pf-group-eyebrow">Get in Touch</div>
        <h2 class="pf-group-title">Contact Details</h2>
      </div>
      <p class="pf-group-desc">Like what you see? Reach Online Pro Max directly — we reply within 24 hours.</p>
    </div>
    <div class="pf-contact-grid">
      <a href="tel:+971552594585" class="pf-contact-card">
        <span class="pf-contact-icon"><i class="fa-solid fa-phone"></i></span>
        <span class="pf-contact-label">Call Us</span>
        <span class="pf-contact-value">+971 55 259 4585</span>
      </a>
      <a href="https://wa.me/971552594585?text=Hello%20Online%20Pro%20Max!" target="_blank" rel="noopener" class="pf-contact-card">
        <span class="pf-contact-icon pf-contact-icon--wa"><i class="fa-brands fa-whatsapp"></i></span>
        <span class="pf-contact-label">WhatsApp</span>
        <span class="pf-contact-value">+971 55 259 4585</span>
      </a>
      <a href="mailto:contact@onlinepromax.com" class="pf-contact-card">
        <span class="pf-contact-icon"><i class="fa-solid fa-envelope"></i></span>
        <span class="pf-contact-label">Email</span>
        <span class="pf-contact-value">contact@onlinepromax.com</span>
      </a>
      <div class="pf-contact-card">
        <span class="pf-contact-icon"><i class="fa-solid fa-location-dot"></i></span>
        <span class="pf-contact-label">Address</span>
        <span class="pf-contact-value">Churchill Tower, Business Bay, Dubai, UAE</span>
      </div>
    </div>
    <div class="pf-contact-socials">
      <span class="pf-contact-label">Follow Us</span>
      <a href="https://www.instagram.com/onlinepromax" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://www.facebook.com/onlinepromax" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.linkedin.com/company/onlinepromax/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="https://x.com/onlinepromax" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
      <a href="https://www.youtube.com/@onlinepromax" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
    </div>
  </div>
</section>

<!-- ══ CTA ════════════════════════════════════════════════════ -->
<section id="pf-cta">
  <div class="container">
    <div class="pf-cta-box reveal">
      <div class="pf-cta-inner">
        <div class="pf-cta-tag">Ready to Join Our Portfolio?</div>
        <h2 class="pf-cta-title">Your Project Could Be <em>Next</em></h2>
        <p class="pf-cta-desc">Tell us what you need — a campaign, a website, a brand, a video, or a full digital strategy. We'll respond with a customised proposal within 24 hours. No fluff, no commitment.</p>
        <div class="pf-cta-actions">
          <a href="/request-quote/" class="btn btn-blue"><i class="fa-solid fa-paper-plane"></i> Get a Free Proposal</a>
          <a href="/services/" class="btn-ghost-light"><i class="fa-solid fa-sparkles"></i> See Our Services</a>
          <a href="/contact/" class="btn-ghost-light"><i class="fa-solid fa-headset"></i> Talk to Our Team</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
