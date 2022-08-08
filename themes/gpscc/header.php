<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPS_Chartered_Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" id="bootstrap-css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" type="text/css" media="all">
	<link rel="stylesheet" id="awesome-font-css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" type="text/css" media="all">
	<link rel="stylesheet" id="ionicon-font-css" href="<?php echo get_template_directory_uri(); ?>/css/ionicon.css" type="text/css" media="all">
	<link rel="stylesheet" id="royal-preload-css" href="<?php echo get_template_directory_uri(); ?>/css/royal-preload.css" type="text/css" media="all">
	<link rel="stylesheet" id="slick-slider-css" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" id="slick-theme-css" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" type="text/css" media="all">

	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/revolution/css/settings.css">

	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/revolution/css/navigation.css">

	<link rel="shortcut icon" href="favicon.png">

	<?php wp_head(); ?>
</head>

<!-- <body <?php body_class(); ?>> -->

<body class="royal_preloader">
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="site-header" class="site-header sticky-header mobile-header-blue header-style-1">
			<!-- Main header start - Header Home-1, Default -->
			<!-- Top bar start / class css: topbar-dark -->
			<div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- social icons -->
							<ul class="social-list fleft">
								<li><a href="https://www.twitter.com/gpschartered/" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="https://www.facebook.com/gpschartered/" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="https://www.instagram.com/gpschartered/" target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
							<!-- social icons close -->
							<div class="topbar-text fright"> Opening Hours : Sunday to Friday - 9am to 5pm</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Top bar close -->

			<!-- Main header start -->
			<div class="main-header md-hidden sm-hidden">
				<div class="main-header-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="col-wrap-table">
									<div id="site-logo" class="site-logo col-media-left col-media-middle">
										<?php
										the_custom_logo();
										if (is_front_page() && is_home()) :
										?>
											<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
										<?php
										else :
										?>
											<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
										<?php
										endif;
										$gpscc_description = get_bloginfo('description', 'display');
										if ($gpscc_description || is_customize_preview()) :
										?>
											<p class="site-description"><?php echo $gpscc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																		?></p>
										<?php endif; ?>
									</div>
									<div class="col-media-body col-media-middle">
										<!-- contact info -->
										<ul class="info-list info_on_right_side fright">
											<li>
												<span>Address: <strong>Sankhamul, <br>New Baneshwor, Kathmandu, Nepal</strong></span>
											</li>
											<li>
												<span>Call us: <strong class="font-size18">(+977) 985-1018797</strong></span>
											</li>
										</ul>
										<!-- contact info close -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="main-header-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="header-mainnav">

									<!-- <div class="search-cart-box fright">
										<div class="toggle_search fright"><i class="fa fa-search" aria-hidden="true"></i></div>
										<div class="h-search-form-field">
											<form role="search" method="get" id="search-form" class="search-form" action="#">
												<input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
												<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
											</form>
										</div>
									</div> -->

									<div id="site-navigation" class="main-navigation fleft">
										<ul id="primary-menu" class="menu" style="padding-right: 20px;">
											<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
											<li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="#">Services</a>
												<ul class="sub-menu cust-tab">
													<div class="wrapper">
														<div class="tabs">
															<?php
															$terms = get_terms(array('taxonomy' => 'servicetype', 'orderby' => 'id', 'order' => 'ASC',));
															foreach ($terms as $key => $term) {
																$args = array(
																	'post_type' => 'service',
																	'posts_per_page' => -1,
																	'orderby'    => 'ID',
																	'order'      => 'ASC',
																	'tax_query' => array(
																		array(
																			'taxonomy' => 'servicetype',
																			'field' => 'slug',
																			'terms' => $term->slug

																		)
																	)
																);
																$the_query = new WP_Query($args);
															?>
																<div class="tab">
																	<input type="radio" name="css-tabs" id="tab-<?php echo $term->slug ?>" <?php
																																			if ($key == 0) { ?> checked <?php } ?> class="tab-switch">
																	<label for="tab-<?php echo $term->slug ?>" class="tab-label"><?php echo $term->name ?></label>
																	<div class="tab-content">
																		<div class="sub-menu col">
																			<?php while ($the_query->have_posts()) {
																				$the_query->the_post();  ?>
																				<div class="sub-list">
																					<label class="sub-text m-auto"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></label>
																					<div class="service_pricing">
																						<a class="price-text"><a href="<?php the_permalink(); ?>">*<?php echo get_field('charge'); ?></a></label>
																					</div>
																				</div>
																			<?php } ?>
																		</div>
																	</div>
																</div>
															<?php
															} ?>
														</div>
													</div>
												</ul>
											</li>
										</ul>
									</div>
									<div id="site-navigation" class="main-navigation fleft">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'primary',
												'menu' 			 => 'main_menu',
												'container'      => '',
												'menu_class'     => 'menu',
											)
										);
										?> </div>
									<!-- #site-navigation -->
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- Main header close -->

			<div class="header_mobile">
				<div class="mlogo_wrapper clearfix">
					<div class="mobile_logo">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						$gpscc_description = get_bloginfo('description', 'display');
						if ($gpscc_description || is_customize_preview()) :
						?>
							<p class="site-description"><?php echo $gpscc_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
														?></p>
						<?php endif; ?>
						<!-- <a href="#"><img src="images/logo-white.svg" alt="Consultax"></a> -->
					</div>
					<div id="mmenu_toggle">
						<button></button>
					</div>
				</div>
				<div class="mmenu_wrapper">
					<div class="mobile_nav collapse">
						<ul id="menu-main-menu" class="mobile_mainmenu">
							<li class="menu-item-has-children"><a href="index.html">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html" aria-current="page">Home 1</a></li>
									<li><a href="home-2.html">Home 2</a></li>
								</ul>
							</li>
							<li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li class="menu-item-1738"><a href="about.html">About Us</a></li>
									<li class="menu-item-1745"><a href="team.html">Our Team</a></li>
									<li class="menu-item-1742"><a href="how-it-work.html">How It Work</a></li>
									<li class="menu-item-1746"><a href="testimonials.html">Testimonials</a></li>
									<li class="menu-item-1757"><a href="services.html">Services Box</a></li>
									<li class="menu-item-1744"><a href="services-icon.html">Icon Box</a></li>
									<li class="menu-item-1740"><a href="career.html">Career</a></li>
								</ul>
							</li>
							<li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="services.html">Services</a>
								<ul class="sub-menu">
									<li class="menu-item-1791"><a href="service-detail.html">Financial Consulting</a></li>
									<li class="menu-item-1758"><a href="service-detail.html">International Business</a></li>
									<li class="menu-item-1790"><a href="service-detail.html">Audit &amp; Assurance</a></li>
									<li class="menu-item-1760"><a href="service-detail.html">Taxes and Efficiency</a></li>
									<li class="menu-item-1761"><a href="service-detail.html">Bonds &amp; Commodities</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="projects.html">Cases Study</a>
								<ul class="sub-menu">
									<li><a href="projects.html">Cases Study 2 Columns</a></li>
									<li><a href="projects-2.html">Cases Study 3 Columns</a></li>

									<li><a href="project-detail.html">Cases Study Details</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="blog.html">Blog</a>
								<ul class="sub-menu">
									<li><a href="blog.html">Blog List</a></li>
									<li><a href="post.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>

						</ul>
					</div>
				</div>
			</div>
		</header>