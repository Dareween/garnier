<?php
/**
 * 
 * FUNCTIONS DU STARTER THEME UNDERSCORES http://underscores.me/
 * 
 * studiogarnier functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package studiogarnier
 */




if ( ! function_exists( 'studiogarnier_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function studiogarnier_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on studiogarnier, use a find and replace
	 * to change 'studiogarnier' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'studiogarnier', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'studiogarnier' ),
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
	add_theme_support( 'custom-background', apply_filters( 'studiogarnier_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'studiogarnier_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function studiogarnier_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'studiogarnier_content_width', 640 );
}
add_action( 'after_setup_theme', 'studiogarnier_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function studiogarnier_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'studiogarnier' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'studiogarnier' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'studiogarnier_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function studiogarnier_scripts() {
       
   /*ajout de bootstrap css*/
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	
    wp_enqueue_style( 'studiogarnier-style', get_stylesheet_uri() );
        
    wp_enqueue_script( 'studiogarnier-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'studiogarnier-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
        
       /*ajout de bootstrap js*/ 
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), '3.3.4', true );

        

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'studiogarnier_scripts' );

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


/* -----------------------------------------------------------------
 * FUNCTIONS AJOUTER POUR LE DEVELOPPEMENT DE GARNIER STUDIO/
   ------------------------------------------------------------------ */

/**
 * Ajoute une navigation bootstrap 'primary'
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';


	register_post_type(
			   'reference',
			      array(
			           'label' => 'References',
			           'labels' => array(       
			           		'name' => 'Références',       
			           		'singular_name' => 'Référence',       
			           		'all_items' => 'Toutes les référence',       
			           		'add_new_item' => 'Ajouter une référence',       
			           		'edit_item' => 'Éditer une référence',       
			           		'new_item' => 'Créer une nouvelle référence',       
			           		'view_item' => 'Voir référence',       
			           		'search_items' => 'Rechercher parmi les références',       
			           		'not_found' => 'Aucune référence trouvée',       
			           		'not_found_in_trash'=> 'Aucune référence dans la corbeille'       
			           		),     
			           'public' => true,     
			           'capability_type' => 'post',     
			           'supports' => array(       
			           		'title',       
			           		'editor',       
			           		'thumbnail'     
			           		),     
			           'has_archive' => true   
			           )
                );
        

