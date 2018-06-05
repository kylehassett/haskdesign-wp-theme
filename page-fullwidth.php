<?php
/**
 * Template Name: Full-width Template
 */

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
