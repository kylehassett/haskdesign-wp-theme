<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package haskdesign
 */

get_header();
?>

<!-- Main Content -->
<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-md-8">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			the_post_navigation();

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->

		<!-- SIDEBAR -->
    <aside class="col-md-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->
</div>

<?php
get_footer();
