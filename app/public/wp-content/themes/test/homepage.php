<?php /* Template Name: Homepage */ ?>
	
<?php
get_header();
?>

<main id="primary" class="site-main">

<?php
get_template_part('template-parts/home-page/home-hero', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-about', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-services', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-projects', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-testimonials', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-team', 'page');
?>

<?php
get_template_part('template-parts/home-page/home-contact', 'page');
?>



<!-- End of HTML section for 'contact_us_module' -->


</main><!-- #main -->

<?php
get_footer();
