<?php

/**
 * GPS Chartered Consulting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GPS_Chartered_Consulting
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gpscc_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on GPS Chartered Consulting, use a find and replace
		* to change 'gpscc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('gpscc', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'gpscc'),
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
			'gpscc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
			'header-text' => array('.site-title', '.site-description'),

		)
	);

	add_image_size('slider', 504, 646, true);
	add_image_size('testimonial', 50, 50, true);
	add_image_size('partner', 152, 30, true);
	add_image_size('blog', 370, 245, true);
	add_image_size('blog-single', 770, 350, true);

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support('post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	));
}
add_action('after_setup_theme', 'gpscc_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gpscc_content_width()
{
	$GLOBALS['content_width'] = apply_filters('gpscc_content_width', 640);
}
add_action('after_setup_theme', 'gpscc_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gpscc_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'gpscc'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'gpscc'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'gpscc_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function gpscc_scripts()
{
	wp_enqueue_style('gpscc-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('gpscc-style', 'rtl', 'replace');

	wp_enqueue_script('gpscc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'gpscc_scripts');

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
 * Home Slider.
 */
require get_template_directory() . '/inc/slider.php';

/**
 * Services.
 */
require get_template_directory() . '/inc/service.php';

/**
 * Testimonial.
 */
require get_template_directory() . '/inc/testimonial.php';
/**
 * Partners.
 */
require get_template_directory() . '/inc/partner.php';
/**
 * Teams.
 */
require get_template_directory() . '/inc/team.php';
/**
 * Career.
 */
require get_template_directory() . '/inc/career.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Add SVG Files
function upload_svg_files($allowed)
{
	if (!current_user_can('manage_options'))
		return $allowed;
	$allowed['svg'] = 'image/svg+xml';
	return $allowed;
}
add_filter('upload_mimes', 'upload_svg_files');
/*-----------------------------------------------------------------------------------------------------------------*/

//Remove WP Version
remove_action('wp_head', 'wp_generator');

function nabin_remove_version()
{
	return '';
}
add_filter('the_generator', 'nabin_remove_version');
/*-----------------------------------------------------------------------------------------------------------------*/


add_filter('rest_authentication_errors', function ($result) {
	// If a previous authentication check was applied,
	// pass that result along without modification.
	if (true === $result || is_wp_error($result)) {
		return $result;
	}

	// No authentication has been performed yet.
	// Return an error if user is not logged in.
	if (!is_user_logged_in()) {
		return new WP_Error(
			'rest_not_logged_in',
			__('You are not currently logged in.'),
			array('status' => 401)
		);
	}

	// Our custom authentication check should have no effect
	// on logged-in requests
	return $result;
});
/*-----------------------------------------------------------------------------------------------------------------*/
