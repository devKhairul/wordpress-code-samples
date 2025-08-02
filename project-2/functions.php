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
define( 'CHILD_THEME_MONARCH_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function mbc_child_enqueue_styles() {

	wp_enqueue_style( 'monarch-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_MONARCH_VERSION, 'all' );
	
	wp_enqueue_style( 'monarch-theme-fonts', get_stylesheet_directory_uri() . '/dist/styles/main.css', array('monarch-theme-css'), CHILD_THEME_MONARCH_VERSION, 'all' );
	
	wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
}
add_action( 'wp_enqueue_scripts', 'mbc_child_enqueue_styles', 15 );

function mbc_enqueue_scripts() {
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
    
	wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mbc_enqueue_scripts');



/**
 *  Remove comments menu and page from admin bar 
 * */
add_action( 'admin_bar_menu', 'mbc_remove_comments_menu', 999 );
function mbc_remove_comments_menu( $wp_admin_bar ) {
	$wp_admin_bar->remove_menu('comments');
}

/**
 * Remove comments page from admin menu
 */
add_action( 'admin_menu', 'mbc_remove_comments_page', 999 );
function mbc_remove_comments_page() {
	remove_menu_page( 'edit-comments.php' );
}

/**
 * Register nav menus
 */
function monarch_register_nav_menus() {
	register_nav_menus(
		array(
			'footer-about-menu' => __( 'Footer - About', 'monarch' ),
			'footer-buy-practice' => __( 'Footer - Buy a Practice', 'monarch' ),
			'footer-sell-practice' => __( 'Footer - Sell a Practice', 'monarch' ),
			'footer-resources' => __( 'Footer - Resources', 'monarch' ),
			'footer-contact' => __( 'Footer - Contact', 'monarch' )
		)
	);
}
add_action( 'init', 'monarch_register_nav_menus' );


/**
 * Register Events post type
 */
function mbc_register_events_post_type() {
	$labels = array(
		'name'                  => _x( 'Events', 'Post Type General Name', 'monarch' ),
		'singular_name'         => _x( 'Event', 'Post Type Singular Name', 'monarch' ),
		'menu_name'             => _x( 'Events', 'Admin Menu text', 'monarch' ),
		'archives'              => __( 'Event Archives', 'monarch' ),
		'all_items'             => __( 'All Events', 'monarch' ),
		'add_new_item'          => __( 'Add New Event', 'monarch' ),
	);
	$args = array(
		'label'                 => __( 'Events', 'monarch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'event-category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'events', $args );
}
add_action( 'init', 'mbc_register_events_post_type' );


/** 
 * Register News custom post type
 */
function mbc_register_news_post_type() {
	$labels = array(
		'name'                  => _x( 'News', 'Post Type General Name', 'monarch' ),
		'singular_name'         => _x( 'News', 'Post Type Singular Name', 'monarch' ),
		'menu_name'             => _x( 'News', 'Admin Menu text', 'monarch' ),
		'archives'              => __( 'News Archives', 'monarch' ),
		'all_items'             => __( 'All News', 'monarch' ),
		'add_new_item'          => __( 'Add New News', 'monarch' ),
	);
	$args = array(
		'label'                 => __( 'News', 'monarch' ),
		'description'           => __( 'News', 'monarch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-editor-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'news', $args );
}
add_action( 'init', 'mbc_register_news_post_type' );


/**
 * Register Event Category taxonomy
 */
function mbc_register_event_category_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Event Categories', 'Taxonomy General Name', 'monarch' ),
		'singular_name'              => _x( 'Event Category', 'Taxonomy Singular Name', 'monarch' ),
		'menu_name'                  => __( 'Event Categories', 'monarch' ),
		'all_items'                  => __( 'All Event Categories', 'monarch' ),
		'parent_item'                => __( 'Parent Event Category', 'monarch' ),
		'parent_item_colon'          => __( 'Parent Event Category:', 'monarch' ),
		'new_item_name'              => __( 'New Event Category', 'monarch' ),
		'add_new_item'               => __( 'Add New Event Category', 'monarch' ),
		'edit_item'                  => __( 'Edit Event Category', 'monarch' ),
		'update_item'                => __( 'Update Event Category', 'monarch' ),
		'view_item'                  => __( 'View Event Category', 'monarch' ),
		'separate_items_with_commas' => __( 'Separate event categories with commas', 'monarch' ),
		'add_or_remove_items'        => __( 'Add or remove event categories', 'monarch' ),
		'choose_from_most_used'      => __( 'Choose from the most used event categories', 'monarch' ),	
		'popular_items'              => __( 'Popular Event Categories', 'monarch' ),
		'search_items'               => __( 'Search Event Categories', 'monarch' ),
		'not_found'                  => __( 'No event categories found.', 'monarch' ),
		'no_terms'                   => __( 'No event categories', 'monarch' ),
		'items_list'                 => __( 'Event categories list', 'monarch' ),
		'items_list_navigation'      => __( 'Event categories list navigation', 'monarch' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
	);
	register_taxonomy( 'event-category', array( 'events' ), $args );
}
add_action( 'init', 'mbc_register_event_category_taxonomy', 0 );	


/**
 * Register Market Insights custom post type
 */
function mbc_register_market_insights_post_type() {
	
	$labels = array(
		'name'                  => _x( 'Market Insights', 'Post Type General Name', 'monarch' ),
		'singular_name'         => _x( 'Market Insight', 'Post Type Singular Name', 'monarch' ),
		'menu_name'             => __( 'Market Insights', 'monarch' ),
		'name_admin_bar'        => __( 'Market Insight', 'monarch' ),
		'archives'              => __( 'Market Insight Archives', 'monarch' ),
		'attributes'            => __( 'Market Insight Attributes', 'monarch' ),
		'parent_item_colon'     => __( 'Parent Market Insight:', 'monarch' ),
		'all_items'             => __( 'All Market Insights', 'monarch' ),
		'add_new_item'          => __( 'Add New Market Insight', 'monarch' ),
		'add_new'               => __( 'Add New', 'monarch' ),
		'new_item'              => __( 'New Market Insight', 'monarch' ),
		'edit_item'             => __( 'Edit Market Insight', 'monarch' ),		
		'update_item'           => __( 'Update Market Insight', 'monarch' ),		
		'view_item'             => __( 'View Market Insight', 'monarch' ),
		'view_items'            => __( 'View Market Insights', 'monarch' ),
		'search_items'          => __( 'Search Market Insights', 'monarch' ),
		'not_found'             => __( 'No Market Insights found', 'monarch' ),
		'not_found_in_trash'    => __( 'No Market Insights found in Trash', 'monarch' ),
		'featured_image'        => __( 'Featured Image', 'monarch' ),
		'set_featured_image'    => __( 'Set featured image', 'monarch' ),
		'remove_featured_image' => __( 'Remove featured image', 'monarch' ),
		'use_featured_image'    => __( 'Use as featured image', 'monarch' ),
		'insert_into_item'      => __( 'Insert into Market Insight', 'monarch' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Market Insight', 'monarch' ),
		'items_list'            => __( 'Market Insights list', 'monarch' ),
		'items_list_navigation' => __( 'Market Insights list navigation', 'monarch' ),
		'filter_items_list'     => __( 'Filter Market Insights list', 'monarch' ),
	);	
	
	$args = array(
		'label'                 => __( 'Market Insight', 'monarch' ),
		'description'           => __( 'Market Insights', 'monarch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-status',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	
	register_post_type( 'market-insights', $args );
}
add_action( 'init', 'mbc_register_market_insights_post_type', 0 );


/**
 * Register Practices for Sale custom post type
 */
function mbc_register_vet_practices_post_type() {
	$labels = array(
		'name'                  => _x( 'Vet Practices', 'Post Type General Name', 'monarch' ),
		'singular_name'         => _x( 'Vet Practices', 'Post Type Singular Name', 'monarch' ),
		'menu_name'             => __( 'Vet Practices', 'monarch' ),
		'name_admin_bar'        => __( 'Vet Practices', 'monarch' ),
		'archives'              => __( 'Vet Practices Archives', 'monarch' ),
		'attributes'            => __( 'Vet Practices Attributes', 'monarch' ),
		'parent_item_colon'     => __( 'Parent Vet Practices:', 'monarch' ),
		'all_items'             => __( 'All Vet Practices', 'monarch' ),
		'add_new_item'          => __( 'Add New Practice', 'monarch' ),
	);	

	$args = array(
		'label'                 => __( 'Vet Practices', 'monarch' ),
		'description'           => __( 'Vet Practices', 'monarch' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-products',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'capability_type'       => 'post',
	);
	register_post_type( 'vet-practices', $args );
}
add_action( 'init', 'mbc_register_vet_practices_post_type', 0 );

/**
 * Vet Practices custom taxonomies
 */
function mbc_register_vet_practices_taxonomies() {

	$labels = array(
		'name'                       => _x( 'Regions', 'Taxonomy General Name', 'monarch' ),
		'singular_name'              => _x( 'Regions', 'Taxonomy Singular Name', 'monarch' ),
		'menu_name'                  => __( 'Regions', 'monarch' ),
		'all_items'                  => __( 'All Regions', 'monarch' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'regions', array( 'vet-practices' ), $args );
}
add_action( 'init', 'mbc_register_vet_practices_taxonomies', 0 );	


/**
 * Shortcode for Exclusive Events
 */
function mbc_exclusive_events_shortcode($atts) {
	extract(shortcode_atts(array(
		'orderby' => 'date',
		'order' => 'DESC',
	), $atts));

	$args = array(
		'post_type' => 'events',
		'posts_per_page' => 2,
		'tax_query' => array(
			array(
				'taxonomy' => 'event-category',
				'field' => 'slug',
				'terms' => 'exclusive',
			),
		),
		'orderby' => $orderby,
		'order' => $order,
	);
	
	$the_query = new WP_Query( $args );

	ob_start();
	
	if ( $the_query->have_posts() ) :  ?>	
		<section class="exclusive-events">
			<div class="exclusive-events__header">
				<h6>Unwind in Style at One of Our</h6>
				<h2>Exclusive Practice Owner’s Retreats</h2>
				<p>Are you a practice owner with multiple veterinarians? Are you considering your exit strategy? Do you wonder who will continue your legacy?</p>				
				<p style="padding-top:0.5rem;">If so, register for one of our luxurious meeting destinations where you will be treated to first-class accommodations and experiences while learning what your transition options are from the experts in veterinary practice sales.</p>
			</div>
			
			<div class="exclusive-events__grid">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div class="exclusive-events__item">
						<div class="exclusive-events__thumbnail">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>">
							<span class="exclusive-events__item-label">Space is limited</span>
						</div>
						
						<div class="exclusive-events__item-text">
							<h3 class="exclusive-events__item-title"><?php the_title(); ?></h3>
							<p class="exclusive-events__item-date"><?php the_field('event_date'); ?></p>
						</div>
						
						<div class="exclusive-events__item-cta">
							<a href="<?php the_permalink(); ?>" class="outlined-btn">Apply Now</a>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</section>
	<?php endif;  ?>
	
	<?php 
	
	wp_reset_postdata();
	return ob_get_clean();
}
add_shortcode('mbc_exclusive_events', 'mbc_exclusive_events_shortcode');


/**
 * Google Analytics
 */
function mbc_google_analytics() {
	?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-08Y0Z303QE"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-08Y0Z303QE');
	</script>
	<?php
}
add_action('wp_head', 'mbc_google_analytics');