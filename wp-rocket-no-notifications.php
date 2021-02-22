<?php
/**
 * Plugin Name: WP Rocket | Hide htaccess and cache directory permision warning 
 * Description: Disables WP Rocket’s warning when the htaccess file isn't writable.
 * Plugin URI:  https://github.com/Elvisozoria/wp-rocket-notification-helper
 * Author:      WP Rocket Support Team's new member
 * Author URI:  http://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2021
 */


// Standard plugin security, keep this line in place.
defined( 'ABSPATH' ) or die();


function hide_rocket_warning_htaccess_permissions() {
	remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );
}

function hide_rocket_warning_cache_dir_permissions() {
	remove_action( 'admin_notices', 'rocket_warning_cache_dir_permissions' );
}


add_action( 'admin_head', 'rocket_warning_cache_dir_permissions',1 );
add_action('admin_head','hide_rocket_warning_htaccess_permissions', 1);


