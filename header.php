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
<html class="no-js wf-formata-i4-active wf-formata-i3-active wf-formata-n5-active wf-formata-i5-active wf-formata-n4-active wf-formata-n3-active wf-active" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<!-- <?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?> -->

	<?php do_action( 'foundationpress_layout_start' ); ?>


<a href="#page-content" class="skip-links">skipnavigation</a>



    <div id="wrapper" class="en-flexible">
        <!-- service overlay -->

        <div id="page-nav" class="alert-push-down">
            <div id="leftsidebar">
                <div class="parsys iparsys flexi_left">
                    <div class="iparys_inherited">
                        <div class="parsys iparsys flexi_left">
                            <div class="component-wrapper section">


                                <div id="adaptive-image-472" class="clearfix component adaptive-image" data-config="adaptive-image-472-config" data-server="true" data-role="adaptive-image">

                                    <a class="image-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="home&amp;#x20;logo" target="_self">
																			<img src="<?php echo get_template_directory_uri().'/assets/images/carlson/logo-desktop.jpg';?>" alt="logo">
                                    </a>

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
        <div id="page-header" class="alert-push-down">
            <header>
                <div class="headerIpar parsys iparsys">
                    <div class="iparys_inherited">
                        <div class="headerIpar parsys iparsys">
                            <div class="component-wrapper section">

                                <!-- STAR of IE browser compatibility fix-->

                                <!--[if lt IE 9]>
				    <div class="browser-upgrade">

				    </div>
				<![endif]-->

                                <!-- END of IE browser compatibility fix-->

                                <div class="container header">
                                    <div class="logo-wrapper">
                                        <div class="menu-nav-toggle">
                                            <div class="parsys navHeaderPar">
                                                <div class="component-wrapper section">

                                                    <div id="nav-header-643" class="clearfix component nav-header" data-config="nav-header-643-config" data-server="true" data-role="nav-header">
                                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
																													<span class="sr-only">Toggle navigation</span>
																													<span class="icon-bar"></span>
																													<span class="icon-bar"></span>
																													<span class="icon-bar"></span>
																												</button>
																												<button type="button" class="navbar-toggle-back hidden" data-toggle="" data-target="">
																													<span class="nav-arrow loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/nav-arrow.jpg'; ?>" alt="back to menu"></span>
																												</button>
                                                    </div>
                                                </div>

                                            </div>

                                            <span class="close-overlay alert-push-down"></span>
                                        </div>
                                        <div class="logo-image">
                                            <div class="parsys adaptiveImagePar">
                                                <div class="component-wrapper section">

                                                    <div id="adaptive-image-901" class="clearfix component adaptive-image" data-config="adaptive-image-901-config" data-server="true" data-role="adaptive-image">

                                                        <a class="image-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="" target="_self">
																													<img src="<?php echo get_template_directory_uri().'/assets/images/carlson/logo-mobile.jpg';?>" alt="logo">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-components alert-push-down">
                                        <div class="header-wrapper">
                                            <div class="top-header">

																							<div class="header-section-1">j

                                                    <div class="search-input-container">
                                                        <div class="parsys searchInputPar">
                                                            <div class="component-wrapper section">

                                                                <div id="search-input-370" class="clearfix component search-input" data-config="search-input-370-config" data-server="true" data-role="search-input">
                                                                    <div class="search-icon-wrapper">
                                                                        <a class="search-icon btn" aria-label="Search" href="#"><span class="glyphicon glyphicon-search"></span></a>
                                                                    </div>
                                                                    <div class="input-group">

                                                                        <input id="searchbox" class="form-control search-textbox" placeholder="Search" type="text">
                                                                        <span class="input-group-btn">
																																					<button disabled="disabled" class="btn btn-default search-submit-btn" type="button">
																																						<span class="glyphicon glyphicon-search"></span>
																																					</button>

																																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="header-section-2">
                                                    <div class="navigation-container">
                                                        <div class="parsys navigationPar">
                                                            <div class="component-wrapper section">

                                                                <div id="navigation-851" class="clearfix component navigation" data-config="navigation-851-config" data-server="true" data-role="navigation">
                                                                    <nav class="navbar navbar-default" role="navigation">
                                                                        <div class="navbar-collapse" id="navbar-collapse-">
                                                                            <ul class="nav navbar-nav">

                                                                                <li class="dropdown clearfix">

                                                                                    <a class="link-label-text" href="http://www.carlsonwagonlit.com/content/cwt/global/en/what-we-do.html">
																																											Top 1
																																										</a>
                                                                                    <span class="dropdown-toggle" data-toggle="dropdown">
																																											<a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                    </span>

                                                                                    <ul class="dropdown-menu single-result">

                                                                                        <li><a href="http://www.carlsonwagonlit.com/content/cwt/global/en/what-we-do/travel-management.html">Top Inner 1</a></li>

                                                                                        <li><a href="http://www.carlsonwagonlit.com/content/cwt/global/en/what-we-do/traveler-care.html">Top Inner 2</a></li>

                                                                                    </ul>

                                                                                </li>
                                                                                <li class="dropdown clearfix">

                                                                                    <a class="link-label-text" href="http://www.carlsonwagonlit.com/content/cwt/global/en/how-we-do-it.html">
																																											Top 2
																																										</a>
                                                                                    <span class="dropdown-toggle" data-toggle="dropdown">
																																											<a href="#"><span class="glyphicon glyphicon-chevron-down"></span></a>
                                                                                    </span>

                                                                                    <ul class="dropdown-menu single-result">

                                                                                        <li><a href="http://www.carlsonwagonlit.com/content/cwt/global/en/how-we-do-it/travel-technology.html">Travel technology</a></li>

                                                                                        <li><a href="http://www.carlsonwagonlit.com/content/cwt/global/en/how-we-do-it/traveler-services.html">Traveler services</a></li>

                                                                                    </ul>

                                                                                </li>

                                                                                <li>
                                                                                    <a href="http://www.carlsonwagonlit.com/content/cwt/global/en/insights.html">Top 3</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </nav>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="manage-trip-container">
                                                        <div class="parsys RTEPar">
                                                            <div class="component-wrapper section">

                                                                <div id="rich-text-image-7" class="clearfix component rich-text-image" data-config="rich-text-image-260-config" data-server="true" data-role="rich-text-image">
                                                                    <div class="thumbnail">

                                                                        <div class="caption">
                                                                            <p>
																																							<span class="btn btn-medium white">
																																								<a adhocenable="false" href="http://www.carlsonwagonlit.com/content/cwt/global/en/book-manage-trip.html">Sign In</a>
																																							</span>
																																						</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="service-overlay-container">
                                                <div class="parsys ServiceOverlay">
                                                    <div class="component-wrapper section">

                                                        <div id="service-overlay-101" class="clearfix component service-overlay" data-config="service-overlay-101-config" data-server="true" data-role="service-overlay">
                                                            <ul class="serice-overlay-menu">
                                                                <li>
                                                                    <div class="ext-link">
                                                                        <a aria-label="CWT Portal sign-in" href="">
                                                                            <p class="menu-icon loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/signin.png'; ?>" alt="CWT Portal sign-in"></p>
                                                                            <span class="menu-text">Side 1</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="first-overlay alert-push-down"></div>
                                                                    <div class="close-so">
                                                                        <a href="#" aria-label="CWT Portal sign-in"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item">
                                                                        <a aria-label="Contact information" href="">
                                                                            <p class="menu-icon loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/contact.png'; ?>" alt="Contact information"></p>
                                                                            <span class="menu-text">Side 2</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="first-overlay alert-push-down"></div>
                                                                    <div class="close-so">
                                                                        <a href="#" aria-label="Contact information"></a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="menu-item">
                                                                        <a aria-label="CWT office locations" href="http://www.carlsonwagonlit.com/content/cwt/global/en/office-locations.html">
                                                                            <p class="menu-icon loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/locations.png'; ?>" alt="Alt "></p>
                                                                            <span class="menu-text">Side 3</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="first-overlay alert-push-down"></div>
                                                                    <div class="close-so">
                                                                        <a href="#" aria-label="CWT office locations"></a>
                                                                    </div>
                                                                </li>

                                                                <li>
                                                                    <div class="menu-item">
                                                                        <a aria-label="Helpful links" href="">
                                                                            <p class="menu-icon loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/links.png'; ?>" alt="Alt "></p>
                                                                            <span class="menu-text">Side 4</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="first-overlay alert-push-down"></div>
                                                                    <div class="close-so">
                                                                        <a href="#" aria-label="Helpful links"></a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
									</div>
								</header>
							</div>

	<!-- <header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-navigation">

			<button class="menu-icon" type="button" data-toggle="mobile-menu">
			<button class="navbar-toggle-back hide-for-medium hide" data-toggle="" data-target="">
				<span class="nav-arrow loaded"><img src="<?php echo get_template_directory_uri().'/assets/images/carlson/nav-arrow.jpg' ?>" alt="back to menu"></span>
			</button>
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
		</nav>

	</header> -->

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
