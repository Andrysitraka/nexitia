<?php
/*
  Plugin Name: Kobra Hover Effects for Visual Composer
  Plugin URI: https://wordpress.org/plugins/kobra-hover-effects-for-visual-composer/
  Description: Kobra Hover Effects WordPress is an Visual Composer Plugin is an impressive Image hover effects powered by pure CSS3.
  Author: codecans
  Author URI: http://codecans.com/
  Version: 2.4.6
 */
 include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'js_composer/js_composer.php' ) ){
	
	
 
if ( ! class_exists( 'Kobra_Hover_Effects' ) ) {
    /* Constants */
    define( 'KOBRA_EXT_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
    define( 'KOBRA_EXT_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
	
// Enqueue Style CSS
    function kobra_css_enqeue_scripts() {
		// Calling CSS
		wp_register_style( 'kvc-style_common', plugins_url( 'css/style_common.css', __FILE__ ) );
		wp_enqueue_style( 'kvc-style_common' );
		wp_register_style( 'kvc-main-style', plugins_url( 'css/main-style.css', __FILE__ ) );
		wp_enqueue_style( 'kvc-main-style' );
		wp_register_style( 'kvc-responsive-hover', plugins_url( 'css/vc-responsive-hover.css', __FILE__ ) );
		wp_enqueue_style( 'kvc-responsive-hover' );
		wp_register_style( 'kvc-style-hov', plugins_url( 'css/style-new-hov.css', __FILE__ ) );
		wp_enqueue_style( 'kvc-style-hov' );
		wp_register_style( 'kvc-ihover', plugins_url( 'css/kvc-ihover.css', __FILE__ ) );
		wp_enqueue_style( 'kvc-ihover' );
    }
add_action( 'wp_enqueue_scripts', 'kobra_css_enqeue_scripts' );	
	
// Admin Style CSS
    function kobra_admin_enqeue() {
        wp_enqueue_style( 'kobra_admin_css', plugins_url( 'admin/css/admin.css', __FILE__ ) );
        wp_enqueue_style( 'kobra_adminicon_css', plugins_url( 'admin/css/admin_icon.css', __FILE__ ) );
    }
    add_action( 'admin_enqueue_scripts', 'kobra_admin_enqeue' );

    require_once 'admin/params/switch/switch.php';
    require_once 'admin/params/slider/slider-params.php';
	
	class Kobra_Hover_Effects {
// Start Functions
		function Kobra_Hover_Effects() {
					require 'includes/params.php';
					
					// Starting Shortocde //
					require 'includes/shortcodes.php';

		}
	}
	    // Finally initialize code
    new Kobra_Hover_Effects;
}

}
// Check If Visual Composer is activate
else {
	function kobra_vc_required_plugin() {
		if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
			add_action( 'admin_notices', 'kobra_vc_required_plugin_notice' );

			deactivate_plugins( plugin_basename( __FILE__ ) ); 

			if ( isset( $_GET['activate'] ) ) {
				unset( $_GET['activate'] );
			}
		}

	}
	add_action( 'admin_init', 'kobra_vc_required_plugin' );

	function kobra_vc_required_plugin_notice(){
		?><div class="error"><p>Error! you need to install or activate the <a href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=Rakibur_Rahman_Sagar">Visual Composer</a> plugin to run "<span style="font-weight: bold;">Kobra Hover Effects Visual Composer</span>" plugin.</p></div><?php
	}
}
?>