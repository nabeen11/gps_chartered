<!-- Template Name: About Us
 -->

<?php get_header();
the_post();
 ?>

<div id="content" class="site-content">
    <div class="page-header">
        <div class="container">
            <div class="breadc-box no-line">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="page-title">About Us</h1>
                    </div>
                    <div class="col-md-6 mobile-left text-right">
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">

                <section class="wpb_row row-fluid section-padd">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>ABOUT US</span></h6>
                                            <h2 class="section-title">We are GPS Charterd Consultant</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <p><?php echo get_the_content(); ?>
                                                </p>

                                            </div>
                                        </div>

                                        <div class="ot-socials ">
                                            <span>Follow us:</span>
                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-pinterest-p"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="wpb_row row-fluid pad-b">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>What do we do?</span></h6>
                                            <h2 class="section-title">Our Mission and Vision</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p><?php echo get_field('short_desc'); ?> <a class="pagelink" href="<?php echo get_post_type_archive_link('service'); ?>">Our services</a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="row wpb_row inner row-fluid row-o-equal-height row-flex" >
                                            <div class="wpb_column column_container col-sm-12" style="padding: 0px;">
                                                <div class="column-inner">
                                                    <div class="wpb_wrapper feature-row">
                                                        <div class="padd-3">
                                                            <div class="feature-box">
                                                                <h4>Our Mission</h4>
                                                                <p><?php echo get_field('mission'); ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space_30 lg-hidden"></div>
                                                        <div class="padd-3">
                                                            <div class="feature-box">
                                                                <h4>Our Vision</h4>
                                                                <p><?php echo get_field('vision'); ?></p>
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

                <section class="wpb_row row-fluid mobile-padd section-counto row-has-fill">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head  text-light">
                                            <h6><span>achievements &amp; statistics</span></h6>
                                            <h2 class="section-title">Our 3+ years of operation</h2>
                                        </div>

                                        <div class="empty_space_12"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_left col-sm-4">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="fun-facts bg-light">
                                            <div class="icon-fact">
                                                <i class="ion ion-md-ion ion-ios-people ion-logo-ion ion-ios-people"></i>
                                            </div>
                                            <h4>More Than <span class="number text-primary bolder" data-to="1000" data-speed="2000">0</span> <span class="bolder text-primary">clients</span></h4>
                                        </div>

                                        <div class="empty_space_30 lg-hidden md-hidden"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_mid col-sm-4">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="fun-facts  bg-light">
                                            <div class="icon-fact">
                                                <i class="ion ion-md-ion ion-ios-document ion-logo-ion ion-ios-document"></i>
                                            </div>
                                            <h4><span class="number text-primary bolder" data-to="1080" data-speed="2000">0</span> <span class="bolder text-primary">services</span> completed</h4>
                                        </div>

                                        <div class="empty_space_30 lg-hidden md-hidden"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column column_right col-sm-4">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="fun-facts  bg-light">
                                            <div class="icon-fact">
                                                <i class="ion ion-md-ion ion-ios-person ion-logo-ion ion-ios-person"></i>
                                            </div>
                                            <h4><span class="number text-primary bolder" data-to="20" data-speed="2000">0</span> <span class="bolder text-primary">experts</span> are working</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>

<?php get_footer();
