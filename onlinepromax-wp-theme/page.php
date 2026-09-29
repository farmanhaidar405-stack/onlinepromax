<?php
/**
 * Generic Page Template — Online Pro Max
 * Used for any WordPress Page that hasn't been assigned one of the
 * specific page-*.php templates (About, Services, Contact, etc.)
 */
get_header();
?>

<div class="container" style="padding:6rem 0;min-height:40vh;">
  <?php while ( have_posts() ) : the_post(); ?>
    <h1 style="margin-bottom:1.5rem;"><?php the_title(); ?></h1>
    <div class="page-content"><?php the_content(); ?></div>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>
