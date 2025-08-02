<?php
/**
 * Due North Child Theme functions & definitions
 */


/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'));

	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/styles/main.css');

	// Lightbox CSS
	wp_enqueue_style( 'lightbox', get_stylesheet_directory_uri() . '/assets/lightbox/css/lightbox.css');


	// Swiper CSS CDN
	wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
	
	// Custom JS Script
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/custom-script.js' );

	// Lightbox Script
	wp_enqueue_script( 'lightbox', get_stylesheet_directory_uri() . '/assets/lightbox/js/lightbox.js' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/**
 * Enqueue Scripts
 */
function enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'ajax-script', get_stylesheet_directory_uri() . '/assets/ajax-script.js', array( 'jquery' ), '1.0', true );
	wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

/**
 * 
 * Install Alpine.js
 */
function install_alpine_script() {
	?>
	<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>

	<?php
}
add_action('wp_head', 'install_alpine_script');


/**
 * Register new nav menu locations
 */

if ( !function_exists ('dn_register_nav_menu') ) {
	function dn_register_nav_menu() {
		register_nav_menus(
			array(
				'top_menu' => __('Top Bar Menu', 'text_domain'),
				'footer_about' => __('Footer - About', 'text_domain'),
				'footer_products' => __('Footer - Products', 'text_domain'),
				'footer_solutions' => __('Footer - Solutions', 'text_domain'),
				'footer_innovations' => __('Footer - Innovations', 'text_domain'),
				'footer_technicalResources' => __('Footer - Technical Resources', 'text_domain'),
				'products_menu_one' => __('Products Menu One', 'text_domain'),
			)
		);
	}
}
add_action('after_setup_theme', 'dn_register_nav_menu');

/**
* Shortcode for Menu 
*/
function print_menu_shortcode($atts=[], $content = null) {
    $shortcode_atts = shortcode_atts([ 'name' => '', 'class' => '' ], $atts);
    $name   = $shortcode_atts['name'];
    $class  = $shortcode_atts['class'];
    return wp_nav_menu( array( 'menu' => $name, 'menu_class' => $class, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

 
/**
* Register Events Custom Post Type
*/ 

function dn_register_events_post_type() {

	$labels = array(
		'name'                  => _x( 'Events', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Event', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Events', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Events', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Event', 'textdomain' ),
		'new_item'              => __( 'New Event', 'textdomain' ),
		'edit_item'             => __( 'Edit Event', 'textdomain' ),
		'view_item'             => __( 'View Event', 'textdomain' ),
		'all_items'             => __( 'All Events', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'events' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-calendar-alt',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
	);

	register_post_type( 'events', $args );
}
add_action('init', 'dn_register_events_post_type');

/**
* Register News Custom Post Type
*/ 

function dn_register_news_post_type() {

	$labels = array(
		'name'                  => _x( 'News', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'News', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'News', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'News', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New News', 'textdomain' ),
		'new_item'              => __( 'New News', 'textdomain' ),
		'edit_item'             => __( 'Edit News', 'textdomain' ),
		'view_item'             => __( 'View News', 'textdomain' ),
		'all_items'             => __( 'All News', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-rss',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
	);

	register_post_type( 'news', $args );
}
add_action('init', 'dn_register_news_post_type');


/**
* Register Products Custom Post Type
*/ 

function dn_register_products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post type general name', 'textdomain' ),
		'singular_name'         => _x( 'Product', 'Post type singular name', 'textdomain' ),
		'menu_name'             => _x( 'Products', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Products', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Add New', 'textdomain' ),
		'add_new_item'          => __( 'Add New Product', 'textdomain' ),
		'new_item'              => __( 'New Product', 'textdomain' ),
		'edit_item'             => __( 'Edit Product', 'textdomain' ),
		'view_item'             => __( 'View Product', 'textdomain' ),
		'all_items'             => __( 'All Products', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_rest'		 => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'			 => 'dashicons-cart',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail'),
	);

	register_post_type( 'products', $args );
}
add_action('init', 'dn_register_products_post_type');


function restrict_products_api_route() {
    // Hook into `rest_api_init` to apply permission check for products
    add_filter('rest_product_collection_params', 'restrict_product_route_access', 10, 2);
}

add_action('rest_api_init', 'restrict_products_api_route');

function restrict_product_route_access($params, $post_type) {
    // If the request is not authenticated via Basic Auth, deny access
    if (!isset($_SERVER['HTTP_AUTHORIZATION']) || empty($_SERVER['HTTP_AUTHORIZATION'])) {
        return new WP_Error('rest_forbidden', 'You must authenticate using Basic Auth to access products', array('status' => 401));
    }

    // Basic Authentication requires a valid base64 encoded username:password pair
    // Try decoding the Authorization header
    $authorization = $_SERVER['HTTP_AUTHORIZATION'];

    // Ensure the Authorization header starts with "Basic"
    if (strpos($authorization, 'Basic ') !== 0) {
        return new WP_Error('rest_forbidden', 'Invalid Authorization header', array('status' => 401));
    }

    // Extract the base64-encoded part of the header
    $encoded_credentials = substr($authorization, 6);
    $decoded_credentials = base64_decode($encoded_credentials);
    $credentials = explode(':', $decoded_credentials);

    if (count($credentials) !== 2) {
        return new WP_Error('rest_forbidden', 'Invalid Authorization format', array('status' => 401));
    }

    $username = $credentials[0];
    $password = $credentials[1];

    // Check the username and password (you can use wp_authenticate or any custom check here)
    $user = wp_authenticate($username, $password);

    if (is_wp_error($user)) {
        return new WP_Error('rest_forbidden', 'Invalid username or password', array('status' => 401));
    }

    return $params;
}






/** 
 * Create Product Category Taxonomy
 */
function dn_product_category_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Product Categories', 'textdomain' ),
		'singular_name' 	=> _x('Product Category', 'textdomain'),
		'all_items' => __( 'All Product Categories' ),
		'parent_item' => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item' => __( 'Edit Category' ), 
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'menu_name' => __( 'Categories' )
	);

	register_taxonomy('product-category', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'product-category' ),
	));
}
add_action('init', 'dn_product_category_taxonomy');


/** 
 * Create Product Brand Taxonomy
 */
function dn_product_brand_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Brands', 'textdomain' ),
		'singular_name' 	=> _x('Brand', 'textdomain'),
		'all_items' => __( 'All Brands' ),
		'edit_item' => __( 'Edit Brand' ), 
		'update_item' => __( 'Update Brand' ),
		'add_new_item' => __( 'Add New Brand' ),
		'new_item_name' => __( 'New Brand Name' ),
		'menu_name' => __( 'Brands' )
	);

	register_taxonomy('product_brand', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'product_brand' ),
	));
}
add_action('init', 'dn_product_brand_taxonomy');


/** 
 * Create Temperature Taxonomy
 */
function dn_product_temp_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Temperature', 'textdomain' ),
		'singular_name' 	=> _x('Temperature', 'textdomain'),
		'all_items' => __( 'All Temperatures' ),
		'edit_item' => __( 'Edit Temperature' ), 
		'update_item' => __( 'Update Temperature' ),
		'menu_name' => __( 'Temperature' )
	);

	register_taxonomy('product_temp', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'product_temp' ),
	));
}
add_action('init', 'dn_product_temp_taxonomy');


/** 
 * Create Doors Taxonomy
 */
function dn_doors_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Doors', 'textdomain' ),
		'singular_name' 	=> _x('Doors', 'textdomain'),
		'all_items' => __( 'All Doors' ),
		'edit_item' => __( 'Edit Doors' ), 
		'update_item' => __( 'Update Doors' ),
		'menu_name' => __( 'Doors' )
	);

	register_taxonomy('doors', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'doors' ),
	));
}
add_action('init', 'dn_doors_taxonomy');

/** 
 * Create Height Taxonomy
 */
function dn_product_height_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Height', 'textdomain' ),
		'singular_name' 	=> _x('Height', 'textdomain'),
		'all_items' => __( 'All Height' ),
		'edit_item' => __( 'Edit Height' ), 
		'update_item' => __( 'Update Height' ),
		'menu_name' => __( 'Height' )
	);

	register_taxonomy('product_height', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'product_height' ),
	));
}
add_action('init', 'dn_product_height_taxonomy');


/** 
 * Create Depth Taxonomy
 */
function dn_product_depth_taxonomy() {

	$labels = array(
		'name' 				=> _x( 'Depth', 'textdomain' ),
		'singular_name' 	=> _x('Depth', 'textdomain'),
		'all_items' => __( 'All Depth' ),
		'edit_item' => __( 'Edit Depth' ), 
		'update_item' => __( 'Update Depth' ),
		'menu_name' => __( 'Depth' )
	);

	register_taxonomy('product_depth', array('products'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'product_depth' ),
	));
}
add_action('init', 'dn_product_depth_taxonomy');


/**
 * 
 * Custom Filter for Products 
 */

 function filter_products() {

	// get the filter criterion from the AJAX request
	$category = isset( $_POST['category'] ) ? array_filter( $_POST['category'] ) : array();
	$brand = isset( $_POST['brand'] ) ? array_filter( $_POST['brand'] ) : array();
	$temp = isset( $_POST['temp'] ) ? array_filter( $_POST['temp'] ) : array();
	$doors = isset( $_POST['doors'] ) ? array_filter( $_POST['doors'] ) : array();
	$height = isset( $_POST['height'] ) ? array_filter( $_POST['height'] ) : array();
	$depth = isset( $_POST['depth'] ) ? array_filter( $_POST['depth'] ) : array();
	
	
	// set up the query args
	$query_args = array(
		'post_type' => 'products',
		'posts_per_page' => -1,
		'tax_query' => array(
			'relation' => 'AND',
				array(
					'taxonomy' => 'product-category',
					'field' => 'tag_id',
					'terms' => $category,
				),
				array(
					'taxonomy' => 'product_brand',
					'field' => 'tag_id',
					'terms' => $brand,
					'operator' => 'AND',
				),
				array(
					'taxonomy' => 'product_temp',
					'field' => 'tag_id',
					'terms' => $temp,
					'operator' => 'AND',
				),
				array(
					'taxonomy' => 'doors',
					'field' => 'tag_id',
					'terms' => $doors,
					'operator' => 'AND',
				),
				array(
					'taxonomy' => 'product_height',
					'field' => 'tag_id',
					'terms' => $height,
					'operator' => 'AND',
				),
				array(
					'taxonomy' => 'product_depth',
					'field' => 'tag_id',
					'terms' => $depth,
					'operator' => 'AND',
				)
		)	
	);

	
	// run the query
	$query = new WP_Query( $query_args );
	
	// output the post results
	if ( $query->have_posts() ) {
	  while ( $query->have_posts() ) {
		$query->the_post(); ?>	
			<a class="product__link" href="<?= the_permalink() ?>">
				<article class="product__<?= the_ID(); ?>">
					<?= the_post_thumbnail('post-thumbnail', ['class' => 'product__thumbnail']) ?>    
					<div class="product__meta">
						<span class="product__sku">
							<?= esc_html(get_field('product_sku')); ?>
						</span>
						
							<h2 class="product__title">
								<?= the_title(); ?>
							</h2>
						
					</div>
				</article>
			</a>
		<?php
	  }
	  wp_reset_postdata();
	} else { ?>
		<div class="error__text">
			<p>
				<?php esc_html_e( 'Sorry, we could not find any product that matches your search criteria.' ); ?>
			</p>
		</div>

	<?php }

	exit; // important to stop execution and prevent further output
  }
  add_action( 'wp_ajax_filter_products', 'filter_products' );
  add_action( 'wp_ajax_nopriv_filter_products', 'filter_products' );
  

/** 
 * Get All Product Categories
 */
function get_product_categories() {

	$product_cat = get_terms( array(
		'taxonomy' => 'product-category',
		'orderby' => 'ASC',
		'hide_empty' => false,
	));

	return $product_cat;
}

/** 
 * Get All Product Brands
 */
function get_product_brands($current_category) {

	if ($current_category->count > 0) {
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
				'taxonomy' => 'product-category',
				'field' => 'tag_id',
				'terms' => $current_category->term_id
				)
			)
			);

			// Run the query to get the products
			$products = new WP_Query( $args );

			// Get the terms associated with the products
			$product_brand = get_terms( array(
			'taxonomy' => 'product_brand',
			'hide_empty' => true,
			'object_ids' => wp_list_pluck( $products->posts, 'ID' ),
				'tax_query' => array(
						array(
						'taxonomy' => 'product-category',
						'field' => 'tag_id',
						'terms' => $current_category->term_id
						)
					)
			));

			return $product_brand;
		}
}

/** 
 * Get the Temperatures associated with the Products on the archive 
 */
function get_product_temp($current_category) {

	if ($current_category->count > 0) {
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
				'taxonomy' => 'product-category',
				'field' => 'tag_id',
				'terms' => $current_category->term_id
				)
			)
			);

			// Run the query to get the products
			$products = new WP_Query( $args );

			// Get the terms associated with the products
			$product_temp = get_terms( array(
			'taxonomy' => 'product_temp',
			'hide_empty' => true,
			'object_ids' => wp_list_pluck( $products->posts, 'ID' ),
				'tax_query' => array(
					array(
					'taxonomy' => 'product-category',
					'field' => 'tag_id',
					'terms' => $current_category->term_id
					)
					)
			));

			return $product_temp;
		}
}

/** 
 * Get the doors associated with the Products on the archive 
 */
function get_product_doors($current_category) {

	if ($current_category->count > 0) {
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
				'taxonomy' => 'product-category',
				'field' => 'tag_id',
				'terms' => $current_category->term_id
				)
			)
			);

			// Run the query to get the products
			$products = new WP_Query( $args );

			// Get the terms associated with the products
			$product_doors = get_terms( array(
			'taxonomy' => 'doors',
			'hide_empty' => true,
			'object_ids' => wp_list_pluck( $products->posts, 'ID' ),
				'tax_query' => array(
					array(
					'taxonomy' => 'product-category',
					'field' => 'tag_id',
					'terms' => $current_category->term_id
					)
					)
			));

			return $product_doors;
		}
}


/** 
 * Get the Height associated with the Products on the archive 
 */
function get_product_height($current_category) {

	if ($current_category->count > 0) {
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
				'taxonomy' => 'product-category',
				'field' => 'tag_id',
				'terms' => $current_category->term_id
				)
			)
			);

			// Run the query to get the products
			$products = new WP_Query( $args );

			// Get the terms associated with the products
			$product_height = get_terms( array(
			'taxonomy' => 'product_height',
			'hide_empty' => true,
			'object_ids' => wp_list_pluck( $products->posts, 'ID' ),
				'tax_query' => array(
					array(
					'taxonomy' => 'product-category',
					'field' => 'tag_id',
					'terms' => $current_category->term_id
					)
					)
			));

			return $product_height;
		}

}	

/** 
 * Get the Depth associated with the Products on the archive 
 */
function get_product_depth($current_category) {

	if ($current_category->count > 0) {
		$args = array(
			'post_type' => 'products',
			'posts_per_page' => -1,
			'tax_query' => array(
				array(
				'taxonomy' => 'product-category',
				'field' => 'tag_id',
				'terms' => $current_category->term_id
				)
			)
			);

			// Run the query to get the products
			$products = new WP_Query( $args );

			// Get the terms associated with the products
			$product_depth = get_terms( array(
			'taxonomy' => 'product_depth',
			'hide_empty' => true,
			'object_ids' => wp_list_pluck( $products->posts, 'ID' ),
				'tax_query' => array(
					array(
					'taxonomy' => 'product-category',
					'field' => 'tag_id',
					'terms' => $current_category->term_id
					)
					)
			));

			return $product_depth;
		}
}



/**
 * 
 * Order events by the start_date field 
 * 
 */
function events_custom_post_type_query( $query ) {
    if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'events' ) ) {
        $query->set( 'post_type', 'events' );
		$query->set( 'orderby', 'meta_value' );
		$query->set( 'meta_key', 'event_start_date' );
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'events_custom_post_type_query' );


/**
 * 
 * All Gravity forms anchor to confirmation 
 * message upon successful submission
 * 
 */	
add_filter( 'gform_confirmation_anchor', '__return_true' );


  

/**
 * 
 * SwiperJS for Home Page Slider
 * 
 */

 function add_swiper_to_front_page_slider() {
	
	?>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

		<?php if (is_front_page()) { ?>
			<script>
				var swiper = new Swiper(".mySwiper", {
					loop: true,
					autoplay: {
						delay: 3000,
					},
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
				});
			</script>
			<?php } ?>
	
	<?php 
		
 }
 add_action('wp_footer', 'add_swiper_to_front_page_slider');


/**
 * 
 * SwiperJS Slider for Employee Testimonials
 */

function add_swiper_for_emp_testimonials() {

	// Only for the Careers page
	if (is_page(1483)) {

	?>
		<script>
			var swiper = new Swiper(".testimonials", {
				loop: true,
				spaceBetween: 40,
				autoplay: {
					delay: 2500,
					disableOnInteraction: true,
				},
				keyboard: {
					enabled: true,
				},
				pagination: {
					el: ".swiper-pagination",
					clickable: true,
				},
				breakpoints: {
					991: {
						slidesPerView: 2
					}
				}
			});
  		</script>
	<?php }
}
add_action('wp_footer', 'add_swiper_for_emp_testimonials');


/**
 * 
 * SwiperJS Slider for Custom Merchandisers
 */

 function add_swiper_for_custom_merchandisers() {

	// Only for the Custom Merchandisers page
	if (is_page(1697)) {

	?>
		<script>
			var swiper = new Swiper(".merchandisers", {
				loop: true,
				autoplay: {
					delay: 2500,
					disableOnInteraction: true,
				},
				keyboard: {
					enabled: true,
				},
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
			});
  		</script>
	<?php }
}
add_action('wp_footer', 'add_swiper_for_custom_merchandisers');



//////////////////////////////// 
// OTHER ADMINISTRATIVE ACTIONS
////////////////////////////////

/**
 * 
 * Remove all comments related features
 * 
 */
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});

/**
 * Allow SVG Upload
 */

 // WP v4.7.1 and higher
 add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
  
  }, 10, 4 );
  
  function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );
  
  function fix_svg() {
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
  }
  add_action( 'admin_head', 'fix_svg' );



/**
 * Show All Posts on the Taxonomy Archive page
 */
function custom_taxonomy_posts_limit_override($query) {
	// Check if it's the main query and the target custom taxonomy archive page
	if (is_admin() || !$query->is_main_query() || !is_tax('product-category')) {
		return;
	}

	// Override the posts_per_page parameter to show all posts
	$query->set('posts_per_page', -1);
}
add_action('pre_get_posts', 'custom_taxonomy_posts_limit_override');


/**
 * Add google analytics & Google Tag Manager
 */
function add_google_analytics() {

	?>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-DLZPRT4T0K"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-DLZPRT4T0K');
	</script>
		
	<?php
}
add_action('wp_head', 'add_google_analytics');



function add_product_sku_column($columns) {
    $columns['custom_sku'] = __('SKU', 'text_domain');
    return $columns;
}
add_filter('manage_edit-products_columns', 'add_product_sku_column');


function populate_product_sku_column($column, $post_id) {
    if ($column == 'custom_sku') {
        $sku = get_field('product_sku', $post_id);
        echo $sku;
    }
}
add_action('manage_products_posts_custom_column', 'populate_product_sku_column', 10, 2);