<?php
/**
 * CreativeKids functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CreativeKids
 */

if ( ! function_exists( 'creativekids_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function creativekids_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CreativeKids, use a find and replace
	 * to change 'creativekids' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'creativekids', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'creativekids' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'creativekids_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'creativekids_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creativekids_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'creativekids_content_width', 640 );
}
add_action( 'after_setup_theme', 'creativekids_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creativekids_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creativekids' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'creativekids' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'creativekids_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creativekids_scripts() {
	wp_register_style('my-main-css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('my-main-css');
	wp_register_style('my-reset-css', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style('my-reset-css');
	wp_register_style('my-fonts-css', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('my-fonts-css');
	wp_register_style('my-media-css', get_template_directory_uri() . '/css/media.css');
	wp_enqueue_style('my-media-css');
	wp_register_style('slick-css', get_template_directory_uri() . '/slick/slick/slick.css');
	wp_enqueue_style('slick-css');
	wp_register_style('slick-theme-css', get_template_directory_uri() . '/slick/slick/slick-theme.css');
	wp_enqueue_style('slick-theme-css');
	wp_register_style('my-animation-css', get_template_directory_uri() . '/css/animation.css');
	wp_enqueue_style('my-animation-css');


	wp_enqueue_script( 'creativekids-jquery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'creativekids-jquery-migr', '//code.jquery.com/jquery-1.11.0.min.js', array(), '20151215', true );
	wp_enqueue_script( 'creativekids-slick', get_template_directory_uri() . '/slick/slick/slick.min.js', array(), '20151215', true );
	wp_enqueue_script( 'creativekids-slick-js', get_template_directory_uri() . '/js/slick_slider.js', array(), '20151215', true );
	wp_enqueue_script( 'creativekids-js-animate', get_template_directory_uri() . '/js/animate.js', array(), '20151215', true );
	wp_enqueue_script( 'creativekids-js-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );


	
	wp_enqueue_script( 'creativekids-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'creativekids-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creativekids_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );