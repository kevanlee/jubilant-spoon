<?php
/**
 * punt Theme Customizer
 *
 * @package punt
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function punt_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'punt_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'punt_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'punt_customize_register' );

$wp_customize->add_section( 'punt_new_section_name' , array(
    'title'      => __( 'Punt settings', 'punt' ),
    'priority'   => 30,
) );

$wp_customize->add_setting( 'home_headline' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

$wp_customize->add_setting( 'home_buttonText' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

$wp_customize->add_setting( 'home_buttonLink' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function punt_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function punt_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function punt_customize_preview_js() {
	wp_enqueue_script( 'punt-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'punt_customize_preview_js' );
