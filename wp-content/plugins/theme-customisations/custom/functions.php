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
	wp_register_style('custom_style', plugin_dir_url(__FILE__) . 'style.css');
	wp_enqueue_style('custom_style');
}

add_action('wp_enqueue_scripts', 'my_style');


/**
 * Add field to the checkout
 */


function survey_checkout_field($checkout) {
	echo '<div id="survey_checkout_field"><h2>' .__('Sondage'). '</h2>';

	woocommerce_form_field('survey-field', array(
		'type' => 'text',
		'class' => array('survey-class form-row-wide'),
		'label' => __('Comment avez-vous connu notre site?'),
	), $checkout->get_value('survey-field'));

	echo '</div>';
}

add_action( 'woocommerce_after_order_notes', 'survey_checkout_field' );

function survey_checkout_field_update_order_meta($order_id) {
	if (!empty($_POST['survey-field'])) {
		update_post_meta($order_id, 'Sondage', sanitize_text_field($_POST['survey-field']));
	}
}

add_action('woocommerce_checkout_update_order_meta', 'survey_checkout_field_update_order_meta');

function survey_checkout_field_display_admin_order_meta($order) {
	echo '<p><strong>' . __('Sondage') . '</strong> ' . get_post_meta($order->id, 'Sondage', true) .'</p>';
}

add_action('woocommerce_admin_order_data_after_billing_address', 'survey_checkout_field_display_admin_order_meta');
