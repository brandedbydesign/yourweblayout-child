<?php
// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'yourweblayout_enqueue_styles');
function yourweblayout_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ) );
}


/**
 * Register widget areas.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function yourweblayout_child_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'yourweblayout' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'yourweblayout' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Pre Header Left', 'yourweblayout' ),
		'id'            => 'preheader-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Pre Header Right', 'yourweblayout' ),
		'id'            => 'preheader-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Scroll Logo', 'yourweblayout' ),
		'id'            => 'header-scroll-logo',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Header Right', 'yourweblayout' ),
		'id'            => 'header-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'yourweblayout' ),
		'id'            => 'footer-col-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'yourweblayout' ),
		'id'            => 'footer-col-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'yourweblayout' ),
		'id'            => 'footer-col-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Social', 'yourweblayout' ),
		'id'            => 'footer-social',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'yourweblayout_child_widgets_init' );


/**
 * removes <p> tags from Advanced Custom fields 
 * Remove WPAUTOP from ACF TinyMCE Editor
 */
function acf_wysiwyg_remove_wpautop() {
    remove_filter('acf_the_content', 'wpautop' );
}
add_action('acf/init', 'acf_wysiwyg_remove_wpautop');


/**
 * Remove hentry on anything other than single Post - prevents structured data errors in Google: test here: https://www.google.com/webmasters/tools/richsnippets 
 
function remove_hentry( $classes ) {
	if( !is_single() ) {
		$classes = array_diff($classes, array('hentry'));
		return $classes;
	} else {
		return $classes;
	}
}
add_filter( 'post_class', 'remove_hentry' );
*/


/* 
 * Enqueue Google fonts 
 * Replace fonts link as needed for different fonts.
 * Get the fonts link from Google after adding font family (or families)
 * and selecting the font weights and styles.
*/
add_action( 'wp_enqueue_scripts', 'prefix_scripts_styles' );

function prefix_scripts_styles() {
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap', array(), '1.3.1' );
}