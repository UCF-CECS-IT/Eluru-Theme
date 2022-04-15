<?php

define( 'ELURU_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );

// Set constants and enqueue styles
include_once ELURU_THEME_DIR . 'includes/config.php';

//
include_once ELURU_THEME_DIR . 'includes/walker.php';
