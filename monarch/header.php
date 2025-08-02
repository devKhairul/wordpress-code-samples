<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Essential Open Graph Meta Tags -->
<meta property="og:title" content="Monarch Practice Transitions" />
<meta property="og:description" content="Monarch works with vet practice owners to help them maximize value on the sale of their vet practices and to ensure vet practice longevity." />
<meta property="og:image" content="https://www.monarchpracticetransitions.com/wp-content/uploads/2025/01/og-image.jpg" />
<meta property="og:url" content="https://www.monarchpracticetransitions.com/" />
<meta property="og:type" content="website" />

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@yourtwitterhandle">
<meta name="twitter:title" content="Monarch Practice Transitions">
<meta name="twitter:description" content="Monarch works with vet practice owners to help them maximize value on the sale of their vet practices and to ensure vet practice longevity.">
<meta name="twitter:image" content="https://www.monarchpracticetransitions.com/wp-content/uploads/2025/01/og-image.jpg">

<!-- Optional but recommended -->
<meta property="og:site_name" content="Monarch Practice Transitions" />



<?php
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	<link rel="profile" href="https://gmpg.org/xfn/11"> 
	<?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo wp_kses_post(
		astra_attr(
			'site',
			array(
				'id'    => 'page',
				'class' => 'hfeed site',
			)
		) 
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<?php astra_content_top(); ?>
