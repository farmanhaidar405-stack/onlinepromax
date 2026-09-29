<?php
/**
 * Single Post Template — Online Pro Max Blog
 */
get_header();

while ( have_posts() ) : the_post();

	$read_time = get_post_meta( get_the_ID(), 'opm_read_time', true );
	if ( ! $read_time ) $read_time = '8';
	$cat_label = get_post_meta( get_the_ID(), 'opm_category_label', true );
	$categories = get_the_category();
	if ( ! $cat_label && ! empty( $categories ) ) $cat_label = $categories[0]->name;
	if ( ! $cat_label ) $cat_label = 'Insights';

	$hero_img = get_the_post_thumbnail_url( get_the_ID(), 'large' );
	if ( ! $hero_img ) $hero_img = get_template_directory_uri() . '/assets/online-pro-max-logo.svg';
?>

<!-- POST HERO -->
<section class="bp-hero">
  <div class="bp-hero-glow"></div>
  <div class="bp-hero-grid"></div>
  <div class="bp-hero-inner">
    <div class="bp-hero-cats">
      <span class="bp-hero-cat bp-hero-cat--mkt"><?php echo esc_html( $cat_label ); ?></span>
      <?php foreach ( $categories as $cat ) : if ( $cat->name === $cat_label ) continue; ?>
        <span class="bp-hero-cat bp-hero-cat--cnt"><?php echo esc_html( $cat->name ); ?></span>
      <?php endforeach; ?>
    </div>
    <h1 class="bp-hero-title"><?php the_title(); ?></h1>
    <div class="bp-hero-meta">
      <div class="bp-hero-meta-item"><i class="fa-solid fa-user"></i> <?php the_author(); ?></div>
      <div class="bp-hero-meta-item"><i class="fa-solid fa-calendar"></i> <?php echo get_the_date(); ?></div>
      <div class="bp-hero-meta-item"><i class="fa-solid fa-clock"></i> <?php echo esc_html( $read_time ); ?> min read</div>
      <div class="bp-hero-meta-item"><i class="fa-solid fa-chart-line"></i> <?php echo esc_html( $cat_label ); ?></div>
    </div>
  </div>
</section>

<!-- HERO IMAGE -->
<img src="<?php echo esc_url( $hero_img ); ?>" alt="<?php the_title_attribute(); ?>" class="bp-hero-img" />

<!-- BREADCRUMB -->
<div class="breadcrumb"><div class="container">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><i class="fa-solid fa-chevron-right"></i>
  <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a><i class="fa-solid fa-chevron-right"></i>
  <span><?php the_title(); ?></span>
</div></div>

<!-- POST LAYOUT -->
<div class="bp-layout">

  <main>
    <article class="bp-article">
      <?php the_content(); ?>
    </article>

    <!-- Share bar -->
    <div class="bp-share">
      <span class="bp-share-label">Share this article</span>
      <button class="bp-share-btn fb" data-share="fb" title="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></button>
      <button class="bp-share-btn tw" data-share="tw" title="Share on X"><i class="fa-brands fa-x-twitter"></i></button>
      <button class="bp-share-btn li" data-share="li" title="Share on LinkedIn"><i class="fa-brands fa-linkedin-in"></i></button>
      <button class="bp-share-btn wa" data-share="wa" title="Share on WhatsApp"><i class="fa-brands fa-whatsapp"></i></button>
    </div>

    <!-- Author -->
    <div class="bp-author">
      <div class="bp-author-avatar">OPM</div>
      <div>
        <div class="bp-author-name"><?php the_author(); ?></div>
        <div class="bp-author-role">Online Pro Max</div>
        <p class="bp-author-bio"><?php echo esc_html( get_the_author_meta( 'description' ) ); ?></p>
      </div>
    </div>

    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline" style="margin-bottom:2rem;"><i class="fa-solid fa-arrow-left"></i> Back to All Articles</a>
  </main>

  <aside class="bp-sidebar">

    <!-- CTA -->
    <div class="bp-sidebar-cta">
      <h4>Ready to Grow Your Business?</h4>
      <p>Talk to our team about how this applies to your marketing or software strategy — no commitment, no pressure.</p>
      <a href="<?php echo esc_url( home_url( '/request-quote/' ) ); ?>" class="btn"><i class="fa-solid fa-paper-plane"></i> Get a Free Consultation</a>
    </div>

    <!-- Related posts -->
    <div class="bp-sidebar-card">
      <h3 class="bp-sidebar-title"><i class="fa-solid fa-newspaper"></i> Related Articles</h3>
      <div>
        <?php
        $related = new WP_Query( array(
          'post_type'      => 'post',
          'posts_per_page' => 3,
          'post__not_in'   => array( get_the_ID() ),
          'orderby'        => 'date',
          'order'          => 'DESC',
        ) );
        if ( $related->have_posts() ) :
          while ( $related->have_posts() ) : $related->the_post();
            $thumb = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
            if ( ! $thumb ) $thumb = get_template_directory_uri() . '/assets/online-pro-max-logo.svg';
        ?>
        <a href="<?php the_permalink(); ?>" class="bp-related-item" style="display:flex;">
          <img src="<?php echo esc_url( $thumb ); ?>" alt="" class="bp-related-img" />
          <div>
            <div class="bp-related-title"><?php the_title(); ?></div>
            <div class="bp-related-date"><?php echo get_the_date(); ?></div>
          </div>
        </a>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>

    <!-- Quick contact -->
    <div class="bp-sidebar-card">
      <h3 class="bp-sidebar-title"><i class="fa-solid fa-headset"></i> Talk to Our Team</h3>
      <p style="font-size:.84rem;color:var(--text-dim);line-height:1.65;margin-bottom:1rem;">Have questions about this topic for your business? Our team is happy to help — no commitment, no pressure.</p>
      <a href="<?php echo esc_url( OPM_WHATSAPP ); ?>?text=Hello%2C%20I%20read%20your%20article%20%22<?php echo rawurlencode( get_the_title() ); ?>%22%20and%20want%20to%20learn%20more." target="_blank" class="btn btn-blue" style="width:100%;justify-content:center;font-size:.84rem;"><i class="fa-brands fa-whatsapp"></i> WhatsApp Us Now</a>
    </div>

  </aside>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
