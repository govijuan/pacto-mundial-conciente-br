<?php
/**
 * Pacto Mundial Consciente functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pacto_Mundial_Consciente
 */

/**
*Creates a new custom type for the events shown in the home page
*/

function create_post_types() {
	register_post_type('videos',
		array(	'labels' => array(
									'name' => __('V&iacute;deos'),
									'singular_name' => __( 'V&iacute;deo' ),
									'add_new' =>__('Adicionar Novo V&iacute;deo'),
									'add_new_item' => __('Adicionar Novo V&iacute;deo'),
									'all_items' => __( 'Todos os V&iacute;deos' )	
								),
				'taxonomies' => array('category'),
			    'public' => true,
			    'has_archive' => true,
			    'rewrite' => array('slug' => 'videos'),
			    'publicly_queryable' => true,
			    'show_ui' => true,
			    'menu_position' => '2',
			    'show_in_nav_menus' => true,
			    'show_in_menu' => true
		)
		
	);
	register_post_type('links',
		array(	'labels' => array (
									'name' => __('Garimpo'),
									'singular_name' => __('Link'),
									'add_new' => __('Adicionar Novo Link'),
									'add_new_item' => __('Adicionar Novo Link'),
									'all_items' => __('Todos os Links')
								),
				'show_ui' => true,
				'public' => true,
				'has_archive' => false,
				'rewrite' => array('slug' => 'links'),
				'publicly_queryable' => true,
				'menu_position' => '3',
				'show_in_nav_menus' => true,
				'show_in_menu' => true,
				'supports'      => array( 'title',  'thumbnail' )
				
		)
	);
	
	register_post_type(	'amigos',
		array( 	'labels' => array( 	'name'=> __('Amigos'),
									'singilar_name' => __('Amigo'),
									'add_new' => __('Adicionar Novo Amigo'),
									'add_new_item' => __('Adicionar Novo Amigo'),
									'all_items' => __('Todos os Amigos')
								), 	
							
				'show_ui' => true,
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'amigos'),
				'publicly_queryable' => true,
				'menu_position' => '4',
				'show_in_nav_menus' => true,
				'show_in_menu' => true,
				'supports'     => array( 'title', 'editor', 'thumbnail', 'comments') 
		)
	);
	
	register_post_type(	'activistas',
		array( 	'labels' => array( 	'name'=> __('Activistas'),
									'singilar_name' => __('Activista'),
									'add_new' => __('Adicionar Novo Activista'),
									'add_new_item' => __('Adicionar Novo Activista'),
									'all_items' => __('Todos os Activistas')
								), 	
							
				'show_ui' => true,
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'activistas'),
				'publicly_queryable' => true,
				'menu_position' => '5',
				'show_in_nav_menus' => true,
				'show_in_menu' => true,
				'supports'     => array( 'title', 'editor', 'thumbnail', 'comments') 
		)
	);
	
	register_post_type(	'visite',
		array( 	'labels' => array( 	'name'=> __('Visite'),
									'singilar_name' => __('Parceiro'),
									'add_new' => __('Adicionar Novo Parceiro'),
									'add_new_item' => __('Adicionar Novo Parceiro'),
									'all_items' => __('Todos os Parceiros')
								), 	
							
				'show_ui' => true,
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'parceros'),
				'publicly_queryable' => true,
				'menu_position' => '6',
				'show_in_nav_menus' => true,
				'show_in_menu' => true,
				'supports'     => array( 'title',  'thumbnail') 
		)
	);
	 
 }

register_sidebar(array(
	'name' => __('Campo para Eventos'),
	'id' => 'campo-eventos-home',
	'description'   => '',
	'before_widget' => '<div class="eventos-como-sidebar">',
	'after_widget' => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'

));

add_action('init', 'create_post_types');
if ( ! function_exists( 'pacto_mundial_consciente_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 

function pacto_mundial_consciente_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pacto Mundial Consciente, use a find and replace
	 * to change 'pacto-mundial-consciente' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pacto-mundial-consciente', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'excerpt' );
	add_post_type_support( 'videos', 'excerpt' );

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
		'primary' => esc_html__( 'Primary', 'pacto-mundial-consciente' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	/*
add_theme_support( 'custom-background', apply_filters( 'pacto_mundial_consciente_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
*/
}
add_image_size('miniatura-eventos', 400, 400, array( 'center', 'center' ));
add_image_size('miniatura-garimpo', 320, 186, array('center', 'center'));
endif;
add_action( 'after_setup_theme', 'pacto_mundial_consciente_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pacto_mundial_consciente_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pacto_mundial_consciente_content_width', 640 );
}
add_action( 'after_setup_theme', 'pacto_mundial_consciente_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pacto_mundial_consciente_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pacto-mundial-consciente' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pacto_mundial_consciente_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pacto_mundial_consciente_scripts() {

	wp_enqueue_style( 'pacto-mundial-consciente-style', get_stylesheet_uri() );
	wp_enqueue_style('pmc-content-sidebar',  get_template_directory_uri() . '/layouts/content-sidebar.css');
	wp_enqueue_style('foundation-icon-font', get_template_directory_uri() . '/fonts/foundation-icons.css');
	wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('roboto-font-styles', 'https://fonts.googleapis.com/css?family=Roboto:400,700,900,300,300italic ');
	wp_enqueue_style('hover-styles', get_template_directory_uri() . '/css/hover.css');
	wp_enqueue_style('slicknav-style', get_template_directory_uri() . '/css/slicknav.css');
	wp_enqueue_script( 'pacto-mundial-consciente-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'pacto-mundial-consciente-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'pacto-mundial-consciente-theme', get_template_directory_uri() . '/js/pmc-theme.js', array('jquery'), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pacto_mundial_consciente_scripts' );

/*Customization of the Events calendar's stylesheet
--------------------------------------------------------------*/

function replace_tribe_events_calendar_stylesheet() {
   $styleUrl = get_bloginfo('template_url') . '/css/custom-events-stylesheet.css';
   return $styleUrl;
}
add_filter('tribe_events_stylesheet_url', 'replace_tribe_events_calendar_stylesheet');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

include('admin/govi-admin.php');
