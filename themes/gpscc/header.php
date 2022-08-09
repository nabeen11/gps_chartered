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
												<span>Call us: <strong class="font-size1">(+977) 985-1018797<br><span style="color: #0469b7;">Email us: <strong>gpschartered@gmail.com</strong></span></strong></span>
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
										?>
									</div>
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
					</div>
					<div id="mmenu_toggle">
						<button></button>
					</div>
				</div>
				<div class="mmenu_wrapper">
					<div class="mobile_nav collapse">
						<ul id="menu-main-menu" class="mobile_mainmenu">
							<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
							<li class="menu-item-has-children"><a href="#">Services</a>
								<ul class="sub-menu">
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
										<li class="menu-item-has-children"><a href="#" aria-current="page"><?php echo $term->name ?></a>
											<?php while ($the_query->have_posts()) {
												$the_query->the_post();  ?>
												<ul class="sub-menu" style="background: #f23225;">
													<li>
														<a href="<?php the_permalink(); ?>" aria-current="page"><?php echo get_the_title(); ?> <span style="float: right;">*<?php echo get_field('charge'); ?></span></a>
													</li>
												</ul>
											<?php
											} ?>
										</li>
									<?php
									} ?>

								</ul>
							</li>
						</ul>
					</div>
					<div class="mobile_nav collapse">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'primary',
								'menu' 			 => 'main_menu',
								'container'      => '',
								'menu_class'     => 'mobile_mainmenu',
							)
						);
						?>
					</div>
				</div>
			</div>
		</header>