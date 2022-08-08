<?php get_header(); ?>
<div id="content" class="site-content">
    <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
        <div id="revolution-slider">
            <ul>
                <?php
                $args = array('post_type' => 'slider', 'posts_per_page' => 3);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                            <!--  BACKGROUND IMAGE -->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/slide-home1.jpg" alt="background" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                            <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="['0']" data-y="bottom" data-voffset="" data-width="['auto','320','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                                <img class="img-responsive md-hidden sm-hidden xs-hidden" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'slider'); ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                            <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                                <p>WE ARE GPS</p>
                            </div>
                            <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                                <p><?php echo get_the_title(); ?></p>
                            </div>
                            <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                                <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            </div>
                            <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                                <a class="btn" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">GET QUOTE</a>
                            </div>
                        </li>
                <?php }
                } ?>

            </ul>
        </div>
    </section>

    <!-- Who We Are Start -->
    <?php
    $args = array('post_type' => 'page', 'name' => 'who-we-are');
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        $the_query->the_post();
    ?>
        <section class="wpb_row row-fluid top-70 row-has-fill relative bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (have_rows('about')) {
                        while (have_rows('about')) {
                            the_row();
                            $image = get_sub_field('image');
                    ?>
                            <div class="wpb_column column_container col-sm-6 col-md-3">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="service-box icon-box box-shadow-2 ionic ">
                                            <img src="<?php echo $image['url']; ?>" alt="about icon">
                                            <div class="content-box">
                                                <h4><?php echo get_sub_field('title') ?></h4>
                                                <p><?php echo get_sub_field('desc') ?></p>
                                            </div>
                                        </div>

                                        <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </section>
        <section class="wpb_row row-fluid section-padd row-has-fill row-o-equal-height row-o-content-middle row-flex bg-light">
            <div class="container">
                <div class="row">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                                    <div class="wpb_column column_container col-sm-12 col-md-6 col-has-fill custom-padd-1" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'who-we'); ?>') no-repeat center;">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
                                    <div class="bg-second wpb_column column_container col-sm-12 col-md-6">
                                        <div class="column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="empty_space_60 lg-hidden h60"><span class="empty_space_inner"></span></div>

                                                <div class="section-head padding-box-2 text-light">
                                                    <h6><span>ABOUT US</span></h6>
                                                    <h2 class="section-title">Who We Are</h2>
                                                </div>

                                                <div class="wpb_text_column wpb_content_element padding-box-2 text-light">
                                                    <div class="wpb_wrapper">
                                                        <p><?php echo get_the_content(); ?></p>
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
        </section>
    <?php } ?>
    <!-- Who We Are End -->

    <!-- Services Start -->
    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>OUR SERVICES</span></h6>
                                <h2 class="section-title">What we bring to you</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="<?php echo get_post_type_archive_link('service'); ?>">All services</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $args = array('post_type' => 'service', 'posts_per_page' => 6);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>
                        <div class="wpb_column column_container col-sm-6 col-md-4">
                            <div class="column-inner">
                                <div class="wpb_wrapper">
                                    <div class="service-box icon-box  ionic  hover-box">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>">
                                        <div class="content-box">
                                            <h4><?php echo get_the_title(); ?></h4>
                                            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                                            <a class="link-box pagelink" href="<?php the_permalink(); ?>" target="_self">Read
                                                more</a>
                                        </div>
                                    </div>

                                    <div class="empty_space_30"><span class="empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </section>
    <!-- Services End -->


    <!-- Blog Start -->
    <section class="wpb_row row-fluid section-padd bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>our blog</span></h6>
                                <h2 class="section-title">Our latest news</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="<?php echo get_permalink(get_page_by_path('blogs')); ?>">View all posts</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="news-slider posts-grid row" data-show="3" data-auto="true">

                                <?php
                                $args = array('post_type' => 'post', 'posts_per_page' => 4);
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                ?>
                                        <div>
                                            <article class="news-item content-area">
                                                <div class="inner-item radius-top">
                                                    <div class="thumb-image">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'blog'); ?>" alt="<?php echo get_the_title(); ?>">
                                                        </a>
                                                    </div>
                                                    <div class="inner-post radius-bottom">
                                                        <div class="entry-meta">
                                                            <span class="posted-on">
                                                                <time class="entry-date"><?php echo get_the_date(); ?></time>
                                                            </span>
                                                        </div>
                                                        <h4 class="entry-title">
                                                            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                                        </h4>
                                                        <p>
                                                            <?php echo wp_trim_words(get_the_content(), 25); ?>
                                                        </p>
                                                        <a class="post-link" href="<?php the_permalink(); ?>">Read more</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Testimonial Start -->
    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>Testimonials</span></h6>
                                <h2 class="section-title">What our clients says?</h2>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>

                            <div class="testi-slider" data-show="3" data-arrow="true">
                                <?php
                                $args = array('post_type' => 'testimonial', 'posts_per_page' => 6);
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                ?>
                                        <div>
                                            <div class="testi-item box-shadow-hover">
                                                <div class="testi-head">
                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'testimonial'); ?>" class="client-img" alt="<?php echo get_the_title(); ?>">
                                                    <h5><?php echo get_the_title(); ?></h5>
                                                </div>
                                                <div class="line"></div>
                                                <div class="testi-content">
                                                    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>

                            <div class="empty_space_80"><span class="empty_space_inner"></span></div>

                            <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                                <?php
                                $args = array('post_type' => 'partner', 'posts_per_page' => 6);
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) {
                                    while ($the_query->have_posts()) {
                                        $the_query->the_post();
                                ?>
                                        <div>
                                            <div class="partner-item text-center clearfix">
                                                <div class="inner">
                                                    <div class="thumb">
                                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'partner'); ?>" alt="<?php echo get_the_title(); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

</div>

<?php get_footer();
