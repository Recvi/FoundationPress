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
		<div class="title-bar"  data-responsive-toggle="site-navigation">

			<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>

			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri().'/assets/images/carlson/logo-mobile.jpg';?>" alt="logo">
				</a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-left">
				<ul class="menu">
					<li class="home">
						<a id="logo-desktop" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri().'/assets/images/carlson/logo-desktop.jpg';?>" alt="logo">
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
			<?php get_search_form(); ?>
			<div id="logout">
				<a href="<?php echo wp_logout_url( home_url() ); ?>">Logout</a>
			</div>

		</nav>

	</header>

	<div class="reveal" id="createNewPost" data-reveal>
		<h1>Create New Post</h1>
		<p class="lead">choose a title for your post and start editing it</p>
		<form>
			<label>Title
				<input id="new-post-title" type="text" placeholder="fill in the title of your post">
			</label>
		</form>
		<button class="expanded button" id="create-empty-post" type="button">Create post</button>
		<button class="close-button" data-close aria-label="Close modal" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
