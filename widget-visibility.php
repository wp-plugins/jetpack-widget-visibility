<?php

/*
 * Plugin Name: Jetpack Widget Visibility
 * Plugin URI: http://wordpress.org/plugins/jetpack-widget-visibility/
 * Description: Control what pages your widgets appear on.
 * Author: Anas H. Sulaiman
 * Version: 2.5
 * Author URI: http://ahs.pw/
 * Text Domain: jetpack-widget-conditions
 * Domain Path: /languages/
 * License: GPL2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

/**
 * Module Name: Widget Visibility
 * Module Description: Control what pages your widgets appear on.
 * First Introduced: 2.4
 * Requires Connection: No
 * Auto Activate: Yes
 */

include dirname( __FILE__ ) . "/widget-visibility/widget-conditions.php";

add_action( 'plugins_loaded', 'widget_conditions_load_textdomain' ); // Edited by Anas H. Sulaiman
function widget_conditions_load_textdomain() {
	load_plugin_textdomain( 'jetpack-widget-conditions', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} // Edited by Anas H. Sulaiman

/*
* Edits are denoted by the comment: Edited by Anas H. Sulaiman.
* Other edits are listed here:
* Edit 1: 
*/
