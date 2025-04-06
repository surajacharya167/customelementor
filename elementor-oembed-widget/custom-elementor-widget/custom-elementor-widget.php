<?php
/**
 * Plugin Name: Custom Elementor Widget
 * Description: Custom Widget for Elementor
 * Version: 1.0
 * Author: Aapka Naam
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function register_custom_elementor_widget( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/hello-world-widget.php' );

    $widgets_manager->register( new \Hello_World_Widget() );
}
add_action( 'elementor/widgets/register', 'register_custom_elementor_widget' );
