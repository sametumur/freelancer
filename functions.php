<?php
/**
 * Freelancer functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Freelancer
 * @since Freelancer 1.0.0
 */
define( 'Freelancer_VERSION', "1.0.0" );
global $general_options;
$general_options = get_option('_cs_options');
/** CMB2 to use metabox in post */
if ( file_exists( get_template_directory() . '/libs/cmb2/init.php' ) ) {
    require_once get_template_directory() . '/libs/cmb2/init.php';
}
require_once get_template_directory() .'/libs/codestar-framework/cs-framework.php';

/**
 * Implement the helper custom functions in WP.
 *
 * @since Freelancer 1.0
 */
include_once get_template_directory() . '/inc/custom-functions.php';

/**
 * Implement the custom meta boxes in post.
 *
 * @since Freelancer 1.0
 */
include_once get_template_directory() . '/inc/meta-boxes.php';

/**
 * The necessary procedures in the installation.
 *
 * @since Freelancer 1.0.0
 */
include_once get_template_directory() . '/inc/theme-init.php';

/**
 * Implement the custom post types.
 *
 * @since Freelancer 1.0.0
 */
include_once get_template_directory() . '/inc/post-types.php';