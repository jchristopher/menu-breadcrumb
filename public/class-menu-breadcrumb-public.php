<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/jchristopher/menu-breadcrumb
 * @since      1.0.0
 *
 * @package    Menu_Breadcrumb
 * @subpackage Menu_Breadcrumb/public
 */
class Menu_Breadcrumb_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $plugin_name       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	public function wrap_breadcrumb_item( $markup, $breadcrumb ) {
		return '<span typeof="v:Breadcrumb">' . $markup . '</span>';
	}

	public function wrap_breadcrumb( $markup ) {
		return '<span prefix="v: http://rdf.data-vocabulary.org/#">' . $markup . '</span>';
	}

}