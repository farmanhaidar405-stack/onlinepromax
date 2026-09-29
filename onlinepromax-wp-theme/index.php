<?php
/**
 * Fallback Template — Online Pro Max
 * Used only if no more specific template matches (front-page.php, page-*.php, single.php all take priority).
 */
get_header();
?>

<div class="container" style="padding:6rem 0;min-height:40vh;">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom:3rem;">
        <h1><a href="<?php the_permalink(); ?>" style="color:inherit;"><?php the_title(); ?></a></h1>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Nothing found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
