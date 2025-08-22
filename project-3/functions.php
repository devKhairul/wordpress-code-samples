<?php
/**
 * Influence6 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Influence6
 * @since 1.0.0
 */


define( 'CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {
	wp_enqueue_style( 'influence6-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'influence6-fonts', 'https://use.typekit.net/jdo0sya.css', array(), CHILD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'influence6-main-css', get_stylesheet_directory_uri() . '/dist/css/main.css', array('influence6-theme-css', 'influence6-fonts'), CHILD_THEME_VERSION, 'all' );
	wp_enqueue_style( 'swiperjs', 'https://unpkg.com/swiper@11/swiper-bundle.min.css', array(), '8.4.1', 'all' );
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0-beta3', 'all' );
	wp_enqueue_script( 'swiperjs', 'https://unpkg.com/swiper@11/swiper-bundle.min.js', array());
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

/**
 * Custom Post Type for News
 */
function i6_news_custom_post_type() {
	register_post_type( 'news',
		array(
			'labels' => array(
				'name' => __( 'News', 'influence6' ),
				'singular_name' => __( 'News Item', 'influence6' ),
				'add_new' => __( 'Add News', 'influence6' ),
				'add_new_item' => __( 'Add News', 'influence6' ),
				'edit_item' => __( 'Edit News', 'influence6' ),
				'view_item' => __( 'View News', 'influence6' ),
				'archives' => __( 'News Archive', 'influence6' ), // 👈 important for Yoast
				'menu_name' => __( 'News', 'influence6' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
			'menu_position' => 5,
			'menu_icon'   => 'dashicons-megaphone',
			'rewrite' => array(
				'slug' => 'news',
				'with_front' => false,
			),
		)
	);
}
add_action( 'init', 'i6_news_custom_post_type' );


/**
 * Send Gravity Forms submission data to Pipedrive
 * Creator Form
 */
function send_to_pipedrive($entry, $form) {
    $api_token = 'SECRET_API_TOKEN';
    $url = 'https://influence6.pipedrive.com/api/v1/persons?api_token=' . $api_token;

	// Pipedrive custom field keys
    $instagram_field_key = '42cb18a4eb6a603a67933595475c61f2edd1fd45';
	$facebook_field_key = '5b5fb091d2fac04304ee08a5af7d092788e0e5a4';
	$linkedin_field_key = '66b5b8033c8b7fdd74fdfe9d0391f6f2f8e7a86e';
	$twitter_field_key = '9e69f1f4f565b5dacf5722bdea8f2e01af210fce';
	$pinterest_field_key = '718c3bc27990bb01d5daab7245a56258bd834103';
	$youtube_field_key = 'f984cc785b7b64e64b8667e4ff602f2c3efeeba6';
	$snapchat_field_key = '842db49850745418baa4f62052900e4479907631';
	$tiktok_field_key = 'eb487af975400210e38b99d467adfcf571a3aadc';
	$type_of_content_field_key = 'cbabc1ee40b940c36cd89b5c694a90b637d328a4';
	$primary_audience_location_field_key = '3bacd151c87a6f4793c7dd1d3fc2dceab9849ada';
	$media_kit_field_key = 'b2504c247b2aeaf493e9a77ded0b223ee1fd8e19';
	$more_about_creator_field_key = 'c54844fc0867022ee2fedb87a3f451bbec31f8dd';
	$audience_size_field_key = 'b1c4e5e2476da219bd764ee071972e618ecb57ed';
	$lead_type_field_key = 'c363935976c7717c779e00d31d8c838ab284b8b3';
	$city_field_key = 'f2564c3dc89e7a85d20a6d10eaa32bfb66a9b432';
	$country_field_key = '4a8448c4e1a0b00e2af990a7081994a7f263519f';
	$company_field_key = 'c15630627ba73c54136aa8188403d42d3f1ff460';
	$website_field_key = '61f9262d532f0b71ad655cb5a68935ee436c7884';
	$industry_field_key = '1b1358485acef229a39dac84aaf3f394229bd909';
	$size_of_business_field_key = 'd21283c51c4e57677aaecb80365eee6184f49314';
	$campaign_objective_field_key = '8801f8b598a5077a5dc1ba6cf97fea5292407fc5';
	$approximate_budget_field_key = '30fbc62dd59ddb5a59ad2df43366491f9af42ac2';
	$target_launch_date_field_key = 'e03192448a55a561a5685e2db6ddf1389b4e1507';
	$target_locations_field_key = 'f5c6f7a35830403305da1b75aa4facb9321b87ef';
	$previously_worked_with_influencers_field_key = '6f3afeb44fd0bd724d8b6d067565faf5f88d1e8b';

    // Get Gravity Forms field values for Creator Form
	if ( $form['id'] == 2 ) {
		$lead_type 	= 'Creator';
		$name    	= rgar($entry, '1'); 
		$email   	= rgar($entry, '3'); 
		$phone  	= rgar($entry, '4'); 
		$website 	= rgar($entry, '32');
		$city 		= rgar($entry, '23');
		$country 	= rgar($entry, '24');
		$instagram 	= rgar($entry, '37');
		$facebook 	= rgar($entry, '38');
		$tiktok 	= rgar($entry, '39');
		$snapchat 	= rgar($entry, '40');
		$twitter 	= rgar($entry, '41');
		$linkedin 	= rgar($entry, '42');
		$youtube 	= rgar($entry, '43');
		$pinterest 	= rgar($entry, '44');
		$audience_size = rgar($entry, '26');
		$media_kit = rgar($entry, '33');
		$personal_info_about_creator = rgar($entry, '21');

		$what_type_of_content_field_id = 11;
		$what_type_of_content_checkbox_values = [];
		// Loop over all entry keys and find checked options for this field
		foreach ( $entry as $key => $value ) {
			if ( strpos( $key, $what_type_of_content_field_id . '.' ) === 0 && ! empty( $value ) ) {
				$what_type_of_content_checkbox_values[] = $value;
			}
		}

		$type_of_content = implode( ', ', $what_type_of_content_checkbox_values );
		
		$primary_audience_location_json = rgar($entry, '31');
		// Decode JSON string to PHP array
		$primary_audience_location_array = json_decode($primary_audience_location_json, true);

		if (is_array($primary_audience_location_array)) {
			$primary_audience_location = implode(', ', $primary_audience_location_array);
		} else {
			$primary_audience_location = '';
		}		
	}

	// Get Gravity Forms field values for Brands Form
	if ( $form['id'] == 1 ) {
		$lead_type 	= 'Brand';
		$name    	= rgar($entry, '1');
		$email   	= rgar($entry, '3');
		$phone  	= rgar($entry, '4');
		$company 	= rgar($entry, '5');
		$website 	= rgar($entry, '32');
		$city 		= rgar($entry, '41');
		$country 	= rgar($entry, '42');
		$industry	= rgar($entry, '24');
		$size_of_business = rgar($entry, '25');
		$previously_worked_with_influencers = rgar($entry, '26');
		$facebook = rgar($entry, '33');
		$instagram = rgar($entry, '34');
		$linkedin = rgar($entry, '35');
		$youtube = rgar($entry, '36');
		$twitter = rgar($entry, '37');
		$tiktok = rgar($entry, '38');
		$pinterest = rgar($entry, '39');
		$snapchat = rgar($entry, '40');
		$campaign_objective = rgar($entry, '13');
		$approximate_budget = rgar($entry, '29');
		$target_launch_date = rgar($entry, '10');
		
		$target_locations_field_id = 11;
		$target_locations_checkbox_values = [];
		// Loop over all entry keys and find checked options for this field
		foreach ( $entry as $key => $value ) {
			if ( strpos( $key, $target_locations_field_id . '.' ) === 0 && ! empty( $value ) ) {
				$target_locations_checkbox_values[] = $value;
			}
		}
		$target_locations = implode( ', ', $target_locations_checkbox_values );
	}

	// Get Gravity Forms field values for Agencies Form
	if ( $form['id'] == 4 ) {
		$lead_type 	= 'Agency';
		$name    	= rgar($entry, '1');
		$email   	= rgar($entry, '3');
		$phone  	= rgar($entry, '4');
		$company 	= rgar($entry, '5');
		$website 	= rgar($entry, '14');
		$city 		= rgar($entry, '32');
		$country 	= rgar($entry, '33');
		$industry	= rgar($entry, '24');
		$size_of_business = rgar($entry, '25');
		$previously_worked_with_influencers = rgar($entry, '26');
		$facebook = rgar($entry, '34');
		$instagram = rgar($entry, '35');
		$linkedin = rgar($entry, '36');
		$tiktok = rgar($entry, '37');
		$twitter = rgar($entry, '38');
		$youtube = rgar($entry, '39');
		$pinterest = rgar($entry, '40');
		$snapchat = rgar($entry, '41');
		$campaign_objective = rgar($entry, '13');
		$approximate_budget = rgar($entry, '29');
		$target_launch_date = rgar($entry, '10');
		
		$target_locations_field_id = 11;
		$target_locations_checkbox_values = [];
		// Loop over all entry keys and find checked options for this field
		foreach ( $entry as $key => $value ) {
			if ( strpos( $key, $target_locations_field_id . '.' ) === 0 && ! empty( $value ) ) {
				$target_locations_checkbox_values[] = $value;
			}
		}
		$target_locations = implode( ', ', $target_locations_checkbox_values );
	}

    // Build request body
    $data = array(
		$lead_type_field_key => $lead_type,
		'name'  => $name,
		'email' => array(
			array('value' => $email, 'primary' => true)
		),
		'phone' => array(
			array('value' => $phone, 'primary' => true)
		),
		$website_field_key => $website,
		$city_field_key => $city,
		$country_field_key => $country,
		$instagram_field_key => $instagram,
		$facebook_field_key => $facebook,
		$tiktok_field_key => $tiktok,
		$snapchat_field_key => $snapchat,
		$twitter_field_key => $twitter,
		$linkedin_field_key => $linkedin,
		$youtube_field_key => $youtube,
		$pinterest_field_key => $pinterest,
		$type_of_content_field_key => $type_of_content,
		$audience_size_field_key => $audience_size,
		$primary_audience_location_field_key => $primary_audience_location,
		$more_about_creator_field_key => $personal_info_about_creator,
		$media_kit_field_key => $media_kit,
		// brands form
		$approximate_budget_field_key => $approximate_budget,
		$target_launch_date_field_key => $target_launch_date,
		$target_locations_field_key => $target_locations,
		$previously_worked_with_influencers_field_key => $previously_worked_with_influencers,
		$campaign_objective_field_key => $campaign_objective,
		$industry_field_key => $industry,
		$size_of_business_field_key => $size_of_business,
		$company_field_key => $company,
	);

    $args = array(
        'body'        => json_encode($data),
        'headers'     => array('Content-Type' => 'application/json'),
        'method'      => 'POST',
        'data_format' => 'body'
    );

    $response = wp_remote_post($url, $args);

    if (is_wp_error($response)) {
        error_log('Pipedrive API Error: ' . $response->get_error_message());
    } else {
        error_log('Pipedrive API Response: ' . wp_remote_retrieve_body($response));
    }
}
add_action('gform_after_submission', 'send_to_pipedrive', 10, 2);


/**
 * Add Google Analytics
 */
function i6_google_analytics() {
	?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-B380JLHR3Q"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-B380JLHR3Q');
	</script>	
	<?php
}
add_action('wp_head', 'i6_google_analytics');


/**
 * FAQ Schema
 */

function i6_add_faq_schema() {
    if ( is_page( 'frequently-asked-questions' ) ) {
        ?>
			<script type="application/ld+json">
				{
				"@context": "https://schema.org",
				"@type": "FAQPage",
				"mainEntity": [
					{
					"@type": "Question",
					"name": "What is the process from brief to final post with Influence6?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "As a full-service influencer marketing agency, we manage the process from start to finish. You bring us your goals, and we create the strategy, match the right creators, and oversee influencer campaign management through to the final post."
					}
					},
					{
					"@type": "Question",
					"name": "How does Influence6 keep campaigns running smoothly?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We provide clear communication, project structure, and hands-on support so creators can focus on content and brands can focus on results."
					}
					},
					{
					"@type": "Question",
					"name": "Does Influence6 work across different categories and industries?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Yes. We build influencer marketing campaigns in lifestyle, food, beauty, technology, sports, and more."
					}
					},
					{
					"@type": "Question",
					"name": "How does Influence6 help creators get fairly paid?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We ensure creators receive fair compensation. As part of our creator representation, we handle negotiations, contracts, and payments so everything is transparent and professional."
					}
					},
					{
					"@type": "Question",
					"name": "What kind of creators does Influence6 represent?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We represent authentic, values-driven creators across niches and audience sizes. Whether nano or macro, our focus is on real influence over inflated numbers."
					}
					},
					{
					"@type": "Question",
					"name": "What support do creators receive beyond campaigns?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Creators receive more than briefs. We provide influencer strategy guidance, contract support, and growth opportunities to help them build long-term careers."
					}
					},
					{
					"@type": "Question",
					"name": "How quickly can Influence6 launch an influencer campaign?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Our influencer marketing agency is built to move quickly while maintaining quality. We streamline influencer campaign management so brands can get into market fast."
					}
					},
					{
					"@type": "Question",
					"name": "How does Influence6 measure campaign success?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Success goes beyond vanity metrics. We focus on meaningful engagement, authentic creator-brand alignment, and cultural relevance."
					}
					},
					{
					"@type": "Question",
					"name": "What types of brands work best with Influence6?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "We work with brands of all sizes and industries. Any brand looking to build authentic connections through influencer marketing can benefit."
					}
					},
					{
					"@type": "Question",
					"name": "How does Influence6 partner with agencies?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Agencies choose us as their influencer marketing partner because we deliver seamless influencer campaign management. We act as an extension of the agency team."
					}
					},
					{
					"@type": "Question",
					"name": "Can agencies work with Influence6 for paid and in-kind campaigns?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Yes. We design influencer activations that fit budgets and goals, from paid partnerships to in-kind collaborations and always-on programs."
					}
					},
					{
					"@type": "Question",
					"name": "How do I begin working with Influence6?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "Getting started is simple. Whether you are a creator, brand, or agency, share your goals with us and we will guide you through the next step."
					}
					}
				]
				}
			</script>
        <?php
    }
}
add_action( 'wp_head', 'i6_add_faq_schema' );
