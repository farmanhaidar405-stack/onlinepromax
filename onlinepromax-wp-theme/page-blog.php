<?php
/**
 * Template Name: Blog
 * Description: Blog listing page — pulls latest WordPress posts dynamically.
 */
opm_enqueue_page_assets( 'blog' );
get_header();
?>

<section class="bg-hero">
  <div class="bg-hero-glow-1"></div><div class="bg-hero-glow-2"></div><div class="bg-hero-grid"></div>
  <div class="container bg-hero-inner">
    <div class="bg-hero-label"><div class="bg-hero-label-line"></div><span>Online Pro Max</span><div class="bg-hero-label-line"></div></div>
    <h1 class="bg-hero-title">
      <span class="line"><span class="word">Our</span></span>
      <span class="line"><span class="word w2 accent">Blog</span></span>
    </h1>
    <p class="bg-hero-sub">Expert insights, practical guides, and industry intelligence on digital marketing, software development, content creation, and brand strategy — from the Online Pro Max team.</p>
  </div>
</section>

<!-- BREADCRUMB -->
<div class="breadcrumb"><div class="container">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><i class="fa-solid fa-chevron-right"></i><span>Blog</span>
</div></div>

<!-- SEARCH + FILTER -->
<div class="bg-controls">
  <div class="container">
    <div class="bg-search-wrap">
      <i class="fa-solid fa-magnifying-glass si"></i>
      <input type="search" id="bg-search" placeholder="Search articles..." autocomplete="off" />
    </div>
    <div class="bg-filters">
      <button class="bg-filter-btn active" data-cat="all"><i class="fa-solid fa-border-all"></i> All</button>
      <?php
      $cats = get_categories( array( 'hide_empty' => true ) );
      foreach ( $cats as $cat ) :
      ?>
      <button class="bg-filter-btn" data-cat="<?php echo esc_attr( $cat->slug ); ?>"><i class="fa-solid fa-tag"></i> <?php echo esc_html( $cat->name ); ?></button>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- BLOG GRID -->
<section class="bg-section">
  <div class="container">
    <div class="bg-grid">

      <?php
      $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
      $blog_query = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $paged,
      ) );

      if ( $blog_query->have_posts() ) :
        $i = 0;
        while ( $blog_query->have_posts() ) : $blog_query->the_post();
          $i++;
          $is_featured = ( $i === 1 && $paged === 1 );
          $cat_list = get_the_category();
          $cat_slugs = implode( ' ', wp_list_pluck( $cat_list, 'slug' ) );
          $thumb = get_the_post_thumbnail_url( get_the_ID(), $is_featured ? 'large' : 'medium' );
          if ( ! $thumb ) $thumb = get_template_directory_uri() . '/assets/online-pro-max-logo.svg';
          $read_time = get_post_meta( get_the_ID(), 'opm_read_time', true );
          if ( ! $read_time ) $read_time = '8';
      ?>
      <article class="bg-card<?php echo $is_featured ? ' featured' : ''; ?>" data-cat="<?php echo esc_attr( $cat_slugs ); ?>">
        <div class="bg-card-img-wrap">
          <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>" class="bg-card-img" />
          <div class="bg-card-cat">
            <?php foreach ( $cat_list as $c ) : ?>
              <span class="tag"><?php echo esc_html( $c->name ); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="bg-card-body">
          <div class="bg-card-meta">
            <span><?php echo get_the_date(); ?></span>
            <span class="bg-card-meta-dot"></span>
            <span><?php echo esc_html( $read_time ); ?> min read</span>
          </div>
          <h2 class="bg-card-title"><a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none;"><?php the_title(); ?></a></h2>
          <p class="bg-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
          <div class="bg-card-footer">
            <div class="bg-card-author">
              <div class="bg-card-author-avatar">OPM</div>
              <span>Online Pro Max Team</span>
            </div>
            <a href="<?php the_permalink(); ?>" class="bg-card-read">Read Article <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
      <p>No articles published yet. Add your first post from the WordPress dashboard.</p>
      <?php endif; ?>

    </div>

    <?php if ( $blog_query->max_num_pages > 1 ) : ?>
    <div class="bg-pagination" style="margin-top:2.5rem;text-align:center;">
      <?php
      echo paginate_links( array(
        'total'   => $blog_query->max_num_pages,
        'current' => $paged,
      ) );
      ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
