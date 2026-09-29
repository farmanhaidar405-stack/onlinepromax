<?php
/**
 * Template Name: Request a Quote
 * Description: Auto-converted from request-quote.html
 */
opm_enqueue_page_assets( 'request-quote' );
get_header();
?>



<!-- ══ FULL-PAGE PURPLE-NAVY SPLIT LAYOUT ═════════════════════ -->
<div class="rq-page">
  <div class="rq-bg-grid"></div>
  <div class="rq-blob-1"></div>
  <div class="rq-blob-2"></div>
  <div class="rq-blob-3"></div>

  <div class="rq-layout container">

    <!-- ══════════ LEFT PANEL ══════════ -->
    <div class="rq-left">

      <div class="rq-eyebrow">
        <div class="rq-eyebrow-line"></div>
        <span>Custom Media Proposal</span>
      </div>

      <h1 class="rq-title">
        <span class="line"><span class="word">Request a</span></span>
        <span class="line"><span class="word accent">Custom Quote</span></span>
      </h1>

      <p class="rq-sub">
        Want your brand to stand out? We're here to bring your vision to life.
        Fill out the form and our team will craft a tailored proposal within 24–48 hours — no commitment required.
      </p>

      <!-- Services list -->
      <div class="rq-services-label">Services We Provide</div>
      <div class="rq-services">
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-camera"></i></div>
          <span class="rq-service-text">Professional Photography</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-video"></i></div>
          <span class="rq-service-text">Videography &amp; Event Coverage</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-brands fa-instagram"></i></div>
          <span class="rq-service-text">Social Media Reels &amp; Edits</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-microphone"></i></div>
          <span class="rq-service-text">Interviews &amp; Behind-the-Scenes Content</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-palette"></i></div>
          <span class="rq-service-text">Graphic Design &amp; Creative Production</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-chart-line"></i></div>
          <span class="rq-service-text">Digital Marketing &amp; SEO Campaigns</span>
        </div>
        <div class="rq-service">
          <div class="rq-service-icon"><i class="fa-solid fa-pen-nib"></i></div>
          <span class="rq-service-text">Brand Storytelling &amp; Content Strategy</span>
        </div>
      </div>

      <!-- Quick trust pills -->
      <div class="rq-pills">
        <span class="rq-pill"><i class="fa-solid fa-clock"></i> Response in 24–48 hrs</span>
        <span class="rq-pill"><i class="fa-solid fa-shield-halved"></i> No commitment required</span>
        <span class="rq-pill"><i class="fa-solid fa-file-invoice"></i> Tailored proposal</span>
        <span class="rq-pill"><i class="fa-solid fa-handshake"></i> Free consultation</span>
      </div>

      <!-- Stats -->
      <div class="rq-stats">
        <div class="rq-stat">
          <div class="rq-stat-num" data-counter="50">0</div>+
          <div class="rq-stat-label">Campaigns Delivered</div>
        </div>
        <div class="rq-stat">
          <div class="rq-stat-num" data-counter="100">0</div>%
          <div class="rq-stat-label">Client Satisfaction</div>
        </div>
        <div class="rq-stat">
          <div class="rq-stat-num" data-counter="24">0</div>h
          <div class="rq-stat-label">Response Guarantee</div>
        </div>
      </div>

    </div><!-- /rq-left -->

    <!-- ══════════ RIGHT PANEL: FORM ══════════ -->
    <div class="rq-right">
      <div class="rq-form-card">

        <!-- Form Header -->
        <div class="rq-form-header">
          <div class="rq-form-header-badge">
            <i class="fa-solid fa-sparkles"></i> Free Quote
          </div>
          <h2 class="rq-form-title">Get Your Custom Proposal</h2>
          <p class="rq-form-subtitle">Tell us about your project — we'll get back within 24–48 hours</p>

          <!-- Step indicator -->
          <div class="rq-form-steps">
            <div class="rq-step-item active" id="rq-si-1">
              <div class="rq-step-dot">1</div>
              <span>Your Info</span>
            </div>
            <div class="rq-step-line"></div>
            <div class="rq-step-item" id="rq-si-2">
              <div class="rq-step-dot">2</div>
              <span>Project Details</span>
            </div>
            <div class="rq-step-line"></div>
            <div class="rq-step-item" id="rq-si-3">
              <div class="rq-step-dot">3</div>
              <span>Final Details</span>
            </div>
          </div>
        </div><!-- /form header -->

        <div class="rq-form-body">
          <div id="rq-form-wrap">
            <form id="rq-form" novalidate>

              <!-- ══ STEP 1: Your Info + Services ══ -->
              <div id="rq-step-1" class="rq-step-panel active">
                <div class="rq-step-title">
                  <i class="fa-solid fa-user"></i> Your Contact Details
                </div>
                <div class="rq-field-grid">

                  <div class="rq-field full">
                    <label class="rq-label">Full Name <span class="req">*</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-user fi"></i>
                      <input type="text" class="rq-input" placeholder="e.g. Laila Al Rashidi" required />
                    </div>
                    <span class="rq-error-msg">Please enter your full name</span>
                  </div>

                  <div class="rq-field">
                    <label class="rq-label">Email Address <span class="req">*</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-envelope fi"></i>
                      <input type="email" class="rq-input" placeholder="you@brand.com" required />
                    </div>
                    <span class="rq-error-msg">Please enter a valid email</span>
                  </div>

                  <div class="rq-field">
                    <label class="rq-label">Phone Number <span class="req">*</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-phone fi"></i>
                      <input type="tel" class="rq-input" placeholder="+971 55 259 4585" required />
                    </div>
                    <span class="rq-error-msg">Please enter your phone number</span>
                  </div>

                  <div class="rq-field full">
                    <label class="rq-label">Company / Organisation Name <span class="opt">(optional)</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-building fi"></i>
                      <input type="text" class="rq-input" placeholder="e.g. Horizon Media UAE" />
                    </div>
                  </div>

                  <div class="rq-field full">
                    <label class="rq-label">Website <span class="opt">(optional)</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-globe fi"></i>
                      <input type="url" class="rq-input" placeholder="https://www.yourwebsite.com" />
                    </div>
                  </div>

                  <!-- Services checkboxes -->
                  <div class="rq-field full">
                    <label class="rq-label">Which Services Do You Need? <span class="req">*</span></label>
                    <div class="rq-check-grid">
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-camera si"></i> Photography</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-video si"></i> Videography</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-brands fa-instagram si"></i> Social Media Strategy</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-wand-magic-sparkles si"></i> Content Creation</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-chart-line si"></i> Digital Marketing (SEO, PPC)</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-pen-nib si"></i> Brand Storytelling</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-film si"></i> Post-Production Editing</label>
                      <label class="rq-check-opt"><input type="checkbox" /><div class="rq-chk-box"></div><i class="fa-solid fa-laptop-code si"></i> Web Design &amp; Development</label>
                    </div>
                  </div>

                </div>
                <div class="rq-step-nav">
                  <span></span>
                  <button type="button" class="rq-btn-next">Continue <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div><!-- /step 1 -->


              <!-- ══ STEP 2: Project Details ══ -->
              <div id="rq-step-2" class="rq-step-panel">
                <div class="rq-step-title">
                  <i class="fa-solid fa-clipboard-list"></i> Project Details
                </div>
                <div class="rq-field-grid">

                  <div class="rq-field full">
                    <label class="rq-label">Describe Your Project Goals <span class="req">*</span></label>
                    <textarea
                      id="rq-project"
                      class="rq-textarea"
                      placeholder="Tell us about your project — objectives, target audience, key messages, and what success looks like for you..."
                      maxlength="600"
                      required
                      style="min-height:100px;"
                    ></textarea>
                    <div style="display:flex;justify-content:space-between;margin-top:.2rem;">
                      <span class="rq-error-msg" style="margin:0;">Please describe your project goals</span>
                      <span style="font-size:.7rem;color:var(--text-dim);" id="rq-project-count">0/600</span>
                    </div>
                  </div>

                  <div class="rq-field">
                    <label class="rq-label">Project Delivery Date <span class="req">*</span></label>
                    <div class="rq-input-wrap">
                      <i class="fa-solid fa-calendar fi"></i>
                      <input type="date" class="rq-input" required />
                    </div>
                    <span class="rq-error-msg">Please select a delivery date</span>
                  </div>

                  <div class="rq-field">
                    <label class="rq-label">Are There Critical Deadlines? <span class="req">*</span></label>
                    <div class="rq-radio-group">
                      <label class="rq-radio-opt">
                        <input type="radio" name="rq-deadline" value="yes" />
                        <i class="fa-solid fa-triangle-exclamation"></i> Yes
                      </label>
                      <label class="rq-radio-opt">
                        <input type="radio" name="rq-deadline" value="no" />
                        <i class="fa-solid fa-check-circle"></i> No
                      </label>
                    </div>
                  </div>

                  <!-- Budget visual cards -->
                  <div class="rq-field full">
                    <label class="rq-label">Estimated Budget Range <span class="req">*</span></label>
                    <div class="rq-budget-grid">
                      <label class="rq-budget-opt">
                        <input type="radio" name="rq-budget" value="under5k" />
                        <div class="rq-budget-amount">Under<br/>AED 5K</div>
                        <div class="rq-budget-label">Starter</div>
                      </label>
                      <label class="rq-budget-opt">
                        <input type="radio" name="rq-budget" value="5k-10k" />
                        <div class="rq-budget-amount">AED 5K<br/>– 10K</div>
                        <div class="rq-budget-label">Growth</div>
                      </label>
                      <label class="rq-budget-opt">
                        <input type="radio" name="rq-budget" value="10k-25k" />
                        <div class="rq-budget-amount">AED 10K<br/>– 25K</div>
                        <div class="rq-budget-label">Premium</div>
                      </label>
                      <label class="rq-budget-opt">
                        <input type="radio" name="rq-budget" value="over25k" />
                        <div class="rq-budget-amount">Over<br/>AED 25K</div>
                        <div class="rq-budget-label">Enterprise</div>
                      </label>
                    </div>
                  </div>

                </div>
                <div class="rq-step-nav">
                  <button type="button" class="rq-btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                  <button type="button" class="rq-btn-next">Continue <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div><!-- /step 2 -->


              <!-- ══ STEP 3: Final Details ══ -->
              <div id="rq-step-3" class="rq-step-panel">
                <div class="rq-step-title">
                  <i class="fa-solid fa-sparkles"></i> Final Details
                </div>
                <div class="rq-field-grid">

                  <div class="rq-field full">
                    <label class="rq-label">
                      Any Specific Ideas or Requests? <span class="opt">(optional)</span>
                    </label>
                    <textarea
                      id="rq-ideas"
                      class="rq-textarea"
                      placeholder="Share any specific ideas, references, style preferences, or requirements you have in mind..."
                      maxlength="500"
                      style="min-height:90px;"
                    ></textarea>
                    <div style="display:flex;justify-content:flex-end;margin-top:.2rem;">
                      <span style="font-size:.7rem;color:var(--text-dim);" id="rq-ideas-count">0/500</span>
                    </div>
                  </div>

                  <div class="rq-field full">
                    <label class="rq-label">Your Social Media Accounts <span class="opt">(select all that apply)</span></label>
                    <div class="rq-social-grid">
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-instagram si"></i> Instagram</label>
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-facebook-f si"></i> Facebook</label>
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-x-twitter si"></i> X / Twitter</label>
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-linkedin-in si"></i> LinkedIn</label>
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-tiktok si"></i> TikTok</label>
                      <label class="rq-social-opt"><input type="checkbox" /><i class="fa-brands fa-youtube si"></i> YouTube</label>
                    </div>
                  </div>

                  <div class="rq-field full">
                    <label class="rq-label">How Did You Hear About Us? <span class="opt">(optional)</span></label>
                    <div class="rq-select-wrap">
                      <select class="rq-select">
                        <option value="" disabled selected>Select source</option>
                        <option>Instagram</option>
                        <option>Facebook</option>
                        <option>Google Search</option>
                        <option>LinkedIn</option>
                        <option>YouTube</option>
                        <option>Friend or Colleague</option>
                        <option>Previous Client</option>
                        <option>Event or Exhibition</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="rq-step-nav">
                  <button type="button" class="rq-btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </div>

                <button type="submit" class="rq-btn-submit">
                  <i class="fa-solid fa-paper-plane"></i> Submit Quote Request
                </button>
                <p class="rq-form-note">
                  <i class="fa-solid fa-lock"></i>
                  Your details are secure. We respond with a tailored proposal within 24–48 hours.
                </p>

              </div><!-- /step 3 -->

            </form>
          </div><!-- /rq-form-wrap -->

          <!-- Success State -->
          <div id="rq-success" class="rq-success">
            <div class="rq-success-icon">
              <i class="fa-solid fa-file-invoice"></i>
            </div>
            <h3>Quote Request Received! &#9989;</h3>
            <p>
              Thank you for reaching out to Online Pro Max. Our creative team will review your project brief
              and get back to you within <strong>24–48 hours</strong> with a tailored proposal and pricing
              based on your specific needs, timeline, and budget.
            </p>
            <div class="rq-success-actions">
              <a href="/services/" class="btn btn-blue">
                <i class="fa-solid fa-photo-film"></i> Explore Our Services
              </a>
              <a href="/portfolio/" class="btn btn-outline">
                <i class="fa-solid fa-eye"></i> View Our Portfolio
              </a>
            </div>
          </div>

        </div><!-- /rq-form-body -->
      </div><!-- /rq-form-card -->
    </div><!-- /rq-right -->

  </div><!-- /rq-layout -->
</div><!-- /rq-page -->

<!-- ══ MARQUEE ════════════════════════════════════════════════ -->
<div class="marquee-section">
  <div class="marquee-wrap">
    <div class="marquee-track">
      <div class="marquee-item"><span class="marquee-dot"></span>Photography</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Videography</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Social Media Reels</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Digital Marketing</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Brand Storytelling</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Content Creation</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Post-Production</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Web Design</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Response in 24–48 hrs</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Free Consultation</div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
