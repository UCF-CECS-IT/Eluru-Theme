<?php

define( 'ELURU_THEME_URL', get_stylesheet_directory_uri() );
define( 'ELURU_THEME_STATIC_URL', ELURU_THEME_URL . '/static' );
define( 'ELURU_THEME_CSS_URL', ELURU_THEME_STATIC_URL . '/css' );
define( 'ELURU_THEME_JS_URL', ELURU_THEME_STATIC_URL . '/js' );
define( 'ELURU_THEME_IMG_URL', ELURU_THEME_STATIC_URL . '/img' );


function enqueue_frontend_assets() {
	$theme = wp_get_theme();
	$theme_version = $theme->get( 'Version' );

	// wp_enqueue_style( 'style-child', ELURU_THEME_CSS_URL . '/style.min.css', array( ), $theme_version );

	wp_enqueue_style( 'style-inland', ELURU_THEME_CSS_URL . '/inland.css', array( ), $theme_version );

	wp_enqueue_script( 'script-jquery', ELURU_THEME_JS_URL . '/jquery-1.7.1.min.js', array( ), $theme_version, true );

	wp_enqueue_script( 'script-slider', ELURU_THEME_JS_URL . '/jquery.nivo.slider.js', array( ), $theme_version, true );

	wp_enqueue_script( 'script-pack', ELURU_THEME_JS_URL . '/jquery.nivo.slider.pack.js', array( ), $theme_version, true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_frontend_assets', 11 );

function eluru_custom_new_menu() {
	register_nav_menu( 'header-menu', __( 'Header Menu' ));
}

add_action( 'init', 'eluru_custom_new_menu' );
