<?php
/**
 * The template used for displaying hero content
 *
 * @package Catch_Inspire
 */
?>

<?php
$enable_section = get_theme_mod( 'catch_inspire_hero_content_visibility', 'disabled' );

if ( ! catch_inspire_check_section( $enable_section ) ) {
	// Bail if hero content is not enabled
	return;
}

get_template_part( 'template-parts/hero-content/post-type', 'hero' );
