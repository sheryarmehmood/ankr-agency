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
                            <div class="footer__social--links">
                                <a href="https://www.facebook.com/ankragency/" class="fa-brands fa-square-facebook"></a>
                                <a href="https://www.youtube.com/channel/UCWIU4WpYkcc1Sd3J-SLOi-Q"
                                    class="fa-brands fa-youtube"></a>
                                <a href="https://twitter.com/ankragency" class="fa-brands fa-twitter"></a>
                                <a href="https://www.instagram.com/ankragency/?hl=en"
                                    class="fa-brands fa-instagram"></a>
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

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'test' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'test' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'test' ), 'test', '<a href="http://underscores.me/">Malik</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
