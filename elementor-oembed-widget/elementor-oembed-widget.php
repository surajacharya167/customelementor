<?php
/**
 * Plugin Name: custom Elementor Widget
 * Description: custom Elementor Widget
 * Plugin URI:  https://elementor.com/
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: custom Elementor Widget 
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register oEmbed Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_oembed_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/oembed-widget.php' );

	$widgets_manager->register( new \Elementor_oEmbed_Widget() );

}
add_action( 'elementor/widgets/register', 'register_oembed_widget' );
