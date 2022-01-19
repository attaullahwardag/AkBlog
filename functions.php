<?php
/**
 * AkBlog Funtions file to enque styles and scripts.
 * 
 * @package akblog
 */

function themeslug_enqueue_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style-custom', get_template_directory_uri() . '/assets/css/style-custom.css');
    wp_enqueue_style( 'utillites', get_template_directory_uri() . '/assets/css/utillities.css');
}
function themeslug_enqueue_script() {
    wp_enqueue_script ( 'style', get_template_directory_uri(  ) . '/assets/js/akblog.js' );
}
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script');
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

// Nav menu registrarion 
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {
 
    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'akblog' ),
            'footer_menu'  => __( 'Footer Menu', 'akblog' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}
// Post-thumbnail
    add_theme_support('post-thumbnails' );
// Custom logo

    function themename_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
    
        add_theme_support( 'custom-logo', $defaults );
    }
    
    add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>