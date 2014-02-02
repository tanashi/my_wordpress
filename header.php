<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<link rel="stylesheet" id="ie-media-css"  href="<?php echo get_template_directory_uri(); ?>/assets/css/foundation-ie.min.css" type="text/css" media="all" />
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="row">
				<h1 class="site-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_2.png" alt="web_quokka" />
					</a>
				</h1>
				<h1 id="toggle-button" class="menu-toggle"><div class="genericon genericon-menu"></div></h1>
				<nav id="site-navigation" class="navigation-main" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' =>'primary' ) ); ?>
				</nav>
			</div>
		</header>
<?php if ( ! is_front_page() ) : ?>
		<div id="main" class="site-main row">
<?php endif; ?>