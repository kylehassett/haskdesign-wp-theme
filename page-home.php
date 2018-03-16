<?php
/**
 * Template Name: Home Page
 * @package Bootstrap_to_WordPress
 */

get_header(); ?>

<section id="contactSection">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-2 col-md-8 contact-area">
        <h2>Web Designer - Developer - Creative Professional</h2>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
