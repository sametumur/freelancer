<?php
/**
 * Custom meta boxes for post type
 *
 * @since Freelancer 1.0
 */
function freelancer_custom_meta_boxes() {
    $prefix = '_freelancer_';
    /**
     * Portifolio Meta Boxes
     *
     * @since Freelancer 1.0
     */
    $portfolio_meta_boxes = new_cmb2_box( array (
        'id'           => $prefix . 'portfolio_meta_box',
        'title'        => 'Portfolio',
        'object_types' => array ( 'portfolio' )
    ) );

    $portfolio_meta_boxes->add_field( array (
        'name'    => 'Proje Hakkında',
        'desc'    => 'Proje Detayı',
        'id'      => $prefix . 'portfolio_desc',
        'type'    => 'wysiwyg'
    ) );
    $portfolio_meta_boxes->add_field( array (
        'name'    => 'Proje Görseli',
        'desc'    => 'Proje Görseli',
        'id'      => $prefix . 'portfolio_thumbnail',
        'type'    => 'file'
    ) );
    $portfolio_meta_boxes->add_field( array (
        'name'    => 'Projedeki Görevin',
        'desc'    => 'Php Developer, Front-end Developer',
        'id'      => $prefix . 'portfolio_position',
        'type'    => 'text'
    ) );
}
add_action( 'cmb2_admin_init', 'freelancer_custom_meta_boxes' );