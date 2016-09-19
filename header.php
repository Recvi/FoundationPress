<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">

			<!-- TODO: add scss classes for: icon-bar, navbar-toggle-back, nav-arrow loaded?? -->
			<button class="" type="button" data-toggle="mobile-menu">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button class="navbar-toggle-back hidden" data-toggle="" data-target="">
				<span class="nav-arrow loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/nav-arrow.jpg' ?>" alt="back to menu"></span>
			</button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<!-- <img src="<?php echo get_template_directory_uri().'/assets/images/carlson/logo_mobile.jpg';?>"> -->
					<img data-interchange="[<?php echo get_template_directory_uri().'/assets/images/carlson/logo-mobile.jpg'?>, (small)], [<?php echo get_template_directory_uri().'/assets/images/carlson/logo-desktop.jpg'?>, (medium)]" alt="logo">
				</a>
			</div>
		</div>

		<!-- TODO:
			left: 0; top:0; bottom:0; position: fixed; width: 300px;
			OR
			row
				sidebar medium-2 columns: top
				content

	 -->
		<nav id="side-navigation" role="navigation" class="show-for-medium">
			<ul class="menu vertical" data-responsive-menu="drilldown">

			</ul>
		</nav>
		<!-- SHOULD PROBABLY MOVE THIS CODE TO SIDEBAR.PHP TEMPLATE -->

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img data-interchange="[<?php echo get_template_directory_uri().'/assets/images/carlson/logo-mobile.jpg'?>, (small)], [<?php echo get_template_directory_uri().'/assets/images/carlson/logo-desktop.jpg'?>, (medium)]" alt="logo">
						</a>
					</li>
				</ul>
			</div>
			<div class="top-bar-right">
				<?php foundationpress_top_bar_r(); ?>

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
