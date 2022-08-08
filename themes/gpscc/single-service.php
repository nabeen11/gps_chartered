<?php get_header();
the_post(); ?>

<div id="content" class="site-content">
    <div class="page-header">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title"><?php echo get_the_title(); ?></h1>
                    </div>
                    <div class="col-md-6 mobile-left text-right">
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('career'); ?>">Career</a></li>
                            <li class="active"><?php echo get_the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div id="primary" class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
                    <main id="main" class="site-main">
                        <article class="ot_service type-ot_service status-publish has-post-thumbnail hentry">
                            <div class="inner-post">
                                <section class="wpb_row row-fluid">
                                    <div class="container">
                                        <div class="row">
                                            <div class="wpb_column column_container col-sm-12">
                                                <div class="column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element">
                                                            <div class="wpb_wrapper">
                                                                <p><?php echo apply_filters('the_content', get_the_content()); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space_30"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </main>
                    <!-- #main -->
                </div>
                <aside id="sidebar" class="widget-area service-sidebar col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section id="nav_menu-1" class="widget widget_nav_menu">
                        <h4 class="widget-title">Service Charge &nbsp; &nbsp;<span style="color: red;">(<?php echo get_field('charge') ?>)</span></h4>
                    </section>
                    <section id="text-1" class="widget widget_text bg-second text-light">
                        <h4 class="widget-title">Enquiry here</h4>
                        <div class="textwidget">
                            <div class="wpcf7">
                                <div class="screen-reader-response"></div>
                                <?php echo do_shortcode('[contact-form-7 id="176" title="Contact form 1"]'); ?>
                            </div>
                        </div>
                    </section>
                </aside>

            </div>
        </div>
    </div>

</div>


<?php get_footer();
