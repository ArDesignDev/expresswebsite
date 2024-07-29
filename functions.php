<?php
/**
 * aquaAr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aquaAr
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'aquaAr_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aquaAr_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on aquaAr, use a find and replace
		 * to change 'aquaAr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aquaAr', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'aquaAr' ),
				'cta' => esc_html__( 'CTA', 'aquaAr' ),
				'menu-2-mobile' => esc_html__( 'Mobile Menu', 'aquaAr' ),
				'footer-nav' => esc_html__( 'Footer Nav', 'aquaAr' ),
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
				'aquaAr_custom_background_args',
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

		// svg suppor
		function cc_mime_types($mimes) {
			$mimes['svg'] = 'image/svg+xml';
			return $mimes;
		}

		add_filter('upload_mimes', 'cc_mime_types');

		
	}
endif;
add_action( 'after_setup_theme', 'aquaAr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aquaAr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aquaAr_content_width', 640 );
}
add_action( 'after_setup_theme', 'aquaAr_content_width', 0 );

/**
 * Register widget area.
 *
 */
require get_template_directory() . '/inc/widget-area.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue.php';

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
 * Custom post type
 */
//require get_template_directory() . '/inc/custom-post-types/custom-post-types.php';

/**
 * Pagination
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Toaster
 */
require get_template_directory() . '/inc/acf.php';


function custom_excerpt_length($length) {
		return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function new_excerpt_more( $more ) {
		return '';
}
add_filter('excerpt_more', 'new_excerpt_more');




function weichie_load_more() {
	$ajaxposts = new WP_Query([
	  'post_type' => 'drug',
	  'posts_per_page' => 2,
	  'orderby' => 'date',
	  'order' => 'DESC',
	  'paged' => $_POST['paged'],
	]);
  
	$response = '';
  
	if($ajaxposts->have_posts()) {
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= get_template_part('template-parts/content', 'drug');
	  endwhile;
	} else {
	  $response = '';
	}
  
	echo $response;
	exit;
  }
  add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
  add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');


////////////////////////
// ajax categories blog
///////////////////////
function filter_projects() {
	$catSlug = $_POST['category'];

	// Get all registered post types
	$post_types = get_post_types(['public' => true], 'names');
	$excluded_post_types = array('team', 'page', 'projects', 'drugdescription');
	
	// Remove excluded post types
	$allowed_post_types = array_diff($post_types, $excluded_post_types);
	
	$ajaxposts = new WP_Query([
		'posts_per_page' => 4,
		'category_name'  => $catSlug,
		'orderby'        => 'menu_order',
		'order'          => 'desc',
		'post_type'      => $allowed_post_types,
		'post_status'    => 'publish',
		//'tag_slug__and'  => 'izpostavi',
	]);	

	$response = '';
  
	if($ajaxposts->have_posts()) {
	  while($ajaxposts->have_posts()) : $ajaxposts->the_post();
		$response .= include get_theme_file_path('/template-parts/post-type/post-type.php');
		
	  endwhile;
	} else {
	  $response = 'empty';
	}
  
	echo $response;

	exit;
  }
  add_action('wp_ajax_filter_projects', 'filter_projects');
  add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');
