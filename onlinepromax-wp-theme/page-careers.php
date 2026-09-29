<?php
/**
 * Template Name: Careers
 * Description: Auto-converted from careers.html
 */
opm_enqueue_page_assets( 'careers' );
get_header();
?>




<!-- ══ FULL-PAGE TEAL-NAVY SPLIT LAYOUT ═══════════════════════ -->
<div class="cr-page">
  <div class="cr-bg-grid"></div>
  <div class="cr-blob-1"></div>
  <div class="cr-blob-2"></div>
  <div class="cr-blob-3"></div>

  <div class="cr-layout container">

    <!-- ══ LEFT PANEL ══ -->
    <div class="cr-left">

      <div class="cr-eyebrow">
        <div class="cr-eyebrow-line"></div>
        <span>We're Hiring in Dubai</span>
      </div>

      <h1 class="cr-title">
        <span class="line"><span class="word">Join Our</span></span>
        <span class="line"><span class="word w2 accent">Team</span></span>
      </h1>

      <p class="cr-sub">
        We're building something extraordinary at Online Pro Max. If you're passionate,
        ambitious, and ready to make an impact in media, education, or events —
        we want to hear from you.
      </p>

      <!-- Perks of joining -->
      <div class="cr-perks-label">Why Join Online Pro Max?</div>
      <div class="cr-perks">
        <div class="cr-perk">
          <div class="cr-perk-icon"><i class="fa-solid fa-rocket"></i></div>
          <div>
            <div class="cr-perk-title">Fast-Growing Environment</div>
            <div class="cr-perk-desc">Join a company in active growth mode — your work will have real, visible impact from day one.</div>
          </div>
        </div>
        <div class="cr-perk">
          <div class="cr-perk-icon"><i class="fa-solid fa-earth-americas"></i></div>
          <div>
            <div class="cr-perk-title">Global Exposure from Dubai</div>
            <div class="cr-perk-desc">Work with international brands, growing startups, and clients across the UAE and beyond.</div>
          </div>
        </div>
        <div class="cr-perk">
          <div class="cr-perk-icon"><i class="fa-solid fa-palette"></i></div>
          <div>
            <div class="cr-perk-title">Creative, Multidisciplinary Work</div>
            <div class="cr-perk-desc">No two days are the same — from events to media campaigns to education advisory.</div>
          </div>
        </div>
        <div class="cr-perk">
          <div class="cr-perk-icon"><i class="fa-solid fa-users"></i></div>
          <div>
            <div class="cr-perk-title">Collaborative, Driven Team</div>
            <div class="cr-perk-desc">A tight-knit team where ideas are valued, voices are heard, and everyone grows together.</div>
          </div>
        </div>
      </div>

      <!-- Open area pills -->
      <div class="cr-roles-label">Areas We're Looking In</div>
      <div class="cr-roles">
        <span class="cr-role-pill"><i class="fa-solid fa-photo-film"></i> Media &amp; Content</span>
        <span class="cr-role-pill"><i class="fa-solid fa-chart-line"></i> Marketing</span>
        <span class="cr-role-pill"><i class="fa-solid fa-calendar-days"></i> Events</span>
        <span class="cr-role-pill"><i class="fa-solid fa-graduation-cap"></i> Education</span>
        <span class="cr-role-pill"><i class="fa-solid fa-laptop-code"></i> Web &amp; Tech</span>
        <span class="cr-role-pill"><i class="fa-solid fa-pen-nib"></i> Copywriting</span>
        <span class="cr-role-pill"><i class="fa-solid fa-handshake"></i> Business Dev</span>
        <span class="cr-role-pill"><i class="fa-solid fa-gears"></i> Operations</span>
      </div>

      <!-- Stats -->
      <div class="cr-stats">
        <div class="cr-stat">
          <div class="cr-stat-num" data-counter="3">0</div>
          <div class="cr-stat-label">Core Team Members</div>
        </div>
        <div class="cr-stat">
          <div class="cr-stat-num" data-counter="12">0</div>+
          <div class="cr-stat-label">Countries Reached</div>
        </div>
        <div class="cr-stat">
          <div class="cr-stat-num" data-counter="50">0</div>+
          <div class="cr-stat-label">Projects Delivered</div>
        </div>
      </div>

    </div><!-- /cr-left -->

    <!-- ══ RIGHT PANEL: FORM ══ -->
    <div class="cr-right">
      <div class="cr-form-card">

        <!-- Form Header -->
        <div class="cr-form-header">
          <div class="cr-form-header-badge">
            <i class="fa-solid fa-briefcase"></i> Application Form
          </div>
          <h2 class="cr-form-title">Apply to Join Online Pro Max</h2>
          <p class="cr-form-subtitle">Tell us about yourself — we review every application personally</p>

          <!-- Step indicator -->
          <div class="cr-form-steps">
            <div class="cr-step-item active" id="cr-si-1">
              <div class="cr-step-dot">1</div>
              <span>Your Details</span>
            </div>
            <div class="cr-step-line"></div>
            <div class="cr-step-item" id="cr-si-2">
              <div class="cr-step-dot">2</div>
              <span>Experience</span>
            </div>
            <div class="cr-step-line"></div>
            <div class="cr-step-item" id="cr-si-3">
              <div class="cr-step-dot">3</div>
              <span>Your Pitch</span>
            </div>
          </div>
        </div><!-- /cr-form-header -->

        <div class="cr-form-body">
          <div id="cr-form-wrap">
            <form id="cr-form" novalidate>

              <!-- ══ STEP 1: Personal Details ══ -->
              <div id="cr-step-1" class="cr-step-panel active">
                <div class="cr-step-title">
                  <i class="fa-solid fa-user"></i> Personal Information
                </div>
                <div class="cr-field-grid">

                  <div class="cr-field full">
                    <label class="cr-label">Full Name <span class="req">*</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-solid fa-user fi"></i>
                      <input type="text" class="cr-input" placeholder="e.g. Aisha Mohammed" required />
                    </div>
                    <span class="cr-error-msg">Please enter your full name</span>
                  </div>

                  <div class="cr-field">
                    <label class="cr-label">Email Address <span class="req">*</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-solid fa-envelope fi"></i>
                      <input type="email" class="cr-input" placeholder="you@email.com" required />
                    </div>
                    <span class="cr-error-msg">Please enter a valid email</span>
                  </div>

                  <div class="cr-field">
                    <label class="cr-label">Phone Number <span class="req">*</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-solid fa-phone fi"></i>
                      <input type="tel" class="cr-input" placeholder="+971 55 259 4585" required />
                    </div>
                    <span class="cr-error-msg">Please enter your phone number</span>
                  </div>

                  <div class="cr-field">
                    <label class="cr-label">Nationality <span class="req">*</span></label>
                    <div class="cr-select-wrap">
                      <select class="cr-select" required>
                        <option value="" disabled selected>Select nationality</option>
                        <option>UAE</option><option>India</option><option>Pakistan</option>
                        <option>Philippines</option><option>Egypt</option><option>Lebanon</option>
                        <option>Jordan</option><option>Nigeria</option><option>Kenya</option>
                        <option>UK</option><option>USA</option><option>Australia</option>
                        <option>Other</option>
                      </select>
                    </div>
                    <span class="cr-error-msg">Please select your nationality</span>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">Current Location (City, Country) <span class="req">*</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-solid fa-location-dot fi"></i>
                      <input type="text" class="cr-input" placeholder="e.g. Dubai, UAE" required />
                    </div>
                    <span class="cr-error-msg">Please enter your current location</span>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">LinkedIn Profile <span class="opt">(optional)</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-brands fa-linkedin-in fi"></i>
                      <input type="url" class="cr-input" placeholder="https://linkedin.com/in/yourname" />
                    </div>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">When Are You Available to Start? <span class="req">*</span></label>
                    <div class="cr-avail-grid">
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="immediate" /><i class="fa-solid fa-bolt" style="color:var(--teal);font-size:.8rem;"></i> Immediately</label>
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="2weeks" /><i class="fa-solid fa-calendar" style="color:var(--teal);font-size:.8rem;"></i> 2 Weeks</label>
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="1month" /><i class="fa-solid fa-calendar-days" style="color:var(--teal);font-size:.8rem;"></i> 1 Month</label>
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="2months" /><i class="fa-regular fa-calendar" style="color:var(--teal);font-size:.8rem;"></i> 2 Months</label>
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="3plus" /><i class="fa-solid fa-clock" style="color:var(--teal);font-size:.8rem;"></i> 3+ Months</label>
                      <label class="cr-avail-opt"><input type="radio" name="cr-avail" value="flexible" /><i class="fa-solid fa-check" style="color:var(--teal);font-size:.8rem;"></i> Flexible</label>
                    </div>
                  </div>

                </div>
                <div class="cr-step-nav">
                  <span></span>
                  <button type="button" class="cr-btn-next">Continue <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div><!-- /step 1 -->


              <!-- ══ STEP 2: Experience & Skills ══ -->
              <div id="cr-step-2" class="cr-step-panel">
                <div class="cr-step-title">
                  <i class="fa-solid fa-briefcase"></i> Experience &amp; Skills
                </div>
                <div class="cr-field-grid">

                  <div class="cr-field full">
                    <label class="cr-label">Role You're Applying For <span class="req">*</span></label>
                    <div class="cr-select-wrap">
                      <select class="cr-select" required>
                        <option value="" disabled selected>Select the role type</option>
                        <option>Digital Marketing Executive</option>
                        <option>Social Media Executive</option>
                        <option>Digital Marketing Specialist</option>
                        <option>Graphic Designer</option>
                        <option>Photographer / Videographer</option>
                        <option>Events Coordinator</option>
                        <option>Education Counselor / Advisor</option>
                        <option>Business Development Executive</option>
                        <option>Web Designer / Developer</option>
                        <option>Copywriter / Content Writer</option>
                        <option>Operations &amp; Administration</option>
                        <option>Internship (specify in notes)</option>
                        <option>Other (specify in notes)</option>
                      </select>
                    </div>
                    <span class="cr-error-msg">Please select a role</span>
                  </div>

                  <div class="cr-field">
                    <label class="cr-label">Years of Experience <span class="req">*</span></label>
                    <div class="cr-select-wrap">
                      <select class="cr-select" required>
                        <option value="" disabled selected>Select experience</option>
                        <option>Student / Fresh Graduate</option>
                        <option>Less than 1 year</option>
                        <option>1 – 2 years</option>
                        <option>3 – 5 years</option>
                        <option>5 – 8 years</option>
                        <option>8+ years</option>
                      </select>
                    </div>
                    <span class="cr-error-msg">Please select your experience level</span>
                  </div>

                  <div class="cr-field">
                    <label class="cr-label">Employment Type <span class="req">*</span></label>
                    <div class="cr-select-wrap">
                      <select class="cr-select" required>
                        <option value="" disabled selected>Select type</option>
                        <option>Full-Time</option>
                        <option>Part-Time</option>
                        <option>Freelance / Contract</option>
                        <option>Internship</option>
                        <option>Remote</option>
                        <option>Open to Discussion</option>
                      </select>
                    </div>
                    <span class="cr-error-msg">Please select employment type</span>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">Areas of Expertise <span class="req">*</span> <span class="opt">(select all that apply)</span></label>
                    <div class="cr-interest-grid">
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-camera si"></i> Photography / Video</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-brands fa-instagram si"></i> Social Media</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-chart-line si"></i> Digital Marketing</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-palette si"></i> Graphic Design</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-cloud si"></i> Software / Cloud Engineering</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-robot si"></i> AI &amp; Automation</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-laptop-code si"></i> Web / App Development</label>
                      <label class="cr-interest-opt"><input type="checkbox" /><div class="cr-chk-box"></div><i class="fa-solid fa-pen-nib si"></i> Writing / Copywriting</label>
                    </div>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">Portfolio / Website <span class="opt">(optional)</span></label>
                    <div class="cr-input-wrap">
                      <i class="fa-solid fa-link fi"></i>
                      <input type="url" class="cr-input" placeholder="https://yourportfolio.com" />
                    </div>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">Do You Have a UAE Residency / Work Permit?</label>
                    <div class="cr-radio-group">
                      <label class="cr-radio-opt">
                        <input type="radio" name="cr-visa" value="yes" />
                        <i class="fa-solid fa-check-circle"></i> Yes
                      </label>
                      <label class="cr-radio-opt">
                        <input type="radio" name="cr-visa" value="no" />
                        <i class="fa-solid fa-times-circle"></i> No
                      </label>
                      <label class="cr-radio-opt">
                        <input type="radio" name="cr-visa" value="inprogress" />
                        <i class="fa-solid fa-spinner"></i> In Progress
                      </label>
                    </div>
                  </div>

                </div>
                <div class="cr-step-nav">
                  <button type="button" class="cr-btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                  <button type="button" class="cr-btn-next">Continue <i class="fa-solid fa-arrow-right"></i></button>
                </div>
              </div><!-- /step 2 -->


              <!-- ══ STEP 3: Your Pitch ══ -->
              <div id="cr-step-3" class="cr-step-panel">
                <div class="cr-step-title">
                  <i class="fa-solid fa-star"></i> Your Pitch
                </div>
                <div class="cr-field-grid">

                  <div class="cr-field full">
                    <label class="cr-label">Tell Us About Yourself <span class="req">*</span></label>
                    <textarea
                      id="cr-about"
                      class="cr-textarea"
                      placeholder="Give us a brief overview of your background, key skills, and what you bring to the table. Think of this as your personal pitch..."
                      maxlength="600"
                      required
                      style="min-height:100px;"
                    ></textarea>
                    <div style="display:flex;justify-content:space-between;margin-top:.2rem;">
                      <span class="cr-error-msg" style="margin:0;">Please tell us a little about yourself</span>
                      <span style="font-size:.7rem;color:var(--text-dim);" id="cr-about-count">0/600</span>
                    </div>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">Why Do You Want to Join Online Pro Max? <span class="req">*</span></label>
                    <textarea
                      id="cr-why"
                      class="cr-textarea"
                      placeholder="What excites you about Online Pro Max specifically? What do you hope to contribute and gain from this opportunity?"
                      maxlength="500"
                      required
                      style="min-height:88px;"
                    ></textarea>
                    <div style="display:flex;justify-content:space-between;margin-top:.2rem;">
                      <span class="cr-error-msg" style="margin:0;">Please tell us why you want to join</span>
                      <span style="font-size:.7rem;color:var(--text-dim);" id="cr-why-count">0/500</span>
                    </div>
                  </div>

                  <div class="cr-field full">
                    <label class="cr-label">How Did You Hear About This Opportunity? <span class="opt">(optional)</span></label>
                    <div class="cr-select-wrap">
                      <select class="cr-select">
                        <option value="" disabled selected>Select source</option>
                        <option>LinkedIn</option>
                        <option>Instagram</option>
                        <option>Friend or Colleague</option>
                        <option>Online Pro Max Website</option>
                        <option>Google Search</option>
                        <option>University / College</option>
                        <option>Other</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="cr-step-nav">
                  <button type="button" class="cr-btn-prev"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </div>

                <button type="submit" class="cr-btn-submit">
                  <i class="fa-solid fa-paper-plane"></i> Submit My Application
                </button>
                <p class="cr-form-note">
                  <i class="fa-solid fa-lock"></i>
                  Your application is confidential. We personally review every submission within 5 business days.
                </p>

              </div><!-- /step 3 -->

            </form>
          </div><!-- /cr-form-wrap -->

          <!-- Success State -->
          <div id="cr-success" class="cr-success">
            <div class="cr-success-icon">
              <i class="fa-solid fa-check"></i>
            </div>
            <h3>Application Received! &#127775;</h3>
            <p>
              Thank you for applying to Online Pro Max. We personally review every application
              and will be in touch within <strong>5 business days</strong> if your profile
              is a match. In the meantime, follow us on Instagram for the latest updates!
            </p>
            <div class="cr-success-actions">
              <a href="/about/" class="btn btn-outline">
                <i class="fa-solid fa-building"></i> About Online Pro Max
              </a>
            </div>
          </div>

        </div><!-- /cr-form-body -->
      </div><!-- /cr-form-card -->
    </div><!-- /cr-right -->

  </div><!-- /cr-layout -->
</div><!-- /cr-page -->

<!-- ══ MARQUEE ════════════════════════════════════════════════ -->
<div class="marquee-section">
  <div class="marquee-wrap">
    <div class="marquee-track">
      <div class="marquee-item"><span class="marquee-dot"></span>Digital Marketing</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Graphic Design</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Web Development</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Photography</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Videography</div>
      <div class="marquee-item"><span class="marquee-dot"></span>Based in Dubai, UAE</div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
