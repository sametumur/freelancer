<?php

/**
 * Create experience post type
 */
function freelancer_portfolio_custom_init() {
    register_post_type( 'portfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio', 'freelancer' ),
                'singular_name' => __( 'Portfolio', 'freelancer' ),
                'add_new_item' => __( 'Yeni Portfolio Ekle', 'freelancer' )
            ),
            'public' => true,
            'supports' => array(
                'title'
            ),
            'menu_icon' => 'dashicons-nametag',
            'rewrite'         => array(
                'slug'      => 'portfolio',
                'with_front'  => false
            ),
            'has_archive' => false,
        )
    );
}
add_action('init', 'freelancer_portfolio_custom_init');