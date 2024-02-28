<?php
/**
 * Test functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Test
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function test_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Test, use a find and replace
		* to change 'test' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'test', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'test' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'test_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'test_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function test_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'test_content_width', 640 );
}
add_action( 'after_setup_theme', 'test_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function test_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'test' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'test' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'test_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function test_scripts() {
	wp_enqueue_style( 'test-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'test-style', 'rtl', 'replace' );

	wp_enqueue_script( 'test-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'test_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}




//custom block registration

add_action( 'acf/init', 'ankr_agency_custom_blocks' );
function ankr_agency_custom_blocks() {
	/*check function exists*/
	if ( function_exists( 'acf_register_block' ) ) {
		/* New redesign blocks*/
		acf_register_block( array(
			'name'            => 'hero-block',
			'title'           => __( 'Hero block' ),
			'description'     => __( 'FHRC Hero Section' ),
			'render_template' => '/template-parts/home-page/home-about.php',
			'enqueue_assets'  => function () {
				// assetEnqueue( 'home-hero-block-style', '/redesign/blocks/home-hero-block/home-hero-block.css', true, false );
				// assetEnqueue( 'home-hero-block-script', '/redesign/blocks/home-hero-block/home-hero-block.js', true, false );
			},
			'category'        => 'blocks',
			'icon'            => 'welcome-add-page',
			'keywords'        => array( 'heroblock', 'hero', '' ),
			'multiple'        => true,
			'mode'            => 'edit',
		) );
}
}



class Social_Icons_Widget extends WP_Widget {

    // Constructor
    function __construct() {
        parent::__construct(
            'social_icons_widget', // Base ID
            __('Social Icons Widget', 'text_domain'), // Name
            array( 'description' => __( 'A widget to display social icons', 'text_domain' ), ) // Args
        );
    }

    // Widget Frontend
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>
        <div class="footer__social">
            <!-- <a href="" class="footer__site--logo">
                <img src="https://ankragency.com/wp-content/themes/urban_insight/assets/images/logo-white.png"
                    alt="">
            </a> -->
            <!-- <h6>Follow us</h6> -->
            <div class="footer__social--links">
                <a href="<?php echo esc_url( $instance['facebook_url'] ); ?>" class="fa-brands fa-square-facebook"></a>
                <a href="<?php echo esc_url( $instance['youtube_url'] ); ?>" class="fa-brands fa-youtube"></a>
                <a href="<?php echo esc_url( $instance['twitter_url'] ); ?>" class="fa-brands fa-twitter"></a>
                <a href="<?php echo esc_url( $instance['instagram_url'] ); ?>" class="fa-brands fa-instagram"></a>
            </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    // Widget Backend
    public function form( $instance ) {
        // Widget form fields
        $facebook_url = ! empty( $instance['facebook_url'] ) ? $instance['facebook_url'] : '';
        $youtube_url = ! empty( $instance['youtube_url'] ) ? $instance['youtube_url'] : '';
        $twitter_url = ! empty( $instance['twitter_url'] ) ? $instance['twitter_url'] : '';
        $instagram_url = ! empty( $instance['instagram_url'] ) ? $instance['instagram_url'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook_url' ); ?>">Facebook URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook_url' ); ?>" name="<?php echo $this->get_field_name( 'facebook_url' ); ?>" type="text" value="<?php echo esc_attr( $facebook_url ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'youtube_url' ); ?>">YouTube URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'youtube_url' ); ?>" name="<?php echo $this->get_field_name( 'youtube_url' ); ?>" type="text" value="<?php echo esc_attr( $youtube_url ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'twitter_url' ); ?>">Twitter URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'twitter_url' ); ?>" name="<?php echo $this->get_field_name( 'twitter_url' ); ?>" type="text" value="<?php echo esc_attr( $twitter_url ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'instagram_url' ); ?>">Instagram URL:</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'instagram_url' ); ?>" name="<?php echo $this->get_field_name( 'instagram_url' ); ?>" type="text" value="<?php echo esc_attr( $instagram_url ); ?>">
        </p>
        <?php
    }

    // Updating widget replacing old instances with new 
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['facebook_url'] = ( ! empty( $new_instance['facebook_url'] ) ) ? strip_tags( $new_instance['facebook_url'] ) : '';
        $instance['youtube_url'] = ( ! empty( $new_instance['youtube_url'] ) ) ? strip_tags( $new_instance['youtube_url'] ) : '';
        $instance['twitter_url'] = ( ! empty( $new_instance['twitter_url'] ) ) ? strip_tags( $new_instance['twitter_url'] ) : '';
        $instance['instagram_url'] = ( ! empty( $new_instance['instagram_url'] ) ) ? strip_tags( $new_instance['instagram_url'] ) : '';
        return $instance;
    }
}


// Register and load the widget
function load_social_icons_widget() {
    register_widget( 'Social_Icons_Widget' );
}
add_action( 'widgets_init', 'load_social_icons_widget' );


// Register Footer Widget Area
function theme_register_footer_widget_area() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'theme-text-domain' ),
        'id'            => 'footer_widget_area',
        'description'   => __( 'Widgets added here will appear in the footer.', 'theme-text-domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',	
    ) );
}
add_action( 'widgets_init', 'theme_register_footer_widget_area' );
