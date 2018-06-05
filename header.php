<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package haskdesign
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hask-design-favicon.png">

  <title>Hask Design</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">

  <!-- Custom css -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/styles.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Hind:300|Roboto:300" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120460633-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-120460633-1');
	</script>


	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IEB support of HTML5 elements and media queries -->

  <!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body id="htmlBody" <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'haskdesign' ); ?></a>

	<!-- HEADER -->
  <header class="site-header" role="banner">
    <!-- NAVBAR -->
    <div class="navbar-wrapper">
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://haskdesign.com/home" id="site-name"><?php echo get_bloginfo($show = 'name', $filter = 'raw'); ?><div id="border-item"></div></a>
          </div>

					<?php
						wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => 'nav',
								'container_class' => 'navbar-collapse collapse',
								'menu_class' => 'nav navbar-nav navbar-right'
							) );
					?>

        </div>
      </div>
    </div>
  </header>
