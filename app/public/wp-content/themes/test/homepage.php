<?php /* Template Name: Homepage */ ?>
	
<?php
get_header();
?>

<main id="primary" class="site-main">

<?php

get_template_part('template-parts/home-page/home-hero', 'page');

get_template_part('template-parts/home-page/home-about', 'page');

get_template_part('template-parts/common/services', 'page');

get_template_part('template-parts/home-page/home-projects', 'page');

get_template_part('template-parts/common/testimonials', 'page');

get_template_part('template-parts/home-page/home-team', 'page');

get_template_part('template-parts/home-page/home-contact', 'page');
?>



<!-- End of HTML section for 'contact_us_module' -->


</main><!-- #main -->

<?php
get_footer();
 