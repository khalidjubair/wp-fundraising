<?php
/**
 * Plugin Name: WP Fundraising - Donation and Crowdfunding Platform
 * Plugin URI:https://xpeedstudio.com
 * Description: The ultimate WooCommerce supported fundraising Donation and Crowdfunding Platform
 * Author: XpeedStudio
 * Version:1.0.10
 * License: GPL2+
 * Text Domain: wp-fundraising
 * WC requires at least: 3.0.0
 * WC tested up to: 3.8.0
 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define('WP_FUNDRAISING_DIR_PATH', plugin_dir_path(__FILE__));
define('WP_FUNDRAISING_DIR_URL', plugin_dir_url(__FILE__));
define('WP_FUNDRAISING_VERSION', '1.0');

require_once WP_FUNDRAISING_DIR_PATH.'inc/init.php';

if ( ! function_exists( 'is_plugin_active_for_network' ) ) {
    require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
}

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || is_plugin_active_for_network( 'woocommerce/woocommerce.php' )) {
    register_activation_hook(__FILE__, array('WP_Fundraising_Init', 'wf_plugin_init'));
    if (class_exists('WP_FundRaising')) {
        $WP_FundRaising = WP_FundRaising::wf_get_instance();
    }
    if (class_exists('WP_FundRaising_Donation')) {
        $WP_FundRaising_Donation = WP_FundRaising_Donation::wf_donation_get_instance();
    }
}
add_action( 'woocommerce_cart_calculate_fees', 'wf_check_total' );

function wf_check_total( $cart_subtotal ) {
    
    $cart_subtotal = WC()->cart->get_cart_contents_total();

    $fee = 5;
    $fees = ($cart_subtotal * $fee)/100;

    WC()->cart->add_fee( 'Small Order Fee', $fees, $taxable = false,'');

}