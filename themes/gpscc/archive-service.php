<?php get_header(); ?>

<div id="content" class="site-content">
    <div class="page-header">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title">Our Services</h1>
                    </div>
                    <div class="col-md-6 mobile-left text-right">
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li class="active">Our Services</li>
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
                $terms = get_terms(array('taxonomy' => 'servicetype', 'orderby' => 'id', 'order' => 'ASC',));
                foreach ($terms as $term) {
                ?>
                        <div class="wpb_column column_container col-sm-6 col-md-3">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="service-box icon-box  ionic  hover-box">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>">
                                        <div class="content-box">
                                            <h4><?php echo $term->name ?></h4>
                                            <a class="link-box pagelink" href="<?php echo get_term_link($term, 'servicetype'); ?>" target="_self">View
                                                more</a>
                                        </div>
                                    </div>

                                    <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                <?php }
                 ?>
            </div>
        </div>
    </section>
</div>


<?php get_footer();
