<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

 
 
function my_style() {
	wp_register_style('custom_style', get_template_directory_uri() . '/custom/styles.css');
	wp_enqueue_style('custom_style');
}

add_action('wp_enqueue_scripts', 'my_style');