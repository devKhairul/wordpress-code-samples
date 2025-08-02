<?php
/**
 * Monarch Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Monarch
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'influence6-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_VERSION, 'all' );
	// add fonts CDN
	wp_enqueue_style( 'influence6-fonts', 'https://use.typekit.net/jdo0sya.css', array(), CHILD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'influence6-main-css', get_stylesheet_directory_uri() . '/dist/css/main.css', array('influence6-theme-css', 'influence6-fonts'), CHILD_THEME_VERSION, 'all' );
	// add swiperjs CDN
	wp_enqueue_style( 'swiperjs', 'https://unpkg.com/swiper@11/swiper-bundle.min.css', array(), '8.4.1', 'all' );
	// add font awesome CDN
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all' );
	//  add swiperjs CDN
	wp_enqueue_script( 'swiperjs', 'https://unpkg.com/swiper@11/swiper-bundle.min.js', array());
	// add script.js
	wp_enqueue_script( 'app-js', get_stylesheet_directory_uri() . '/dist/js/app.js', array(), 'null', true );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


/**
 *  Remove comments menu and page from admin bar 
 * */
add_action( 'admin_bar_menu', 'i6_remove_comments_menu', 999 );
function i6_remove_comments_menu( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu('comments');
}

/**
 * Remove comments page from admin menu
 */
add_action( 'admin_menu', 'i6_remove_comments_page', 999 );
function i6_remove_comments_page() {
	remove_menu_page( 'edit-comments.php' );
}

/**
 * Allow SVG uploads
 */
function i6_allow_svg_uploads( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'i6_allow_svg_uploads' );

/**
 * Add custom menu locations
 */
function i6_register_custom_menus() {
	register_nav_menus(
		array(
			'footer-about' => __( 'Footer About Menu', 'influence6' ),
			'footer-creators'  => __( 'Footer Creators Menu', 'influence6' ),
			'footer-brands'  => __( 'Footer Brands Menu', 'influence6' ),
			'footer-agencies'  => __( 'Footer Agencies Menu', 'influence6' ),
			'footer-contact'  => __( 'Footer Contact Menu', 'influence6' ),
		)
	);
}
add_action( 'after_setup_theme', 'i6_register_custom_menus' );