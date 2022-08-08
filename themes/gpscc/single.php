<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package GPS_Chartered_Consulting
 */

get_header();
the_post();
?>
<div id="content" class="site-content">
	<div class="page-header">
		<div class="container">
			<div class="breadc-box no-line">
				<div class="row">
					<div class="col-md-6">
						<h1 class="page-title"><?php echo get_the_title() ?></h1>
					</div>
					<div class="col-md-6 mobile-left text-right">
						<ul id="breadcrumbs" class="breadcrumbs none-style">
							<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
							<li><a href="<?php echo get_permalink(get_page_by_path('blogs')); ?>">Blog</a></li>
							<li class="active"><?php echo get_the_title() ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<main id="main" class="site-main">

						<article class="post-box post type-post hentry">
							<div class="entry-media">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog-single'); ?>" alt="<?php echo get_the_title() ?>">
								</a>
							</div>
							<div class="inner-post">
								<header class="entry-header">
									<div class="entry-meta">
										<span class="posted-on">
											<time class="entry-date published"><?php echo get_the_date(); ?></time>
										</span>
										<span class="posted-in">
											<a  rel="category tag"><?php echo get_the_author(); ?></a>
										</span>
									</div>
								</header>

								<div class="entry-summary">
									<p><?php echo apply_filters('the_content', get_the_content()); ?></p>
								</div>
								<!-- .entry-content -->
							</div>
						</article>
					</main>
					<!-- #main -->
				</div>

				<aside id="sidebar" class="widget-area primary-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<section id="search-2" class="widget widget_search">
						<form role="search" method="get" id="search-form" class="search-form" action="#">
							<input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
							<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
						</form>
					</section>
					<!-- <section id="categories-2" class="widget widget_categories">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<li><a href="#">Business</a></li>
							<li class="cat-item cat-item-3"><a href="#">Consulting</a></li>
							<li class="cat-item cat-item-4"><a href="#">Finacial</a></li>
							<li class="cat-item cat-item-5"><a href="#">Franchising</a></li>
							<li class="cat-item cat-item-6"><a href="#">Personal Injury</a></li>
							<li class="cat-item cat-item-1"><a href="#">Uncategorized</a></li>
						</ul>
					</section> -->
					<section id="recent_news-1" class="widget widget_recent_news">
						<h4 class="widget-title">Latest News</h4>
						<ul class="recent-news clearfix">
							<?php
							$args = array('post_type' => 'post', 'posts_per_page' => 6);
							$the_query = new WP_Query($args);
							if ($the_query->have_posts()) {
								while ($the_query->have_posts()) {
									$the_query->the_post();
							?>
									<li class="clearfix ">
										<div class="thumb">
											<a href="<?php the_permalink(); ?>">
												<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'testimonial'); ?>" alt="">
											</a>
										</div>
										<div class="entry-header">
											<h6>
												<a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
											</h6>
											<span class="post-on">
												<span class="entry-date"><?php echo get_the_date(); ?></span>
											</span>
										</div>
									</li>
							<?php }
							} ?>
						</ul>
					</section>
				</aside>

			</div>
		</div>
	</div>
</div>

<!-- <main id="primary" class="site-main"> -->

<?php
/* while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'gpscc' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'gpscc' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop. */
?>

<!-- </main> -->

<?php
get_footer();
