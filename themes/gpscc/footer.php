<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GPS_Chartered_Consulting
 */

?>

<footer id="site-footer" class="site-footer bg-second">
	<div class="main-footer">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-6">
					<div id="media_image-1" class="widget widget_media_image">
						<?php
						the_custom_logo(); ?>
						<!-- <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>" alt=""></a> -->
					</div>
					<div id="custom_html-1" class="widget_text widget widget_custom_html">
						<div class="textwidget custom-html-widget">
							<p>
								We focus on assisting organizations
								with Growth, Productivity, and Strategy by providing corporate and Start up support Services.</p>

							<!-- <p>
								<a href="about.html" class="pagelink gray">About us</a>
							</p> -->

						</div>
					</div>
				</div>
				<!-- end col-lg-3 -->

				<div class="col-md-3 col-sm-6">
					<section id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
						<h4 class="widget-title">Services</h4>
						<div class="textwidget custom-html-widget">
							<ul class="padd-left">
								<?php
								$terms = get_terms(array('taxonomy' => 'servicetype', 'orderby' => 'id', 'order' => 'ASC',));
								foreach ($terms as $term) {
								?>
									<li><a href="<?php echo get_term_link($term, 'servicetype'); ?>"><?php echo $term->name ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</section>
				</div>
				<!-- end col-lg-3 -->

				<div class="col-md-3 col-sm-6">
					<section id="custom_html-3" class="widget_text widget widget_custom_html padding-left">
						<h4 class="widget-title">Quick Links</h4>
						<div class="textwidget custom-html-widget">
							<ul class="padd-left">
								<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
								<li><a href="<?php echo get_permalink(get_page_by_path('about-us')) ?>">About</a></li>
								<!-- <li><a href="<?php echo get_post_type_archive_link('team'); ?>">Teams</a></li> -->
								<li><a href="<?php echo get_post_type_archive_link('career'); ?>">Career</a></li>
								<li><a href="<?php echo get_permalink(get_page_by_path('blogs')) ?>">Blog</a></li>
								<li><a href="<?php echo get_permalink(get_page_by_path('contact')) ?>">Contact Us</a></li>
							</ul>
						</div>
					</section>
				</div>
				<!-- end col-lg-3 -->

				<div class="col-md-3 col-sm-6">
					<section id="mc4wp_form_widget-1" class="widget widget_mc4wp_form_widget">
						<h4 class="widget-title">Contact Details</h4>
						<div class="textwidget custom-html-widget">
							<ul class="padd-left">
								<li><a>Sankhamul, New Baneshwor</a></li>
								<li><a>+977-985-1018797</a></li>
							</ul>
							<div class="ot-socials bg-white">
								<a href="https://www.facebook.com/gpschartered/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
								<a href="https://www.twitter.com/gpschartered/" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
								<a href="https://www.inatagram.com/gpschartered/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</section>
				</div>
				<!-- end col-lg-3 -->

			</div>
		</div>
	</div>
	<!-- .main-footer -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="footer-copyright">
						© 2022 GPS Chartered Consulting by <a target="_blank" href="https://spellinnovation.com/">Spell Innovation</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="footer-nav text-right mobile-center">
						<!-- <ul id="footer-menu" class="none-style">
							<li><a href="<?php echo get_permalink(get_page_by_path('toc')); ?>">Terms and Conditions</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('privacy-policy')); ?>">Privacy Policy</a></li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- .copyright-footer -->
	<a id="back-to-top" href="#" class="show"></a>
</footer>
<!-- #site-footer -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/countto.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/slick.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/royal_preloader.min.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/header-footer.js'></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
<!-- RS5.0 Extensions Files -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script>
	jQuery(document).ready(function() {
		jQuery("#revolution-slider").revolution({
			sliderType: "standard",
			delay: 7500,
			navigation: {
				arrows: {
					enable: true
				}
			},
			spinner: "off",
			gridwidth: 1170,
			gridheight: 700,
			disableProgressBar: "on",
			responsiveLevels: [1920, 1229, 991, 480],
			gridwidth: [1170, 970, 750, 450],
			gridheight: [700, 700, 700, 700]
		});
	});
</script>

<?php wp_footer(); ?>

</body>

</html>