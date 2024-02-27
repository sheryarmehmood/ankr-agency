<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Test
 */

?>

	<!-- <footer id="colophon" class="site-footer" style="background-color:#30303b"> -->
	<footer class="footer" style="background-color:#30303b">
	<div class="container">
                <div class="inner">
                    <div class="footer__top">
                        <div class="footer__links">
                            <a href="">Home</a>
                            <a href="">About Us</a>
                            <a href="">Marketing Services</a>
                            <a href="">Contact Us</a>
                            <a href="">Schedule a Strategy Session</a>
                        </div>
                        <div class="footer__social">
                            <a href="" class="footer__site--logo">
                                <img src="https://ankragency.com/wp-content/themes/urban_insight/assets/images/logo-white.png"
                                    alt="">
                            </a>
                            <h6>Follow us</h6>
                            <!-- <div class="footer__social--links">
                                <a href="https://www.facebook.com/ankragency/" class="fa-brands fa-square-facebook"></a>
                                <a href="https://www.youtube.com/channel/UCWIU4WpYkcc1Sd3J-SLOi-Q"
                                    class="fa-brands fa-youtube"></a>
                                <a href="https://twitter.com/ankragency" class="fa-brands fa-twitter"></a>
                                <a href="https://www.instagram.com/ankragency/?hl=en"
                                    class="fa-brands fa-instagram"></a>
                            </div> -->
                            <div class="footer__widget-area">
                                <?php
                                // Check if the widget area is active
                                if ( is_active_sidebar( 'footer_widget_area' ) ) {
                                    dynamic_sidebar( 'footer_widget_area' );
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="footer__bottom">
                        <div class="copyright__text">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

		<!-- <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'test' ) ); ?>">
				<?php
				
				printf( esc_html__( 'Proudly powered by %s', 'test' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'test' ), 'test', '<a href="http://underscores.me/">Malik</a>' );
				?>
		</div> -->
	</footer><!-- #colophon -->


</div><!-- #page -->

<script src='https://ankragency.com/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1'
            id='swv-js'></script>
        <script id='contact-form-7-js-extra'>
            var wpcf7 = {
                "api": {
                    "root": "https:\/\/ankragency.com\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                },
                "cached": "1"
            };
        </script>
        <script src='https://ankragency.com/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.8.1'
            id='contact-form-7-js'></script>
        <script src='https://ankragency.com/wp-content/themes/urban_insight/js/custom.js?ver=1.0.0' id='custom_js-js'>
        </script>
        <script src='https://ankragency.com/wp-content/themes/urban_insight/js/navigation.js?ver=1.0.0'
            id='urban_insight-navigation-js'></script>
        <script
            src='https://www.google.com/recaptcha/api.js?render=6LdlEasoAAAAAOEce4-Bh4N4jIPuuXdLnklnUXE7&#038;ver=3.0'
            id='google-recaptcha-js'></script>
        <script src='https://ankragency.com/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2'
            id='wp-polyfill-inert-js'></script>
        <script src='https://ankragency.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11'
            id='regenerator-runtime-js'></script>
        <script src='https://ankragency.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0'
            id='wp-polyfill-js'></script>
        <script id='wpcf7-recaptcha-js-extra'>
            var wpcf7_recaptcha = {
                "sitekey": "6LdlEasoAAAAAOEce4-Bh4N4jIPuuXdLnklnUXE7",
                "actions": {
                    "homepage": "homepage",
                    "contactform": "contactform"
                }
            };
        </script>
        <script src='https://ankragency.com/wp-content/plugins/contact-form-7/modules/recaptcha/index.js?ver=5.8.1'
            id='wpcf7-recaptcha-js'></script>

<?php wp_footer(); ?>

</body>
</html>
