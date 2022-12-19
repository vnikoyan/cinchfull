<?php
/**
 * Cinchshare functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cinchshare
 */

if ( ! defined( 'CINCHSHARE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'CINCHSHARE_VERSION', '1.0.0' );
}

if ( ! function_exists( 'cinchshare_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cinchshare_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cinchshare, use a find and replace
		 * to change 'cinchshare' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cinchshare', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'cinchshare' ),
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
				'cinchshare_custom_background_args',
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

		/**
		 * Add responsive embeds and block editor styles.
		 */
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'cinchshare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cinchshare_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cinchshare_content_width', 640 );
}
add_action( 'after_setup_theme', 'cinchshare_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cinchshare_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cinchshare' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cinchshare' ),
			'before_widget' => '<section id="%1$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cinchshare_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cinchshare_scripts() {
	wp_enqueue_script( 'jquery3.6.1-js', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), CINCHSHARE_VERSION, false );
	wp_enqueue_style( 'cinchshare-style', get_stylesheet_uri(), array(), CINCHSHARE_VERSION );
	wp_enqueue_script( 'cinchshare-script', get_template_directory_uri() . '/js/script.min.js', array(), CINCHSHARE_VERSION, true );
	wp_enqueue_style( 'custom-style', get_template_directory_uri().'/assets/custom.css', array(), CINCHSHARE_VERSION );
	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom.js', array(), CINCHSHARE_VERSION, true );
	wp_localize_script( 'custom-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri().'/js/owl.carousel.js', array(), CINCHSHARE_VERSION, false );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri().'/assets/owl.carousel.css', array(), CINCHSHARE_VERSION );
	wp_enqueue_style( 'owl-theme-css', get_template_directory_uri().'/assets/owl.theme.default.min.css', array(), CINCHSHARE_VERSION );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cinchshare_scripts' );

/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles with no other changes.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function cinchshare_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'cinchshare_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Allow SVG.
 */

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');
	
/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function cinchshare_menus() {

	$locations = array(
		'mobile'   => __( 'Mobile Menu', 'cinchshare' ),
		'footer'   => __( 'Footer Menu', 'cinchshare' ),
		'social'   => __( 'Social Menu', 'cinchshare' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'cinchshare_menus' );

//Remove editor  or block editor from pages
function remove_editor() {
	if (isset($_GET['post'])) {
			$id = $_GET['post'];
			$template = get_post_meta($id, '_wp_page_template', true);
			switch ($template) {
					case 'templates/template-home.php':
					case 'templates/template-faq.php':
					case 'templates/template-direct.php':
					case 'templates/template-about.php':
					case 'templates/template-features.php':
					case 'templates/template-pricing.php':
					case 'templates/template-affiliate.php':
					case 'templates/template-support.php':
					case 'templates/template-career.php':
					case 'templates/template-learningcenter.php':
					case 'templates/template-downloads.php':
					case 'templates/template-privacy-policy.php':	
					case 'templates/template-contact.php':	
					case 'templates/template-facebook.php':	
					case 'templates/template-video.php':	
					case 'templates/template-affiliate-application.php':
					case 'templates/template-term-of-service.php':		
					// the below removes 'editor' support for 'pages'
					remove_post_type_support('page', 'editor');
						// add_filter('use_block_editor_for_post', '__return_false');
					break;
					default :
					// Don't remove any other template.
					break;
			}
	}
}
add_action('init', 'remove_editor');

function post_search_add($search, $wp_query) {
	global $wpdb;
	$seakey = $wp_query->get('search_prod_title');
	$search = "AND (($wpdb->posts.post_title LIKE '%$seakey%') OR ($wpdb->posts.post_content LIKE '%$seakey%'))";
    
    return $search;
}

add_filter('get_the_archive_title', function ($title) {
	if (is_category()) {
			$title = single_cat_title('', false);
	} elseif (is_tag()) {
			$title = single_tag_title('', false);
	} elseif (is_author()) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif (is_tax()) { //for custom post types
			$title = sprintf(__('%1$s'), single_term_title('', false));
	} elseif (is_post_type_archive()) {
			$title = post_type_archive_title('', false);
	}
	return $title;
});

add_filter( 'gform_enable_password_field', '__return_true' );

require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/form.php';

function estimate_reading_time_in_minutes ( $content = '', $words_per_minute = 300, $with_gutenberg = false ) {
	// In case if content is build with gutenberg parse blocks
	if ( $with_gutenberg ) {
			$blocks = parse_blocks( $content );
			$contentHtml = '';

			foreach ( $blocks as $block ) {
					$contentHtml .= render_block( $block );
			}

			$content = $contentHtml;
	}
					
	// Remove HTML tags from string
	$content = wp_strip_all_tags( $content );
					
	// When content is empty return 0
	if ( !$content ) {
			return 0;
	}
					
	// Count words containing string
	$words_count = str_word_count( $content );
					
	// Calculate time for read all words and round
	$minutes = ceil( $words_count / $words_per_minute );
					
	return $minutes;
}

