<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package haskdesign
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>

		<!-- PAGE TITLE -->
		<section class="page-title">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			// the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</section><!-- .page-header -->

		<!-- BLOG CONTENT -->
		<div class="container">
			<div class="row" id="primary">
				<main id="content" class="col-md-8" role="main">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>
			</main><!-- .main -->

			<aside class="col-md-4">
				<?php get_sidebar(); ?>
			</aside>

		</div><!-- .row -->
	</div><!-- .container -->

<?php
get_footer();
