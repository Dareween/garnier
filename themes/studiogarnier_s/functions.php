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
	/*UzfIhCZ24G0AAAAAAAARopOGRwwPpTqTx-HcmZGMYYc
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
        
        add_image_size( 'medium-750', 750, 500, true ); 
        add_image_size( 'medium-990', 990, 500, true ); 

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
        
        
      
	
	add_theme_support( 'custom-logo', array(
		'height'      => 30,
		'width'       => 263,
		
	) );


        
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
        register_sidebar( array(
		'name'          => esc_html__( 'Cat-accueil', 'studiogarnier' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'studiogarnier' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
		'name'          => esc_html__( 'Load-more', 'studiogarnier' ),
		'id'            => 'sidebar-3',
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
 * Enqueue google font Droid sans 400 / 700.
 */
function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Droid+Sans:400,700', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );




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


      function custom_nav(){
	$navigation = '';
	$previous   = get_previous_post_link( '<div class="nav-previous">%link</div>', '%title', true );
	$next       = get_next_post_link( '<div class="nav-next">%link</div>', '%title', true );

	// Only add markup if there's somewhere to navigate to.
	if ( $previous || $next ) {
		$navigation = _navigation_markup( $previous . $next, 'post-navigation' );
	}

	echo $navigation;
}


/**
 * Ajout de nouveaux post-types'
 */

function add_post_type(){
	register_post_type(
			   'reference',
			      array(
			           'label' => 'References',
			           'labels' => array(       
			           		'name' => 'Références',       
			           		'singular_name' => 'Référence',       
			           		'all_items' => 'Toutes les références',       
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
        
  
        
        
        
        
register_post_type(
		'prestation',
			      array(
			           'label' => 'Prestations',
			           'labels' => array(       
			           		'name' => 'Prestations',       
			           		'singular_name' => 'Prestation',       
			           		'all_items' => 'Toutes les Prestations',       
			           		'add_new_item' => 'Ajouter une Prestation',       
			           		'edit_item' => 'Éditer une Prestation',       
			           		'new_item' => 'Créer une nouvelle Prestation',       
			           		'view_item' => 'Voir Prestation',       
			           		'search_items' => 'Rechercher parmi les Prestations',       
			           		'not_found' => 'Aucune Prestation trouvée',       
			           		'not_found_in_trash'=> 'Aucune Prestation dans la corbeille'       
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


register_post_type(
		'animation',
			      array(
			           'label' => 'Animations',
			           'labels' => array(       
			           		'name' => 'Animations',       
			           		'singular_name' => 'Animation',       
			           		'all_items' => 'Toutes les animations',       
			           		'add_new_item' => 'Ajouter une animation',       
			           		'edit_item' => 'Éditer une animation',       
			           		'new_item' => 'Créer une nouvelle animation',       
			           		'view_item' => 'Voir animation',       
			           		'search_items' => 'Rechercher parmi les animations',       
			           		'not_found' => 'Aucune animation trouvée',       
			           		'not_found_in_trash'=> 'Aucune animation dans la corbeille'       
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

register_post_type(
		'partenaires',
			      array(
			           'label' => 'Partenaires',
			           'labels' => array(       
			           		'name' => 'Partenaires',       
			           		'singular_name' => 'partenaire',       
			           		'all_items' => 'Tous les partenaires',       
			           		'add_new_item' => 'Ajouter un partenaire',       
			           		'edit_item' => 'Éditer un partenaire',       
			           		'new_item' => 'Créer un nouveau partenaire',       
			           		'view_item' => 'Voir partenaire',       
			           		'search_items' => 'Rechercher parmi les partenaires',       
			           		'not_found' => 'Aucun  partenaire trouvé',       
			           		'not_found_in_trash'=> 'Aucun partenaire dans la corbeille'       
			           		),     
			           'public' => true,     
			           'capability_type' => 'post',     
			           'supports' => array(       
			           		'title',       
			           		       
			           		    
			           		),     
			           'has_archive' => true   
			           )
                );

}

add_action( 'init', 'add_post_type' );



function add_taxonomy(){
  register_taxonomy(   
		'prestations',  
                'reference',
		array(     
			'label' => 'prestations',     
			'labels' => array(     
				'name' => 'Votre prestation',     
				'singular_name' => 'Prestations',     
				'all_items' => 'Tous les types de prestation',     
				'edit_item' => 'Éditer le type de prestation',     
				'view_item' => 'Voir la prestation',     
				'update_item' => 'Mettre à jour le type de prestation',     
				'add_new_item' => 'Ajouter un type prestation',     
				'new_item_name' => 'Nouveau type de prestation',     
				'search_items' => 'Rechercher parmi les types de prestation',     
				'popular_items' => 'Types de prestation les plus utilisés'   
				), 
				
			'hierarchical' => true   
			) 
		); 
        
register_taxonomy(   
		'animations', 
                 'reference', 
		array(     
			'label' => 'animations',     
			'labels' => array(     
				'name' => 'Votre animation',     
				'singular_name' => 'Animations',     
				'all_items' => 'Toutes les catégories animation',     
				'edit_item' => 'Éditer la catégorie',     
				'view_item' => 'Voir la catégorie',     
				'update_item' => 'Mettre à jour la catégorie',     
				'add_new_item' => 'Ajouter une catégorie',     
				'new_item_name' => 'Nouvelle catégorie',     
				'search_items' => 'Rechercher parmi les catégories',     
				'popular_items' => 'Catégories les plus utilisées'   
				), 
				
			'hierarchical' => true   
			) 
		); 
    
register_taxonomy(   
		'evenements', 
                 'reference', 
		array(     
			'label' => 'evenements',     
			'labels' => array(     
				'name' => 'Votre événement',     
				'singular_name' => 'Evénements',     
				'all_items' => 'Toutes les catégories événements',     
				'edit_item' => 'Éditer la catégorie',     
				'view_item' => 'Voir la catégorie',     
				'update_item' => 'Mettre à jour la catégorie',     
				'add_new_item' => 'Ajouter une catégorie',     
				'new_item_name' => 'Nouvelle catégorie',     
				'search_items' => 'Rechercher parmi les catégories',     
				'popular_items' => 'Catégories les plus utilisées'   
				), 
				
			'hierarchical' => true   
			) 
		); 
}

add_action( 'init', 'add_taxonomy' );



/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');