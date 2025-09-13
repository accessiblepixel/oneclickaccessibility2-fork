<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Class Admin
 */

class Pojo_A11y_Admin_UI {

	const SETTINGS_SLUG = 'toplevel_page_accessibility-settings';
	const TOOLBAR_SLUG = 'accessibility_page_accessibility-toolbar';
	

	public function admin_footer_text( $footer_text ) {
		$current_screen = get_current_screen();
		if ( in_array( $current_screen->id, array( self::SETTINGS_SLUG, self::TOOLBAR_SLUG ) ) ) {
			$footer_text = sprintf(
			/* translators: 1: One Click Accessibility, 2: Link to plugin review */
				__( '<strong>One Click Accessibility 2 Fork</strong> - Please tell your friends ~ jcx', 'pojo-accessibility' ),
				'<strong>' . __( 'One Click Accessibility', 'pojo-accessibility' ) . '</strong>',
				'be a star &#9733;'
			);
		}

		return $footer_text;
	}


	public function __construct() {
		add_filter( 'admin_footer_text', [ $this, 'admin_footer_text' ] );
	}
}
