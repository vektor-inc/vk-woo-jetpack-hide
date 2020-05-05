<?php
/**
 * Plugin Name:     VK Woo Jetpack Hide
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     JetPackとの連携を促すバナーを非表示にします
 * Author:          Vektor,Inc.
 * Author URI:      YOUR SITE HERE
 * Text Domain:     vk-woo-jetpack-hide
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Vk_Woo_Jetpack_Hide
 */

// Your code starts here.

add_action(
	'admin_enqueue_scripts',
	function() {

		$dynamic_css .= '
	.wcs-nux__notice  { display:none !important; }';

			// delete before after space
			$dynamic_css = trim( $dynamic_css );
			// convert tab and br to space
			$dynamic_css = preg_replace( '/[\n\r\t]/', '', $dynamic_css );
			// Change multiple spaces to single space
			$dynamic_css = preg_replace( '/\s(?=\s)/', '', $dynamic_css );
			wp_add_inline_style( 'wc_connect_banner', $dynamic_css );
	}
);
