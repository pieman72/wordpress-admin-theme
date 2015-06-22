<?php

/*
Plugin Name: HS Admin Theme
Plugin URI: http://harveyserv.ath.cx/wordpress-admin-theme
Description: A plugin to style the WordPress admin pages (mostly for darker colors).
Author: Kenny Harvey
Version: 1.0
Author URI: http://harveyserv.ath.cx/kenny
*/

function apply_HS_admin_styles() {
	if(function_exists("get_admin_page_title") && in_array(get_admin_page_title(), array(
			"Edit Post"
			,"Add New Post"
			,"Edit Page"
			,"Add New Page"
		))){
		wp_enqueue_style('hs-admin-theme', plugins_url('hsadmin.css', __FILE__));
	}
}
add_action('admin_enqueue_scripts', 'apply_HS_admin_styles');
add_action('login_enqueue_scripts', 'apply_HS_admin_styles');

?>
