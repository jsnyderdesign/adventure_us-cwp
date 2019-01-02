<?php
/**
 * Adventure Us functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Adventure Us
 */

if ( ! function_exists( 'adventure_us_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function adventure_us_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Adventure Us, use a find and replace
	 * to change 'adventure_us' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'adventure_us', get_template_directory() . '/languages' );

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
	// Image size for homepage-posts
	add_image_size( 'single-post-thumbnail', 230, 150 );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'adventure_us' ),
	) );

	function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
return $html;
}
add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );


	// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Continue Reading &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
	 /**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */

// Set excerpt length here.
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

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
	//$add_theme_support( 'custom-background', apply_filters( 'adventure_us_custom_background_args', array(
		//'default-color' => 'ffffff',
		//'default-image' => '',
	//) ) );
}



endif;
add_action( 'after_setup_theme', 'adventure_us_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function adventure_us_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'adventure_us_content_width', 640 );
}
add_action( 'after_setup_theme', 'adventure_us_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function adventure_us_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'adventure_us' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'adventure_us' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'adventure_us_widgets_init' );


function wi_social_icons() {
	$facebook = get_theme_mod( 'wi_facebook' );
	$twitter = get_theme_mod( 'wi_twitter' );
	$behance = get_theme_mod( 'wi_behance' );
	$dribbble = get_theme_mod( 'wi_dribbble' );
	$flickr = get_theme_mod( 'wi_flickr' );
	$instagram = get_theme_mod( 'wi_instagram' );
	$googleplus = get_theme_mod( 'wi_googleplus' );
	$youtube = get_theme_mod( 'wi_youtube' );
	$vimeo = get_theme_mod( 'wi_vimeo' );
	$pinterest = get_theme_mod( 'wi_pinterest' );
	$soundcloud = get_theme_mod( 'wi_soundcloud' );
	$github = get_theme_mod( 'wi_github' );
	$linkedin = get_theme_mod( 'wi_linkedin' );
	$rss = get_theme_mod( 'wi_rss' );

	if ( ! $facebook && ! $twitter && ! $behance && ! $flickr && ! $instagram && ! $googleplus && ! $youtube && ! $vimeo && ! $pinterest && ! $github && ! $linkedin && ! $rss ) {
		return;
	}

	echo '<div class="social-icons">';
		if ( $facebook ) echo  '<a target="_blank" href="' . esc_url( $facebook ) . '" target="_blank"><i class="fa fa-facebook"></i></a>';
		if ( $twitter ) echo '<a target="_blank" href="' . esc_url( $twitter ) . '"><i class="fa fa-twitter"></i></a>';
		if ( $behance ) echo  '<a target="_blank" href="' . esc_url( $behance ) . '"><i class="fa fa-behance"></i></a>';
		if ( $dribbble ) echo  '<a target="_blank" href="' . esc_url( $dribbble ) . '"><i class="fa fa-dribbble"></i></a>';
		if ( $flickr ) echo  '<a target="_blank" href="' . esc_url( $flickr ) . '"><i class="fa fa-flickr"></i></a>';
		if ( $instagram ) echo  '<a target="_blank" href="' . esc_url( $instagram ) . '"><i class="fa fa-instagram"></i></a>';
		if ( $googleplus ) echo  '<a target="_blank" href="' . esc_url( $googleplus ) . '"><i class="fa fa-google-plus"></i></a>';
		if ( $youtube ) echo  '<a target="_blank" href="' . esc_url( $youtube ) . '"><i class="fa fa-youtube"></i></a>';
		if ( $vimeo ) echo  '<a target="_blank" href="' . esc_url( $vimeo ) . '"><i class="fa fa-vimeo-square"></i></a>';
		if ( $pinterest ) echo  '<a target="_blank" href="' . esc_url( $pinterest ) . '"><i class="fa fa-pinterest"></i></a>';
		if ( $github ) echo  '<a target="_blank" href="' . esc_url( $github ) . '"><i class="fa fa-github"></i></a>';
		if ( $linkedin ) echo  '<a target="_blank" href="' . esc_url( $linkedin ) . '"><i class="fa fa-linkedin"></i></a>';
		if ( $rss ) echo  '<a target="_blank" href="' . esc_url( $rss ) . '"><i class="fa fa-rss"></i></a>';
	echo '</div>';
}


add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
            $title = single_cat_title( '', false );
        } elseif ( is_tag() ) {
            $title = single_tag_title( '', false );
        } elseif ( is_author() ) {
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;
        }
    return $title;
});


/* Adds fullpage posts into blogroll */
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( ( is_home() && $query->is_main_query() ) || is_feed() )
		$query->set( 'post_type', array( 'post', 'fullpage' ) );

	return $query;
}
/* Adds custom post type for full page featured posts */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'fullpage',
    array(
      'labels' => array(
        'name' => __( 'Full Page Posts' ),
        'singular_name' => __( 'fullpage' )
      ),
      'public' => true,
      'has_archive' => true,
			'taxonomies' => array( 'category' , 'post_tag' ),
			'supports' => array( 'title' , 'thumbnail' , 'revisions' , 'editor' )
    )
  );
}


/**
 * Enqueue scripts and styles.
 */
function adventure_us_scripts() {
	wp_enqueue_style( 'adventure_us-style', get_stylesheet_uri() );

	wp_enqueue_script( 'adventure_us-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'adventure_us-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'adventure_us_scripts' );

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
