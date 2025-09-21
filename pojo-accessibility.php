<?php
/*
/*
 * Plugin Name:       One Click Accessibility 2 Fork
 * Plugin URI:        https://jcx.life/oneclickaccessibility-2-fork
 * Description:       The 'One Click Accessibility' fork without the online account and GDPR implications of the Elementor version. Designed help you make your WordPress website more accessible.
 * Version:           2.2.4
 * Requires at least: 4.1
 * Requires PHP:      5.4
 * Tested up to:      6.8
 * Author:            jcx
 * Author URI:        https://jcx.life
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://jcx.life/oneclickaccessibility-2-fork
 * Text Domain:       oneclickaccessibility-2-fork
 * Domain Path:       /languages/
 */
if ( ! defined( 'ABSPATH' ) ) { 
	exit; // Exit if accessed directly
} 

define( 'POJO_A11Y__FILE__', __FILE__ );
define( 'POJO_A11Y_BASE', plugin_basename( POJO_A11Y__FILE__ ) );
define( 'POJO_A11Y_URL', plugins_url( '/', POJO_A11Y__FILE__ ) );
define( 'POJO_A11Y_ASSETS_PATH', plugin_dir_path( POJO_A11Y__FILE__ ) . 'assets/' );
define( 'POJO_A11Y_ASSETS_URL', POJO_A11Y_URL . 'assets/' );
define( 'POJO_A11Y_CUSTOMIZER_OPTIONS', 'pojo_a11y_customizer_options' );

final class Pojo_Accessibility {

	/**
	 * @var Pojo_Accessibility The one true Pojo_Accessibility
	 * @since 1.0.0
	 */
	public static $instance = null;

	/**
	 * @var Pojo_A11y_Frontend
	 */
	public $frontend;

	/**
	 * @var Pojo_A11y_Customizer
	 */
	public $customizer;

	/**
	 * @var Pojo_A11y_Settings
	 */
	public $settings;

	/**
	 * @var Pojo_A11y_Admin_UI
	 */
	public $admin_ui;

	public function load_textdomain() {
		load_plugin_textdomain( 'pojo-accessibility' );
	}

	/**
	 * Throw error on object clone
	 *
	 * The whole idea of the singleton design pattern is that there is a single
	 * object therefore, we don't want the object to be cloned.
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __clone() {
		// Cloning instances of the class is forbidden
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'pojo-accessibility' ), '1.0.0' );
	}

	/**
	 * Disable unserializing of the class
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __wakeup() {
		// Unserializing instances of the class is forbidden
		_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'pojo-accessibility' ), '1.0.0' );
	}

	/**
	 * @return Pojo_Accessibility
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function bootstrap() {
		require( 'includes/pojo-a11y-frontend.php' );
		require( 'includes/pojo-a11y-customizer.php' );
		require( 'includes/pojo-a11y-settings.php' );
		require( 'includes/pojo-a11y-admin-ui.php' );

		$this->frontend   = new Pojo_A11y_Frontend();
		$this->customizer = new Pojo_A11y_Customizer();
		$this->settings = new Pojo_A11y_Settings();
		$this->admin_ui = new Pojo_A11y_Admin_UI();
	}

	public function backwards_compatibility() {
		if ( false === get_option( POJO_A11Y_CUSTOMIZER_OPTIONS, false ) ) {
			$customizer_fields = $this->customizer->get_customizer_fields();
			$options = [];
			$mods = get_theme_mods();
			foreach ( $customizer_fields as $field ) {
				if ( isset( $mods[ $field['id'] ] ) ) {
					$options[ $field['id'] ] = $mods[ $field['id'] ];
				} else {
					$options[ $field['id'] ] = $field['std'];
				}
			}
			update_option( POJO_A11Y_CUSTOMIZER_OPTIONS, $options );
		}
	}

	public function add_elementor_support() {
		require( 'includes/pojo-a11y-elementor.php' );

		new Pojo_A11y_Elementor();
	}

	private function __construct() {
		add_action( 'init', [ &$this, 'bootstrap' ] );
		add_action( 'admin_init', [ &$this, 'backwards_compatibility' ] );
		add_action( 'plugins_loaded', [ &$this, 'load_textdomain' ] );

		add_action( 'elementor/init', [ $this, 'add_elementor_support' ] );
	}

}

Pojo_Accessibility::instance();
