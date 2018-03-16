<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package haskdesign
 */

?>

<?php wp_footer(); ?>

		<footer class="footer">
			<div class="container-fluid">
			  <div class="row">
			    <div class="col-md-3">
			      <p>Copyright &copy; Hask Design 2018</p>
			    </div>
			  </div>
			</div>
		</footer>

    <!-- Scripts for entire site -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/javascript/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/assets/javascript/custom_js.js"></script>
  </body>
</html>
