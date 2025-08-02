<?php
/**
 * Aeropol Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aeropol
 * @since 1.0.0
 */

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'aeropol-theme-css', get_stylesheet_directory_uri() . '/style.css', 'all' );
	wp_enqueue_style( 'aeropol-main-css', get_stylesheet_directory_uri() . '/dist/styles/main.css', 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Remove comments from Admin Bar and Admin Page
 */
function remove_admin_bar_comments() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_comments' );

function remove_admin_comments_page() {
	remove_menu_page( 'edit-comments.php' );	
}
add_action( 'admin_menu', 'remove_admin_comments_page' );

/**
 * Allow SVG upload
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Add custom menu positions
 */
function arpl_register_theme_menus() {
	register_nav_menus(
		array(
			'company' => __( 'Company Menu', 'aeropol' ),
			'service' => __( 'Services Menu', 'aeropol' ),
			'contact' => __( 'Contact Menu', 'aeropol' ),
		)
	);
}
add_action( 'after_setup_theme', 'arpl_register_theme_menus' );


/**
 * Get similar posts by category
 */
function get_similar_posts_by_category($category_id, $post_id) {
    $args = array(
        'category__in' => array($category_id), 
        'post__not_in' => array($post_id),     
        'posts_per_page' => 3,                 
        'orderby' => 'date',                   
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    return $query;
}

/**
 * Get recent blogs
 */
function get_recent_blogs() {
	$args = array(
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC'
	);

	$query = new WP_Query($args);
	return $query;
}

/**
 * Create Events Custom Post Type
 */
function arpl_create_events_post_type() {
	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'aeropol' ),
		'menu_name'             => _x( 'Events', 'Admin Menu text', 'aeropol' ),
		'parent_item_colon'     => __( 'Parent Event:', 'aeropol' ),
		'all_items'             => __( 'All Events', 'aeropol' ),
		'add_new_item'          => __( 'Add New Event', 'aeropol' ),
		'add_new'               => __( 'Add New', 'aeropol' ),
		'new_item'              => __( 'New Event', 'aeropol' ),
		'edit_item'             => __( 'Edit Event', 'aeropol' ),
		'update_item'           => __( 'Update Event', 'aeropol' ),
		'view_item'             => __( 'View Event', 'aeropol' ),
		'view_items'            => __( 'View Events', 'aeropol' ),
		'search_items'          => __( 'Search Events', 'aeropol' ),
		'not_found'             => __( 'No events found', 'aeropol' ),
		'not_found_in_trash'    => __( 'No events found in Trash', 'aeropol' ),
	);
	$args = array(
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'has_archive'           => true,		
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'arpl_create_events_post_type' );	



/**
 * Add google analytics to head
 */
function arpl_add_google_analytics_to_head() {
	?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-54QPCVDFVB"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-54QPCVDFVB');
		</script>
	<?php
}
add_action('wp_head', 'arpl_add_google_analytics_to_head');