<?php get_header(); ?>

<div id="content" class="site-content">
    <div class="entry-content">
        <div class="container">
            <div class="boxed-content">

                <section class="wpb_row row-fluid radius-top row-has-fill download-section">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element text-light">
                                            <div class="wpb_wrapper">
                                                <h5>GPS Charterd Consultant</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="wpb_row row-fluid section-padd no-bot">
                    <div class="container">
                        <div class="row">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="section-head ">
                                            <h6><span>We are Hiring</span></h6>
                                            <h2 class="section-title">A dream job awaits you</h2>
                                        </div>

                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>GPS Chartered Consulting Pvt Ltd is a consulting firm focused on assisting organizations with Growth, Productivity, and Strategy by providing corporate services in the field of Income Tax , VAT, Accounting , Finance and Start up support Services.</p>
                                            </div>
                                        </div>
                                        <?php
                                        while (have_posts()) {
                                            the_post();
                                        ?>
                                            <div class="career-box ">
                                                <h5><?php echo get_the_title(); ?></h5>
                                                <div class="content-box">
                                                    <h6 class="font12">Descriptions:</h6>
                                                    <p><?php echo wp_trim_words(get_the_content(), 55) ?></p>                                                    
                                                    <a class="btn" href="<?php echo the_permalink(); ?>">APPLY NOW</a>
                                                </div>
                                            </div>
                                            <div class="empty_space_45"></div>
                                        <?php } ?>
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
