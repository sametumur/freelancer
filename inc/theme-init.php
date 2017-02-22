<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 *
 * @since Freelancer 1.0.0
 */
if ( ! function_exists( 'freelancer_setup' ) ) :
    function freelancer_setup() {
        /** This can be called immediately upon plugin load. It does not need to be called from a function hooked to the ‘init’ action.  */
        show_admin_bar( false );
    }
    add_action( 'after_setup_theme', 'freelancer_setup' );
endif;

/**
 * Theme styles and scripts load
 *
 * @since Freelancer 1.0.0
 */
function freelancer_setup_theme_scripts() {
    wp_enqueue_style( 'freelancer-bootsrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'freelancer-freelancer-css', get_template_directory_uri() . '/assets/css/freelancer.min.css' );
    wp_enqueue_style( 'freelancer-font-css', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css' );
    wp_enqueue_script( 'freelancer-jquery-js', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), false, true );
    wp_enqueue_script( 'freelancer-bootrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js', array(), false, true );
    wp_enqueue_script( 'freelancer-jgbootsratp-js', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array(), false, true );
    wp_enqueue_script( 'freelancer-freelancer-js', get_template_directory_uri() . '/assets/js/freelancer.min.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'freelancer_setup_theme_scripts' );
