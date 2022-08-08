<?php get_header(); ?>

<div id="content" class="site-content">
	<div class="page-header">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title">Blogs</h1>
					</div>
					<div class="col-md-6 mobile-left text-right">
						<ul id="breadcrumbs" class="breadcrumbs none-style">
							<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
							<li class="active">Our Blogs</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="wpb_row row-fluid row-o-equal-height row-flex section-padd">
		<div class="container">
			<div class="row">
				<?php
				while (have_posts()) {
					the_post();
				?>
					<div class="wpb_column column_container col-sm-6 col-md-4">
						<div class="column-inner">
							<div class="wpb_wrapper">
								<div class="service-box image-box">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'blog'); ?>" alt="<?php echo get_the_title(); ?>"></a>
									<div class="content-box">
										<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
										<p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
										<a class="link-box pagelink" href="<?php the_permalink(); ?>" target="_self">Read
											more</a>
									</div>
								</div>

								<div class="empty_space_30"><span class="empty_space_inner"></span></div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
</div>


<?php get_footer();
