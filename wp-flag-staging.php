<?php
/**
* Plugin Name:    WP Flag Staging
* Description:    A WordPress plugin that alerts via color changes to wp admin bar that a staging site is active
* Version:        1.0
* Author:         Endurain
* Author URI:     https://github.com/endurain
*/

add_action( 'admin_bar_menu', 'toolbar_staging_alert', 999 );

function toolbar_staging_alert( $wp_admin_bar ) {
	$args = array(
		'id'    => 'staging_alert',
		'title' => 'WARNING: STAGING VERSION ACTIVE',
		'href'  => '',
		'meta'  => array( 'class' => 'toolbar_staging_alert' )
	);
	$wp_admin_bar->add_node( $args );
}
?>
<style>
#wpadminbar { background: #ff4400!important;}
</style>
