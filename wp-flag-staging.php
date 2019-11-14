<?php
/**
* Plugin Name:    WP Flag Staging
* Description:    A WordPress plugin that alerts via color changes to wp admin bar that a staging site is active
* Version:        1.1
* Author:         Zac Sanders
* Author URI:     https://github.com/endurain
*/

add_action( 'admin_bar_menu', 'toolbar_staging_alert', 999 );

function toolbar_staging_alert( $wp_admin_bar ) {
	$args = array(
		'id'    => 'staging_alert',
		'title' => 'WARNING: STAGING VERSION ACTIVE. DO NOT MAKE CHANGES.',
		'href'  => '',
		'meta'  => array( 'class' => 'toolbar_staging_alert' )
	);
	$wp_admin_bar->add_node( $args );
}

// enque stylesheet
function enqueue_staging_style() {
            $plugin_url = plugin_dir_url( __FILE__ );

        wp_enqueue_style( 'style',  $plugin_url . "/style.css");
    }

    add_action( 'admin_print_styles', 'enqueue_staging_style' );
?>
