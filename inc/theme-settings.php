<?php
/**
 * Check and setup theme's default settings
 *
 * @package wtvglobal-theme
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wtvglobal_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function wtvglobal_setup_theme_default_settings() {
		$defaults = wtvglobal_get_theme_default_settings();
		$settings = get_theme_mods();
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'wtvglobal_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function wtvglobal_get_theme_default_settings() {
		$defaults = array(
			'wtvglobal_posts_index_style' => 'default',   // Latest blog posts style.
			'wtvglobal_sidebar_position'  => 'right',     // Sidebar position.
			'wtvglobal_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'wtvglobal_theme_default_settings', $defaults );
	}
}
