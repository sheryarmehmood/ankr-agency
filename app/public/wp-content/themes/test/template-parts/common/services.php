<section class="services" id="services-section">
    <div class="container">
        <div class="inner">
            <div class="sec__head">
                <div class="sec__head--title">
                    <h2>
                        <!-- <p>Our <strong>Services</strong></p> -->
                        <p><?php echo get_field('services_heading_main'); ?></p>
                    </h2>
                    <span class="sec__head--title-arc"></span>
                </div>
                <div class="sec__head--headline">
                <p><?php echo get_field('services_headline'); ?></p>
                        <!-- <p>Want a better return on your online investment? That&#8217;s where we come in. We
                            help you get noticed on search engines, create posts that your audience loves, and
                            build websites that make visitors want to stay. With our data tools, we make sure
                            everything is working like it should.</p> -->

                </div>
            </div>
        </div>
    </div>
    <div class="services__list">
        <div class="service">
            <div class="service__image">
                <!-- <img width="150" height="71"
                    src="https://ankragency.com/wp-content/uploads/2023/09/social-media-service.jpg"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" /> -->
                    <img width="150" height="71"
                    src="<?php echo get_field('services_image_social_media'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
                <h3><?php echo get_field('services_heading_social_media'); ?></h3>
                    <!-- <h3>Social Media </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="116"
                    src="<?php echo get_field('services_image_google_ads'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_google_ads'); ?></h3>
                <!-- <h3>
                    Google Ads </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                    <img width="150" height="84"
                    src="<?php echo get_field('services_image_seo'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" />
            </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_seo'); ?></h3>
                <!-- <h3>
                    SEO </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="84"
                    src="<?php echo get_field('services_image_marketing'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_marketing'); ?></h3>
                <!-- <h3>
                    Marketing </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="<?php echo get_field('services_image_video_production'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_video_production'); ?></h3>
                <!-- <h3>
                    Video Production </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="<?php echo get_field('services_image_photography'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_photography'); ?></h3>
                <!-- <h3>
                    Photography </h3> -->
            </div>
        </div>
        <div class="service">
            <div class="service__image">
                <img width="150" height="100"
                    src="<?php echo get_field('services_image_website_building'); ?>"
                    class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async"
                    loading="lazy" /> </div>
            <div class="service__title">
            <h3><?php echo get_field('services_heading_website_building'); ?></h3>
                <!-- <h3>
                    Website Building </h3> -->
            </div>
        </div>
    </div>
</section>