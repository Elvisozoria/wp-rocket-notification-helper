<?php
/**
 * Plugin Name: hide wp-rocket htaccess notifications
 * Description: let's get this to work!
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


function hide_rocket_warning_htaccess_permissions() {
	remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );
}

function hide_rocket_warning_cache_dir_permissions() {
	remove_action( 'admin_notices', 'rocket_warning_cache_dir_permissions' );
}


add_action( 'admin_head', 'rocket_warning_cache_dir_permissions',1 );
add_action('admin_head','hide_rocket_warning_htaccess_permissions', 1);


