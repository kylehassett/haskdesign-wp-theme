<?php
/**
 * Template Name: Full-width Template
 */

 $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

 get_header();
?>

<!-- Main Content -->
<div class="container">
  <div class="row" id="primary">
    <div class="col-md-12">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
