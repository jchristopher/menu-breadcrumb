<?php
/**
 * @link              https://github.com/jchristopher/menu-breadcrumb
 * @since             1.0.0
 * @package           Menu_Breadcrumb
 *
 * @menu-breadcrumb
 * Plugin Name:       Menu Breadcrumb
 * Plugin URI:        https://github.com/jchristopher/menu-breadcrumb
 * Description:       Generate a breadcrumb trail from a WordPress Menu
 * Version:           1.0.2
 * Author:            Jonathan Christopher
 * Author URI:        https://mondaybynoon.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       menu-breadcrumb
 * Domain Path:       /languages
 */

// abort if this file is called directly
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-menu-breadcrumb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_menu_breadcrumb() {
	$plugin = new Menu_Breadcrumb();
	$plugin->run();
}
run_menu_breadcrumb();

/**
 * Automagic output of breadcrumb markup based on passed parameters
 *
 * @since    1.0.0
 */
if ( ! function_exists( 'menu_breadcrumb' ) ) {
	function menu_breadcrumb( $menu_location = '', $separator = ' &raquo; ', $before = '', $after ='' ) {
		$menu_breadcrumb = new Menu_Breadcrumb( $menu_location );
		$menu_breadcrumb->render( $separator, $before, $after );
	}
}
