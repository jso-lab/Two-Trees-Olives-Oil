<?php
/**
 * @package Warning
 * @version 1.0.0
 */
/*
Plugin Name: Warning
Plugin URI: http://wordpress.org/plugins/warning/
Description: A plugin that just display notifications
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/

function first_warnings() {

    echo '<li>Save always your work!</li>';
}


function warnings() {

	echo '<h2>PAY ATTENTION DURING YOUR WORK!</h2>';
    echo '<ul>';
	
	do_action('notifications');

	echo '</ul>';
}

add_action('admin_notices', 'warnings');

add_action( 'notifications', 'first_warnings');